<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
    $server = "localhost";
    $user = "root";
    $pass = "1234";
    $database = "nnnnnnn";
    $connection = new mysqli($server, $user, $pass, $database);

    $identity = $_POST['identity'];
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if($identity == 'Student')
    {
        $result = $connection -> query("SELECT * FROM student where id = '$id'");
        $row = mysqli_fetch_row($result);
    }
    else
    {
        $result = $connection -> query("SELECT * FROM teacher where id = '$id'");
        $row = mysqli_fetch_row($result);
    }
    if($identity == 'Student' && $id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
    {
        $_SESSION['user'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=student.php>';
    }
    else if($identity == 'Teacher' && $id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
    {
        $_SESSION['user'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=teacher.php>';
    }
    else
    {
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
    }
?>
