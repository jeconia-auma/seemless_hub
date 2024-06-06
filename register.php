<?php
    include_once('config/session_checker.php');
    include_once('partials/header.php');

?>
    <style>

        .register-form {
            width: 80%;
            margin-left: 10%;
            dispay: flex;
        }

        .register-form input {
            width: 100%;
            height: 40px;
            margin: 6px;
        }

        h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
        }

    </style>
    <br><br><br><br><br><br><br>
    <form action="registration.php" class="register-form" method="post">
        <h3>Register now</h3>
        <input type="text" name="firstName" id="" class="firstName" placeholder="Your First Name">
        <input type="text" name="middleName" id="" class="middleName" placeholder="Your middle Name">
        <input type="text" name="lastName" id="" class="lastName" placeholder="Your Last Name">
        <input type="email" placeholder="your email" name="email">
        <input type="password" placeholder="your password" class="box" name="password">
        <input type="submit" value="Register now" class="btn" name="submit">
    </form>

<?php include_once('partials/footer.php'); ?>