<?php
session_start();
if ($_POST) {
    $phoneNumber = $_POST["phoneNumber"];
    $_SESSION["phoneNumber"] = $phoneNumber;
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
                        <th>bad</th>
                        <th>good</th>
                        <th>very good</th>
                        <th>excellent</th>
                    </tr>
                </head>
                <tbody>
                    <tr>
                        <td>Are you satisfied with the level of cleanliness?</td>
                        <td><input type="radio" name="first" value="bad" id=""></td>
                        <td><input type="radio" name="first" value="good" id=""></td>
                        <td><input type="radio" name="first" value="very good" id=""></td>
                        <td><input type="radio" name="first" value="excellent" id=""></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the service price?</td>
                        <td><input type="radio" name="second" value="bad" id=""></td>
                        <td><input type="radio" name="second" value="good" id=""></td>
                        <td><input type="radio" name="second" value="very good" id=""></td>
                        <td><input type="radio" name="second" value="excellent" id=""></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the nursing service?</td>
                        <td><input type="radio" name="third" value="bad" id=""></td>
                        <td><input type="radio" name="third" value="good" id=""></td>
                        <td><input type="radio" name="third" value="very good" id=""></td>
                        <td><input type="radio" name="third" value="excellent" id=""></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the ticket price?</td>
                        <td><input type="radio" name="fourth" value="bad" id=""></td>
                        <td><input type="radio" name="fourth" value="good" id=""></td>
                        <td><input type="radio" name="fourth" value="very good" id=""></td>
                        <td><input type="radio" name="fourth" value="excellent" id=""></td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the calmness in the hospital?</td>
                        <td><input type="radio" name="fifth" value="bad" id=""></td>
                        <td><input type="radio" name="fifth" value="good" id=""></td>
                        <td><input type="radio" name="fifth" value="very good" id=""></td>
                        <td><input type="radio" name="fifth" value="excellent" id=""></td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group w-100">
                <button class="btn btn-outline-dark rounded btn-sm mb-5 form-group"> Result </button>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>