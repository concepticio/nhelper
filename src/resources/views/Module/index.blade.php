@extends('nhelper::layourt.admindash')
@section('contenaire')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>MODULE</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Module</li>
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
              <h3 class="card-title">Liste des Modules</h3>
              @include('nhelper::Module._modal_ajout')
              <button type="button" class="btn btn-success fa-pull-right" data-toggle="modal" data-target="#myModal">Ajouter</button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Modules</th>
                    <th>Module Parent</th>
                    <th style="width: 200px; text-align: center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($help_modules as $key=>$module )
                    <tr>
                      <td>{{++$key}} </td>
                      <td>{{$module->name}}</td>
                      <td>{{$module->parent}}</td>
                      <td style="text-align: center">
                          <a data-toggle="modal" data-toggle="tooltip"data-target="#modal_show-{{ $module->id }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                          <a data-toggle="modal" data-toggle="tooltip"data-target="#modal_update-{{ $module->id }}" class="btn btn-warning text-white"><i class="fa fa-pencil-alt"></i></a>
                          <a data-toggle="modal" data-toggle="tooltip"data-target="#modal_confirm{{ $module->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                      @include('nhelper::Module._modal_show')
                      @include('nhelper::Module._modal_update')
                      @include('nhelper::Module._confirm')
                    </tr>

                  @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              {!! $help_modules->render() !!}
              </ul>
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
    $(function () {
      // Summernote
      $('#summernote2').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
@endsection
