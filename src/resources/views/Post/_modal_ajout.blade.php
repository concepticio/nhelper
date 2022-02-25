<div class="modal" id="myModal">
    <div class="modal-dialog" style="max-width: 750px">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enregistrement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{ route('posts.store') }} " method="POST">
                @csrf
                <div class="form-group">
                    <label for="titre">Titre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" style="text-transform: uppercase" name="titre" id="titre" placeholder="Titre du post" required>
                </div>

                <div class="form-group">
                    <label>Module<span class="text-danger">*</span></label>
                    <select  name="help_module_id" class="form-control" required>
                        @foreach ($help_modules as $module )
                            <option value="{{$module->id}} ">{{$module->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id=""  class="form-control" style="height: 500px;" required>

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
