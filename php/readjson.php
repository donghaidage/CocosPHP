<?php
    header("Content-type: text/html; charset=utf-8")
    $con = mysql_connect("sqld-gz.bcehost.com:3306","969a49632ada456584fda7eb3fd96be8","1333a4f2a045446fbfd4dd544908e58f");
    if (!$con)
    {
        echo "server error"
    }
    mysql_select_db("cqndODJUMonPJKjlebsz",$con);
    $result = mysql_query("SELECT * FROM ixq_user");
    $json1 = array();
    while($row = myspl_fetch_array($result))
    {
        $array1['user_name'] = $row[0];
        $array1['user_pswd'] = $row[1];
        $array1['user_icon'] = $row[2];
        array_push($json1,$array1);
    }

    $json2 = json_encode($json1,JSON_UNESCAPED_UNIODE);

    echo $json2
    mysql_close($con)
?>