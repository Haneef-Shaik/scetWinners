<?php 
class Myclass{
    private $h,$b;
    function head()
    {
        return '<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SCET WINNER</title>
        <link href="https://fonts.googleapis.com/css2?family=Ewert&family=Libre+Baskerville:ital@1&family=Pacifico&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/scethome.css">
        <link rel="stylesheet" href="css/header_Footer.css">
        <link rel="stylesheet" href="css/card.css">
    
        <link rel="icon" href="images/logo.png">
        <script src="js/jquery.min.js"></script>
        <script src="js/js.cookie.js"></script>';
    }
    function header($class)
        {
            $a=$b=$c=$d=$e='';
            switch($class)
            {
                case 1: $a='font-weight:900;color:black;';
                    break;
                case 2: $b='font-weight:900;color:black;';
                    break;
                case 3: $c='font-weight:900;color:black;';
                    break;
                case 4: $d='font-weight:900;color:black;';
                    break;
                case 5: $e='font-weight:900;color:black;';
                    break;
            }
            $h='
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E0E5EC;">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="transition:0.6s;">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="index.php"    style="font-size:1.5rem;'.$a.' " >Home</a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link" href="circulum.php" style="font-size:1.5rem;'.$b.'" >Circulum</a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link" href="Alumini.php"  style="font-size:1.5rem; '.$c.'"  >Alumini</a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link" href="placements.php" style="font-size:1.5rem;'.$d.'"  >Placements</a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link" href="About_us.php" style="font-size:1.5rem;'.$e.'" >About Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    
            ';
            return $h;
        }
        function banner()
        {
            return '<div class="container-fluid m-0" style="background-color: #A3B1D6;">
                    <h1 class="text-center" style="font-family:Times New Roman;font-weight: 900;color:white; ">
                    <span class="SW">S</span>WARNANDHRA
                    <span class="SW">C</span>OLLEGE OF
                    <span class="SW">E</span>NGINEERING AND
                    <span class="SW">T</span>ECHNOLOGY</h1>
                    <h2 class="text-center " style="font-family:Times New Roman;"> ( <span style="color:rgba(194, 227, 255, 0.952);">AUTONOMOUS </span>)</h2>
                    <h3 class="text-center" style="font-family: Biting My Nails;">Seetarampuram <br> Narsapur,W.G.Dt.</h3>
                    </div>';
        }
        function footer() {
            return '<div class="card text-center " style="position:static;bottom:0;background-color: #E0E5EC;width:100%;">
            <div class="card-header d-none d-md-block">
                Created by
            </div>
            <div class="card-footer text-muted d-block d-md-none">
                About Us
            </div>
            <div class="card-body p-0 m-0">
                <div class="container-fluid">
    
                    <div class="row d-flex">
                        <div class="col-12 col-md-4 p-0 m-0">
                            <h1 class="p-2 m-0" style="font-size: 150%;margin-top:10%;">Visit our College</h1><br><a class="m-0" style="text-decoration: none;font-family:Times New Roman;font-size:30px" href="https://www.swarnandhra.ac.in/" target="blank">SCET</a>
                        </div>
                        <div class="col-12 col-md-4 p-0 m-0"><a href="About_us.php"><img src="images/team19.png" height="150"></a>
                        </div>
                        <div class="col-12 col-md-4 text-center p-0" style="font-size: 150%;">
                            <h2 class="col">Follow Us</h2><br>
                            <a target="blank" href="https://www.facebook.com/scet.winner"><i class="fa fa-facebook col-2" aria-hidden="true" style="color:blue ;"></i></a>                           
                            <a target="blank" href="https://www.instagram.com/scetwinners/" ><i class="fa fa-instagram col-2" aria-hidden="true" style="color: hotpink;"></i></a>
                            <a target="blank" href="https://twitter.com/scetwinners"><i class="fa fa-twitter col-2" aria-hidden="true" style="color:rgb(78, 136, 231);"></i></a>
                            <a target="blank" href="mailto:email@address.com"><i class="fa fa-envelope col-2" aria-hidden="true" style="color: orange;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted d-none d-md-block">
                <a href="About_us.php "style="text-decoration:none;">About Us</a>
            </div>
    </div>
    ';
        }
}
?>