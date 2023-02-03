<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&Aacute;rea Tri&aacute;ngulo. IT</title>
    <link href="css.css" rel="stylesheet">
</head>

<body>
    <div class="Encabezado">
        &Aacute;REA DE UN TRI&Aacute;NGULO<br></div>
    <div class="Maximo2Decimales">M&aacute;ximo 2 decimales</div><br>
    <div class="Imagen">
        <img src="https://matematicasmodernas.com/wp-content/uploads/2014/07/area.png" width="200" height="150">
    </div>
    <div class="Ingresos">
        <form method="POST" action="index.php">
            <table>
                <tr>
                    <td>
                        <label>Base:</label>
                    </td>
                    <td>
                        <input type="Number" step="0.01" name="Base" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Altura:</label>
                    </td>
                    <td>
                        <input type="Number" step="0.01" name="Altura" required>
                    </td>
                </tr>
            </table>
            <input type="Submit" name="Ingresar" value="Calcular"><br>
    </div>
</body>
<div class="Resultado">
    <?php
    if (isset($_POST['Ingresar'])) {
        $Base = $_POST['Base'];
        $Altura = $_POST['Altura'];
        $Resultado = ($Base * $Altura) / 2;
        echo 'El &aacute;rea de tu tri&aacute;ngulo es: ', $Resultado;
        echo ' :)';
    }
    ?>
</div>
<pre>
______  ________ 
|      \|        \
 \$$$$$$ \$$$$$$$$
  | $$     | $$   
  | $$     | $$   
  | $$     | $$   
 _| $$_    | $$   
|   $$ \   | $$   
 \$$$$$$    \$$   
</pre>

</html>