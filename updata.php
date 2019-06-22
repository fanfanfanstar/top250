<?php
$id=$_GET['id'];
$type=$_GET['type'];
$val=$_GET['val'];
require_once 'db.php';
$sql="update student set $type='$val'where id = $id";
$result=$mysql->query($sql);
$rows=$mysql->affected_rows;
if ($rows==1){
    echo json_encode([
        'code'=>1,
        'msg'=>'修改成功'
    ]);
}else {
    echo json_encode([
        'code' => 0,
        'msg' => '修改失败'
    ]);
}