<!DOCTYPE html>
<zad 1>
<html>

<head>
	<title>zadanie 1</title>
</head>
<body>
<FORM ACTION="index.php" method="get">
<p>napisz cos:</p>
<input TYPE=TEXT NAME="tekst"></br></br>
<p></p>
<INPUT TYPE=SUBMIT NAME="przycisk" VALUE="wyslij">
</FORM>

<?php
if(isset($_GET['tekst'])){
	$fd = fopen("dane.txt",'a+');
	fwrite($fd,$_GET['tekst']);
	fwrite($fd,"\n");
	fclose($fd);
}
$pokaz = file('dane.txt');
foreach($pokaz as $tab => $val){
		$text = nl2br("$tab. $val");
		echo $text;
}
?>
</body>
</html>