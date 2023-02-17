<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - @yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}}" type="image/x-icon">

    {{-- Solicitud de archivos CSS (propios) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/navstyle.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/shopstyle.css')}}">
    
    {{-- Llamar a bibliotecas (Bootsrap / Jquery / OTHERS) --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="preconnect" href="{{ asset('assets/js/locomotive-scroll.css')}}" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/03b0ac721b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>

</head>
<body>
    <div class="main">
        @yield('container') 
    </div>

    {{-- Footer --}}  
        <footer data-scroll-section id="footer" class="footer-1">
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
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{ asset('assets/js/locomotive-scroll.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="{{ asset('assets/js/locomotive.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        } // End if
    });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script>
    (function () {
        var scroll = new LocomotiveScroll();
    })();
</script>
</body>
</html>