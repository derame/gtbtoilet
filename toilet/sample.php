<html>
<head>
    <title>PHP TEST</title>
</head>
<body>

<?php

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('接続失敗です。'.mysql_error());
}

print('<p>接続に成功しました。</p>');

$db_selected = mysql_select_db('toilet', $link);
if (!$db_selected){
    die('データベース選択失敗です。'.mysql_error());
}

print('<p>トイレ革命（待たずにトイレ）</p>');

mysql_set_charset('utf8');

$result = mysql_query('SELECT * FROM toilet');
if (!$result) {
    die('クエリーが失敗しました。'.mysql_error());
}
/*
while ($row = mysql_fetch_assoc($result)) {
    print('<p>');
    print('name='.$row['toilet_name']);
    print(',floor='.$row['toilet_floor']);
    print('</p>');
}
*/

//フロア別にトイレを取得。
while($row = mysql_fetch_assoc($result)){
    switch ($row['toilet_floor']){
        case 7:
            $toilet7[$row["toilet_id"]] = array(
                "toilet_name7" => $row["toilet_name"],
                "toilet_status7"=> $row["toilet_status"]);
            break;
        case 8:
            $toilet8[$row["toilet_id"]] = array(
                "toilet_name8" => $row["toilet_name"],
                "toilet_status8"=> $row["toilet_status"]);
            break;
        case 9:
            $toilet9[$row["toilet_id"]] = array(
                "toilet_name9" => $row["toilet_name"],
                "toilet_status9"=> $row["toilet_status"]);
            break;
        case 10:
            $toilet10[$row["toilet_id"]] = array(
                "toilet_name10" => $row["toilet_name"],
                "toilet_status10"=> $row["toilet_status"]);
            break;
        case 11:
            $toilet11[$row["toilet_id"]] = array(
                "toilet_name11" => $row["toilet_name"],
                "toilet_status11"=> $row["toilet_status"]);
            break;
        case 12:
            $toilet12[$row["toilet_id"]] = array(
                "toilet_name12" => $row["toilet_name"],
                "toilet_status12"=> $row["toilet_status"]);
            break;


    }
}
//配列の数字をカウントし、画像をさせるような順番をつける

$toiletCnt7 = count($toilet7);

//画像表示の配列
//$arrayImg = array('')

//ステータスに合わせて表示する画像を変化させる。
/*
class ToiletImg{
    public $
}

function SelectImg()
{

    switch ($row["toilet_status"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }
}
*/
//配列の分だけ指定したトイレ名、ステータス、画像を表示する。

foreach($toilet7 as $key => $value) {
    print "    ". $value["toilet_name7"] . "   " . $value["toilet_status7"];
    switch ($value["toilet_status7"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }

}
echo"</br>";

foreach($toilet8 as $key => $value){
    print "    ". $value["toilet_name8"]."   status". $value["toilet_status8"];
    switch ($value["toilet_status8"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }
}
echo"</br>";
foreach($toilet9 as $key => $value) {
    print "    ". $value["toilet_name9"] . "   status" . $value["toilet_status9"];
    switch ($value["toilet_status9"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }
}
echo"</br>";
foreach($toilet10 as $key => $value){
    print "    ". $value["toilet_name10"]."   status". $value["toilet_status10"];
    switch ($value["toilet_status10"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }
}
echo"</br>";
foreach($toilet11 as $key => $value) {
    print "    ". $value["toilet_name11"] . "   status" . $value["toilet_status11"];
    switch ($value["toilet_status11"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }
}
echo"</br>";
foreach($toilet12 as $key => $value){
    print "    ". $value["toilet_name12"]."   status". $value["toilet_status12"];
    switch ($value["toilet_status12"]) {
        case 0;
            echo "<img src='http://localhost/toilet/toilet0.png'>";
            break;
        case 1;
            echo "<img src='http://localhost/toilet/toilet1.png'>";
            break;
        case 2;
            echo "<img src='http://localhost/toilet/toilet2.png'>";
            break;
        case 3;
            echo "<img src='http://localhost/toilet/toilet3.png'>";
            break;
    }
}
echo"</br>";

$close_flag = mysql_close($link);

if ($close_flag){
    print('<p>切断に成功しました。</p>');
}




?>
</body>
</html>