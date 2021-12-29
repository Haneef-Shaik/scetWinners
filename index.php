<?php 
    include_once 'Myclass.php';
    $obj01=new Myclass();
    ?> 
<!DOCTYPE html>
<html>

<head>
    <?php echo $obj01->head(); ?>
</head>

<body style="background-color: #E0E5EC;">
<?php 
;
echo $obj01->Header(1);
echo $obj01->banner() ;

?>

<!---header----->

    
    <div class="container-fluid card p-0" style="background-color: #E0E5EC;"> 
        <div class="card-header">
            <h5 class=" d-block text-center"><span class="SW">SCET WINNERS</span></h5>
        </div>
        <div class="card-text container-fluid">
            <div class="row justify-content-around m-0" style="background-color: #E0E5EC" >

                <!-------------------------------------------9-->
                <div class="card card-fst">
                    <img src="https://edutared.com/wp-content/uploads/2019/07/529-plan-640x300.jpg" alt="" class="card-img-top" height=170>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center flex-wrap">
                        <h4 class="card-title text-center" >Circulum</h4>
                        
                        <div class="card-footer text-center my-card-footer" style="width:100%;"><a href="circulum.php">CHECk</a></div>

                    </div>
                </div>
                <!-------------------------------------------9-->

                <div class="card card-fst">
                <img src="http://www.familytimes.co.nz/wp-content/uploads/2016/07/competitions.jpg" alt="" class="card-img-top" height=170>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center flex-wrap">
                        <h4 class="card-title text-center" >Competitions</h4>

                        <div class="card-footer text-center my-card-footer" style="width:100%;"><a href="Competitions.php">CHECk</a></div>
                    </div>
                </div>

                <!-------------------------------------------9-->

                <div class="card card-fst">
                <img src="https://ask.careers/wp-content/uploads/2018/02/Education-loan.jpg" alt="" class="card-img-top" height=170>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center flex-wrap">
                        <h4 class="card-title text-center">Placement</h4>
                        
                        <div class="card-footer text-center  my-card-footer" style="width:100%;"><a href="Campus/campus.php" >CHECk</a></div>
                    </div>
                </div>
                <!-------------------------------------------9-->

                <div class="card card-fst">                    
                    <img src="https://udaipurtimes.com/static/c1e/client/74416/migrated/abf66642042720056af00ab2bf7ba884.jpg" alt="" class="card-img-top" height=170>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center flex-wrap ">
                        <h2 class="card-title text-center ">Alumini </h2>
                        <div class="card-footer text-center my-card-footer" style="width:100%;"><a href="#" >CHECk</a></div>
                    </div>
                </div>
                <!--------------------------------------------->

                
                
            </div>
        </div>
        
        <!----------------------Footer----------------------->

        <?php echo $obj01->footer();?>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>