<?php
$title = 'Login';
include_once "layout/header.php";
include_once "midlewares/guest.php";
include_once "layout/navbar.php";
$users = [
    [
        'id' => 1,
        'name' => 'Ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => 123456,
        'gender' => 'm'
    ],
    [
        'id' => 2,
        'name' => 'Mohamed',
        'email' => 'Mohamed@gmail.com',
        'password' => 123456,
        'gender' => 'm'
    ],
    [
        'id' => 3,
        'name' => 'fatma',
        'email' => 'fatma@gmail.com',
        'password' => 123456,
        'gender' => 'f'
    ]
];

if ($_POST) {
    # code...
    $erorr =[];
    if (empty($_POST['email'])) {
        # code...
        $erorr['Email-requier'] =  "<div class='text-danger font-weight-bold'>*Email Is Requierd</div>";
    }

    if (empty($_POST['password'])) {
        # code...
        $erorr['password-requier'] =    "<div class='text-danger font-weight-bold'>*Password Is Requierd</div>";

    }

    if (empty($erorr)) {
        # code...
       foreach ($users as $index => $user) {
           # code...
           if ($_POST['email'] == $user['email'] && ($_POST['password'] == $user['password'])) {
            # code...
            $_SESSION['user'] = $user;
            header('location:index.php');
        }
         $erorr['Wrong-data'] =  "<div class='text-danger font-weight-bold'>*Email Or Password Is Wrong</div>";
       }
    }
}


?>

<div class="contianer">
    <div class="row mt-5">
        <div class="col-12 text-center h1">
            <?= $title ?>
        </div>
        <div class="offset-4 col-4">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="email" value="<?= (isset($_POST['email']) ? $_POST['email']: '') ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    <?php 
                    if (isset($erorr['Email-requier'])) {
                        # code...
                        echo $erorr['Email-requier'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                <?php 
                if (isset($erorr['password-requier'])) {
                    # code...
                    echo $erorr['password-requier'];
                }
                if (isset($erorr['Wrong-data'])) {
                    # code...
                    echo $erorr['Wrong-data'];
                }
                ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark rounded"> <?= $title ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once "layout/footer.php";
?>



      
  