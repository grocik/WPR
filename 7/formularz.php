<!DOCTYPE html>
<zad>
<html>

<head>
	<title>zadanie</title>
</head>
<body>
<?php
session_start();
?>
<FORM ACTION="skrypt.php" method="get">
<table>
<tr>
<td><label for="rezerwacja"></label></td>
</tr>
<td>
wybierz ilosc osob *:
<SELECT NAME="wybor">
<OPTION VALUE="1">1 osoba</option>
<OPTION VALUE="2">2 osoby</option>
<OPTION VALUE="3">3 osoby</option>
<OPTION VALUE="4">4 osoby</option>
</SELECT>
</td>
</tr>
<tr>
<td>Podaj dane :</td>
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


</body>
</html>