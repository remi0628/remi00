<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <h2>メール報酬 降臨チャレンジ一覧</h2>
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

echo "<br><br>";
?>

<table border="1"> 　
<?php
echo "チャレンジダンジョン第1回目<br>";
echo "開催日:2014年10/8~10/13  約";
echo round ($a);
echo ('~');
echo round ($a1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第2回目<br>";
echo "開催日:2014年11/9~11/5  約";
echo round ($b);
echo ('~');
echo round ($b1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu2 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }

?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第3回目<br>";
echo "開催日:2014年11/29~12/7　 約";
echo round ($c);
echo ('~');
echo round ($c1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu3 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第4回目<br>";
echo "開催日:2014年12/26~1/4  約";
echo round ($d);
echo ('~');
echo round ($d1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu4 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第5回目<br>";
echo "開催日:2015年1/12~1/18  約";
echo round ($e);
echo ('~');
echo round ($e1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu5 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第6回目<br>";
echo "開催日:2015年1/26~2/3  約";
echo round ($f);
echo ('~');
echo round ($f1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu6 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第7回目<br>";
echo "開催日:2015年2/9~2/15  約";
echo round ($g);
echo ('~');
echo round ($g1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu7 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第8回目<br>";
echo "開催日:2015年2/23~3/1  約";
echo round ($h);
echo ('~');
echo round ($h1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu8 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第9回目<br>";
echo "開催日:2015年3/9~3/15  約";
echo round ($i);
echo ('~');
echo round ($i1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu9 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第10回目<br>";
echo "開催日:2015年3/23~03/29  約";
echo round ($j);
echo ('~');
echo round ($j1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu10 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第11回目<br>";
echo "開催日:2015年3/30~04/05  約";
echo round ($n);
echo ('~');
echo round ($n1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu11 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第12回目<br>";
echo "開催日:2015年04/13~04/19  約";
echo round ($m);
echo ('~');
echo round ($m1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu12 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第13回目<br>";
echo "開催日:2015年04/24~05/1  約";
echo round ($o);
echo ('~');
echo round ($o1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu13 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第14回目<br>";
echo "開催日:2015年05/29~06/4  約";
echo round ($p);
echo ('~');
echo round ($p1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu14 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第15回目<br>";
echo "開催日:2015年06/12~6/21  約";
echo round ($q);
echo ('~');
echo round ($q1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu15 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第16回目<br>";
echo "開催日:2015年06/26~07/5  約";
echo round ($r);
echo ('~');
echo round ($r1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu16 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第17回目<br>";
echo "開催日:2015年07/25~08/2  約";
echo round ($s);
echo ('~');
echo round ($s1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu17 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第18回目<br>";
echo "開催日:2015年8/7~8/16  約";
echo round ($t);
echo ('~');
echo round ($t1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu18 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第19回目<br>";
echo "開催日:2015年9/14~9/20  約";
echo round ($u);
echo ('~');
echo round ($u1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu19 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第20回目<br>";
echo "開催日:2015年9/28~10/12  約";
echo round ($w);
echo ('~');
echo round ($w1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu20 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第21回目<br>";
echo "開催日:2015年10/19~10/25  約";
echo round ($x);
echo ('~');
echo round ($x1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu21 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第22回目<br>";
echo "開催日:2015年11/6~11/15  約";
echo round ($y);
echo ('~');
echo round ($y1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu22 as $k => $v) {
     echo "<tr><td>$k</td><td>$v</td></tr>";
   }
?>
</table>

<table border="1">
<?php
echo "<br>チャレンジダンジョン第23回目<br>";
echo "開催日:2015年12/11~12/20  約";
echo round ($z);
echo ('~');
echo round ($z1);
echo "日前<br>";
echo "<tr><th>Lv</th><th>報酬</th></tr>";
   foreach ($housyuu23 as $k => $v) {
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
