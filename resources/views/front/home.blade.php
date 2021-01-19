@extends('front.master.master')

@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/front/assets/images/vai-meninas-banner.png);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

        </div>
    </header>

    <div id="fh5co-counter" class="fh5co-counters">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div  data-animate-effect="fadeIn">
                            <h2>"Vai, Meninas!" é um projeto do IFMG - OB, que visa estimular a participação feminina na área de tecnologia e engenharia.</h2>
                            <h3>Visite nossa página no facebook <a href="https://www.facebook.com/vaimeninas/?ref=page_internal" target="_blank">Vai, meninas!</a></h3>
                            <p> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=7HR4TG2Go7k"><i class="icon-play"></i> Veja o Video</a></p>
                        </div>
                    </div>
                </div>
            </div>

    </div>

    <div id="fh5co-explore" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Nossos eventos.</h2>
                    <h4>Caso queira saber mais sobre nossos outros eventos, visite nossa pagina
                        no <a href="https://www.facebook.com/vaimeninas/" target="_blank">facebook</a> ou no
                        <a href="https://www.instagram.com/vaimeninas/" target="_blank">instagram</a>.</h4>
                </div>
            </div>
        </div>

        <div class="fh5co-explore">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-pull-1 animate-box">
                        <img class="img-responsive" src="/front/assets/images/work_1.png" alt="work">
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="mt">
                            <div>
                                <h4><i class="icon-calendar"></i>Curso introdutório de Laravel</h4>
                                <p>Esse curso ocorrerá em <b>Fevereiros</b>, será dividido em 4 etapas e ocorrerá aos sabados a tarde.
                                    Para saber mais <a href="https://www.instagram.com/p/CJ9SoAeBz5s/" target="_blank">clique aqui</a>.</p>
                            </div>
                            <div>
                                <h4><i class="icon-calendar"></i>Café com "Vai, meninas!"</h4>
                                <p>Esse evento ocorreu dia <b>18/12/2020</b>. Nele realizamos uma conversa online sobre
                                    sororidade e também sobre nossos projetos futuros.
                                    Caso queira assistir a reunião <a href="https://www.youtube.com/watch?v=JwIN1wPKVl8"
                                                                      target="_blank">clique aqui</a>.</p>
                            </div>
                            <div>
                                <h4><i class="icon-calendar"></i>Como se posicionar frente aos desafios do mercado de trabalho?</h4>
                                <p>Esse evento ocorreu dia <b>20/11/2020</b>. Nele realizamos uma conversa online com
                                    três psicologos, onde eles deram varias dicas de como se posicionar aos desafios do mercado.
                                    Caso queira assistir a reunião <a href="https://www.youtube.com/watch?v=mq-SwIQlibs"
                                                                      target="_blank">clique aqui</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-project" class="fh5co-project">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Mulheres importantes que você talvez não conheça.</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid proj-bottom">
            <div class="row">
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a><img src="/front/assets/images/hedy-lamarr.png" alt="hedey-lamarr" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a><img src="/front/assets/images/martha.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a><img src="/front/assets/images/katherine-johnson.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a><img src="/front/assets/images/irma-mary.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a><img src="/front/assets/images/stephanie-kwolek.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive"></a>
                </div>
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a><img src="/front/assets/images/barbaraliskov.png" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @isset($posts)
    <div id="fh5co-blog" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Postagem Recentes</h2>
                    <p>Abaixo você pode conferir nossas ultimas postagens no blog do Vai, meninas!.</p>
                </div>
            </div>
            <div class="row">

                @foreach($posts as $post)

                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="{{ route('article', $post->uri) }}"><img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 800)) }}" alt=""></a>
                        <div class="blog-text">
                            <h3><a href="{{ route('article', $post->uri) }}">{{ $post->title }}</a></h3>
                            <span class="posted_on">{{  date('d/m/y H:i', strtotime($post->created_at))  }}</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>{{ $post->subtitle }}</p>
                            <a href="{{ route('article', $post->uri) }}" class="btn btn-primary">Leia mais</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    @endisset
@endsection
