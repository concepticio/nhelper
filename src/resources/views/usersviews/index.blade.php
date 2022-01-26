@extends('nhelper::layourt.app')
@section('sider')
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
            <div class="page-intro single-col-max mx-auto">Sur cette page, vous trouverez tout ce que vous avez besoin de savoir sur {{env('APP_NAME')}}</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100">
                    <input type="text"  id="searchInput" placeholder="Search the docs..." name="searchInput" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
                <div id="suggestion"></div>
            </div>
        </div>
    </div>
@endsection
@section('contentindex')
    <div class="docs-overview py-5">
        <div class="row justify-content-center">
        @foreach ($modules as $module )
            {{-- {{dd($modules->id)}} --}}

            <div class="col-12 col-lg-4 py-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="card-title mb-3 row">
                            <div class="theme-icon-holder card-icon-holder me-2 col-3">
                                {!!$module->flatte_icon!!}
                            </div><!--//card-icon-holder-->
                            <div class="card-title-text col-9"><h5>{{$module->name}}</h5></div>
                        </div>
                        <div class="card-text">
                            {{$module->breve_description}}
                        </div>
                        <a class="card-link-mask" href="{{ route('view.show',[$module->id]) }}"></a>
                    </div><!--//card-body-->
                </div><!--//card-->
            </div><!--//col-->

        @endforeach
        </div><!--//row-->
    </div>

   {{-- {{$PostSearch}}  --}}
@endsection
@section('script')
    <script src="{{asset('vendor/nhelper/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('vendor/nhelper/assets/plugins/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Page Specific JS -->
    <script src="{{asset('vendor/nhelper/assets/plugins/smoothscroll.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    {{-- script src="{{asset('vendor/nhelper/assets/plugins/simple-lightbox.min.js')}}"></script> --}}
    <script src="{{asset('vendor/nhelper/assets/plugins/gumshoe.polyfills.min.js')}}"></script>

    {{-- <script src="{{asset('vendor/nhelper/assets/js/docs.js')}}"></script> --}}

    <script type="text/javascript">
        // var route = "{{ url('autocomplete') }}";
        // $('#search').typeahead({
        //     source:  function (term, process) {
        //     return $.get(route, { term: term }, function (data) {
        //             return process(data);
        //         });
        //     }
        // });


        let post= <?php echo json_encode($PostSearch); ?>


        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keyup',function(){
        const input = searchInput.value;
        const result = post.filter(item=>item.titre.toLocaleLowerCase().includes(input.toLocaleLowerCase()));
        let suggestion ='';
        if (input != '' ) {


        result.forEach(resultItem => {
            suggestion+= '<div class=\"suggestion\">'+ resultItem.titre+'</div>'

        }
        );}
        document.getElementById('suggestion').innerHTML=suggestion;
        //console.log(result);


});
    </script>
@endsection
