<br>zad 2.1<br>
<?php
 function lolo($wartosc)
    {
		$tabb[0] = 5;
		$tabb[1] = 7;
		$tabb[2] = 21;
		$tabb[3] = 14;
		$tabb[4] = 99;
		echo($tabb[$wartosc]);
	}
 $wartosc = 2;
 lolo($wartosc);
 
?>

<br>zad 2.2<br>

<?php
 $tabi["Polska"] = "Polak";
 $tabi["Niemcy"] = "Niemiec";
 $tabi["czechy"] = "Czech";
 $tabi["Finlandia"] = "Fin";
 $narodowosc = "Polska";
 echo($tabi[$narodowosc]);

?>

<br>zad 3.1<br>
<?php
  $tab[0] = rand(1,20);
  echo($tab[0]."\n");
  $tab[1] = rand(1,20);
  echo($tab[1]."\n");
  $tab[2] = rand(1,20);
  echo($tab[2]."\n");
  $tab[3] = rand(1,20);
  echo($tab[3]."\n");
  $tab[4] = rand(1,20);
  echo($tab[4]."\n");
  $max = $tab[0];
  echo("<br>");
  echo("najwieksza liczba w petli for ".petlafor($tab,$max)."\n");
  echo("<br>");
  echo("najwieksza liczba w petli while ".petlawhile($tab,$max)."\n");
  echo("<br>");
  echo("najwieksza liczba w petli dowhile ".dowhile($tab,$max)."\n");
  echo("<br>");
    echo("najwieksza liczba w petli foreach ".petlaforeach($tab,$max)."\n");
  
  function petlafor($tab,$max){
	  for($a = 0 ; $a<4 ;$a++){
    if($max<$tab[($a+1)]){
		$max = $tab[$a+1];
	}	  
  }
  return $max;
  }
  function petlawhile($tab,$max){
	   $a = 0;
	   while($a<4){
		   if($max<$tab[($a+1)]){
			$max = $tab[$a+1];
		   }
		   $a++;
	   }
	   return $max;
	   }
  function dowhile($tab,$max){
	  $a = 0;
	  do
	  {
		if($max<$tab[($a+1)]){
			$max = $tab[$a+1];
		   }
		   $a++;  
	  }
	  while($a<4);
	return $max;	  
  }
  function petlaforeach($tab,$max){
	  foreach ($tab as $a){
		  if($a>$max){
			$max = $a;
		   } 
  }
   return $max;
  }
?>
<br>ZAD 3.2<br>
<?php

	function rzut_kostka($ilosc)
	{	for($a = 0; $a<$ilosc; $a++){
		$tabc[$a] = rand (1,6);
		echo ($tabc[$a]."\n");
	}	
	}
	$ilosc = 4;
	echo ("rzucales kostka ".$ilosc." razy "."to sa wyniki ");
	rzut_kostka($ilosc)
?>
<br>ZAD 3.3<br>
<?php
	function tabliczka($wielkosc){
	for ($i = 1;$i<=$wielkosc;$i++)
	{
		for($j=1;$j <=$wielkosc;$j++){
		$pomocna = $i*$j;
		echo ($pomocna."\n");
		}
		echo ("<br/>");
	}
	}
	$wielkosc = 4;
	tabliczka($wielkosc);
	
?>
<br>ZAD 3.4<br>

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
	$liczba = 56;
	liczbapierwsza($liczba);

?>