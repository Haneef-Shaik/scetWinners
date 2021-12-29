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
<body style="min-height:100vh;background:#E0E5EC">
    <?php echo $obj01->header(2);
    include 'config.php'; 
    session_start(); 
    $_SESSION['year']=2018;
    $_SESSION['group']='CSE';
    $_SESSION['SEM']=2;
    ?>
    <div class="container-fluid text-center" style="min-height:80vh;" >
        <div class="row">
            <div class="col-12 fmg" style="cursor:pointer; font-size:2rem; ">
                <div class="groups d-flex justify-content-center flex-wrap" >
                    <div class="dropdown col p-0 m-0" style="width:100%;">
                        <button class="btn col dropdown-toggle myOwnBtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded=" false" >
                            <span style="font-size:1.6rem;" id="shwYear"><?php echo $_SESSION["year"]?></span>
                        </button>
                        <div class="dropdown-menu" style="background:transparent;" aria-labelledby="dropdownMenuButton" >
                                <div   class="dropdown-item Y text-center mt-1 myOwnBtn"  data-year=2018 >2018</div>
                                <div   class="dropdown-item Y text-center mt-1 myOwnBtn"  data-year=2019 >2019</div>
                                <div   class="dropdown-item Y text-center mt-1 myOwnBtn"  data-year=2020 >2020</div>
                                <div   class="dropdown-item Y text-center mt-1 myOwnBtn"  data-year=2021 >2021</div>
                        </div>
                    </div>
                    <span  class="groupName CSE col myOwnBtn" style="background-color:rgba(150,150,200,.5);box-shadow:inset 5px 5px 10px #000 , inset -5px -5px 10px #AEC4D5;color:#fff;" data-group="CSE"> CSE </span>
                    <span  class="groupName col myOwnBtn" data-group="ECE"> ECE </span>
                    <span  class="groupName col myOwnBtn" data-group="IT" > IT </span>
                    <span  class="groupName col myOwnBtn" data-group="CE" > CE </span>
                    <span  class="groupName col myOwnBtn" data-group="ME" > MECH </span>
                    <span  class="groupName col myOwnBtn d-none AB" data-group="AI" > AI&ML </span>
                    <span  class="groupName col myOwnBtn d-none AB" data-group="RB" > ROBOTICS </span>

                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-12">
                    <ul class =" sem d-flex justify-content-around flex-wrap mt-3" style="cursor:pointer;">
                        <div class ="col  border-left myOwnBtn semester" data-sem=1 style="font-size:1.6rem; font-weight:bold; " >1</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=2 style="font-size:1.6rem; font-weight:bold;  background-color:rgba(150,150,200,.5);box-shadow:inset 5px 5px 10px #000 , inset -5px -5px 10px #AEC4D5;color:#fff;" >2</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=3 style="font-size:1.6rem; font-weight:bold; " >3</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=4 style="font-size:1.6rem; font-weight:bold; " >4</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=5 style="font-size:1.6rem; font-weight:bold; " >5</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=6 style="font-size:1.6rem; font-weight:bold; " >6</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=7 style="font-size:1.6rem; font-weight:bold; " >7</div>
                        <div class ="col  border-left myOwnBtn semester" data-sem=8 style="font-size:1.6rem; font-weight:bold; " >8</div>
                    </ul>
            </div>
            </div>
        <div class="row">
            <div class=" ppdata col d-flex justify-content-around flex-wrap" style="cursor:pointer;">
                <?php 
                $sql = "SELECT * FROM circulum where ayear=2018 and sem=2 and  branch = 'CSE' order by (sgpa) desc , reg  ";
                $res=mysqli_query($con,$sql);
                if(mysqli_num_rows($res)>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        include 'card.php' ;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script >
        $(document).ready(function(){
            Cookies.set('acadamicYear', 2018);
            Cookies.set('branch', 'CSE');

        // Selecting Year
        $('.Y').click(function(){
            var group ='<?php echo $_SESSION["group"]?>';
            var year =  $(this).data('year');
            var sem = 2;
            Cookies.set('acadamicYear', year);
            year = Cookies.get('acadamicYear');
            console.log(year)
            $.ajax({
                    url:'ajax01.php',
                    type:'POST',
                    data:{'y':year, 'g' : group,'s':sem },
                    success:function(data)
                    {
                        $('.ppdata').html(data);
                        $('#shwYear').html(year);

                        if(year>2019)
                        {
                            $('.AB').removeClass('d-none');
                        }
                        else
                        $('.AB').addClass('d-none');

                        $('.groupName').css("background-color","#f7f5ec");
                        $('.groupName').css("box-shadow","inset 5px 5px 10px  #A3B1C6");
                        $('.groupName').css("color","black");

                        $('.CSE').css("background-color","rgba(150,150,200,.5)");
                        $('.CSE').css("color","white");
                        $('.CSE').css("box-shadow","inset 5px 5px 10px #000 , inset -5px -5px 10px #AEC4D5   ");
                    }
                    });
        });

        $('.groupName').click(function(){
            var group = $(this).data('group');
            var year = Cookies.get('acadamicYear');
            var sem = <?php echo $_SESSION["SEM"]; ?>;
            var gg = $(this);
            
            Cookies.set('branch',group)
            group = Cookies.get('branch');

            $.ajax({
                    url:'ajax01.php',
                    type:'POST',
                    data:{'y':year, 'g' : group,'s':sem },
                    success:function(data)
                    {
                        $('.ppdata').html(data);
                        $('.groupName').css("background-color","#f7f5ec");
                        $('.groupName').css("box-shadow","inset 5px 5px 10px  #A3B1C6");
                        $('.groupName').css("color","black");

                        gg.css("background-color","rgba(150,150,200,.5)");
                        gg.css("color","white");
                        gg.css("box-shadow","inset 5px 5px 10px #000 , inset -5px -5px 10px #AEC4D5   ");
                    }
                });
            });



            // Selecting Sem

        $('.semester').click(function(){
            var group = Cookies.get('branch');
            var sem   =  $(this).data('sem');
            var year = Cookies.get('acadamicYear');
            var gg    = $(this);
            $.ajax({
                    url:'ajax01.php',
                    type:'POST',
                    data:{'y':year, 'g' : group,'s':sem },
                    success:function(data)
                    {
                        $('.ppdata').html(data);

                        $('.semester').css("background-color","#f7f5ec");
                        $('.semester').css("box-shadow","inset 5px 5px 10px  #A3B1C6");
                        $('.semester').css("color","black");

                        gg.css("background-color","rgba(150,150,200,.5)");
                        gg.css("color","white");
                        gg.css("box-shadow","inset 5px 5px 10px #000 , inset -5px -5px 10px #AEC4D5   ");
                    }
                    });
        });
    });
    </script>


    <?php echo $obj01->footer(); ?>
        <script src="js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>