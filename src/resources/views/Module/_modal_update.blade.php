<div class="modal" id="modal_update-{{ $module->id }}">
    <div class="modal-dialog" style="max-width: 650px">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modification</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{ route('modules.update',$module->id) }} " method="POST">
                
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom<span class="text-danger">*</span></label>
                    <input type="text" class="form-control"style="text-transform: uppercase" name="name" value=" {{$module->name}} " id="titre" placeholder="Titre du post" required>
                </div>
                <div class="form-group">
                    <label for="flatte_icon">Flatte Icon<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="flatte_icon" value=" {{$module->flatte_icon}}" placeholder='<i class="fas fa-map-signs"></i>' required>
                </div>
                <div class="form-group">
                    <label for="breve_description">Brève description</label>
                    <input type="text" class="form-control" name="breve_description" value=" {{$module->breve_description}}" placeholder='20 mots au maximum' >
                </div>
                <div class="form-group">
                    <label>Module</label>
                    <select  name="parent" class="form-control" >  
                        <option value="" selected>Selectionnez le module parent</option>                       
                        @foreach ($help_modules as $key=>$module )
                            <option value="{{$module->id}}" @if($module->id==$key) selected @endif ">{{$module->parent}}</option>
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
