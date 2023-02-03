<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - </title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/shopstyle.css')}}">
    
    {{-- Llamar a bibliotecas (Bootsrap / Jquery / OTHERS) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://kit.fontawesome.com/03b0ac721b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        @yield('container') 
    </div>

    {{-- Footer --}}  
        <footer id="footer" class="footer-1">
            <div class="main-footer widgets-dark typo-light">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget subscribe no-box">
                                <h5 class="widget-title">LaCollineSarl<span></span></h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicin minus quis! Nemo, cum. </p>
                            </div>
                        </div>

  
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Links<span></span></h5>
                                    <ul class="thumbnail-widget">
                                        <li>
                                            <div class="thumb-content"><a href="#.">&nbsp;Informacion legal</a></div> 
                                        </li>
                                        <li>
                                            <div class="thumb-content"><a href="#.">&nbsp;Terminos y condiciones</a></div> 
                                        </li>
                                    </ul>
                            </div>
                        </div>

  

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Redes Sociales<span></span></h5>
                                    <a href="#"> <i class="fa fa-facebook"> </i> </a>
                                    <a href="#"> <i class="fa fa-twitter"> </i> </a>
                                    <a href="#"> <i class="fa fa-youtube"> </i> </a>
                            </div>
                        </div>
                        <br>
                        <br>


                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Contactanos<span></span></h5>
                                 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <div class="emailfield">
                                        
                                        <input type="text" name="email" placeholder="Email">
                                        <input name="uri" type="hidden" value="arabiantheme">
                                        <input name="loc" type="hidden" value="en_US">
                                        <input class="submitbutton ripplelink" type="submit" value="Confirmar"> 
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
  
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p></p>Copyright © 2023. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    
    

    <script src="{{asset('assets/js/jquery.js')}}"></script>
</body>
</html>