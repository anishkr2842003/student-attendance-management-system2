<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('location: login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="icon" type="image/png" href="images/logo.png">
  <title>Add New Student</title>
</head>

<body style="background-image: url('images/body-bg.jpg');">


  <div style="width: 500px; margin: 80px auto;">
    <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form-control">
      <h3 style="text-align: center;">Add student</h3> <br> <br>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Enter student's name" name="name" required autofocus>
        <label for="floatingInput">Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Father's name" name="fname" required autofocus>
        <label for="floatingInput">Father's name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Mother's name" name="mname" required autofocus>
        <label for="floatingInput">Mother's name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Enter Student's Mobile no" name="mobile" required maxlength="10" autofocus>
        <label for="floatingInput">Mobile no</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Enter student's Email id" name="email">
        <label for="floatingInput">Email id</label>
      </div>

      <button type="submit" class="btn btn-success" name="add-student">Add Student</button>

    </form>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</body>

</html>

<?php

include "connection.php";

if (isset($_POST['add-student'])) {

  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];

  $insertQuery = "INSERT INTO student (name,fname,mname,mobile,email) VALUES ('$name','$fname','$mname','$mobile','$email')";

  $result = mysqli_query($con, $insertQuery);

  if ($result) {
    echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Student added successfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Redirect to add-student.php after showing success message
                    window.location.href = "attandence.php";
                });
              </script>';
  } else {
    echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                });
              </script>';
  }
}

?>