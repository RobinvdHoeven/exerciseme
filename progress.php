<?php
include("./connect_db.php");
include("./functions.php");


if (isset($_GET['func']) && $_GET['func'] == 'insert') {
    $userId = (int)$_GET['userId'];
    $exerId = (int)$_GET['exerciseId'];
    
    $sql = "INSERT INTO `progress` (`userId`,
                                        `exerciseId`) VALUES 
                                        ($userId,
                                        $exerId)";
                            
            $result = mysqli_query($conn, $sql);
}
$sesUserId = $_SESSION['id'];

    $sql = "SELECT exercises.title, COUNT(progress.userId) AS count 
    FROM `progress` 
    LEFT JOIN exercises ON progress.exerciseID = exercises.id 
    WHERE userId = $sesUserId 
    GROUP BY exerciseId";
    $result = mysqli_query($conn, $sql);
    // $rows = mysqli_fetch_assoc($result);
    //  echo "<h3>Hello, " . $rows['exerciseId'] . "</h3>";
    while($row = mysqli_fetch_assoc($result)) {

    }

    $result = mysqli_query($conn, $sql);
    $records = "";
    while ($record = mysqli_fetch_assoc($result)) {
      $records .= "<tr><th scope='row'>" . $record["title"] . "</th>
                    <td>" . $record["count"] . "</td>
                   </tr>";
    }

    ?>

<section class="padding">
      <table class="table table-hover table-light ">
      <thead class=thead-dark>
        <tr>
          <th scope="col">Day:</th>
          <th scope="col">Count:</th>    
        </tr>
      </thead>
      <tbody>
        <?php echo $records; ?>
      </tbody>
</table>
</section>
