<?php
session_start();
if ($_POST) {
    $first = $_POST["first"];
    $second = $_POST["second"];
    $third = $_POST["third"];
    $fourth = $_POST["fourth"];
    $fifth = $_POST["fifth"];
    $phoneNumber  =  $_SESSION["phoneNumber"];
    if ($first == "bad") {
        $firstvalue = 0;
    } elseif ($first == "good") {
        $firstvalue = 3;
    } elseif ($first == "very good") {
        $firstvalue = 5;
    } elseif ($first == "excellent") {
        $firstvalue = 10;
    }
    if ($second == "bad") {
        $secondvalue = 0;
    } elseif ($second == "good") {
        $secondvalue = 3;
    } elseif ($second == "very good") {
        $secondvalue = 5;
    } elseif ($second == "excellent") {
        $secondvalue = 10;
    }
    if ($third == "bad") {
        $thirdvalue = 0;
    } elseif ($third == "good") {
        $thirdvalue = 3;
    } elseif ($third == "very good") {
        $thirdvalue = 5;
    } elseif ($third == "excellent") {
        $thirdvalue = 10;
    }
    if ($fourth == "bad") {
        $fourthvalue = 0;
    } elseif ($fourth == "good") {
        $fourthvalue = 3;
    } elseif ($fourth == "very good") {
        $fourthvalue = 5;
    } elseif ($fourth == "excellent") {
        $fourthvalue = 10;
    }
    if ($fifth == "bad") {
        $fifthvalue = 0;
    } elseif ($fifth == "good") {
        $fifthvalue = 3;
    } elseif ($fifth == "very good") {
        $fifthvalue = 5;
    } elseif ($fifth == "excellent") {
        $fifthvalue = 10;
    }
    $total = $firstvalue + $secondvalue + $thirdvalue + $fourthvalue + $fifthvalue;
    if ($total < 25) {
        $totalvalue = "<h4> We wil call you later on this phone $phoneNumber </h4>";
        $totalReview = "BAD";
    } else {
        $totalvalue = "<h4> THANKS </h4>";
        $totalReview = "GOOD";
    }
    // $_SESSION["first"] = $first;
    // $_SESSION["second"] = $second;
    // $_SESSION["third"] = $third;
    // $_SESSION["fourth"] = $fourth;
    // $_SESSION["fifth"] = $fifth;
    // $_SESSION["totalvalue"] = $totalvalue;
    // $_SESSION["totalreview"] = $totalReview;

}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-20">
        <form action="Result.php" method="POST">
            <table class='table table-bordered align-middle table-striped'>

                <head class="table-primary">
                    <tr class="table-primary">
                        <th>Qestions?</th>
                        <th>Reviews</th>
                    </tr>
                </head>
                <tbody>
                    <tr>
                        <td>Are you satisfied with the level of cleanliness?</td>
                        <td><?php echo $first ?? "";  ?></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the service price?</td>
                        <td><?php echo $second ?? "";   ?></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the nursing service?</td>
                        <td><?php echo  $third ?? "";   ?></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the ticket price?</td>
                        <td><?php echo $fourth ?? "";   ?></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the calmness in the hospital?</td>
                        <td><?php echo $fifth ?? ""; ?></td>
                    </tr>
                </tbody>
                <footer>
                    <tr>
                        <td>TOTAL REVIEW</td>
                        <td><?php echo $totalReview ?? "";    ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"> <?php echo $totalvalue ?? "";    ?> </td>
                    </tr>
                </footer>
            </table>

        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>