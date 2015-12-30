<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<h2>メール報酬　降臨チャレンジ一覧</h2>

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

$ko011 = (($today - strtotime('2014-12-25'))/(60*60*24));
$ko012 = (($today - strtotime('2014-12-12'))/(60*60*24)); //第１回降臨チャレンジ
$ko021 = (($today - strtotime('2015-1-4'))/(60*60*24));
$ko022 = (($today - strtotime('2014-12-26'))/(60*60*24)); //第2回降臨チャレンジ
$ko031 = (($today - strtotime('2015-3-1'))/(60*60*24));
$ko032 = (($today - strtotime('2015-2-23'))/(60*60*24)); //第3回降臨チャレンジ
$ko041 = (($today - strtotime('2015-5-24'))/(60*60*24));
$ko042 = (($today - strtotime('2015-5-18'))/(60*60*24)); //第4回降臨チャレンジ
$ko051 = (($today - strtotime('2015-6-11'))/(60*60*24));
$ko052 = (($today - strtotime('2015-6-5'))/(60*60*24)); //第5回降臨チャレンジ
$ko061 = (($today - strtotime('2015-7-20'))/(60*60*24));
$ko062 = (($today - strtotime('2015-7-10'))/(60*60*24)); //第6回降臨チャレンジ
$ko071 = (($today - strtotime('2015-8-23'))/(60*60*24));
$ko072 = (($today - strtotime('2015-8-17'))/(60*60*24)); //第7回降臨チャレンジ
$ko081 = (($today - strtotime('2015-9-27'))/(60*60*24));
$ko082 = (($today - strtotime('2015-9-21'))/(60*60*24)); //第8回降臨チャレンジ
$ko091 = (($today - strtotime('2015-10-12'))/(60*60*24));
$ko092 = (($today - strtotime('2015-10-5'))/(60*60*24)); //第9回降臨チャレンジ
$ko101 = (($today - strtotime('2015-11-3'))/(60*60*24));
$ko102 = (($today - strtotime('2015-10-26'))/(60*60*24)); //第10回降臨チャレンジ
$ko111 = (($today - strtotime('2015-12-6'))/(60*60*24));
$ko112 = (($today - strtotime('2015-11-20'))/(60*60*24)); //第11回降臨チャレンジ
$ko121 = (($today - strtotime('2015-12-27'))/(60*60*24));
$ko122 = (($today - strtotime('2015-12-21'))/(60*60*24)); //第12回降臨チャレンジ

$kourinhousyuu   = array("妃の宴" => "$ya"."＋1000万コイン", "天魔界" => "$hi"."＋"."$yu", "大海神" => "$mo", "黄泉神" => "$mi", "魔炎妃" => "$ho", "求魂師" => "$ya", "創樹妃" => "$hi", "狂皇子" => "$mo", "耀冥妃" => "$mi", "大魔王" => "$ho", "氷零妃" => "$ta", "魔公子" => "$qgo", "大義賊" => "$qme", "武刀神" => "$yu", "神王妃" => "200万コイン"); //1
$kourinhousyuu2  = array("真龍界" => "$ho"."+1000万コイン", "神世界" => "$ya"."+"."$yu", "瞑神" => "$hi", "業断神" => "$mo", "星知神" => "$mi", "海澪神" => "$ho", "勇将軍" => "$ya", "天地神" => "$hi", "舶神" => "$mo", "全能神" => "$mi", "煌女神" => "$ta", "剛戦神" => "$qgo", "義龍" => "$me", "聖女神" => "$yu", "双勇者" => "200万コイン"); //2
$kourinhousyuu3  = array("真龍界" => "$mi"."+1000万コイン", "天魔界" => "$ho"."+"."$yu", "大海神" => "$ya", "業断神" => "$hi", "創樹妃" => "$mo", "魔導姫" => "$mi", "瞑奏神" => "$ho", "勇将軍" => "$ya", "冥護神" => "$hi", "狂皇子" => "$mo", "聖舶神" => "$ta", "重剣龍" => "$go", "煌女神" => "$me", "大義賊" => "$yu", "双勇者" => "200万コイン"); //3
$kourinhousyuu4  = array("妃の宴" => "$ya"."+"."1000万コイン", "天魔界" => "$hi"."＋"."$yu", "大海神" => "$mo", "黄泉神" => "$mi", "魔炎妃" => "ho", "求魂師" => "$ya", "創樹妃" => "hi", "狂皇子" => "$mo", "耀冥妃" => "$mi", "大魔王" => "$ho", "氷零妃" => "ta", "魔公子" => "$qgo", "大義賊" => "qme", "武刀神" => "$yu", "神王妃" => "200万コイン"); //4
$kourinhousyuu5  = array("真龍界" => "$ho"."+"."1000万コイン", "神世界" => "$ya"."＋"."$yu", "瞑神" => "$hi", "業断神" => "$mo", "星知神" => "$mi", "海澪神" => "$yaho", "勇将軍" => "$hiho", "天地神" => "$kiho", "舶神" => "$miho", "全能神" => "$hoho", "煌女神" => "$ta", "剛戦神" => "$qgo", "義龍" => "$me", "聖女神" => "$yu", "双勇者" => "200万コイン"); //5
$kourinhousyuu6  = array("幻龍王" => "たまドラ(HP+50)", "騎龍王" => "たまドラ(攻撃+50)", "日出国" => "たまドラ(回復+50)", "神王殿" => "$yaho", "継界龍" => "$hiho", "美周郎" => "$miho", "獅王獣" => "$hoho", "遊楽魔" => "$kiho", "月光姫" => "$ta", "燕将軍" => "$qgo", "義将姫" => "$qme", "暗黒騎士" => "$yu", "屍霊龍" => "200万コイン"); //6
$kourinhousyuu7  = array("日出国" => "$ya", "真龍界" => "$hi", "天魔界" => "$mo", "妃の宴" => "$mi", "神世界" => "$ho", "狂皇子" => "$yaho", "求魂師" => "$hiho", "魔公子" => "$kiho", "音楽龍" => "$miho", "獅王獣" => "$hoho"); //7
$kourinhousyuu8  = array("灼冥魔" => "$ya"."＋"."1,000万コイン", "幻龍王" => "$hi"."＋"."$yu", "機操神" => "$mo", "大海神" => "$mi", "瞑想神" => "$ho", "三蔵一行" => "$yaho", "大地神" => "$hiho", "業断神" => "$kiho", "耀冥妃" => "$miho", "黄泉神" => "$hoho", "全能神" => "$pu", "勇将軍" => "$yu", "重剣龍" => "200万コイン"); //8
$kourinhousyuu9  = array("灼冥魔" => "$pu"."+"."$ya", "騎龍王" => "$hi"."＋"."1000万コイン", "幻龍王" => "$mo"."+"."5,000友情ポイント", "機操神" => "$mi", "神王殿" => "$ho", "継界龍" => "$sen"."☆闇ダメージ軽減", "凍冥魔" => "$sen"."☆光ダメージ軽減", "迎海神" => "$sen"."☆木ダメージ軽減", "美周郎" => "$sen"."☆水ダメージ軽減", "創樹妃" => "$sen"."☆火ダメージ軽減", "冥護神" => "$sen"."☆操作時間延長", "遊楽魔" => "$sen"."☆HP強化", "魔公子" => "$sen"."☆攻撃強化", "海澪神" => "$sen"."☆回復強化", "魔炎妃" => "$sen"."☆自動回復", "狂皇子" => "$yaho", "義愛龍" => "$hiho", "煌女神" => "$kiho", "聖女神" => "$miho", "全能神" => "$hoho", "修験者" => "$do"."ブルー", "大義賊" => "$pu", "屍霊龍" => "$ta", "神王妃" => "5,000友情ポイント", "双勇者" => "500万コイン"); //9
$kourinhousyuu10 = array("妃の宴" => "$ya", "天魔界" => "$hi", "神世界" => "$mo", "黒冥姫" => "$mi", "終炎者" => "$ho", "魔導姫" => "$yaho", "求魂師" => "$hiho", "黄泉神" => "$kiho", "天地神" => "$miho", "星知神" => "$hoho", "氷零妃" => "$pu", "剛戦神" => "$yu", "武刀神" => "200万コイン"); //10
$kourinhousyuu11 = array("灼冥魔" => "$ya"."+"."$pu", "騎龍王" => "$hi"."+"."1000万コイン", "幻龍王" => "$mo"."+"."6000友情ポイント", "機操神" => "$mi", "神王殿" => "$ho", "継界龍" => "$ya", "凍冥魔" => "$hi", "迎海神" => "$mo", "黒冥姫" => "$mi", "終炎者" => "$ho", "白番神" => "$sen"."☆闇ダメージ軽減", "大地神" => "$sen"."☆光ダメージ軽減", "聖舶神" => "$sen"."☆木ダメージ軽減", "美周郎" => "$sen"."☆水ダメージ軽減", "創樹妃" => "$sen"."☆火ダメージ軽減", "冥護神" => "$sen"."☆操作時間延長", "游楽魔" => "$sen"."☆HP強化", "魔公子" => "$sen"."☆攻撃強化", "海澪神" => "$sen"."☆回復強化", "魔炎妃" => "$sen"."☆自動回復", "狂皇子" => "$yaho", "義愛龍" => "$hiho", "煌女神" => "$kiho", "聖女神" => "$miho", "全能神" => "$hoho", "修験者" => "$do"."ブルー", "大泥棒" => "$pu", "屍霊龍" => "たまドラ(HP+6、攻撃+6、回復＋6)", "暗黒の女神" => "6,000友情ポイント", "双勇者" => "600万コイン"); //11
$kourinhousyuu12 = array("海龍王" => "$ya"."+"."1千万コイン", "幻龍王" => "$hi"."+"."5,000友情P", "凍冥魔" => "$mo", "月光姫" => "$mi", "大海神" => "$ho", "業断神" => "$ya", "迎界神" => "$hi", "山守神" => "$mo", "美周郎" => "$mi", "瞑奏神" => "$ho", "天地神" => "$yaho", "魔公子" => "$hiho", "魔導姫" => "$kiho", "耀冥妃" => "$miho", "大魔王" => "$hoho", "義愛龍" => "$yaho", "重剣龍" => "$hiho", "求魂師" => "$kiho", "大地神" => "$miho", "剛戦神" => "$hoho", "星知神" => "$do"."ブラン(光)", "武刀神" => "$pu", "氷零妃" => "$ta0", "大義賊" => "5,000友情P", "暗黒の女神" => "500万コイン"); //12


echo "<br>";
?>

<table border="1">
<?php
echo "<br>第１回降臨チャレンジ<br>";
echo "開催日:2014年12/12~12/25  約";
echo round ($ko011);
echo ('~');
echo round ($ko012);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第2回降臨チャレンジ<br>";
echo "開催日:2014年12/26~1/4  約";
echo round ($ko021);
echo ('~');
echo round ($ko022);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu2 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第3回降臨チャレンジ<br>";
echo "開催日:2015年2/23~3/1  約";
echo round ($ko031);
echo ('~');
echo round ($ko032);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu3 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第4回降臨チャレンジ<br>";
echo "開催日:2015年5/18~5/24  約";
echo round ($ko041);
echo ('~');
echo round ($ko042);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu4 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第5回降臨チャレンジ<br>";
echo "開催日:2015年6/5~6/11  約";
echo round ($ko051);
echo ('~');
echo round ($ko052);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu5 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第6回降臨チャレンジ<br>";
echo "開催日:2015年7/10~7/20  約";
echo round ($ko061);
echo ('~');
echo round ($ko062);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu6 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第7回降臨チャレンジ<br>";
echo "開催日:2015年8/17~8/23  約";
echo round ($ko071);
echo ('~');
echo round ($ko072);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu7 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第8回降臨チャレンジ<br>";
echo "開催日:2015年9/21~9/27  約";
echo round ($ko081);
echo ('~');
echo round ($ko082);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu8 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第9回降臨チャレンジ<br>";
echo "開催日:2015年10/5~10/12  約";
echo round ($ko091);
echo ('~');
echo round ($ko092);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu9 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第10回降臨チャレンジ<br>";
echo "開催日:2015年10/26~11/3  約";
echo round ($ko101);
echo ('~');
echo round ($ko102);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu10 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第11回降臨チャレンジ<br>";
echo "開催日:2015年11/20~12/6  約";
echo round ($ko111);
echo ('~');
echo round ($ko112);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu11 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>第12回降臨チャレンジ<br>";
echo "開催日:2015年12/21~12/27  約";
echo round ($ko121);
echo ('~');
echo round ($ko122);
echo "日前<br>";
echo "<tr><th>ダンジョン</th><th>報酬</th></tr>";
   foreach ($kourinhousyuu12 as $k => $v) {
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
