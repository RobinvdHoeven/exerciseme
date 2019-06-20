<?php 
$userrole = ['administrator', 'root', 'customer'];
include("./security.php");
include("./connect_db.php");
include("./functions.php");
?>

<article>
    <div class="row">
    <div class="col-7">
    <?php 
    $id = sanitize($_SESSION["id"]);
    $sql = "SELECT firstname FROM `exerciseme` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_assoc($result);
    echo "<h3>Hello, " . $rows['firstname'] . "</h3>";
    ?>

<br>

<?php
$date = date('w');
$sql = "SELECT * FROM `exercises` WHERE `day` = '$date' AND `difficulty` = 'medium' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
echo "<h4>" . $rows['title'] . " </h4> " . $rows['description'];
?>
</div>
<div class="row">
<div class="col-5">
<?php
$date = date('w');
$sql = "SELECT * FROM `exercises` WHERE `day` = '$date'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
echo $rows['image'];
?>
</div>
</div>
</div>
</div>

</article>
