<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php 
    $server = "localhost";
    $user = "root";
    $pass = "1234";
    $database = "nnnnnnn";
    $connection = new mysqli($server, $user, $pass, $database);

    $pw = $_POST['pw'];
    $pw2 = $_POST['pw2'];
    $pw3 = $_POST['pw3'];

    $usern = $_SESSION['user'];
    $result = $connection -> query("SELECT * FROM student where id = '$usern'");
    $row = mysqli_fetch_row($result);

    if($pw != null && $pw2 != null && $pw3 != null && $pw2 == $pw3 && $row[2] == $pw){

    
        $connection -> query("UPDATE student SET pw = '$pw2' WHERE id = '$usern'");
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=student.php>';
        
    }
    else{
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=change_pw.php>';
    }
?>