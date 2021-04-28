<?php
session_start();
for($j=0;$j<$_SESSION['wybor'];$j++){
	echo ("dane osoby: ". ($j+1)."<br>");
	echo ("imie :". $_SESSION["imie$j"]."<br>");
	echo ("nazwisko :". $_SESSION["nazwisko$j"]."<br>");
	echo ("adres :". $_SESSION["adres$j"]."<br>");
	echo ("wiek :". $_SESSION["wiek$j"]."<br>");
	echo ("plec :". $_SESSION["plec$j"]."<br>");
}
	echo ("dodatkowe dane osoby rezerwujacej"."<br>");
	echo ("email osoby zamawiajacej :". $_SESSION['email']."<br>");
	echo ("data pobytu :". $_SESSION['pobyt']."<br>");
	echo ("godzina przyjazdu :". $_SESSION['godzina_przyjazdu']."<br>");
	echo ("dodatkowe miejsce dla dziecka :". $_SESSION['dziecko']."<br>");
	echo ("dodatkowe udogodnienia :". $_SESSION['udogodnienia']."<br>");
	
	
session_destroy();
?>


