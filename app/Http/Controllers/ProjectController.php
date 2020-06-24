<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }

    public function index()
    {
        $portfolio = Project::latest('updated_at')->paginate();


        return view('projects.index', [
            'projects'=> $portfolio
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
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $req)
    {
        try {
            Project::create($req->validated());
        }
        catch (\Exception $exception)
        {
            return redirect()->route('projects.create', [
                'project' => new Project
            ])->with('status', 'The project can\'t be created. The url is repeated'); //falta mandar mensaje
        }

        return redirect()->route('projects.index')->with('status', 'Project created sucessfully');
    }

    public function edit(Project $project)
    {
        //return $project;
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'Project deleted successfully');
    }
}
