<form action=""method="get">
    A:<input type="text" name="a">
    B:<input type="text" name="b"><br>
    C:<input type="text" name="c">
    D:<input type="text" name="d"><br>
    <input name ="sub" type="submit" value="ok">
</form>
<?php
$Macierz;
$A=$_GET['a'];
$B=$_GET['b'];
$C=$_GET['c'];
$D=$_GET['d'];
$Macierz= ($A*$D)-($B*$C);
echo "Wyznacznik: $Macierz";
?>