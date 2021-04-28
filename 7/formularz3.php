<form action="formularz3.php"  method="GET">
<table><tr><td><label for="wypelnij"></label></td></tr>
<tr><td>Podaj dane osobowe pierwszej osoby; </td></tr>
<tr><td>Imie: *<INPUT REQUIRED TYPE="TEXT" name="imie0"></td></tr>
<tr><td>nazwisko: *<INPUT REQUIRED TYPE="TEXT" name="nazwisko0"></td></tr>
<tr><td>Adres: *<INPUT REQUIRED TYPE="TEXT" name="adres0"></td></tr>
<tr><td>wiek <INPUT  TYPE="TEXT" name="wiek0"></td></tr>
<tr><td><input type="radio" name="plec0" value="Mezczyzna"> Mezczyzna<td></tr>
<tr><td><input type="radio" name="plec0" value="Kobieta"> Kobieta<td></tr>
<tr><td>Podaj dane osobowe drugiej osoby; </td></tr>
<tr><td>Imie: *<INPUT REQUIRED TYPE="TEXT" name="imie1"></td></tr>
<tr><td>nazwisko: *<INPUT REQUIRED TYPE="TEXT" name="nazwisko1"></td></tr>
<tr><td>Adres: *<INPUT REQUIRED TYPE="TEXT" name="adres1"></td></tr>
<tr><td>wiek <INPUT  TYPE="TEXT" name="wiek1"></td></tr>
<tr><td><input type="radio" name="plec1" value="Mezczyzna"> Mezczyzna<td></tr>
<tr><td><input type="radio" name="plec1" value="Kobieta"> Kobieta<td></tr>
<tr><td>Podaj dane osobowe trzeciej osoby; </td></tr>
<tr><td>Imie: *<INPUT REQUIRED TYPE="TEXT" name="imie2"></td></tr>
<tr><td>nazwisko: *<INPUT REQUIRED TYPE="TEXT" name="nazwisko2"></td></tr>
<tr><td>Adres: *<INPUT REQUIRED TYPE="TEXT" name="adres2"></td></tr>
<tr><td>wiek <INPUT  TYPE="TEXT" name="wiek2"></td></tr>
<tr><td><input type="radio" name="plec2" value="Mezczyzna"> Mezczyzna<td></tr>
<tr><td><input type="radio" name="plec2" value="Kobieta"> Kobieta<td></tr>

<tr><td><INPUT TYPE=SUBMIT NAME="przyciskk" VALUE="wyslij"></td></tr>
</FORM>
</table>
<a href="podsumowanie.php"><input type="button" value="przejdz do podsumowania"/></a>
<?php
session_start();
for($i=0;$i<3;$i++){
		if(isset($_GET["imie$i"])&&	isset($_GET["nazwisko$i"])&&isset($_GET["adres$i"])){
		$_SESSION["imie$i"] = $_GET["imie$i"];
		$_SESSION["nazwisko$i"] = $_GET["nazwisko$i"];
		$_SESSION["adres$i"] = $_GET["adres$i"];
		if(isset($_GET["wiek$i"])){
			$_SESSION["wiek$i"] = $_GET["wiek$i"];
		}
		else{
			$_SESSION["wiek$i"] = "brak";
		}
		if(isset($_GET["plec$i"])){
			$_SESSION["plec$i"] = $_GET["plec$i"];
		}
		else{
			$_SESSION["plec$i"] = "brak";
		}
	}
	}
?>