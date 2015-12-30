<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<h2>メール報酬　デビルチャレンジ一覧</h2>

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

$d101 = (($today - strtotime('2015-3-8'))/(60*60*24));
$d102 = (($today - strtotime('2015-3-2'))/(60*60*24)); //第1回デビルチャレンジ
$d111 = (($today - strtotime('2015-5-31'))/(60*60*24));
$d112 = (($today - strtotime('2015-5-25'))/(60*60*24)); //第2回デビルチャレンジ

$debiruhousyuu   = array("天魔界" => $yaho."、".$do."ルージュ、".$do."ノワール", "魔導姫" => $kiho, "求魂師" => $hiho, "狂皇子" => $miho, "大魔王" => $hoho, "屍霊龍" => $yu); //1
$debiruhousyuu2  = array("天魔界" => $yaho."、".$do."ルージュ、".$do."ノワール", "魔導姫" => $kiho, "求魂師" => $hiho, "狂皇子" => $miho, "大魔王" => $hoho, "屍霊龍" => $yu); //2


echo "<br>";
?>

<table border="1">
<?php
echo "<br>デビルチャレンジ第１回目<br>";
echo "開催日:2015年3/2~3/8  約";
echo round ($d101);
echo ('~');
echo round ($d102);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($debiruhousyuu as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>デビルチャレンジ第２回目<br>";
echo "開催日:2015年5/25~5/31  約";
echo round ($d111);
echo ('~');
echo round ($d112);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($debiruhousyuu2 as $k => $v) {
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
