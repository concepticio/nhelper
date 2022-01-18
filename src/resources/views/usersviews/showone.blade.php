@extends('nhelp::layourt.app')
@section('sider')
  <div class="docs-wrapper">
            <div id="docs-sidebar" class="docs-sidebar"style="background-color:#0f3f5d">
                    <nav id="docs-nav" class="docs-nav navbar" >
                        @foreach ($modules as $mod )                            
                            <ul class="section-items list-unstyled nav flex-column pb-3">                                
                                <li class="nav-item section-title"><a class="nav-link scrollto active" href="{{ route('view.show',$mod->id) }}"><span class="theme-icon-holder me-2">{!!$mod->flatte_icon!!}</span>{{$mod->name}}</a></li>
                                @foreach ($posts as $post)
                                    @if ($mod->id == $post->help_module_id && $post->etat ==1) 
                                        <li class="nav-item"><a class="nav-link" href="{{ route('view.oneshow',$post->id) }}">{{$post->titre}}</a></li>                                   
                                    @endif                                                
                                @endforeach
                           </ul>
                        @endforeach
                    </nav><!--//docs-nav-->
            </div>
@endsection
@section('content')
    <article class="docs-article" id="section-1">
        
        
            <header class="docs-header">
                
                <h1 class="docs-heading">{{$lists->name}} </h1>
                <span class="docs-time">Dernière Mise à jour: {{$lists->updated_at}}</span>
                    
            </header>    
        
            <section class="docs-section" id="item-2-1">
                <h2 class="section-heading">{{$lists->titre}}</h2>
                <p>{!!$lists->description!!}</p>
            </section><!--//section-->
            <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                
                    <a class="btn btn-primary " style="margin-right: 72%;" href="{{route('view.oneshow',$idprevious)}}">PREVIOUS</a>
            
                    <a class="btn btn-primary d-none d-lg-flex" style="margin-right: 5%;" href="{{route('view.oneshow',$idnext)}}">NEXT</a>       
               
            </div>
            
    </article>
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