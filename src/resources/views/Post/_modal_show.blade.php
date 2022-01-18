<div class="modal" id="modal_show-{{ $post->id }}">
    <div class="modal-dialog" style="max-width: 850px">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Voir </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body"> 
            <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    {{$post->titre}}
                  </h3>
                </div>
                <div class="card-body">
                    {!!$post->description!!}
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
               
            </div>           
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
                       
        </div>

      </div>
    </div>
  </div>
