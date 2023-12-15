<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<?php
$nameerror = "";
$emailerror = "";
$phoneerror = "";
$weighterror = "";
$birthdayerror = "";
$gendererror = "";
$addresserror = "";


$name = "";
$email = "";
$phone = "";
$birthday = "";
$weight = "";
$gender = "";
$address = "";





if (isset($_POST["btnsubmit"])) {
    if ($_POST['username'] == null || $_POST['username'] == "" || empty($_POST['username']))  {
    $nameerror = "Please name Fail";
  }else {
    $name = $_POST['username'];
  }
}

  if (isset($_POST["btnsubmit"])) {
    if ($_POST['useremail'] == null || $_POST['useremail'] == "" || empty($_POST['useremail']))  {
    $emailerror = "Please email Fail";
  }else {
   $email = $_POST['useremail'];
  }
}

  if (isset($_POST["btnsubmit"])) {
    if ($_POST['userphone'] == null || $_POST['userphone'] == "" || empty($_POST['userphone']))  {
    $phoneerror = "Please phone Fail";
  }else {
   $phone =  $_POST['userphone'];
  }
}

  if (isset($_POST["btnsubmit"])) {
    if ($_POST['userweight'] == null || $_POST['userweight'] == "" || empty($_POST['userweight'])) { 
    // $birthdayerror = "Please birthday Fail";
  }else {
   $weight = $_POST['userweight'];
  }
  };

  if (isset($_POST["btnsubmit"])) {
    if ($_POST['userbirthday'] == null || $_POST['userbirthday'] == "" || empty($_POST['userbirthday']))  {
    $birthdayerror = "Please birthday Fail";
  }else {
    $birthday = $_POST['userbirthday'];
  }
  };

  if (isset($_POST["btnsubmi"])) {
    if ($_POST['usergender'] == null || $_POST['usergender'] == "" || empty($_POST['usergender']))  {
    $gendererror = "Please gender Fail";
  }else {
    $gender = $_POST['usergender'];
  }
  };

  if (isset($_POST["btnsubmit"])) {
    if ($_POST['useraddress'] == null || $_POST['useraddress'] == "" || empty($_POST['useraddress']))  {
    $addresserror = "Please phone Fail";
  }else {
   $address =  $_POST['useraddress'];
  }
  };
 
  if (isset($_POST["btnsubmit"])) {
    if ($name != "" && $email != "" && $phone != "" && $address != "") {
        // echo $name . "<br>";
        // echo $Email . "<br>";
        // echo $phone . "<br>";
        // echo $address . "<br>";
      }
  }
  



  $connection = mysqli_connect("localhost","root","","friend");

    if (!$connection) {
       echo "faild connect ...".mysqli_connection_error();
    }

    if (isset($_POST["btnsubmit"])) {
      $name = $_POST["username"];
      $email = $_POST['useremail'];
      $phone =  $_POST['userphone'];
      $weight = $_POST['userweight'];
      $birthday = $_POST['userbirthday'];
      $gender = $_POST['usergender'];
      $address =  $_POST['useraddress'];

        $sql ="INSERT INTO friend (name,email,phone,weight,birthday,gender,address) VALUES ('$name','$email','$phone','$weight','$birthday','$gender','$address')";



        if (mysqli_query($connection,$sql)) {
          echo "success";
        }else{
          echo "fail".mysquli_error();
        }
    }
    
    ?>


    <div class="container-fluid">
        <div class="">
            <div class="row ">
                <div class="col-md-4 offset-4 bg-white ">
                    <form method="POST" class="my-5">
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" name="username">
                            <small class="text-danger"><?php echo $nameerror; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="useremail">
                            <small class="text-danger"><?php echo $emailerror; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" name="userphone">
                            <small class="text-danger"><?php echo $phoneerror; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Weight</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Weight" name="userweight">
                            <small class="text-danger"><?php echo $weighterror; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Your Birthday" name="userbirthday">
                            <small class="text-danger"><?php echo $birthdayerror; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Gender" name="usergender">
                            <small class="text-danger"><?php echo $gendererror; ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="address" class="form-control" id="exampleFormControlInput1" placeholder="Your Address" name="useraddress">
                            <small class="text-danger"><?php echo $addresserror; ?></small>
                        </div>
                        <div class="float-end mx-3 mb-5">
                        <input type="submit" class="btn btn-warning" name="btnsubmit"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>