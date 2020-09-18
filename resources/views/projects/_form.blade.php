

@csrf

    <div class="form-group">
        <label class="text-white" for="title">Project's Title</label>
        <input class="form-control bg-light shadow rounded-pill" type="text" name="title" value="{{ old('title', $project->title) }}">

    </div>

    <div class="form-group">
        <label class="text-white" for="category_id">Category</label>
        <select class="form-control bg-light shadow rounded" name="category_id" id="category_id">
            <option>Seleccionar</option>
            @foreach( $categories as $id => $category )
                <option value="{{ $id }}"
                        @if( old('category_id',$project->category_id) == $id )
                        selected
                    @endif
                >{{ $category }}
                    </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="text-white" for="url">Project's Url</label>
        <input class="form-control bg-light shadow rounded-pill" type="text" name="url" value="{{ old('url', $project->url) }}">
    </div>

    <div class="form-group">
        <label class="text-white" for="link">Project's Link</label>
        <input class="form-control bg-light shadow rounded-pill" type="text" name="link" value="{{ old('link', $project->link) }}">
    </div>

    <div class="form-group">
        <label class="text-white" for="description">Project's Description</label>
        <textarea
            rows="10"
            aria-multiline="true"
            name="description"
            class="textBox form-control bg-light shadow rounded
                    @error('message') is-invalid @else border-0 @enderror"
            onfocusout="textReplace()"
            onfocusin="textRepWithDef()"

        >
            @if( $project->description )
                {{ old('description', $project->description) }}
            @else
                Body message here...
            @endif
    </textarea>
        @error('message')
        <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
        @enderror

        <script>
            function textRepWithDef() {
                let text = document.getElementsByClassName('textBox');
                //console.log('llego');
                text[0].childNodes[0].nodeValue = '';
            }

            function textReplace() {
                let text = document.getElementsByClassName('textBox');
                text[0].childNodes[0].nodeValue = "{{ old('message', 'Body message here...') }}";
            }
        </script>
    </div>

    <div class="form-group">
        <label class="text-white" for="fileUploader">Project's Image</label>
        <input class="bg-light form-control-file rounded-pill mb-3" style="border: solid black; border-width: thin" name="fileUploader" id="file-upload" type="file"/>
    </div>


    @if($project->image)
        <div class="img-thumbnail rounded" id="file-preview-zone" style="width: 800px;">

                <img style="width: 100%; height: 250px; object-fit: cover" src="{{ /*\Illuminate\Support\Facades\Storage::url(*/ 'https://f002.backblazeb2.com/file/laravel-portfolio/'.$project->image }}">
        </div>
    @else
        <div class="img-thumbnail rounded" id="file-preview-zone" style="width: 800px; display: none;">

        </div>
    @endif




    <input type="hidden" value="">

    <button class="form-control my-4 rounded-pill btn btn-primary text-white" type="submit" >{{ $action }}</button>

<script>
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var filePreview = document.createElement('img');
                filePreview.id = 'file-preview';
                filePreview.style.width = '100%';
                filePreview.style.height = '250px';
                filePreview.style.objectFit = 'cover';
                //e.target.result contents the base64 data from the image uploaded
                filePreview.src = e.target.result;
                console.log(e.target.result);

                var previewZone = document.getElementById('file-preview-zone');
                previewZone.innerHTML = '';
                previewZone.appendChild(filePreview);
                previewZone.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    var fileUpload = document.getElementById('file-upload');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }

</script>
