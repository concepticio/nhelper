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
                    <input type="text"  id="searchInput" name="searchInput" value="{{$search}}" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
                <div id="suggestion"></div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div style="margin-top: 3%; margin-left:-15%; padding-right:13%; text-align:justify; ">
    <!--{{$temp = 0}}-->
    @foreach ( $results as $result )

    @if ($result->description != "")
    <br><br><a style="color: rgba(99, 99, 247, 0.911); text-transform: uppercase; font-size:25px;" href="{{ route('view.oneshow', $result->id) }}">{!!$result->titre!!}</a><br>
            {!!substr($result->description,0,500)!!}<span> ... </span>
    @endif
    <!--{{$temp = $result->modul}}-->

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
