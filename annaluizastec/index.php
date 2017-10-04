<?php
    if (isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Contact Form';
        $to = 'zaraski12345@gmail.com';
        $subject = 'Message from Contact Form ';
        $body ="From: $name\n E-Mail: $email\n Message: $message";
        if (!$_POST['name']){
            $errName = 'Enter your name';
        }
        //Email Validation
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errEmail = 'Please enter a valid email address';
        }
        // Message Validation
        if (!$_POST['message']){
            $errMessage = 'Please enter your message';
        }
        // Check if there's an error before sending a message.
        if (!errName && !$errEmail && !$errMessage){
            if (mail($to, $subject, $body, $from)) {
                $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
            } else{
                $result = '<div class="alert alert-danger">Sorry there was a error while sending your message</div>';
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anna Luiza Stec - Portfolio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
    <script src="https://use.fontawesome.com/8ad371edeb.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-example2" data-offset="0">

<!-- Main Header -->

    <header class="main-header">

        <a class="navbar-brand fixed-top" href="#">
            <!-- SVG TEXT LOGO -->

                    <svg  width="500px" height="85px" version="1.1" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;">

                        <g class="Anna-text" fill="transparent">
                            <text x="50" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">A</tspan></text>
                        </g>
                        <g class="Anna-text Anna-n1" fill="transparent">
                            <text x="95" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">n</tspan></text>
                        </g>
                        <g class="Anna-text Anna-n2" fill="transparent">
                            <text x="123" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">n</tspan></text>
                        </g>
                        <g class="Anna-text Anna-a2" fill="transparent">
                            <text x="151" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">a</tspan></text>
                        </g>

                        <g class="Luiza-text" fill="transparent">
                            <text x="200" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">L</tspan></text>
                        </g>
                        <g class="Luiza-text Luiza-u" fill="transparent">
                            <text x="240" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">u</tspan></text>
                        </g>
                        <g class="Luiza-text Luiza-i" fill="transparent">
                            <text x="272" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">iz</tspan></text>
                        </g>

                        <g class="Luiza-text Luiza-a" fill="transparent">
                            <text x="305" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">a</tspan></text>
                        </g>


                        <g class="Stec-text" fill="transparent">
                            <text x="364" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">S</tspan></text>
                        </g>
                        <g class="Stec-text Stec-t" fill="transparent">
                            <text x="400" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">t</tspan></text>
                        </g>
                        <g class="Stec-text Stec-e" fill="transparent">
                            <text x="418" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">e</tspan></text>
                        </g>
                        <g class="Stec-text Stec-c" fill="transparent">
                            <text x="440" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                                <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">c</tspan></text>
                        </g>




                    </svg>
            <!--// SVG TEXT LOGO -->

        </a>

        <nav class="navbar navbar-expand-md navbar-light navs" id="navbar-example2">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                    <ul class="nav navbar-nav">
                        <li class="nav-item ">
                                <a class="nav-link btn btn-secondary mr-sm-3" role="button" href="#start">START</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link btn btn-secondary mr-sm-3" role="button" href="#projekty">PROJEKTY</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link btn btn-secondary mr-sm-3" role="button" href="#omnie">O MNIE</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link btn btn-secondary mr-sm-3" role="button" href="#kontakt">KONTAKT</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
</header>
<!--/ MAIN HEADER -->

<!-- START - OFERTA - CONTENT -->
<section id="start" class="start">

    <section class="container text-center style">
        <h2 class="title_start">COŚ O RZEŹBIARSTWIE</h2>
        <span>
            Rzeźbiarstwo należy do najstarszych dziedzin sztuki i obecnie jest już zawodem bardzo rzadko spotykanym.
            Drewno ma swoich wiernych miłośników, ale by tworzyć w tym szlachetnym materiale należy respektować jego subtelną strukturę, podkreślać jego walory i pamiętać, że nie jest ono tylko materiałem, ale pięknem samym w sobie.
            Emocje, idee i cele rodzą się w sercu, następnie umysł przeradza je w wizję, kolejnym krokiem jest praca, która składa się na dobranie odpowiedniego do jej wyrażenia materiału, w którym ostatecznie zostaje zrealizowana.
            Rzeczy materialne są tylko narzędziem, koniecznym do zrozumienia  i doświadczania życia. By rzeźba spełniała swoją funkcję jak najdłużej, dużą wagę przykładam do impregnacji i lakierowania by zabezpieczyć rzeźbę na długie lata.
        </span>
    </section>

    <section class="container text-center oferta style">
        <h2>OFERTA</h2>
        <ul>
            <li>Płaskorzeźby, wypukłorzeźby i wklęsłorzeźby o dowolnej tematyce</li>
            <li>Rzeźby przestrzenne</li>
            <li>Loga, szyldy, symbole</li>
            <li>Renowacja rzeźb</li>
            <li>Ornamenty, elementy ozdobne do mebli</li>
            <li>Rzeźbione przedmioty użytkowe</li>
            <li>Zamówienia indywidualne</li>
        </ul>
    </section>
</section>
<!--/ START - OFERTA - CONTENT /-->
<section id="projekty" class="background-design"></section>
<!-- PROJEKTY -->
<section class="projekt">
    <section class="container text-center oferta">
        <h2 >PROJEKTY</h2>

        <!--MASONRY GALLERY-->
        <div class="grid">

            <div class="grid-sizer"></div>

            <!-- 1-4 -->
            <div class="photo high">
                <div class="photo_shell">
                    <a href="img/PROJEKT2.jpg" data-lightbox="example-set"><img src="img/PROJEKT2.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <div class="photo medium">
                <div class="photo_shell">
                    <a href="img/PROJEKT9.jpg" data-lightbox="example-set"><img src="img/PROJEKT9.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <div class="photo medium">
                <div class="photo_shell">
                    <a href="img/PROJEKT10.jpg" data-lightbox="example-set"><img src="img/PROJEKT10.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <div class="photo medium">
                <div class="photo_shell">
                    <a href="img/PROJEKT11.jpg" data-lightbox="example-set"><img src="img/PROJEKT11.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <!--5-->
            <div class="photo high">
                <div class="photo_shell">
                    <a href="img/PROJEKT4.jpg" data-lightbox="example-set"><img src="img/PROJEKT4.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <!--6 duży -->
            <div class="photo large">
                <div class="photo_shell">
                    <a href="img/PROJEKT13.jpg" data-lightbox="example-set"><img src="img/PROJEKT13.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <!--7 szeroki-->
            <div class="photo landscape">
                <div class="photo_shell">
                    <a href="img/PROJEKT1.jpg" data-lightbox="example-set"><img src="img/PROJEKT1.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <!-- 8-9  dwa małe-->
            <div class="photo medium second">
                <div class="photo_shell">
                    <a href="img/PROJEKT8.jpg" data-lightbox="example-set"><img src="img/PROJEKT8.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>
            <div class="photo medium2">
                <div class="photo_shell">
                    <a href="img/PROJEKT3.jpg" data-lightbox="example-set"><img src="img/PROJEKT3.jpg" alt="Projekt wilk 1" /></a>
                </div>
            </div>


        </div>
        <!--/ MASONRY GALLERY-->
    </section>
</section>
<!--/ PROJEKTY -->
<section id="omnie" class="background-design2"></section>
<!-- O MNIE -->
<section class="o-mnie">
    <div class="container style">
        <h2 class="text-center" >O MNIE</h2>
        <img src="img/me.jpg" class="img-fluid meimg" width="300px" height="300px">
        <span>W moim rodzinnym domu wszyscy zajmowali się rzeźbieniem w drzewie,
        dlatego też jako mała dziewczynka prosiłam rodziców by również mi pozwolili spróbować swoich sił.
        Po wielu  namowach,  wreszcie, gdy miałam 11 lat,  pierwszych lekcji udzieliła mi moja mama.
        Potem pozostało mi bacznie naśladować w rzeźbieniu swoją starszą siostrę Izabelę,
        która zawsze była dla mnie przykładem. Na początku rzeźbiłam płaskorzeźby koni,
        starając się odzwierciedlić prawdziwe  piękno tych cudownych stworzeń.
        Moja siostra zawsze podkreślała mi, że  każde cięcie dłutem musi być zamierzone i pewne,
        bo najważniejsze jest estetyczne wykonanie. Skończona rzeźba powinna mieć wyraźne cięcia dłutem,
        które świadczą o staranności i doświadczeniu jakie nabywamy przez całe lata. Szybko nauczyłam się,
        że przemyślana cięcia oddają charakter rzeźby i podkreślają prawdziwy kunszt ręcznego wykonania.
        </span>
        <!--<svg  width="500px" height="85px" version="1.1" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;">

            <g class="Anna-text" fill="transparent">
                <text x="50" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">A</tspan></text>
            </g>
            <g class="Anna-text Anna-n1" fill="transparent">
                <text x="95" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">n</tspan></text>
            </g>
            <g class="Anna-text Anna-n2" fill="transparent">
                <text x="123" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">n</tspan></text>
            </g>
            <g class="Anna-text Anna-a2" fill="transparent">
                <text x="151" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">a</tspan></text>
            </g>

            <g class="Luiza-text" fill="transparent">
                <text x="200" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">L</tspan></text>
            </g>
            <g class="Luiza-text Luiza-u" fill="transparent">
                <text x="240" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">u</tspan></text>
            </g>
            <g class="Luiza-text Luiza-i" fill="transparent">
                <text x="272" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">iz</tspan></text>
            </g>

            <g class="Luiza-text Luiza-a" fill="transparent">
                <text x="305" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">a</tspan></text>
            </g>


            <g class="Stec-text" fill="transparent">
                <text x="364" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">S</tspan></text>
            </g>
            <g class="Stec-text Stec-t" fill="transparent">
                <text x="400" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">t</tspan></text>
            </g>
            <g class="Stec-text Stec-e" fill="transparent">
                <text x="418" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">e</tspan></text>
            </g>
            <g class="Stec-text Stec-c" fill="transparent">
                <text x="440" y="15" text-anchor="middle" font="10px &quot;sans-serif&quot;">
                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="44">c</tspan></text>
            </g>




        </svg>-->
    </div>
</section>
<!--/ O MNIE-->
<section id="kontakt" class="background-design3"></section>
<!-- MAIN FOOTER-->
<section class="kontakt text-center">
    <div class="container main-footer">
        <div class="row">
            <h2 class="py-3 col-lg-12">Kontakt<br/></h2>
            <div class="col-lg-4">
                <p>
                    Anna Luiza Stec<br/>
                    tel. 727-768-936<br/>
                    e-mail: annaluizastec@gmail.com
                </p>
            </div>
            <div class="col-lg-8">
                <h3>Napisz do mnie</h3>
                <form role="form" method="post" action="index.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Imię i Nazwisko</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Kowalski" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>"; ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Nazwa Firmy</label>
                            <input type="text" class="form-control" placeholder="Firma">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="12345@gmail.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone" class="col-form-label">Telefon</label>
                            <input type="tel" class="form-control" id="inputPhone" placeholder="222-333-222" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Wiadomość</label>
                        <textarea class="form-control" id="message" name="message" rows="3"> <?php echo "<p class='text-danger'>$errName</p>"; ?> </textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>"; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                    <div class="form-group">
                        <div class="col-sm-10 cols-sm-offset-2">
                            <?php echo $result; ?>
                        </div>
                    </div>
                </form>
                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                        "use strict";
                        window.addEventListener("load", function() {
                            var form = document.getElementById("needs-validation");
                            form.addEventListener("submit", function(event) {
                                if (form.checkValidity() == false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            }, false);
                        }, false);
                    }());
                </script>
            </div>

        </div>
    </div>
</section>
<!-- /MAIN FOOTER-->
<section class="author">
    <div class="container">
        <h6>&copy; 2017 Michał Hadamik</h6>
    </div>
</section>
<!-- BUTTON BACK TO TOP -->
<i class="fa fa-arrow-up fa-2x" aria-hidden="true" onclick="topFunction()" id="myBtn" title="Go to top"></i>
<!--/ BUTTON BACK TO TOP -->
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/javascript.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/lightbox.js"></script>
</body>
</html>