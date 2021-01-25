@extends('front.master.master')

@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(/front/assets/images/logopaginas.png);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Quem somos</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-counter" class="fh5co-counters">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div  data-animate-effect="fadeIn">
                        <h2>Professoras</h2>
                    </div>

                    <center><table>
                            <tr>
                                <td><img style="border-radius: 50%;" width="200" height="200" src='/front/assets/images/Daniela.jpg'/></td>

                                <td> "Junte-se! Busque" Compartilhe!"</br>
                                    <i>Daniela Costa Terra</i></td>
                            </tr>

                            <tr>
                                <td><img style="border-radius: 50%;" width="200" height="200" src='/front/assets/images/Leticia.jpg'/></td>

                                <td> "Porque lugar de mulher é onde ela queira estar." </br>
                                    <i>Letícia Maria de Melo Silva Cheloni</i>.</td>
                            </tr>

                            <tr>
                                <td><img style="border-radius: 50%;" width="200" height="200" src='/front/assets/images/Suelen.jpg'/></td>

                                <td> "Você pode muito mais do que imagina. Sonhe, trabalhe e vá, E se der medo, vai com medo mesmo. "</br>
                                    <i>Suelen Mapa de Paula</i> </td>
                            </tr>
                        </table></center>

                </div>
            </div>
        </div>

    </div>

    <div id="fh5co-explore" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Bolsistas</h2>
                </div>

                <center><table>
                    <tr>
                        <td><img style="border-radius: 50%;" width="200" height="200" src='/front/assets/images/Isabella.jpg'/></td>
                        <td> "Vai, Meninas!" </br></br> </td>
                        <td><i>Isabella Alane Darin Melo</i></td>
                    </tr>

                    <tr>
                        <td><img style="border-radius: 50%;" width="200" height="200" src='/front/assets/images/Raylla.jpg'/></td>
                        <td> "Vai, Meninas!" </br></br> </td>
                        <td><i>Raylla Luiza da Silva Gama</i></td>
                    </tr>
                </table></center>

            </div>
        </div>

        <div class="fh5co-explore">
            <div class="container">
                <div class="row">


                </div>
            </div>
        </div>
    </div>

@endsection
