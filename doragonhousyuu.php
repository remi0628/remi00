<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<h2>メール報酬　ドラゴンチャレンジ一覧</h2>

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

$g101 = (($today - strtotime('2015-3-22'))/(60*60*24));
$g102 = (($today - strtotime('2015-3-16'))/(60*60*24)); //第1回ドラゴンチャレンジ
$g111 = (($today - strtotime('2015-6-28'))/(60*60*24));
$g112 = (($today - strtotime('2015-6-22'))/(60*60*24)); //第2回ドラゴンチャレンジ

$doragonhousyuu   = array("真龍界" => $yaho."、".$do."ブルー、".$do."ヴェール", "継界龍" => $miho, "沖天の星龍" => $hiho, "聖峰の嵐龍" => $kiho, "重剣龍" => $hoho, "緋石の刃龍" => $yu); //1
$doragonhousyuu2  = array("真龍界" => $yaho."、".$do."ブルー、".$do."ヴェール", "継界龍" => $miho, "沖天の星龍" => $hiho, "聖峰の嵐龍" => $kiho, "重剣龍" => $hoho, "緋石の刃龍" => $yu); //1

echo "<br>";
?>

<table border="1">
<?php
echo "<br>ドラゴンチャレンジ第１回目<br>";
echo "開催日:2015年3/16~3/22  約";
echo round ($g101);
echo ('~');
echo round ($g102);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($doragonhousyuu as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>ドラゴンチャレンジ第2回目<br>";
echo "開催日:2015年6/22~6/28  約";
echo round ($g111);
echo ('~');
echo round ($g112);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($doragonhousyuu2 as $k => $v) {
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
