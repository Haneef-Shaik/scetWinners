<?php
include_once 'Myclass.php';
$obj01 = new Myclass();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $obj01->head(); ?>
    <style>
    .myOwnBtn {
        background-color: #f7f5ec;
        box-shadow: inset 5px 5px 10px #A3B1C6;
        border-radius: 25px;
    }

    .Y {
        font-weight: bold;
    }

    .Y:hover {
        color: #fff;
        background-color: rgba(0, 150, 200, 1);
        box-shadow: inset -5px -5px 10px #000;
    }
    </style>
</head>

<body style="min-height:100vh;background:#E0E5EC; ">
    <?php
    echo $obj01->header(3);
    echo $obj01->banner();
    // --------------------------------------------------------------------------------


    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $nPage = 50;
    $startFrom = ($page - 1) * 50;

    $sql01 = "SELECT * FROM jobs  ";
    $result = mysqli_query($con, $sql01);
    $totalRec = mysqli_num_rows($result);

    $totalPages = ceil($totalRec / $nPage);
    ?>
    <div class="container-fluid text-center my-4">
        <div class="row px-5">
            <?php
            for ($i = 1; $i < $totalPages; $i++) {
                if ($i == $page)
                    echo '<a class="col myOwnBtn mx-1" href="placements.php?page=' . $i . '" style="background-color:black;color:white;font-size:1.8rem;box-shadow:none;">' . $i . '</a>';
                else
                    echo '<a class="col myOwnBtn mx-1" href="placements.php?page=' . $i . '" style="font-size:1.8rem;">' . $i . '</a>';
            }
            ?>
        </div>
    </div>

    <?php
    $sql = "SELECT * FROM `jobs` WHERE Year = 2021 ORDER by company,reg limit $startFrom,$nPage";
    $result = mysqli_query($con, $sql);
    if ($result) {
    ?>
    <div class="student-profiles d-flex justify-content-around flex-wrap">

        <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
        <div class="our-team px-2" style="min-width:300px;">
            <div class="picture">
                <!-- <img class="img-fluid" src="<?php // echo 'T_Img/'.$row['ayear'].'/'.$row['reg'].'.jpg' 
                                                            ?>"> -->
                <img class="img-fluid" src="./18A21A04A5.jpg">
            </div>
            <div class="team-content d-flex flex-column justify-content-between align-items-center  mx-2"
                style="position:relative;height:45%;">
                <span class="name" style="font-size:2rem;"><?php echo $row['name']; ?></span>
                <hr style="background-color:red;width:90%;">
                <h3 class="title" style="font-size:2.5rem;"><?php echo $row['company']; ?></h3>
            </div>
        </div>
        <?php
            }
            ?>
    </div>
    <?php
    }
    $sql01 = "SELECT * FROM jobs ";
    $result = mysqli_query($con, $sql01);
    $totalRec = mysqli_num_rows($result);

    $totalPages = ceil($totalRec / $nPage);
    ?>
    <div class="container text-center">
        <div class="row my-2">
            <?php
            for ($i = 1; $i < $totalPages; $i++) {
                if ($i == $page)
                    echo '<a class="col myOwnBtn mx-1" href="placements.php?page=' . $i . '" style="background-color:black;color:white;font-size:1.8rem;box-shadow:none;">' . $i . '</a>';
                else
                    echo '<a class="col myOwnBtn mx-1" href="placements.php?page=' . $i . '" style="font-size:1.8rem;">' . $i . '</a>';
            }
            ?>
        </div>
    </div>
    // -------------------------------------------------------------------------------

    <?php echo $obj01->footer(); ?>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>