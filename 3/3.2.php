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
<p></p>
</FORM>
</table>
<?php

if(isset($_GET['wybor'])&&isset($_GET['imie'])&&isset($_GET['nazwisko'])&&isset($_GET['email'])&&isset($_GET['pobyt'])){
	echo "podsumowanie: <br>";
	echo "liczba osob:",$_GET['wybor'],"<br>";
	echo "Imie:",$_GET['imie'],"<br>";
	echo "Nazwisko:",$_GET['nazwisko'],"<br>";
	echo "Email;",$_GET['email'],"<br>";
	echo "Pobyt:",$_GET['pobyt'],"<br>";
	if (isset($_GET['adres'])){
		echo "Adres:",$_GET['adres'],"<br>";
	}
	else{
		echo "Brak:";
	}
	if (isset($_GET['godzina'])){
		echo "godzina przyjazdu:",$_GET['godzina'],"<br>";
	}
	else{
		echo "Brak godziny przyjazdu:","<br>";
	}
	if (isset($_GET['dziecko'])){
		echo "Dodatkowe lozko dla dziecka: TAK","<br>";
	}
	else{
		echo "Dodatkowe lozko dla dziecka: NIE","<br>";
	}
	if (isset($_GET['udogodnienia'])){
		echo "Dodatkowe udogodnienia:",$_GET['udogodnienia'],"<br>";
	}
}

?>

</body>
</html>