<?php
require_once('connection.php');
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
    <title>Mark Attandence</title>
    <style>
        body{
            background: url("images/body-bg.jpg");
        }
    </style>
</head>

<body>

    <div class="container">
        <h3 class="text-center">Mark Attandence</h3>
        <table class="table table-striped table-bordered text-center">
            <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

                <thead>
                    <tr>
                        <th scope="col">Student's Roll no</th>
                        <th scope="col">Name</th>
                        <th scope="col">Present</th>
                        <th scope="col">Absent</th>
                        <th scope="col">Holiday</th>
                    </tr>
                </thead>
                <?php
                $selectQuery = "SELECT * FROM student";
                $result = mysqli_query($con, $selectQuery);
                while ($fetch = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $stuid = $fetch['id']; ?></td>
                        <td><?php echo $fetch['name']; ?></td>
                        <td><input class="form-check-input" type="checkbox" name="atd-p[]" value="<?php echo $fetch['id'] ?>"></td>
                        <td><input class="form-check-input" type="checkbox" name="atd-a[]" value="<?php echo $fetch['id'] ?>"></td>
                        <td><input class="form-check-input" type="checkbox" name="atd-h[]" value="<?php echo $fetch['id'] ?>"></td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td>Select date</td>
                    <td><input type="date" name="selected_date"></td>
                    <td colspan="3"><button type="submit" class="btn btn-primary" name="add-atd">Add Attendance</button></td>
                </tr>
            </form>
        </table>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>

<?php

if (isset($_POST['add-atd'])) {

    if ($_POST['selected_date'] == NULL) {
        $selected_date = date("Y-m-d");
    } else {
        $selected_date = $_POST['selected_date'];
    }

    // echo $selected_date;
    $selectedMonth = date('M', strtotime($selected_date));
    $selectedYear = date('Y', strtotime($selected_date));

    if (isset($_POST['atd-p'])) {
        $studentPresent = $_POST['atd-p'];
        $attadence = 'P';
        foreach ($studentPresent as $p) {
            mysqli_query($con, "INSERT INTO attendance (student_id,curr_date,atd_month,atd_year,atd) VALUES('$p','$selected_date','$selectedMonth','$selectedYear','$attadence')");
        }
    }

    if (isset($_POST['atd-a'])) {
        $studentAbsent = $_POST['atd-a'];
        $attadence = 'A';
        foreach ($studentAbsent as $a) {
            mysqli_query($con, "INSERT INTO attendance (student_id,curr_date,atd_month,atd_year,atd) VALUES('$a','$selected_date','$selectedMonth','$selectedYear','$attadence')");
        }
    }

    if (isset($_POST['atd-h'])) {
        $studentHoliday = $_POST['atd-h'];
        $attadence = 'H';
        foreach ($studentHoliday as $h) {
            mysqli_query($con, "INSERT INTO attendance (student_id,curr_date,atd_month,atd_year,atd) VALUES('$h','$selected_date','$selectedMonth','$selectedYear','$attadence')");
        }
    }
    echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Attandence marked succesfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    // Redirect to add-student.php after showing success message
                    window.location.href = "attandence.php";
                });
              </script>';
    // print_r($studentPresent);
}


?>