<!DOCTYPE html>
<zad 2>
<html>

<head>
	<title>zadanie 2</title>
</head>
<body>
<FORM ACTION="index.php" method="get">
<table>
<tr>
<td><label for="rezerwacja"></label></td>
</tr>
<td>
wybierz ilosc osob *:
<SELECT NAME="wybor">
<OPTION VALUE="jedna">1 osoba</option>
<OPTION VALUE="dwie">2 osoby</option>
<OPTION VALUE="trzy">3 osoby</option>
<OPTION VALUE="cztery">4 osoby</option>
</SELECT>
</td>
</tr>
<tr>
<td>Podaj dane osobowe:</td>
</tr>
<tr>
<td>Imie: *<INPUT REQUIRED TYPE="TEXT" name="imie"></td>
</tr>
<tr>
<td>nazwisko: *<INPUT REQUIRED TYPE="TEXT" name="nazwisko"></td>
</tr>

<tr>
<td>Adres: <INPUT  TYPE="TEXT" name="adres"></td>
</tr>
<tr>
<td>Email: *<INPUT REQUIRED TYPE="email" name="email"></td>
</tr>
<tr>
<td>data pobytu: * <INPUT REQUIRED TYPE="date" name="pobyt"></td>
</tr>
<tr>
<td>godzina przyjazdu: <INPUT  TYPE="time" name="godzina"></td>
</tr>
<tr>
<td>dodatkowe lozko dla dziecka <INPUT TYPE=RADIO name="dziecko"></td>
</tr> 
<tr>
<td>dodatkowe udogodnienia</td></tr>
<tr><td><SELECT NAME="udogodnienia">
<OPTION VALUE="BRAK">BRAK</OPTION>
<OPTION VALUE="popielniczka">popielniczka</OPTION>
<OPTION VALUE="klimatyzacja">klimatyzacja</OPTION>
</SELECT>
</td></tr>
<tr><td><INPUT TYPE=SUBMIT NAME="przycisk" VALUE="wyslij"></td></tr>
<tr><td><input type="button" NAME="wyswietlanie" value="pokaz dane"></td></tr> 
<p></p>
</FORM>
</table>
<?php

if(isset($_GET['wybor'])&&isset($_GET['imie'])&&isset($_GET['nazwisko'])&&isset($_GET['email'])&&isset($_GET['pobyt'])){
	$szablon = array(array('ilosc osob', 'Imie', 'Nazwisko','AdresEmail', 'data', 'pobytu', 'adres', 'godzina', 'przyjazdu', 'dodatkowe lozko', 'udogodnienia'));
	$fd = fopen("zadanie.csv",'w');
	foreach ($szablon as $linia){
		fputcsv(
		$fd,
		$linia,
		':');
	}
	fclose($fd);
	$dane= array(array($_GET['wybor'],$_GET['imie'],$_GET['nazwisko'],$_GET['email'],$_GET['pobyt']));
	$zapis = fopen("zadanie.csv",'a+');
	
	if (isset($_GET['adres'])){
		$dane[0][4]=$_GET['adres'];
	}
	else{
		fwrite($zapis,":brak");
		$dane[0][4]='brak';
		echo $dane[0][4]='brak';
	}
	if (isset($_GET['godzina'])){
		$dane[0][5]=$_GET['godzina'];
	}
	else{
		$dane[0][5]='brak';
	}
	if (isset($_GET['dziecko'])){
		$dane[0][6]='tak';
	}
	else{
		$dane[0][6]='nie';
	}
	if (isset($_GET['udogodnienia'])){
		$dane[0][7]=$_GET['udogodnienia'];
	}
	foreach ($dane as $druga){
		fputcsv(
		$zapis,
		$druga,
		':');
	fclose($zapis);
	$otwieranie = fopen("zadanie.csv","r");
	$pokaz = file('zadanie.csv');
	foreach($pokaz as $tab => $val){
		$text = nl2br("$tab. $val");
		echo $text;
	}
	if(isset($_GET['wyswietlanie'])){
		$rowNumber = 1;
 
}
}
}
?>

</body>
</html>