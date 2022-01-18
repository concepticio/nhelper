@extends('nhelp::layourt.app')
@section('content')
    <article class="docs-article" id="section-1">
        
        
            {{-- <header class="docs-header">
                
                <h1 class="docs-heading">{{$lists->name}} <span class="docs-time">Dernière Mise à jour: {{$lists->updated_at}}</span></h1>
                    
            </header>    
         --}}
            <section class="docs-section" style="margin-top: 20%; margin-left:15%;">
               <H1>Cet article est encour de traitement</H1>
            </section><!--//section-->
        
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