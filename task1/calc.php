<?php
$result = "";
if ($_POST) {

    $firstNumber = $_POST["FirstNumber"];
    $secondNumber = $_POST["SecondNumber"];
    $operator = $_POST["Operator"];





    switch ($_POST['Operator']) {
        case '+':
            $sum = $firstNumber + $secondNumber;
            $result = "<div class='alert alert-success'>
            the result is $sum
        </div>";
            break;
        case '-':
            $subtract = $firstNumber - $secondNumber;
            $result = "<div class='alert alert-success'>
            the result is $subtract
        </div>";
            break;
        case '*':
            $multiply = $firstNumber * $secondNumber;
            $result = "<div class='alert alert-success'>
            the result is $multiply
        </div>";
            break;
        case '/':
            $divide = $firstNumber / $secondNumber;
            $result = "<div class='alert alert-success'>
            the result is $divide
        </div>";
            break;
        case '%':
            $mal = $firstNumber % $secondNumber;
            $result = "<div class='alert alert-success'>
            the result is $mal
        </div>";
            break;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Calculator</title>
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
                <h4>Calculator</h4>
            </div>
            <div class="col-4 offset-4 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="FirstNumber">Enter a Number</label>
                        <input type="number" name="FirstNumber" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="SecondNumber">Enter a Number</label>
                        <input type="number" name="SecondNumber" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Operator">Choose an operator</label>
                        <select name="Operator" id="">
                            <option value=""></option>
                            <option value="/">/</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="%">%</option>

                        </select>
                    </div>
                    <button class="btn btn-outline-dark rounded btn-sm mb-5"> Calculate </button>
                </form>
                <?php
                echo $result ?? "";
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