<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\SaveProjectRequest;
//use App\Image;
//use App\Images;
use App\Http\Requests\UpdateProjectRequest;
use App\Project;
use App\Providers\App\Events\ProjectSaved;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use mysql_xdevapi\Exception;
use PhpParser\Node\Expr\Array_;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }

    public function index()
    {
        $portfolio = Project::with('category')->latest('updated_at')->paginate(6);


        return view('projects.index', [
            'projects'=> $portfolio,
        ]);
    }

    public function show(Project $project)
    {
        //return request();


        //$projectQuery = Project::find($project);
        //return $projectQuery[0];

        return view('projects.show',[
            'project' => $project  //no ocupa inteccion ni metodo find or fail
        ]);
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('projects.create', [
            'project' => new Project,
            'categories' => $categories
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        /*
        $req = $this->validate_img($req);

        $reqVal = $req->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'fileUploader' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'image' => 'required'
        ]);
        */

        //return $request;
        $project = new Project($request->validated());

        $image = Storage::put('img', $request->file('fileUploader'));
        $project->image = $image;//$request->file('fileUploader')->store('img');

        //Project::create($project);
        //return $project;
        $project->save();

        ProjectSaved::dispatch($project);

        /*
        $image = Image::make(Storage::get($project->image))
            ->widen('800')->encode();

        Storage::put($project->image, (string) $image);
        */

        return redirect()->route('projects.index')->with('status','Project created sucessfully');
    }

    public function edit(Project $project)
    {
        $categories = Category::pluck('name', 'id');

        //return $categories;

        return view('projects.edit', [
            'project' => $project,
            'categories' => $categories
        ]);
    }

    public function update(Project $project, UpdateProjectRequest $request)
    {
        if ($request->hasfile('fileUploader'))
        {


            Storage::delete($project->image);

            $project->fill($request->validated());

            $image = Storage::put('img', $request->file('fileUploader'));
            $project->image = $image;//$request->file('fileUploader')->store('img');
            //$project->image = $request->file('fileUploader')->store('img');

            $project->update();

            ProjectSaved::dispatch($project);

            /*$image = Image::make(Storage::get($project->image))
                ->widen('800')->encode();

            Storage::put($project->image, (string) $image);*/
        }
        else {

            $project->update( array_filter($request->validated()) );
        }

        return redirect()->route('projects.show', $project)->with('status', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('projects.index')->with('status', 'Project deleted successfully');
    }

    private function validate_img(Request $request)
    {
        $imageFileName = $request->file('fileUploader')->getBasename();

        // ruta de las imagenes guardadas
        $ruta = public_path() . '/img/';

        // recogida del form
        $imagenOriginal = $request->file('fileUploader');

        // crear instancia de imagen
        $imagen = Image::make($imagenOriginal);

        // generar un nombre aleatorio para la imagen
        $temp_name = $imageFileName . '.' . $imagenOriginal->getClientOriginalExtension();

        // redimensionar el tamaño de la imagen
        //$imagen->resize(300,300);

        // guardar imagen
        //save( [ruta], [calidad])
        $imagen->save($ruta . $temp_name, 100);

        $request['image'] = $temp_name;

        return $request;
    }
}
