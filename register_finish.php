<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$gender = $_POST['gender'];
$region = $_POST['region'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into member(ID, password, gender, region) values ('$id', '$pw', '$gender', '$region')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
				$sql = "insert into relationship(ID, friendID) values ('$id', '$id')";
				$query = "INSERT INTO interest(ID) VALUES ('$id')";
				mysql_query($sql);
				mysql_query($query);
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>