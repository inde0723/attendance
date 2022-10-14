<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
    $server = "localhost";
    $user = "root";
    $pass = "1234";
    $database = "nnnnnnn";
    $connection = new mysqli($server, $user, $pass, $database);



    $usern = $_SESSION['user'];
    $result = $connection -> query("SELECT * FROM student where id = '$usern'");
    $result2 = $connection -> query("SELECT * FROM callstudent where id = '$usern'");
    $row = mysqli_fetch_row($result2);


    if($row[1] == $usern){
        echo '已打卡過了!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=class.php>';
    }
    else{
        foreach($result as $i){
            $connection -> query("insert into callstudent(name , id) values ('$i[name]','$i[id]')");

        }
        echo '打卡成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=class.php>';
    }
?>
