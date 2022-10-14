<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php 
    $server = "localhost";
    $user = "root";
    $pass = "1234";
    $database = "nnnnnnn";
    $connection = new mysqli($server, $user, $pass, $database);


    $sex = $_POST['sex'];
    $year = $_POST['year'];
    $mon = $_POST['mon'];
    $day = $_POST['day'];

    $usern = $_SESSION['user'];
    if($sex != null && $year != null && $mon != null && $day != null)
    {
        $connection -> query("UPDATE student SET sex = '$sex', year = '$year', mon = '$mon' ,day = '$day' WHERE id = '$usern'");
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=infor.php>';
    }

    else
    {
        echo '修改失敗!有空白處';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=infor.php>';
    }
?>