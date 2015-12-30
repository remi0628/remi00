<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
  <h1>パズドラメール報酬 まとめ</h1>
  </form>


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


$a  = (($today - strtotime('2014-10-13'))/(60*60*24));
$a1 = (($today - strtotime('2014-10-8'))/(60*60*24));  //第1回チャレダン
$b  = (($today - strtotime('2014-11-9'))/(60*60*24));
$b1 = (($today - strtotime('2014-11-5'))/(60*60*24));  //第2回チャレダン
$c  = (($today - strtotime('2014-12-7'))/(60*60*24));
$c1 = (($today - strtotime('2014-11-29'))/(60*60*24));  //第3回チャレダン
$d  = (($today - strtotime('2015-1-4'))/(60*60*24));
$d1 = (($today - strtotime('2014-12-26'))/(60*60*24));  //第4回チャレダン
$e  = (($today - strtotime('2015-1-18'))/(60*60*24));
$e1 = (($today - strtotime('2015-1-12'))/(60*60*24));  //第5回チャレダン
$f  = (($today - strtotime('2015-2-3'))/(60*60*24));
$f1 = (($today - strtotime('2015-1-26'))/(60*60*24));  //第6回チャレダン
$g  = (($today - strtotime('2015-2-15'))/(60*60*24));
$g1 = (($today - strtotime('2015-2-9'))/(60*60*24));  //第7回チャレダン
$h  = (($today - strtotime('2015-3-1'))/(60*60*24));
$h1 = (($today - strtotime('2015-2-23'))/(60*60*24)); //第8回チャレダン
$i  = (($today - strtotime('2015-3-15'))/(60*60*24));
$i1 = (($today - strtotime('2015-3-9'))/(60*60*24));  //第９回チャレダン
$j  = (($today - strtotime('2015-3-29'))/(60*60*24));
$j1 = (($today - strtotime('2015-3-23'))/(60*60*24)); //第１０回チャレダン  「K」は無いので注意。
$n  = (($today - strtotime('2015-4-5'))/(60*60*24));
$n1 = (($today - strtotime('2015-3-30'))/(60*60*24)); //第１１回チャレダン
$m  = (($today - strtotime('2015-4-19'))/(60*60*24));
$m1 = (($today - strtotime('2015-4-13'))/(60*60*24)); //第１２回チャレダン  「L」は無いので注意。
$o  = (($today - strtotime('2015-5-1'))/(60*60*24));
$o1 = (($today - strtotime('2015-4-24'))/(60*60*24)); //第１３回チャレダン
$p  = (($today - strtotime('2015-6-4'))/(60*60*24));
$p1 = (($today - strtotime('2015-5-29'))/(60*60*24)); //第１４回チャレダン
$q  = (($today - strtotime('2015-6-21'))/(60*60*24));
$q1 = (($today - strtotime('2015-6-12'))/(60*60*24)); //第１５回チャレダン
$r  = (($today - strtotime('2015-7-5'))/(60*60*24));
$r1 = (($today - strtotime('2015-6-26'))/(60*60*24)); //第１６回チャレダン
$s  = (($today - strtotime('2015-8-2'))/(60*60*24));
$s1 = (($today - strtotime('2015-7-25'))/(60*60*24)); //第１７回チャレダン
$t  = (($today - strtotime('2015-8-16'))/(60*60*24));
$t1 = (($today - strtotime('2015-8-7'))/(60*60*24));  //第１８回チャレダン
$u  = (($today - strtotime('2015-9-20'))/(60*60*24));
$u1 = (($today - strtotime('2015-9-14'))/(60*60*24)); //第１９回チャレダン  「V」は無いので注意。
$w  = (($today - strtotime('2015-10-12'))/(60*60*24));
$w1 = (($today - strtotime('2015-9-28'))/(60*60*24)); //第２０回チャレダン
$x  = (($today - strtotime('2015-10-25'))/(60*60*24));
$x1 = (($today - strtotime('2015-10-19'))/(60*60*24)); //第２1回チャレダン
$y  = (($today - strtotime('2015-11-15'))/(60*60*24));
$y1 = (($today - strtotime('2015-11-6'))/(60*60*24)); //第２２回チャレダン
$z  = (($today - strtotime('2015-12-20'))/(60*60*24));
$z1 = (($today - strtotime('2015-12-11'))/(60*60*24)); //第２３回チャレダン

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


$h101 = (($today - strtotime('2015-2-8'))/(60*60*24));
$h102 = (($today - strtotime('2015-2-2'))/(60*60*24)); //第１回ヘラチャレンジ
$h111 = (($today - strtotime('2015-4-26'))/(60*60*24));
$h112 = (($today - strtotime('2015-4-20'))/(60*60*24)); //第２回ヘラチャレンジ
$h121 = (($today - strtotime('2015-7-26'))/(60*60*24));
$h122 = (($today - strtotime('2015-7-21'))/(60*60*24)); //第３回ヘラチャレンジ

$z101 = (($today - strtotime('2015-2-22'))/(60*60*24));
$z102 = (($today - strtotime('2015-2-16'))/(60*60*24)); //第１回ゼウスチャレンジ

$z121 = (($today - strtotime('2015-8-9'))/(60*60*24));
$z122 = (($today - strtotime('2015-8-3'))/(60*60*24)); //第3回ゼウスチャレンジ

$d101 = (($today - strtotime('2015-3-8'))/(60*60*24));
$d102 = (($today - strtotime('2015-3-2'))/(60*60*24)); //第1回デビルチャレンジ
$d111 = (($today - strtotime('2015-5-31'))/(60*60*24));
$d112 = (($today - strtotime('2015-5-25'))/(60*60*24)); //第2回デビルチャレンジ

$g101 = (($today - strtotime('2015-3-22'))/(60*60*24));
$g102 = (($today - strtotime('2015-3-16'))/(60*60*24)); //第1回ドラゴンチャレンジ
$g111 = (($today - strtotime('2015-6-28'))/(60*60*24));
$g112 = (($today - strtotime('2015-6-22'))/(60*60*24)); //第2回ドラゴンチャレンジ



$housyuu   = array("$l10" => $ya, "$l9" => $hi, "$l8" => $mo, "$l7" => $mi, "$l6" => $ho, "$l5" => $do."ブラウン（光）", "$l4" => $ta, "$l3" => $qgo, "$l2" => $qme, "$l1" => $ko); //1
$housyuu2  = array("$l10" => $ho, "$l9" => $mi, "$l8" => $mo, "$l7" => $hi, "$l6" => $ya, "$l5" => $do."ブラウン（光）", "$l4" => $ta, "$l3" => $qgo, "$l2" => $qme, "$l1" => $ko); //2
$housyuu3  = array("$l10" => $ya, "$l9" => $ho, "$l8" => $mi, "$l7" => $mo, "$l6" => $hi, "$l5" => $do."ルージュ(火)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $sa, "$l1" => $ko); //3
$housyuu4  = array("$l10" => $hi, "$l9" => $ya, "$l8" => $ho, "$l7" => $mi, "$l6" => $mo, "$l5" => $do."ブルー(水)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //4
$housyuu5  = array("$l10" => $mo, "$l9" => $hi, "$l8" => $ya, "$l7" => $ho, "$l6" => $mi, "$l5" => $do."ヴェール(木)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //5
$housyuu6  = array("$l10" => $mi, "$l9" => $mo, "$l8" => $hi, "$l7" => $ya, "$l6" => $ho, "$l5" => $do."ブラン(光/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //6
$housyuu7  = array("$l10" => $ho, "$l9" => $mi, "$l8" => $mo, "$l7" => $hi, "$l6" => $ya, "$l5" => $do."ノワール(闇/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //7
$housyuu8  = array("$l10" => $ya, "$l9" => $ho, "$l8" => $mi, "$l7" => $mo, "$l6" => $hi, "$l5" => $do."ルージュ(火/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //8
$housyuu9  = array("$l10" => $hi, "$l9" => $ya, "$l8" => $ho, "$l7" => $mi, "$l6" => $mo, "$l5" => $do."ブルー(水/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //9
$housyuu10 = array("$l10" => $mo, "$l9" => $hi, "$l8" => $ya, "$l7" => $ho, "$l6" => $mi, "$l5" => $do."ヴェール(木/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //10
$housyuu11 = array("$l10" => $mi, "$l9" => $mo, "$l8" => $hi, "$l7" => $ya, "$l6" => $ho, "$l5" => $do."ブラン(光/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //11
$housyuu12 = array("$l10" => $ho, "$l9" => $mi, "$l8" => $mo, "$l7" => $hi, "$l6" => $ya, "$l5" => $do."ノワール(闇/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //12
$housyuu13 = array("$l10" => $ya, "$l9" => $ho, "$l8" => $mi, "$l7" => $mo, "$l6" => $hi, "$l5" => $do."ルージュ(火/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //13
$housyuu14 = array("$l10" => $hi, "$l9" => $ya, "$l8" => $ho, "$l7" => $mi, "$l6" => $mo, "$l5" => $do."ブルー(水/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //14
$housyuu15 = array("$l10" => $mo, "$l9" => $hi, "$l8" => $ya, "$l7" => $ho, "$l6" => $mi, "$l5" => $do."ヴェール(木/Lv25)", "$l4" => $ta, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //15
$housyuu16 = array("$l10" => "たまドラ(HP+30)", "$l9" => "たまドラ(攻撃+30)", "$l8" => "たまドラ(回復+30)", "$l7" => $hoho, "$l6" => $miho, "$l5" => $kiho, "$l4" => $do."ブラン(光/Lv25)", "$l3" => $ta0, "$l2" => $yu, "$l1" => $ko); //16
$housyuu17 = array("$l10" => $mi, "$l9" => $mo, "$l8" => $hi, "$l7" => $ya, "$l6" => $ho, "$l5" => $sen."(操作時間延長)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //17
$housyuu18 = array("$l10" => $ho, "$l9" => $mi, "$l8" => $mo, "$l7" => $hi, "$l6" => $ya, "$l5" => $do."ブルー(水/Lv25)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //18
$housyuu19 = array("$l10" => $ya, "$l9" => $ho, "$l8" => $mi, "$l7" => $mo, "$l6" => $hi, "$l5" => $do."ヴェール(木)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //19
$housyuu20 = array("$l10" => $hi, "$l9" => $ya, "$l8" => $ho, "$l7" => $mi, "$l6" => $mo, "$l5" => $do."ブラン(光/Lv25)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //20
$housyuu21 = array("$l10" => $mo, "$l9" => $hi, "$l8" => $ya, "$l7" => $ho, "$l6" => $mi, "$l5" => $do."ノワール(闇)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //21
$housyuu22 = array("$l10" => $mi, "$l9" => $mo, "$l8" => $hi, "$l7" => $ya, "$l6" => $ho, "$l5" => $do."ルージュ(火)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //22
$housyuu23 = array("$l10" => $ho, "$l9" => $mi, "$l8" => $mo, "$l7" => $hi, "$l6" => $ya, "$l5" => $do."ヴェール(木/Lv25)", "$l4" => $pu, "$l3" => $qgo, "$l2" => $yu, "$l1" => $ko); //23



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


$herahousyuu  = array("妃の宴" => $yaho."、".$do."ルージュ、".$do."ブルー", "耀冥妃" => $hiho, "創樹妃" => $kiho, "魔炎妃" => $hoho, "氷零妃" => $miho, "神王妃" => $yu); //1
$herahousyuu2 = array("妃の宴" => $yaho."、".$do."ルージュ、".$do."ブルー", "耀冥妃" => $hiho, "創樹妃" => $kiho, "魔炎妃" => $hoho, "氷零妃" => $miho, "神王妃" => $yu); //2
$herahousyuu3 = array("妃の宴" => $yaho."、".$do."ルージュ、".$do."ブルー", "耀冥妃" => $hiho, "創樹妃" => $kiho, "魔炎妃" => $hoho, "氷零妃" => $miho, "神王妃" => $yu); //3

$zeusuhousyuu  = array("新世界" => $yaho."、".$do."ヴェール、".$do."ブラン", "海澪神" => $miho, "業断神" => $hoho, "天地神" => $kiho, "全能神" => $hiho, "神王妃" => $yu); //1
$zeusuhousyuu3 = array("新世界" => $yaho."、".$do."ヴェール、".$do."ブラン", "海澪神" => $miho, "業断神" => $hoho, "天地神" => $kiho, "全能神" => $hiho, "神王妃" => $yu); //3

$debiruhousyuu   = array("天魔界" => $yaho."、".$do."ルージュ、".$do."ノワール", "魔導姫" => $kiho, "求魂師" => $hiho, "狂皇子" => $miho, "大魔王" => $hoho, "屍霊龍" => $yu); //1
$debiruhousyuu2  = array("天魔界" => $yaho."、".$do."ルージュ、".$do."ノワール", "魔導姫" => $kiho, "求魂師" => $hiho, "狂皇子" => $miho, "大魔王" => $hoho, "屍霊龍" => $yu); //2

$doragonhousyuu   = array("真龍界" => $yaho."、".$do."ブルー、".$do."ヴェール", "継界龍" => $miho, "沖天の星龍" => $hiho, "聖峰の嵐龍" => $kiho, "重剣龍" => $hoho, "緋石の刃龍" => $yu); //1
$doragonhousyuu2  = array("真龍界" => $yaho."、".$do."ブルー、".$do."ヴェール", "継界龍" => $miho, "沖天の星龍" => $hiho, "聖峰の嵐龍" => $kiho, "重剣龍" => $hoho, "緋石の刃龍" => $yu); //1

//$housyuu = array("$l10" => $, "$l9" => $, "$l8" => $, "$l7" => $, "$l6" => $, "$l5" => $do.(), "$l4" => $ta, "$l3" => $qgo, "$l2" => $qme, "$l1" => $ko); //



echo "<br>";

echo "日数は自動でカウントして表示しています。<br>";
echo "表記にミスがあったら下のご意見BOXにてお知らせください。<br>";
echo "<br>";
?>

<a href="all.php">メール報酬　全表示（日付け順）</a>

<?php
echo "<br><br><br>";
?>


<form name="formChecker">
<input type="radio" name="rbtn" value="housyu"> チャレンジダンジョン<br>
<input type="radio" name="rbtn" value="kourinhousyuu" checked> 降臨チャレンジ<br>
<input type="radio" name="rbtn" value="herahousyuu" checked> ヘラチャレンジ<br>
<input type="radio" name="rbtn" value="zeusuhousyuu" checked> ゼウスチャレンジ<br>
<input type="radio" name="rbtn" value="debiruhousyuu" checked> デビルチャレンジ<br>
<input type="radio" name="rbtn" value="doragonhousyuu" checked> ドラゴンチャレンジ<br>
<input type="button" value="送信" onClick="check()">
</form>


<script type="text/javascript">
function check() {
	var rcheck = document.formChecker.rbtn[0].checked; //ラジオボタンrbtnの１つ目（rbtn[0]）の状態を取得
	//rcheckの内容がtrue（ボタンが押されている状態）かどうかで条件分岐
	if (rcheck) {
		document.location = "housyuu.php";

	} 
	var rcheck = document.formChecker.rbtn[1].checked; 
	if (rcheck) {
		document.location = "kourinhousyuu.php";

	} 
	var rcheck = document.formChecker.rbtn[2].checked; 
	if (rcheck) {
		document.location = "herahousyuu.php";

	}
	var rcheck = document.formChecker.rbtn[3].checked; 
	if (rcheck) {
		document.location = "zeusuhousyuu.php";

	}
	var rcheck = document.formChecker.rbtn[4].checked; 
	if (rcheck) {
		document.location = "debiruhousyuu.php";

	}
	var rcheck = document.formChecker.rbtn[5].checked; 
	if (rcheck) {
		document.location = "doragonhousyuu.php";

	}



}
</script>

<?php
echo "<br>";
?>

<a href="iken.php">ご意見BOXはこちら</a>

<?php
  $last_modified = filemtime("index.php") ; 
  print "<br><br>最終更新日 ";
  print date("Y/m/d H:i:s", $last_modified); 
?>

</body>
