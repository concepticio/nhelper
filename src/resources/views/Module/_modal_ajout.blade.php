<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enregistrement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{ route('modules.store') }} " method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nom<span class="text-danger">*</span></label>
                    <input type="text" style="text-transform: uppercase" class="form-control" name="name" id="titre" placeholder="Titre du post" required>
                </div>
                <div class="form-group">
                    <label for="flatte_icon">Flatte Icon<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="flatte_icon" id="titre" placeholder='<i class="fas fa-map-signs"></i>' required>
                </div>
                <div class="form-group">
                    <label for="breve_description">Brève description</label>
                    <input type="text" class="form-control" name="breve_description" id="titre" placeholder='20 mots au maximum' >
                </div>
                <div class="form-group">
                    <label>Module</label>
                    <select  name="parent" class="form-control"> 
                        <option value="" selected>Selectionnez le module parent</option>                       
                        @foreach ($help_modules as $module )
                            <option value="{{$module->id}} ">{{$module->name}}</option>
                        @endforeach
                    </select>
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
