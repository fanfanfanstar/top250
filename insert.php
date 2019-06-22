<?php
require_once 'db.php';
//$names=$_POST['names'];
$keys= array_keys($_POST);

$sql ="insert into student(";
for ($i=0;$i<count($keys);$i++){
    $sql.=$keys[$i].',';
}
$sql =substr($sql,0,-1).') values(';
foreach ($_POST as $key=>$value){
    $sql.="'$value',";
}
$sql= substr($sql,0,-1).')';

echo $sql;

$result=$mysql->query($sql);
$rows=$mysql->affected_rows;
if ($rows==1){
    $id=$mysql->insert_id;

    echo json_encode([
        'code'=>1,
        'msg'=>'修改成功',
        'id'=>$id

    ]);
}else {
    echo json_encode([
        'code' => 0,
        'msg' => '修改失败'
    ]);
}