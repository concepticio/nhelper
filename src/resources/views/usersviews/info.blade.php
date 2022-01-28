@extends('nhelper::layourt.app')
<style>
    a:link, a:visited {

  text-decoration: none;


}

a:link:active, a:visited:active {
    text-decoration: none;
    color: rgba(43, 43, 117, 0.925)
    cursor: auto;
}
</style>
@section('sider')
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
            <div class="page-intro single-col-max mx-auto">Sur cette page, vous trouverez tout ce que vous avez besoin de savoir sur {{env('APP_NAME')}}</div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100" action="{{ route('search') }}">
                    @csrf
                    @method('POST')
                    <input type="text"  id="searchInput" placeholder="Search the docs..." name="searchInput" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
                <div id="suggestion"></div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div style="margin-top: 3%">
    <!--{{$temp = 0}}-->
    @foreach ( $results as $result )

    @if ($temp != $result->modul)
        <h3><a href="{{ route('view.show',[$result->help_module_id]) }}">{{$result->name}}</a></h3>
    @endif
    <!--{{$temp = $result->modul}}-->

        <h6><a style="color: black" href="{{ route('view.oneshow',[$result->id]) }}">{{$result->titre}}</a></h6>
    @endforeach
</div>



@endsection
@section('script')
    <script src="{{asset('vendor/nhelper/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('vendor/nhelper/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Page Specific JS -->
    <script src="{{asset('vendor/nhelper/assets/plugins/smoothscroll.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{asset('vendor/nhelper/assets/js/highlight-custom.js')}}"></script>
    <script src="{{asset('vendor/nhelper/assets/plugins/simplelightbox/simple-lightbox.min.js')}}"></script>
    <script src="{{asset('vendor/nhelper/assets/plugins/gumshoe/gumshoe.polyfills.min.js')}}"></script>
    {{-- <script src="{{asset('vendor/nhelper/assets/js/docs.js')}}"></script> --}}
@endsection
