<form action=""method="get">
    Kwota:<input type="text" name="Kwota"><br>
    podatek:<input type="text" name="podatek"><br>
    <input name ="sub" type="submit" value="ok">
</form>
<?php
$Kwota=$_GET['Kwota'];
$podatek=$_GET['podatek'];
$Netto;
$podatek=$podatek/100;
$Netto=$Kwota*(1-$podatek);
 echo "Kwota po podatku wynosi: $Netto";
 $Netto
?>

