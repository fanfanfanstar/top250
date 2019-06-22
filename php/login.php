<?php
$user = $_POST['Username'];
$pass = ($_POST['Password']);
$mysql = new mysqli('localhost','root','','wuif1905','3306');
if ($mysql->connect_errno){
    echo'数据库连接失败，失败原因'.$mysql->connect_errno;
    exit();
}
$mysql->query("set names utf8");
$sql = "select * from manager";
$result = $mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
for ($i=0 ;$i<count($result);$i++){
    $ele = $result[$i];
    if ($ele['names']===$user&&$ele['pass']===$pass){
        session_start();
        $_SESSION['name']=$user;

        echo  json_encode([
         'code'=>1,
            'msg'=>'登陆成功'
        ]);
//        echo 'SUCCESS';
        exit;
    }
}
echo json_encode([
   'code'=>0,
   'msg'=>'登陆失败'
]);











