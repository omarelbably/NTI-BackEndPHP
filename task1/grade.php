<?php

if ($_POST) {
    $Physics = $_POST["Physics"];
    $Chemistry = $_POST["Chemistry"];
    $Biology = $_POST["Biology"];
    $Mathematics = $_POST["Mathematics"];
    $Computer = $_POST["Computer"];
    $totalMarks =  $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
    $percentage =  $totalMarks / 2.5;
    if ($percentage >= 90) {
        $gradeValue = "A";
    } elseif ($percentage >= 80) {
        $gradeValue = "B";
    } elseif ($percentage >= 70) {
        $gradeValue = "C";
    } elseif ($percentage >= 60) {
        $gradeValue = "D";
    } elseif ($percentage >= 40) {
        $gradeValue = "E";
    } elseif ($percentage < 40) {
        $gradeValue = "F";
    }
    $marks =
        "<div class='alert alert-success'>
<strong> Your Marks </strong> are $totalMarks 
</div>";
    $message =
        "<div class='alert alert-success'>
<strong> Your Percentage </strong> is $percentage% 
</div>";
    $grade =
        "<div class='alert alert-success'>
<strong> Your Grade </strong> is $gradeValue 
</div>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Grade</title>
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
                <h4>Grade</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="Physics">Physics</label>
                        <input type="number" name="Physics" class="form-control" min="0" max="50" required>
                    </div>
                    <div class="form-group">
                        <label for="Chemistry">Chemistry</label>
                        <input type="number" name="Chemistry" class="form-control" min="0" max="50" required>
                    </div>
                    <div class="form-group">
                        <label for="Biology">Biology</label>
                        <input type="number" name="Biology" class="form-control" min="0" max="50" required>
                    </div>
                    <div class="form-group">
                        <label for="Mathematics">Mathematics</label>
                        <input type="number" name="Mathematics" class="form-control" min="0" max="50" required>
                    </div>
                    <div class="form-group">
                        <label for="Computer">Computer</label>
                        <input type="number" name="Computer" class="form-control" min="0" max="50" required>
                    </div>

                    <button class="btn btn-outline-dark rounded btn-sm mb-5"> My Marks </button>
                </form>
                <?php
                echo $marks ?? "";
                echo $message ?? "";
                echo $grade ?? "";
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