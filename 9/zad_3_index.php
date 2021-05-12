<?php
$servername = "localhost";
$username = "root";
$password = "";


if (!$conn = mysqli_connect($servername, $username, $password)) {
  exit('nie udalo sie polaczyc<br />');
}
else{
echo 'polaczono z baza<br />';
}


if(!mysqli_select_db($conn,'test')){
	echo 'wystapil bblad podczas wyboru bazy danych<br />';
}
else{
	echo 'udalo sie wybbrac baze<br />';
}
$zapytanie = 'SELECT * FROM klient';
if(!$wynik=mysqli_query ($conn,$zapytanie)){
mysql_close($conn);
echo 'Wystapil bbład';
exit;
}	
	
?>
<table><tr>
<td> polecenie mysqli_fetch_row</td></tr>
<tr><td>pesel</td>
<td>imie</td>
<td>nazwisko</td>
<?php
while($row = mysqli_fetch_row($wynik)){
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
}
?>
</table>
<table><tr>
<td> polecenie mysqli_fetch_array</td></tr>
<tr><td>pesel</td>
<td>imie</td>
<td>nazwisko</td>
<?php

$zapytanie = 'SELECT * FROM klient';
if(!$wynik=mysqli_query ($conn,$zapytanie)){
mysql_close($conn);
echo 'Wystapil bbład';
exit;
}	
while($ass = mysqli_fetch_array($wynik, MYSQLI_NUM)){
	echo "<tr>";
	echo "<td>$ass[0]</td>";
	echo "<td>$ass[1]</td>";
	echo "<td>$ass[2]</td>";
}
?>
</table>
<table><tr>
<td> polecenie mysqli_num_rows</td></tr>
<tr><td>
<?php
$zapytanie = 'SELECT * FROM klient';
if(!$wynik=mysqli_query ($conn,$zapytanie)){
mysql_close($conn);
echo 'Wystapil bbład';
exit;
}	
$numrows = mysqli_num_rows($wynik);
echo "$numrows wierszy\n"

	
?>
</td></tr>
</table>
<table>
<tr><td>Polecenie INSERT INTO</td></tr>
<tr><td>
<?php
$zapytanie = "INSERT INTO `klient`(`pesel`, `imie`, `nazwisko`) VALUES ('195239','Tomcio','Polanski')";
if(!$wynik=mysqli_query ($conn,$zapytanie)){
echo 'Wystapil bbład';
exit;
}
else{
	echo 'udało sie wykonac polecenie INSERT INTO';
}
