<?php

if ($_POST) {

    $x = $_POST["inputNumber"];
    if ($x >= 0) {
        $number =
            "<div class='alert alert-success'>
        <strong> The Number </strong> $x is Positive 
        </div>";
    } elseif ($x < 0) {
        $number =
            "<div class='alert alert-success'>
        <strong> The Number </strong> $x is Negative 
        </div>";
    } else {
        $number = "<div class='alert alert-danger'>
                        enter a number
                    </div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Negative and Positive</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center text-dark">
                <h4>Negative and Positive</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="inputNumber">Enter a Number</label>
                        <input type="number" name="inputNumber" class="form-control" required>
                    </div>
                    <button class="btn btn-outline-dark rounded btn-sm mb-5"> Check </button>
                </form>
                <?php
                echo $number ?? "";
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>