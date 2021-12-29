<?php 
include 'config.php';
session_start();
    $year  = $_POST['y'];
    $sem   = $_POST['s'];
    $group = $_POST['g'];
    $x='';
    $sql = "SELECT * FROM circulum where ayear=$year and sem=$sem and  branch = '$group' order by (sgpa) desc , reg  ";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            $name=$row['name'];
            $sgpa=$row['sgpa'];
            $x = include 'card.php';
        }
        echo $x;
    }
    else
    {
        echo "No data ";
    }
?>