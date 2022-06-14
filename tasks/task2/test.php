<?php
session_start();
// echo $_SESSION['phone']  ;die;
$arrayQuestions = [
   'q1'=> 'Are you satisfied with hte level of cleanless?',
   'q2'=> ' Are you satisfied with service prices?',
   'q3'=> 'Are you satisfied with the nursing services?',
   'q4'=> 'Are you satisfied with the level of the doctor?',
   'q5'=>  'Are you satisfied with the calmness in the hospital?'
];
$_SESSION['arrayQues']=$arrayQuestions;
// print_r($_SESSION['arrayQues']);die;
 $selectedReview=[
     'bad'=>0 ,
     'good'=>3,
     'very good'=>5,
     'Excellent'=>10
 ];
 if($_POST){

    $_SESSION['q1']=$_POST['q1'];
    $_SESSION['q2']=$_POST['q2'];
    $_SESSION['q3']=$_POST['q3'];
    $_SESSION['q4']=$_POST['q4'];
    $_SESSION['q5']=$_POST['q5'];
  
   
 }



 
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-12 mt-5 text-center text-primary font-weight-bold   pt-5">
            <form method="POST" action="Result.php">
                <table class="table table-primary table-striped ">

                    <thead>
                        <tr>
                            <th scope="col">questions?</th>
                            <th scope="col">bad</th>
                            <th scope="col">good</th>
                            <th scope="col">very good</th>
                            <th scope="col">Excellent</th>
                        </tr>
                    </thead>

                
                        <tbody>
                         
                            <?php 
                             foreach($arrayQuestions as $key=> $question){?>
                                 <tr>
                                     <td><?=$question?></td>
                                     <?php 
                                     foreach($selectedReview as $value){ ?>

                                         <td>
                                         <div class="form-check">
                                        <input class="form-check-input" type="radio" name="<?= $key?>" value="<?=$value?>">
                                    </div> 
                                        </td>
                                    <?php }
                                     
                                     ?>



                                 </tr>

                            <?php }   ?>
                        </tbody>


                                   

                </table>
                <button type="submit" name="btn" class=" btn btn-primary col-3  text-white text-center mt-3">submit</button>
                </form>

            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>