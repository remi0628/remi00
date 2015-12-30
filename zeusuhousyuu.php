<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<h2>メール報酬　ゼウスチャレンジ一覧</h2>

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

$z101 = (($today - strtotime('2015-2-22'))/(60*60*24));
$z102 = (($today - strtotime('2015-2-16'))/(60*60*24)); //第１回ゼウスチャレンジ

$z121 = (($today - strtotime('2015-8-9'))/(60*60*24));
$z122 = (($today - strtotime('2015-8-3'))/(60*60*24)); //第3回ゼウスチャレンジ

$zeusuhousyuu  = array("新世界" => $yaho."、".$do."ヴェール、".$do."ブラン", "海澪神" => $miho, "業断神" => $hoho, "天地神" => $kiho, "全能神" => $hiho, "神王妃" => $yu); //1
$zeusuhousyuu3 = array("新世界" => $yaho."、".$do."ヴェール、".$do."ブラン", "海澪神" => $miho, "業断神" => $hoho, "天地神" => $kiho, "全能神" => $hiho, "神王妃" => $yu); //3

echo "<br>";
?>

<table border="1">
<?php
echo "<br>ゼウスチャレンジ第１回目<br>";
echo "開催日:2015年2/16~2/22  約";
echo round ($z101);
echo ('~');
echo round ($z102);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($zeusuhousyuu as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<?php
echo "<br><br>現在ゼウスチャレンジ第２回目は実装しておりません。<br><br>";
?>

<table border="1">
<?php
echo "<br>ゼウスチャレンジ第3回目<br>";
echo "開催日:2015年8/3~8/9  約";
echo round ($z121);
echo ('~');
echo round ($z122);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($zeusuhousyuu3 as $k => $v) {
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
