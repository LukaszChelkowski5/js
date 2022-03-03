<form action=""method="get">
    Imie:<input type="text" name="name"><br>
    Nazwisko:<input type="text" name="surname"><br>
    <input name ="sub" type="submit" value="ok">
</form>
<?php
$name=$_GET['name'];
$surname=$_GET['surname'];
echo "Witaj  $name" ;
?>

