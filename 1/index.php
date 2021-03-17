zad 1 <br>

<?php
	function rzut_kostka()
	{
		$r = rand (1,6);
		echo("wyrzuciles ". $r);
	}
	rzut_kostka()
?>


<br> zad 2 <br>

<?php
	function srednica_kola()
	{
		$r = 14;
		echo("srednica kola wynosi ". $r*2);
	}
	srednica_kola()
?>
<br> zad 3 <br>

<?php
function cenzura($zdanie){
	$zakazane[] = "pomidor";
	$zakazane[] = "papryki";
	$zakazane[] = "baklarzan";

	foreach ($zakazane as $cenzurowanie){
			$zdanie = str_replace($cenzurowanie,"**",$zdanie);
		}
	return $zdanie;
}
$zdanie = "nie kazdy pomidor jest czerwony, tak jak nie wszytkie papryki sa zielone, ale przewarznie kazdy baklarzan jest fioletowy";
echo cenzura($zdanie);
?>
<br> zad 4 <br>
<?php
function pesel($zdanie){
  $rr = substr($zdanie,0,2);
  $mm = substr($zdanie,2,2);
  $dd = substr($zdanie,4,2);
 if ($mm <= 12){
	 echo ($dd. "-". $mm. "-19". $rr);
 }
 elseif ($mm <=32 && $mm >= 21){
	 if(($mm-20) <=9){
	 echo ($dd. "-0". ($mm - 20). "-20". $rr);
	 }
	 else{
	 echo($dd. "-". ($mm - 20). "-20". $rr);
	}
 }
 elseif ($mm <=52 && $mm >= 41){
	 if(($mm-40) <=9){
	 echo ($dd. "-0". ($mm - 40). "-21". $rr);
	 }
	 else{
	 echo($dd. "-". ($mm - 40). "-21". $rr);
	 }
 }
}
$zdanie = "812403PPP6K";
echo pesel($zdanie);
?>
<br> zad 5 <br>
<?php
function trojkat($a,$b){
	echo ("pole powierzchni trojkata wynosi ". (($a*$b)/2));
}
function prostokat($a,$b){
	
	echo ("pole powierzchni prostokata wynosi ". ($a*$b));
}
function trapez($a,$b,$c){
	echo ("pole powierzchni trapezu wynosi ". ((($a+$b)/2)*$c));
}
function kalkulator($wybor,$a,$b,$c){
	switch ($wybor){
		case 0: 
			trojkat($a,$b);
			break;
		case 1:
			prostokat($a,$b);
			break;
		case 2:
			trapez($a,$b,$c);
			break;
}
		
		
}
$a = 4;
$b = 5;
$c = 5;
$wybor = 2; // 0-trojkat 1-prostokat 2-trapez
kalkulator($wybor,$a,$b,$c);
?>