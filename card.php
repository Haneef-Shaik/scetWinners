<div class="our-team" style="position:relative;width:200px;" >
    <div class="picture">
        <img class="img-fluid" src="<?php echo 'T_Img/'.$row['ayear'].'/'.$row['reg'].'.jpg' ?>">
    </div>
    <div class="team-content d-flex flex-column justify-content-around align-items-center  " style="position:relative;height:45%;" >
        <h3 class="name"><?php echo $row['name']; ?></h3>
        <h2 class="title" style="font-size:2.5rem;"><?php echo $row['sgpa']; ?></h2>
    </div>
</div>
