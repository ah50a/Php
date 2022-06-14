<?php
$title = 'Login';
include_once "layout/header.php";
include_once "midleware/guest.php";
include_once "layout/navbar.php";
$users = [
    [
        'id' => 5,
        'name' => 'Ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => 12345,
        'gender' => 'm',
        'image' => '1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'gana',
        'email' => 'gana@gmail.com',
        'password' => 12345,
        'gender' => 'f',
        'image' => '2.jpg'
    ],
    [
        'id' => 3,
        'name' => 'galal',
        'email' => 'galal@gmail.com',
        'password' => 12345,
        'gender' => 'm',
        'image' => '3.jpg'
    ]
];
if ($_POST) {
    # code...
    $erorr = [];
    if (empty($_POST['email'])) {
        # code...
        $erorr['email-requier'] = "<div class='text-danger font-weight-bold'>*Email Is Requierd</div>";
    }
    if (empty($_POST['password'])) {
        # code...
        $erorr['password-requier'] = "<div class='text-danger font-weight-bold'>*Password Is Requierd</div>";
    }


    if (empty($erorr)) {
        foreach ($users as $index => $user) {
            # code...
            
            if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
                # code...
                $_SESSION['user'] = $user;
                header('location:index.php');
            }
            $erorr['wrong-data'] = "<div class='text-danger font-weight-bold'>*Email Or Password Is Wrong</div>";
        }
    }
}
?>

<div class="contianer">
    <div class="row">
        <div class="col-12 text-center h1">
            <?= $title ?>
        </div>
        <div class="col-4 offset-4">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                    <?php
                    if (isset($erorr['email-requier'])) {
                        # code...
                        echo $erorr['email-requier'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                    <?php
                    if (isset($erorr['password-requier'])) {
                        # code...
                        echo $erorr['password-requier'];
                    }
                    if (isset($erorr['wrong-data'])) {
                        # code...
                        echo $erorr['wrong-data'];
                    }
                    ?>

                </div>
                <div class="form-group">
                    <button class="btn btn-outline-dark rounded"><?= $title ?></button>
                </div>
            </form>


        </div>
    </div>
</div>


<?php
include_once "layout/footer.php";
?>