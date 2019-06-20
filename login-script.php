<?php
// var_dump($_POST);

include("./connect_db.php");
include("./functions.php");

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);

if (!empty($email) && !empty($password)) {
    
    $sql = "SELECT * FROM `exerciseme` WHERE `email` = '$email'";

    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) == 1){
        // Email bestaat
        $record = mysqli_fetch_assoc($result);

        $password_hash = $record["password"];
        if ( password_verify($password, $password_hash)) {

            $userrole = $record["userrole"];

            $_SESSION["id"] = $record["id"];
            $_SESSION["userrole"] = $record["userrole"];
            $_SESSION["email"] = $record["email"];

            switch ($userrole){
                case 'customer':
                // Link naar user homepage
                echo '<div class="alert alert-success" role="alert">
                You are now logged in as a user. You will head to the homepage
                </div>';
                header("refresh:2; url=./index.php?content=homepage");

                break;
                case 'root':
                // Link naar root homepage
                echo '<div class="alert alert-success" role="alert">
                You are now logged in as root. You will head to the homepage.
                </div>';
                header("refresh:2; url=./index.php?content=homepage");

                break;
                case 'administrator':
                // Link naar administrator homepage
                echo '<div class="alert alert-success" role="alert">
                You are now logged in as an administrator. You will head to the homepage.
                </div>';
                header("refresh:2; url=./index.php?content=homepage");

                break;
                default:

                break;
            }

        } else {
            // Password bestaat niet
            echo '<div class="alert alert-danger" role="alert">
            Het opgegeven wachtwoord is niet correct. </div>';
            header("refresh:2; url=./index.php?content=signup");
        }
    } else {
        //Email bestaat niet
        echo '<div class="alert alert-danger" role="alert">
        Het opgegeven emailadres is niet bekend. </div>';
        header("refresh:2; url=./index.php?content=signup");
    }


} else {
    echo '<div class="alert alert-danger" role="alert">
    U heeft geen e-mail adres of wachtwoord ingevoerd, probeer het opnieuw. </div>';
    header("refresh:2; url=./index.php?content=signup");
}
?>