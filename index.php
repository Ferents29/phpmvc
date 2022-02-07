<?php
define("ROOT", getcwd());
define("DS", DIRECTORY_SEPARATOR);
include ROOT . '/app/bootstrap.php';
?>

<?php
    $host = 'localhost';
    $user = 'root';
	$pass = 'root';
	$name = 'test_shop';

	$link = mysqli_connect($host, $user, $pass,
        $name);
    mysqli_query($link, "SET NAMES 
            'utf8'");

//    $query = "SELECT * FROM products ORDER BY price DESC";
//
//    $result = mysqli_query($link, $query) or
//    die(mysqli_error($link));
//    $row = mysqli_fetch_assoc($result);
//    for ($row = []; $row = mysqli_fetch_assoc($result); $row[] = $row){
//        var_dump($row);
//        echo "</br>";
//    }
?>
