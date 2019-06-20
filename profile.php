<?php 
$userrole = ['administrator', 'root', 'customer'];
include("./security.php");
include("./connect_db.php");
include("./functions.php");

// User info
$id = sanitize($_SESSION["id"]);
$sql = "SELECT id, firstname FROM `exerciseme` WHERE `id` = '$id'";
$userResult = mysqli_query($conn, $sql);
$userRows = mysqli_fetch_assoc($userResult);

$difficulty = (isset($_GET['difficulty']) ? $_GET['difficulty'] : 'easy');
$otherDiff = ($difficulty == 'easy' ? 'medium' : 'easy');
$date = date('w');
$sql = "SELECT * FROM `exercises` WHERE `day` = '$date' AND `difficulty` = '$difficulty'";
$exerResult = mysqli_query($conn, $sql);
$exerRows = mysqli_fetch_assoc($exerResult);

?>

<article>
    <div class="row">
    <div class="col-7">
             <button><a href="index.php?content=progress&func=insert&userId=<?=$userRows['id']?>&exerciseId=<?=$exerRows['id'] ?>" class="levels">Finish exercise</a></button> <button><a href="?content=profile&difficulty=<?=$otherDiff?>" class="levels">Change difficulty</a></button>
        <br>
        <br>
        <h3 class="hello">Hello, <?=$userRows['firstname']?></h3>


<h4><?=$exerRows['title']?></h4>
<?=$exerRows['description']?>
</div>
<div class="row">
<div class="col-5">
    <?=$exerRows['image']?>
<?php
// $date = date('w');
// $sql = "SELECT * FROM `exercises` WHERE `day` = '$date'";
// $result = mysqli_query($conn, $sql);
// $rows = mysqli_fetch_assoc($result);
// echo $rows['image'];
?>

</div>
</div>
</div>
</div>

</article>
