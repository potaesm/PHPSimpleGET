<html>

<body>
    <?php
    require_once("db.php");
    if (isset($_GET['col1'])) {
        $col1 = $_GET['col1'];
        $col2 = $_GET['col2'];

        $obj[0]->col1 = $col1;
        $obj[0]->col2 = $col2;
        $obj[1]->sum = $col1 + $col2;

        $jsonObj = json_encode($obj);

        $query = "INSERT INTO `table1` (`id`, `col1`, `col2`) VALUES (NULL, '" . $col1 . "', '" . $col2 . "')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED') . mysql_error();
        } else {
            echo $jsonObj;
        }
    }
    ?>
</body>

</html>