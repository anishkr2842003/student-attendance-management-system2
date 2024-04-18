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
  <title>Attandence page</title>
  <style>
    a {
      text-decoration: none;
    }
  </style>
</head>

<body style="background-image: url('images/body-bg.jpg');">

  <?php

  $firstDayOfMonth = date("1-m-Y");
  //   echo $firstDayOfMonth;
  $totalDaysInMonth = date("t", strtotime($firstDayOfMonth));


  require_once('connection.php');
  $selectQuery = "SELECT * FROM student";
  $result = mysqli_query($con, $selectQuery);

  $studentName = array();
  $studentId = array();
  $nameCounter = 0;
  $totalNumberOfStudents = mysqli_num_rows($result);

  while ($fetch = mysqli_fetch_assoc($result)) {
    $studentName[] = $fetch['name'];
    $studentId[] = $fetch['id'];
  }
  // print_r($studentId);

  // print_r($studentName);
  //   echo $totalDaysInMonth;
  ?>
  <br>
  <div class="card text-center mx-auto" style="width: 25rem;">
    <div class="card-header">
      Welcome 👋
    </div>
    <div class="card-body">
      <h5 class="card-title">Teacher's Name : <?php echo strtoupper($_SESSION['name']); ?></h5>
      <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
      <a href="add-student.php" class="btn btn-primary">Add student</a>
      <a href="logout.php" class="btn btn-danger">Logout</a>
      <a href="add-atd.php" class="btn btn-primary">Today's attandence</a>
    </div>
  </div>

  <br>

  <h3 style="text-align: center;"><u>STUDENTS ATTENDANCE OF MONTH : <span class="text-danger"><?php echo strtoupper(date("F", strtotime($firstDayOfMonth))) ?></u></span></h3>
  <table class="table table-bordered text-center">
    <?php
    for ($i = 1; $i <= $totalNumberOfStudents + 2; $i++) {
      if ($i == 1) {
    ?><thead>
          <tr>
            <th rowspan="2" class="align-middle">Name</th>
            <?php
            for ($j = 1; $j <= $totalDaysInMonth; $j++) {
            ?>
              <th><?php echo $j ?></th>
            <?php
            }
            ?>
          </tr>
        <?php
      } else if ($i == 2) {
        ?>
          <tr>
            <?php
            for ($j = 0; $j < $totalDaysInMonth; $j++) {
            ?>
              <th><?php echo date('D', strtotime("+$j days", strtotime($firstDayOfMonth)));; ?></th>
            <?php
            }
            ?>
          </tr>
        </thead>
      <?php
      } else {
      ?>
        <tr>
          <?php
          echo "<th class='text-start'>" . $nameCounter + 1 . ".  " . $studentName[$nameCounter]  . "</th>";


          for ($j = 1; $j <= $totalDaysInMonth; $j++) {
            $dateofatd = date("Y-m-$j");
            // echo $dateofatd;
            $fetchatd = mysqli_query($con, "SELECT atd FROM attendance WHERE student_id = '$studentId[$nameCounter]' AND curr_date = '$dateofatd'");

            if (mysqli_num_rows($fetchatd) > 0) {
              $studentatd = mysqli_fetch_assoc($fetchatd);
              if ($studentatd['atd'] == "P") {
                $color = 'bg-success';
              } else if ($studentatd['atd'] == "A") {
                $color = 'bg-danger';
              } else if ($studentatd['atd'] == "H") {
                $color = 'bg-warning';
              }
              echo "<td class='$color text-white'>" . $studentatd['atd']  . "</td>";
            } else {
              echo "<td></td>";
            }
          }
          ?>
        </tr>
    <?php
        $nameCounter++;
      }
    }
    ?>
  </table>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>