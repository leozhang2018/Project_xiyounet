<?php
/**
 * Created by PhpStorm.
 * User: zh
 * Date: 15-10-26
 * Time: 下午3:11
 * 获取个人的完整信息
 */


$id =$_GET['id'];



$array = explode("_", $id);
$id = $array[1];

require_once('Mysql.php');
$sql = new Mysql();
//$after_id = $id + 1;
//$row = $sql->getLine("SELECT * FROM member  WHERE status='active' ORDER BY member_id DESC LIMIT $id,$after_id");
$before_id = $id - 1;
$row = $sql->getLine("SELECT * FROM member  WHERE status='active' ORDER BY member_id ASC LIMIT $before_id,$id");

if ($row) {

    $member_id = $row['member_id'];
    $date1 = $sql->getLine("SELECT * FROM social_info WHERE member_id=$member_id");
    if(!$date1)
    {
        $sql->run("INSERT INTO social_info (member_id) VALUES ('$member_id')"); // 建立一条数据
        $date1 = $sql->getLine("SELECT * FROM social_info WHERE member_id=$member_id");
    }// 对于没有 social_info 信息的人建立給信息


    $member_id = $date1['member_id'];
    $website = $date1['website'];
    $facebook = $date1['facebook'];
    $github = $date1['github'];
    $dribbble = $date1['dribbble'];
    $linkedin = $date1['linkedin'];
    $weibo = $date1['weibo'];
    $twitter = $date1['twitter'];
    $instagram = $date1['instagram'];



    //方法一,有就发, 默认使用方法二,注释掉方法二就使用方法一
    $url = null;
    if (!empty($website)) {
        $url["website"] =  $website;

    }
    if (!empty($facebook)) {
        $url["facebook"] = $facebook;

    }
    if (!empty($github)) {
        $url["github"] =  $github;

    }
    if (!empty($dribbble)) {
        $url["dribbble"] = $dribbble;

    }
    if (!empty($linkedin)) {
        $url["linkedin"] = $linkedin;

    }
    if (!empty($weibo)) {
        $url["weibo"] = $weibo;

    }
    if (!empty($twitter)) {
        $url["twitter"] =  $twitter;

    }
    if (!empty($instagram)) {
        $url["instagram"] = $instagram;

    }

    $array = array("id" => $id, 'name' => urlencode($row['firstname'] . $row['lastname']), 'img' => $row['portrait'], 'job' => urlencode($row['job_title'])
    , 'introduce' => urlencode($row['self_intro']), "social"=>$url);

    // 方法一 ,结束

   //  方法二 ,全发 开始
    $array = array("id" => $id, 'name' => urlencode($row['firstname'] . $row['lastname']), 'img' => $row['portrait'], 'job' => urlencode($row['job_title'])
    , 'introduce' => urlencode($row['self_intro']), "social" =>
            array(
                "website" => $website,
                "facebook" => $facebook,
                "github" => $github,
                "dribbble" => $dribbble,
                "linkedin" => $linkedin,
                "weibo" => $weibo,
                "twitter" => $twitter,
                "instagram" => $instagram
            )
    );
    // 方法二 全发结束 ,



} else {
    $array = array();
};
echo urldecode(json_encode($array));

