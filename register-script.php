<?php
    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $firstname = sanitize($_POST["firstname"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $checkpassword = sanitize($_POST["checkpassword"]);

    if ( !empty($password) && !empty($checkpassword)) {
        if (!strcmp($password, $checkpassword)) {

    // Maak een select query om te controleren of het email adres al bestaat
    if (!empty($email)) {
        $sql = "SELECT * FROM `exerciseme` WHERE `email` = '$email'";

        //Stuur de query af op de database
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0 )
        {
            echo '<div class="alert alert-danger" role="alert">
            This e-mail adress is already in use!
            </div>';
            header("refresh:2; url=./index.php?content=contact");
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO `exerciseme` (`id`,
                                        `email`,
                                        `firstname`,
                                        `password`,
                                        `userrole`)
                                VALUES (NULL,
                                        '$email',
                                        '$firstname',
                                        '$password_hash',
                                        'customer')";
                            
            $result = mysqli_query($conn, $sql);

            echo '<article><div class="alert alert-success" role="alert">
            Thanks for registering you may now log in!
            </div></article>';
            header("Refresh: 5; url=./index.php?content=signup");
        } 

    } else {
        echo '<div class="alert alert-danger" role="alert">
        Please fill in an e-mail!</div>';
        header("Refresh: 4; url=./index.php?content=signup");
    }
} else {
    echo '<div class="alert alert-danger" role="alert">
    Please match the passwords!</div>';
    header("Refresh: 4; url=./index.php?content=signup");
}
    } else {
        echo '<div class="alert alert-success" role="alert">
        Please fill in a password!
        </div>';
        header("refresh:2; url=./index.php?content=signup");
    }    
?>