

@csrf
<div class="form-group bg-dark col-10 mx-auto shadow rounded py-3 px-4">
    <label class="text-white" for="title">Project's Title</label> <br>
    <input class="form-control bg-light shadow rounded-pill" type="text" name="title" value="{{ old('title', $project->title) }}"> <br>

    <label class="text-white" for="url">Project's Url</label> <br>
    <input class="form-control bg-light shadow rounded-pill" type="text" name="url" value="{{ old('url', $project->url) }}"> <br>

    <label class="text-white" for="description">Project's Description</label> <br>
    <textarea
        rows="10"
        aria-multiline="true"
        name="description"
        class="textBox form-control bg-light shadow rounded
                    @error('message') is-invalid @else border-0 @enderror"
        onfocusout="textReplace()"
        onfocusin="textRepWithDef()"

    >
        {{ old('description', $project->description) }}
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



    <label class="text-white" for="fileUploader">Project's Image</label>
    <input class="form-control-file rounded-pill mb-3" style="border: solid black; border-width: thin" name="fileUploader" id="file-upload" type="file"/>


    @if($project->image)
        <div class="img-thumbnail rounded" id="file-preview-zone" style="width: 800px;">

                <img style="width: 100%; height: 250px; object-fit: cover" src="{{ \Illuminate\Support\Facades\Storage::url($project->image) }}">
        </div>
    @else
        <div class="img-thumbnail rounded" id="file-preview-zone" style="width: 800px; display: none;">

        </div>
    @endif




    <input type="hidden" value="">

    <button class="form-control my-4 rounded-pill btn btn-primary text-white" type="submit" >{{ $action }}</button>
</div>
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


