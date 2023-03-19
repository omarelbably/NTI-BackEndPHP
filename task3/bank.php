<?php

if ($_POST) {
    $username = $_POST["username"];
    $loanAmount = $_POST["loanAmount"];
    $loanYears = $_POST["loanYears"];


    if ($loanYears < 3) {
        $interest = 0.1;
    } else {
        $interest = 0.15;
    }
    $interestRatio = $interest * $loanAmount;
    // $interestRate = $interestRatio * $loanYears;
    $loanAfterinterest = $loanAmount + $interestRatio;
    $monthly = $loanYears * 12;
    $monthlyrate = $loanAfterinterest / $monthly;
    $totalLoan =
        "
        <table class='table table-bordered align-middle table-primary'>
        <head>
            <th>User Name</th>
            <th>Interest Rate</th>
            <th>Loan after interest</th>
            <th>Monthly</th>
        </head>
        <tbody>
            <tr class='table-secondary' >
                <td class='align-middle'>$username</td>
                <td class='align-middle'>$interestRatio</td>
                <td class='align-middle'>$loanAfterinterest</td>
                <td class='align-middle'>$monthlyrate</td>
            </tr>
        </tbody>
    </table>
    ";
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
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
                <h1 style="color: blue">Bank Loan</h1>
            </div>
            <div class="col-6 offset-3 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="username<">User Name</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="loanAmount<">Loan Amount</label>
                        <input type="number" name="loanAmount" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="loanYears">Loan Years</label>
                        <input type="number" name="loanYears" class="form-control" required>
                    </div>

                    <button class="btn btn-outline-dark rounded btn-sm mb-5"> Calculate </button>
                </form>
                <?php
                echo $totalLoan ?? "";
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