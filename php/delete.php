<?php
$id = $_POST['id'];
$mysql=new mysqli('localhost','root','','wuif1905','3306');
if ($mysql->connect_errno){
    echo '数据库连接失败，失败原因'.$mysql->connect_errno;
    exit();
}

$mysql->query("set names utf8");
$sql="DELETE FROM student WHERE id=$id ";
$result=$mysql->query($sql);
$rows=$mysql->affected_rows;
//echo $result;
//if ($result){
//    echo json_encode([
//        'code'=>1,
//        'data'=>$result
//    ]);
//}else{
//    echo json_encode([
//        'code'=>0
//    ]);
//}
if ($rows==1){
  echo json_encode([
      'code'=>1,
      'msg'=>'删除成功'
]);
}else{
    echo json_encode([
       'code'=>0,
       'msg'=>'删除成功'
    ]);

}