<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>Create Account</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Arial", sans-serif;
            -webkit-font-smoothing: antialiased;
            background: #000;
            color: #999;
        }

        ul {
            list-style: none;
        }

        h1,
        h2,
        h3,
        h4 {
            color: #fff;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        p {
            margin: 0.5rem 0;
        }

        .showcase {
            width: 100%;
            height: 100vh;
            position: relative;
            background: url("https://images.unsplash.com/photo-1608942025318-1191eeade556?q=80&w=1155&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D") no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            /* text-align: center; */
        }

        .showcase::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: rgba(0, 0, 0, 0.65);
            box-shadow: inset 30px 10px 150px #000000;
        }

        .showcase-content {
            position: relative;
            z-index: 2;
            width: 450px;
            height: auto;
            background: rgb(0, 0, 0, 0.65);
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            text-align: left;
            padding: 60px 60px;
            border-radius: 16px;
        }

        .formm h1 {
            margin-bottom: 20px;
        }

        .formm {
            width: 100%;
            margin-bottom: 40px;
        }

        .formm .info {
            padding: 5px 0;
            margin-bottom: 20px;
        }

        .formm .info .email {
            margin-bottom: 30px;
            color: white;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            border: none;
            padding: 10px;
            font-size: inherit;
        }

        .formm .btn {
            margin-bottom: 10px;
            width: 100%;
        }

        .btn-primary {
            width: 100%;
            height: 50px;
            border-radius: 5px;
            background: #007bff;
            color: #fff;
            font-size: inherit;
            font-weight: bold;
            border: none;
            cursor: pointer;
            outline: none;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.45);
        }

        .help {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
        }

        .help a {
            color: #999;
        }

        .help a:hover {
            text-decoration: underline;
        }

        /*  input */

        input[type="checkbox"] {
            background: #737373;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            border: 0;
            height: 16px;
            left: -20px;
            width: 16px;
            margin-right: 5px;
        }

        input[type="email"] {
            background: #343434;
        }

        input[type="password"] {
            background: #343434;
        }

        input[type="text"] {
            background: #343434;
        }

        /*  input end */

        .signup {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .signup p {
            margin-right: 5px;
        }

        .more {
            font-size: 0.8em;
            line-height: 1.1em;
        }

        .more a {
            color: rgb(17, 108, 228);
        }

        .more a:hover,
        .signup a:hover {
            text-decoration: underline;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #496989;
            border-radius: 10px;
            border: 1px solid #496989;
        }

        ::-webkit-scrollbar-track {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header class="showcase">
        <div class="showcase-content">
            <div class="showcase-top">
                <h1>Create Account</h1> <br> <br>
            </div>
            <div class="formm">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST">
                    <!-- <h2>Welcome user!
                    </h2> -->
                    <div class="info">
                        <input class="email" type="text" placeholder="Enter your name" id="email" name="name" required autofocus> <br>
                        <input class="email" type="text" placeholder="Enter your phone no" id="email" maxlength="10" name="mobile" required autofocus> <br>
                        <input class="email" type="email" placeholder="Email" id="email" name="email" required autofocus> <br>
                        <input class="email" type="password" placeholder="Password" id="password" name="password" required autofocus>
                    </div>
                    <div class="btn">
                        <button class="btn-primary" type="submit" name="create-account">Create Account</button>
                    </div>
                    <!-- <div class="help">
            <div>
               <input value="true" type="checkbox"><label>Remember me</label> 
            </div>
          </div> -->
                    <div class="signup">
                        <p>New to User ?</p>
                        <a href="login.php">Login now</a>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<script>
    let doctitle = document.title;
    window.addEventListener("blur", () => {
        document.title = "👋 Hey! come back...";
    });
    window.addEventListener("focus", () => {
        document.title = doctitle;
    });
</script>

</html>

<?php
require_once('connection.php');
if(isset($_POST['create-account'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $securePassword = password_hash($password, PASSWORD_BCRYPT);

    $insertQuery = "INSERT INTO user (name,mobile,email,password) VALUES ('$name','$mobile','$email','$securePassword')";
    $result = mysqli_query($con,$insertQuery);

    if ($result) {
        echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Account created successfully",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        // Redirect to add-student.php after showing success message
                        window.location.href = "login.php";
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