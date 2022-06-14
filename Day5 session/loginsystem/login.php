<?php
$title = 'Login';
include_once "layout/head.php";
include_once "midlewares/guest.php";
include_once "layout/navbar.php";

$users = [
    [
        'id'=> 1,
        'name' => 'ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => 123456,
        'gender' => 'm',
        'image' => '1.jpg'
    ],
    [
        'id'=> 2,
        'name' => 'fatma',
        'email' => 'fatma@gmail.com',
        'password' => 123456,
        'gender' => 'f',
        'image' => '2.jpg'
    ],
    [
        'id'=> 3,
        'name' => 'mohamed',
        'email' => 'mohamed@gmail.com',
        'password' => 123456,
        'gender' => 'm',
        'image' => '3.jpg'
    ]
];



if ($_POST) {
    # code...
    $erorrs = [];
    if (empty($_POST['email'])) {
        # code...
        $erorrs['Email-requierd'] = "<div class='text-danger font-weight-bold'>*Email Is Requierd</div>";
    }

    if (empty($_POST['password'])) {
        # code...
        $erorrs['Password-requierd'] = "<div class='text-danger font-weight-bold'>*PasswWord Is Requierd</div>";
    }
    if(empty($erorrs)){
        foreach ($users as $index => $user) {
            # code...
            if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
                # code...
                $_SESSION['user'] = $user;
                header('location:index1.php');
            }
        }
        $erorrs['Wrong-data'] ="<div class='text-danger font-weight-bold'>*Email Or Password Is Wrong</div>";
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
                    <input type="text" name="email" id="email" value="<?= (isset($_POST['email']) ? $_POST['email'] : '') ?>" class="form-control" placeholder="" aria-describedby="helpId">
                <?php 
                    if (isset($erorrs['Email-requierd'])) {
                        # code...
                        echo $erorrs['Email-requierd'];
                    }
                ?>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                    <?php 
                    if (isset($erorrs['Password-requierd'])) {
                        # code...
                        echo $erorrs['Password-requierd'];
                    }

                    if (isset($erorrs['Wrong-data'])) {
                        # code...
                        echo $erorrs['Wrong-data'];
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