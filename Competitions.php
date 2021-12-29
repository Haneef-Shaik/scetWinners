<?php 
    include_once 'Myclass.php';
    $obj01=new Myclass();
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $obj01->head(); ?>
    <link rel="stylesheet" href="css/competitions.css">
    <style>
    .myOwnBtn
    {
        background-color: #f7f5ec; 
        box-shadow:inset 5px 5px 10px #A3B1C6; 
        border-radius: 25px;
    }
    .Y{
        font-weight: bold;
    }
    .Y:hover
    {
        color: #fff;
        background-color: rgba(0,150,200,1); 
        box-shadow:inset -5px -5px 10px #000;
    }
    </style>
</head>
<body style="min-height:100vh;background:#E0E5EC; ">
    <?php 
        echo $obj01->header(4);
        echo $obj01->banner();

    ?>
    
    <div id="banner" class="container-fluid">
            <div style="width:10%;"><img src="images/bqt.png" alt="" class="bqt" style="width:100%;"></div>
            <div class="txt" style="width:80%;">Your perseverance, willpower, and confidence paid off. You have become our inspiration.<br><span class="contxt" style="font-size:200%;font-family: 'Ewert', cursive;">Congratulations!</span> </div>
            <div style="width:10%;"><img src="images/bqt.png" alt="" class="bqt" style="width:100%;"></div>
    </div>
    <section>
        <div class="container-fluid p-0">
        <div div id="demo" class="carousel slide ml-1" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner col-12">
            <div class="carousel-item active ">
                <img src="comp/1.png" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="comp/2.png" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="comp/3.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/4.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/5.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/6.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/7.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/8.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/9.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/10.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/11.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/12.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/13.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/14.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/15.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/16.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/17.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/18.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/19.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/20.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/21.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/22.png" alt="New York">
            </div>
            <div class="carousel-item">
                <img src="comp/23.png" alt="New York">
            </div>
        </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" ></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon bg-dark"></span>
    </a>
        </div>
    </div>

    </section>
    <!-------------Footer----------------------->
    <footer>

        <?php echo $obj01->footer(); ?>
    </footer>
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>