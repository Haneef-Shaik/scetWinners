<?php 
    include_once 'Myclass.php';
    $obj01=new Myclass();
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $obj01->head(); ?>
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
        echo $obj01->header(3);
        echo $obj01->banner();

    ?>
    
    <?php echo $obj01->footer(); ?>
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>