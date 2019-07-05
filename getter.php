<html>

<body>
    <?php
    require_once("db.php");
    
    $query = "SELECT * FROM table1";
    $rows = array();
    $result = mysqli_query($connection, $query);
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    
    $json = json_encode($rows);

    if (!$result) {
        die('Query FAILED') . mysql_error();
    } else {
        echo $json;
    }
    ?>
</body>

</html>
