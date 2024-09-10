<?php
//Variables
$n1 = 0;
$n2 = 0;
$s = 0;

if(isset($_POST["btnCalcular"])){
    //Entrada
    $n1 = (int) $_POST["txtn1"];
    $n2 = (int) $_POST["txtn2"];

    //Proceso
    $s = $n1 + $n2;
}

if(isset($_POST["btnLimpiar"])){
    $n1 = 0;
    $n2 = 0;
    $s =0;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 01</title>
    <style type="text\css">
        .texto-fondo {
            background-color: #CCFFFF;
        }
    </style>
</head>
<body>
    <form action="Problema01.php" method="post">
        <table width="241" border="0">
            <tr>
                <td colspan="2" ><strong>Problema01</strong></td>
            </tr>
            <tr>
                <td width="81">Numero 1</td>
                <td width="150">
                    <input name="txtn1" type="text" id="txtn1" value="<?=$n1?>" />
                </td>
                
            </tr>
            <tr>
                <td>Numero 2</td>
                <td width="150">
                    <input name="txtn2" type="text" id="txtn2" value="<?=$n2?>" />
                </td>
            </tr>
            <tr>
                <td>Suma</td>
                <td>
                    <input name="txts" type="text" class="texto-fondo" id="txts" value="<?=$s?>" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="btnCalcular" type="submit" id="btnCalcular" value="Calcular" />
                    <input name="btnLimpiar" type="submit" id="btnLimpiar" value="Limpiar" />
                </td>
            </tr>

        </table>
    </form>
</body>
</html>