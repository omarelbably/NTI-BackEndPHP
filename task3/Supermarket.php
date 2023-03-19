<?php

if ($_POST) {
    $username = $_POST["username"];
    $city = $_POST["city"];
    $numberofvarieties = $_POST["numberofvarieties"];


    $input = " <table>
  <head>
      <th>Product name</th>
      <th>Price</th>
      <th>Quantities</th>
</head>
<tbody>
    <?php foreach($numberofvarieties){ ?>
    <tr>
    <td><input type='text' name='productName' class='form-control' required></td>
    <td><input type='number' name='price' class='form-control' required></td>
    <td><input type='number' name='quantities' class='form-control' required></td>
    </tr>
    <?php  } ?>
</tbody>
</table>
<button class='btn btn-outline-dark rounded btn-sm mb-5'> Receipt </button>";
}
?>







<!doctype html>
<html lang="en">

<head>
    <title>Supermarket</title>
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
                <h1 style="color: red">Supermarket</h1>
            </div>
            <div class="col-6 offset-3 mt-5">
                <form method="post">
                    <div class="form-group">
                        <label for="username<">
                            <h4>Username</h4>
                        </label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="city<">
                            <h4>City</h4>
                        </label>
                        <select name="city" id="">
                            <option value="cairo">Cairo</option>
                            <option value="giza">Giza</option>
                            <option value="alex">Alex</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numberofvarieties">
                            <h4>Number of varieties</h4>
                        </label>
                        <input type="number" name="numberofvarieties" class="form-control" required>
                    </div>

                    <button class="btn btn-outline-dark rounded btn-sm mb-5"> Enter products </button>

                    <?php
                    echo $input ?? "";
                    ?>
                </form>

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