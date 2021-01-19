@extends('front.master.master')

@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(/front/assets/images/contato.png);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Contato</h1>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-contact" class="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">
                    <div class="fh5co-contact-info">
                        <h3>Informações para contato</h3>
                        <ul>
                            <li class="address">Rua Afonso Sardinha, 90 <br> Pioneiros <br> Ouro Branco - Minas Gerais</li>
                            <li class="phone"><a href="tel://(31) 2137-5700"> (31) 2137-5700 </a></li>
                            <li class="email"><a href="mailto:vaimeninas.ourobranco@ifmg.edu.br">vaimeninas.ourobranco@ifmg.edu.br</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 animate-box">
                    <h3>Entrar em contato</h3>
                    <form action="{{  route('send-mail') }}" method="post">
                        @csrf

                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Primeiro nome" required>
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Sobrenome" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" name="email" id="email" class="form-control" placeholder="Seu email" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Assunto da mensagem" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="8" class="form-control" placeholder="Escreva sua mensagem para nós" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar Mensagem" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
