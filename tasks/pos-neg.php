<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    if ($_POST['checkNumber'] >= 0) {
        # code...
        $massage =  "<div class='alert alert-success'>
        <ul>
            <li>This Number is possitive</li>
        </ul>
    </div>";
    }else {
        # code...
        $massage =  "<div class='alert alert-danger'>
        <ul>
            <li>This Number is nedative</li>
        </ul>
    </div>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>pos&&neg</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary font-weight-bold h3 mt-3">
                Pos & Neg
            </div>
            <div class="col-4 offset-4 mt-3">
                <form method="post">
                    <div class="form-group">
                        <input type="number" name="checkNumber" class="form-control" placeholder="Enter Your First Number">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-outline-primary">Check Number</button>
                    </div>
                    <?php 
                        if (isset($massage)) {
                            # code...
                            echo  $massage;
                        }
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