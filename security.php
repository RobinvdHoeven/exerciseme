<?php

if (!isset($_SESSION["id"])){
    echo '<div class="alert alert-warning" role="alert">
    Please signup / register to access this page.
    </div>';
    header("Refresh:3; url=./index.php?content=homepage");
    exit();
    } elseif ( ! in_array($_SESSION["userrole"], $userrole )) {
        echo '<div class="alert alert-warning" role="alert">
        U heeft niet de juiste gebruikersrol voor deze pagina, u wordt nu uitgelogd.
        </div>';
        header("Refresh:3; url=./index.php?content=logout");
        exit();
}

?>