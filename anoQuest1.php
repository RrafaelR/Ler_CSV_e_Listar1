<?php
$ano=$_GET["ano"];
$f=fopen("violencia-domestica-df.csv","r");
$d=fgetcsv($f);
$cont=1;
while($d)
{
    if($d[$cont]==$ano)
    {
        break;
    }      
    $cont++;   
}
if($d==null)
{
    echo "Ano nao encontrado";
    die();
}
$d=fgetcsv($f);
while($d)
{
    echo "Na localidade $d[0] ocorreram $d[$cont] casos <br>";
    $d=fgetcsv($f);
}
fclose($f);
?>