<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset = "utf-8">
    <title>Tabela</title>

    <style>
        body{
            background-color: gray;
            
        }
    </style>
</head>
<body>
<table id="table">
<?php
    if(!isset($_GET["seleciona"]))
        $_GET["seleciona"] = null;

    if($_GET["seleciona"] <= 2016 && $_GET["seleciona"] >= 2011){

        $ano = $_GET["seleciona"];
        
        $f = fopen("violencia-domestica-df.csv", "r");
        $dados=fgetcsv($f);

        while($dados)
        {
            $ano = (int) $ano; 

            $ind = $ano - 2010;
            echo "<tr><td>$dados[0]</td><td>$dados[$ind]</td><tr>";
            
            $dados=fgetcsv($f);
        }
        fclose($f);
    }
      
?>
    <a href="index.html"><input type="button"value="←"></a>
</table>
</body>
</html>