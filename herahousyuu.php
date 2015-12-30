<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<h2>メール報酬　ヘラチャレンジ一覧</h2>

<?php
echo "<br>";
?>

<a href="index.php">トップページへ戻る</a>

<?php
$today = (strtotime('now'));  //現在時刻

$l1  = "Lv 1 ";
$l2  = "Lv 2 ";
$l3  = "Lv 3 ";
$l4  = "Lv 4 ";
$l5  = "Lv 5 ";
$l6  = "Lv 6 ";
$l7  = "Lv 7 ";
$l8  = "Lv 8 ";
$l9  = "Lv 9 ";
$l10 = "Lv10 ";   //先頭は小文字の『L』なので注意！

$ho   = "ホノピィ (火)";
$mi   = "ミズピィ (水)";
$mo   = "モクピィ (木)";
$hi   = "ヒカピィ (光)";
$ya   = "ヤミピィ (闇)";
$do   = "ノエルドラゴン・";
$ta   = "たまドラ (全ステ+3)";
$pu   = "ぷれドラ";
$go   = "超キングゴールドドラゴン";
$me   = "超キングメタルドラゴン";
$ko   = "50万コイン";
$yu   = "2000友情ポイント";
$qgo  = "クイーンゴールドドラゴン";
$qme  = "クイーンメタルドラゴン";
$sa   = "超キングサファイアドラゴン";
$ta0  = "たまドラ";
$sen  = "潜在たまドラ";
$hoho = "火の宝玉";
$miho = "水の宝玉";
$kiho = "木の宝玉";
$hiho = "光の宝玉";
$yaho = "闇の宝玉";

$h101 = (($today - strtotime('2015-2-8'))/(60*60*24));
$h102 = (($today - strtotime('2015-2-2'))/(60*60*24)); //第１回ヘラチャレンジ
$h111 = (($today - strtotime('2015-4-26'))/(60*60*24));
$h112 = (($today - strtotime('2015-4-20'))/(60*60*24)); //第２回ヘラチャレンジ
$h121 = (($today - strtotime('2015-7-26'))/(60*60*24));
$h122 = (($today - strtotime('2015-7-21'))/(60*60*24)); //第３回ヘラチャレンジ

$herahousyuu  = array("妃の宴" => $yaho."、".$do."ルージュ、".$do."ブルー", "耀冥妃" => $hiho, "創樹妃" => $kiho, "魔炎妃" => $hoho, "氷零妃" => $miho, "神王妃" => $yu); //1
$herahousyuu2 = array("妃の宴" => $yaho."、".$do."ルージュ、".$do."ブルー", "耀冥妃" => $hiho, "創樹妃" => $kiho, "魔炎妃" => $hoho, "氷零妃" => $miho, "神王妃" => $yu); //2
$herahousyuu3 = array("妃の宴" => $yaho."、".$do."ルージュ、".$do."ブルー", "耀冥妃" => $hiho, "創樹妃" => $kiho, "魔炎妃" => $hoho, "氷零妃" => $miho, "神王妃" => $yu); //3


echo "<br>";
?>

<table border="1">
<?php
echo "<br>ヘラチャレンジ第１回目<br>";
echo "開催日:2015年2/2~2/8  約";
echo round ($h101);
echo ('~');
echo round ($h102);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($herahousyuu as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>ヘラチャレンジ第２回目<br>";
echo "開催日:2015年4/20~4/26  約";
echo round ($h111);
echo ('~');
echo round ($h112);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($herahousyuu2 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>ヘラチャレンジ第３回目<br>";
echo "開催日:2015年7/21~7/26  約";
echo round ($h121);
echo ('~');
echo round ($h122);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($herahousyuu3 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>


<?php
echo "<br>";
?>

<a href="index.php">トップページへ戻る</a>

</body>
</html>
