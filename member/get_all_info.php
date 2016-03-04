<?php
/**
 * Created by PhpStorm.
 * User: zh
 * Date: 15-10-26
 * Time: 下午1:48
 */

include_once('checksession.php');

require_once('Mysql.php');

$sql = new Mysql();

$date = $sql->getDate("SELECT * FROM member  WHERE status='active' ORDER BY member_id DESC"); // 倒着排序,将毕业的往后放


$array = null;

if($date)
{

    $i = 0;
//    $i = 1;
    foreach( $date as $row)
    {
        $array[] = array("id"=>$i,'name'=>urlencode($row['firstname'].$row['lastname']),'img'=>$row['portrait'],'job'=>urlencode($row['job_title']));
        $i++;
    }

}else{
    $array = array();
};
echo  urldecode(json_encode($array));
