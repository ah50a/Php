<?php
$title = 'Review';
include_once "layout/header.php";

if ($_POST) {
    # code...

    $errors = [];
    if (empty($_POST['firstquestion'])) {
        # code...
        $errors['select']['firstquestion'] = "<div class='text-danger font-weight-bold'>*You Have To Select Box From Line 1</div>";
    }
    ////////////////////////////////////////////////////////
    if (empty($_POST['secondquestion'])) {
        # code...
        $errors['select']['secondquestion'] = "<div class='text-danger font-weight-bold'>*You Have To Select Box From Line2</div>";
    }
    ////////////////////////////////////////////////////////
    if (empty($_POST['thirdquestion'])) {
        # code...
        $errors['select']['thirdquestion'] = "<div class='text-danger font-weight-bold'>*You Have To Select Box From Line3</div>";
    }
    /////////////////////////////////////////////////////////
    if (empty($_POST['fourthquestion'])) {
        # code...
        $errors['select']['fourthquestion'] = "<div class='text-danger font-weight-bold'>*You Have To Select Box From Line4</div>";
    }
    /////////////////////////////////////////////////////////
    if (empty($_POST['fifthquestion'])) {
        # code...
        $errors['select']['fifthquestion'] = "<div class='text-danger font-weight-bold'>*You Have To Select Box From Line5</div>";
    }
    //////////////////
    if (empty($errors)) {
        # code...
        // print_r($_POST);
        $selectedReview=[
            'bad'=>0 ,
            'good'=>3,
            'very good'=>5,
            'Excellent'=>10
        ];
    }
}

// 'select' => [
//     'firstquestion1' => '',
//     'secondquestion1' => '',
//     'thirdquestion1' => '',
//     'fourthquestion1' => '',
//     'fifthquestion1' => '',
// ]
?>

<form method="post">
    <div class="form-group">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Question</th>
                    <th scope="col">Bad</th>
                    <th scope="col">Good</th>
                    <th scope="col">Very Good</th>
                    <th scope="col">Excellent</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Are You Satisfied With The Level Of Cleanliness?</th>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="firstquestion" id="inlineRadio1" value="">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="firstquestion" id="inlineRadio1" value="Good">
                        </div>
                    </td>
                    <td class="">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="firstquestion" id="inlineRadio1" value="Very Good">
                        </div>
                    </td>
                    <td class="">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="firstquestion" id="inlineRadio1" value="Excellent">
                        </div>
                    </td>
                </tr>
                <!-- ---------- -->
                <tr>
                    <th scope="row">Are You Satisfied With The Service Price?</th>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="secondquestion" id="inlineRadio1" value="Bad">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="secondquestion" id="inlineRadio1" value="Good">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="secondquestion" id="inlineRadio1" value="Very Good">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="secondquestion" id="inlineRadio1" value="Excellent">
                        </div>
                    </td>
                </tr>
                <!-- --------- -->
                <tr>
                    <th scope="row">Are You Satisfied With The Nursing Service?</th>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="thirdquestion" id="inlineRadio1" value="Bad">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="thirdquestion" id="inlineRadio1" value="Good">
                        </div>
                    </td>
                    <td class="">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="thirdquestion" id="inlineRadio1" value="Very Good">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="thirdquestion" id="inlineRadio1" value="Excellent">
                        </div>
                    </td>
                </tr>
                <!-- ------------ -->
                <tr>
                    <th scope="row">Are you satisfied with the level of the doctor?</th>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fourthquestion" id="inlineRadio1" value="Bad">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fourthquestion" id="inlineRadio1" value="Good">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fourthquestion" id="inlineRadio1" value="Very Good">
                        </div>
                    </td>
                    <td class="">
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fourthquestion" id="inlineRadio1" value="Excellent">
                        </div>
                    </td>
                </tr>
                <!-- ------------- -->
                <tr>
                    <th scope="row">Are you satisfied with the calmness in the hospital?</th>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fifthquestion" id="inlineRadio1" value="Bad">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fifthquestion" id="inlineRadio1" value="Good">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input" type="radio" name="fifthquestion" id="inlineRadio1" value="Very Good">
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="radio" name="fifthquestion" id="inlineRadio1" value="Excellent">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        if (!empty($errors['select'])) {
            # code...
            foreach ($errors['select'] as  $error) {
                # code...
                echo $error;
            }
        }
        ?>

    </div>
    <button type="submit" class="btn btn-primary mb-2"><?= $title ?></button>
</form>

<?php
include_once "layout/footer.php";
?>