<!DOCTYPE html>
<zad 1>
<html>

<head>
	<title>zadanie 1</title>
</head>
<body>
<FORM ACTION="index.php" method="get">
<p>Podaj dwie liczby:</p>
<INPUT TYPE="VALUE" name="pierwsza"></br></br>
<INPUT TYPE="VALUE" name="druga"></br></br>
<SELECT NAME="wybor">
<OPTION VALUE="dodawanie">dodawanie</option>
<OPTION VALUE="mnozenie">mnozenie</option>
<OPTION VALUE="dzielenie">dzielenie</option>
<p></p>
<INPUT TYPE=SUBMIT NAME="przycisk" VALUE="wyslij">
</FORM>

<?php

if(isset($_GET['pierwsza'])&&isset($_GET['druga'])&&isset($_GET['wybor'])){
	if ($_GET['wybor']=="dodawanie"){
		echo "wynik dodawania wynosi:",$_GET['pierwsza']+$_GET['druga'];
	}
	elseif ($_GET['wybor']=="mnozenie"){
		echo "wynik mnozenia wynosi:",$_GET['pierwsza']*$_GET['druga'];
	}
	elseif ($_GET['wybor']=="dzielenie"){
		echo "wynik dzielenia wynosi:",$_GET['pierwsza']/$_GET['druga'];
	}
}
?>
</body>
</html>