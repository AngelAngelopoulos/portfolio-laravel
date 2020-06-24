@csrf
<label for="title">Project's Title</label> <br>
<input type="text" name="title" value="{{ old('title', $project->title) }}"> <br>

<label for="url">Project's Url</label> <br>
<input type="text" name="url" value="{{ old('url', $project->url) }}"> <br>

<label for="description">Project's Description</label> <br>
<textarea name="description"> {{ old('description', $project->description) }} </textarea> <br>

<button type="submit" >{{ $action }}</button>
