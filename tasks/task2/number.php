<?php
$title = "Login";
include_once "layout/header.php";

if ($_POST) {
    # code...
    $errors =[];
    if (empty($_POST['number'])) {
        # code...
        $errors['number-requier'] = "<div class='text-danger font-weight-bold'>*Number Is Requierd</div>";
    }
    
    if (empty($errors)) {
        # code...
        header('location:review.php');
    }
}
?>

<div class="contianer">
    <div class="row">
        <div class="col-12 text-center h1">
        </div>
        <div class="col-4 offset-4 mt-5 pt-5">
            <form method="post">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2">Enter Your Number</label>
                    <input type="number" name="number" class="form-control" id="inputPassword2" placeholder="Number">
                    <?php 
                    if (isset($errors['number-requier'])) {
                        # code...
                        echo $errors['number-requier'] ;
                    }
                    ?>
                </div>
                <button type="submit" class="btn btn-primary mb-2 mx-3"><?= $title ?></button>
            </form>
        </div>
    </div>
</div>

<?php
include_once "layout/footer.php";
?>