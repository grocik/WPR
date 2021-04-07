<!DOCTYPE html>
<zad 2>
<html>

<head>
	<title>zadanie 2</title>
</head>
<body>
<FORM ACTION="index.php" method="get">
<table><tr>
<td><label for="LiczbaPierwsza"></label></td>
</tr>
<tr>
<td>
podaj liczbe do sprawdzenia czy jest liczba pierwsza:</td>
</tr>
<tr>
<td><INPUT REQUIRED TYPE="VALUE" name="liczba"></td>
</tr>
<tr><td><INPUT TYPE=SUBMIT NAME="przycisk" VALUE="wyslij"></td></tr>
</FORM>
</table>
<?php
function liczbapierwsza($liczba) {
	$iteracje=0;
	$i = 2;
	$wynik = "jest";
	while($i < $liczba) {
		$iteracje++;
		if($liczba % $i == 0) {
			 $wynik="nie jest";
			 break;
		}
		$i++;
	}
	echo("podana liczba ".$wynik." liczba pierwsza"." liczba iteracji ".$iteracje);
}
if(isset($_GET['liczba'])){
	$liczba=$_GET['liczba'];
	liczbapierwsza($liczba);
}


?>
</body>
</html>