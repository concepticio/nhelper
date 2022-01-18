<div class="modal" id="modal_update-{{ $post->id }}">
    <div class="modal-dialog" style="max-width: 750px">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modification</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{ route('posts.update',$post->id) }} " method="POST">
                
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titre">Titre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" style="text-transform: uppercase" value=" {{$post->titre}} " name="titre" placeholder="Titre du post" required>
                </div>
               
                <div class="form-group">
                    <label>Module<span class="text-danger">*</span></label>
                    <select  name="help_module_id" class="form-control" required>  
                      <option value="{{$post->help_module_id}} ">Selectonnez un module</option>                      
                        @foreach ($help_modules as $key=>$module )
                            <option value="{{$module->id}} @if($post->help_module_id==$key) selected @endif ">{{$module->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description"  id="summernote-{{ $post->id }}"  required>
                            {{$post->description}}
                    </textarea>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">

        </div>

      </div>
    </div>
  </div>
 {{-- <script>
      $(function () {
          console.log("test");
      // Summernote
      $('#summernote-'+{{ $post->id }}).summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
 </script> --}}