@extends('nhelp::dashbord.admindash');
@section('contenaire')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>POST</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Post</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des Posts</h3>              
              @include('nhelp::Post._modal_ajout')
              <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#myModal">Ajouter</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Titre</th>
                    <th>Module</th>
                    <th style="width: 40px; text-align: center">Etat</th>
                    <th style="width: 200px; text-align: center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($help_posts as $key=>$post )
                    <tr>
                      <td>{{++$key}} </td>
                      <td>{{$post->titre}}</td>
                      <td>{{$post->help_module_id}}</td>
                      <td> <a href="{{ route('posts.edit', [$post->id]) }} " class="{{ $post->etat == 1 ? 'btn btn-success' : 'btn btn-danger' }}">{{ $post->etat==1 ? 'Actif' : 'Inactif'}}</a></td>
                      <td style="text-align: center">
                          <a data-toggle="modal" data-toggle="tooltip"data-target="#modal_show-{{ $post->id }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                          <a data-toggle="modal" data-toggle="tooltip"data-target="#modal_update-{{ $post->id }}" class="btn btn-warning text-white"><i class="fa fa-pencil-alt"></i></a>
                          <a data-toggle="modal" data-toggle="tooltip"data-target="#modal_confirm{{ $post->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                         
                      </td>
                      @include('nhelp::Post._modal_show')
                   @include('nhelp::Post._modal_update')
                   
                   @include('nhelp::Post._confirm')

                    </tr>
                    
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {!!$help_posts->render()!!}
            </div>
          </div>

        </div>
    </div>
    </div>
</section>


@endsection

@section('script')
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
</script>
@foreach ($help_posts as $post)
    <script>
      $(function () {
          // Summernote
          
          $('#summernote-'+{{ $post->id }}).summernote()

          // CodeMirror
          CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
          });
        })
    </script>
  
@endforeach
@endsection
