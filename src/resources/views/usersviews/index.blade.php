@extends('nhelp::layourt.app')
@section('sider')
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
            <div class="page-intro single-col-max mx-auto">Sur cette page, vous trouverez tout ce que vous avez besoin de savoir sur {{env('APP_NAME')}}</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100">
                    <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
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
@endsection
@section('script')
    <script src="{{asset('vendor/nhelp/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('vendor/nhelp/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Page Specific JS -->
    <script src="{{asset('vendor/nhelp/assets/plugins/smoothscroll.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{asset('vendor/nhelp/assets/js/highlight-custom.js')}}"></script>
    <script src="{{asset('vendor/nhelp/assets/plugins/simplelightbox/simple-lightbox.min.js')}}"></script>
    <script src="{{asset('vendor/nhelp/assets/plugins/gumshoe/gumshoe.polyfills.min.js')}}"></script>
    {{-- <script src="{{asset('vendor/nhelp/assets/js/docs.js')}}"></script> --}}
@endsection