@extends('nhelper::layourt.app')
@section('sider')

            <div id="docs-sidebar" class="docs-sidebar"style="background-color:#0f3f5d; display: flex;">
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
 @foreach ($listes as $liste )
    <article class="docs-article" id="section-1" style="text-align: justify; font-size:1em">
        <header class="docs-header">
            {{-- //<h1 class="docs-heading">{{$liste->name}}</h1> --}}
            <section class="docs-intro">

                <span class="docs-time">Dernière Mise à jour: {{$liste->updated_at}}</span>
            </section>
        </header>


            <section class="docs-section" id="item-2-1">
                <h2 class="section-heading"> {{$liste->name}}</h2>
                <p>{!!$liste->description!!}</p>

            </section><!--//section-->

    </article>
 @endforeach

 <div class="docs-top-utilities d-flex justify-content-end align-items-center" st>

    {!! $listes->links('nhelper::usersviews.paginationlinks') !!}

</div>


@endsection
@section('script')
    <script src="{{asset('vendor/nhelper/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('vendor/nhelper/assets/plugins/bootstrap.min.js')}}"></script>
    <!-- Page Specific JS -->
    <script src="{{asset('vendor/nhelper/assets/plugins/smoothscroll.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{asset('vendor/nhelper/assets/js/highlight-custom.js')}}"></script>
    {{-- <script src="{{asset('vendor/nhelper/assets/plugins/simple-lightbox.min.js')}}"></script> --}}
    <script src="{{asset('vendor/nhelper/assets/plugins/gumshoe.polyfills.min.js')}}"></script>

    <script src="{{asset('vendor/nhelper/assets/js/docs.js')}}"></script>
@endsection
