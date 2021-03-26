<?php
$elementos = array(
    array("H", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "He"),
    array("Li", "Be", "", "", "", "", "", "", "", "", "", "", "B", "C", "N", "O", "F", "NE"),
    array("Na", "Mg", "", "", "", "", "", "", "", "", "", "", "Al", "Si", "P", "S", "Cl", "Ar"),
    array("K", "Ca", "Sc", "Ti", "V", "Cr", "Mn", "Fe", "Co", "Ni", "Cu", "Zn", "Ga", "Ge", "As", "Se", "Br", "Kr"),
    array("Rb", "Sr", "Y", "Zr", "Nb", "Mo", "Tc", "Ru", "Rh", "Pd", "Ag", "Cd", "In", "Sn", "Sb", "Te", "I", "Xe"),
    array("Cs", "Ba", "La-Lu", "Hf", "Ta", "W", "Re", "Os", "Ir", "Pt", "Au", "Hg", "Ti", "Pb", "Bi", "Po", "At", "Rn"),
    array("Fr", "Ra", "Ac-Lr", "Rf", "Db", "Sg", "Bh", "Hs", "Mt", "Ds", "Rg", "Cn", "Nh", "Fl", "Mc", "Lv", "Ts", "Og"),
    array("n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n"),
    array("", "", "", "La", "Ce", "Pr", "Nd", "Pm", "Sm", "Eu", "Gd", "Tb", "Dy", "Ho", "Er", "Tm", "Yb", "Lu"),
    array("", "", "", "Ac", "Th", "Pa", "U", "Np", "Pu", "Am", "Cm", "Bk", "Cf", "Es", "Fm", "Md", "No", "Lr"),

);
$color = array(
    array("Verde", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "Azul"),
    array("Morado", "Rosado", "", "", "", "", "", "", "", "", "", "", "Verde claro", "Verde", "Verde", "Verde", "Cian", "Azul"),
    array("Morado", "Rosado", "", "", "", "", "", "", "", "", "", "", "Amarillo", "Verde claro", "Verde", "Verde", "Cian", "Azul"),
    array("Morado", "Rosado", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Amarillo", "Verde claro", "Verde claro", "Verde", "Cian", "Azul"),
    array("Morado", "Rosado", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Amarillo", "Amarillo", "Verde claro", "Verde claro", "Cian", "Azul"),
    array("Morado", "Rosado", "Naranja oscuro", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Amarillo", "Amarillo", "Amarillo", "Verde claro", "Cian", "Azul"),
    array("Morado", "Rosado", "Rojo claro", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Naranja", "Amarillo", "Amarillo", "Amarillo", "Amarillo", "Cian", "Azul"),
    array("n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n", "n"),
    array("", "", "", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro", "Naranja oscuro"),
    array("", "", "", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro", "Rojo claro"),
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periodica</title>
</head>
<style>
    body {
        background: black;
        color: white;
        font-family: Impact;
        -webkit-text-stroke: 2px black;
    }


    .vacio {
        height: 70px;
        width: 50px;
        margin: 2px;
        display: inline-block;
        border: 1px solid black;
        text-align: center;
        overflow: hidden;

    }

    .leyenda {
        height: 50px;
        width: 70px;
        margin: auto;
        display: inline-block;
        border: 1px solid white;
        overflow: hidden;
        text-align: center;
        font-family: "Impact";
        color: black;
        font-size: 18px;
        -webkit-text-stroke: 0.5px white;
    }

    .element {
        height: 70px;
        width: 50px;
        margin: 2px;
        display: inline-block;
        border: 1px solid white;
        text-align: center;
        overflow: hidden;
        box-shadow: -2px 2px gray;

    }

    .sect {
        width: 80%;
        margin: auto;
        height: 1000px;

    }
</style>

<body>
    <section class="sect">
        <?php

        for ($i = 0; $i < count($elementos); $i++) {
            echo "<br>";
            for ($o = 0; $o < count($elementos[$i]); $o++) {
                if ($elementos[$i][$o] == "") {
                    echo "<div class = 'vacio'></div>";
                } elseif ($elementos[$i][$o] != "") {
                    if ($color[$i][$o] == "Verde") {
                        echo "<div onclick = 'saludo(this)' class = 'element' style='background:green'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Morado") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: rgb(163, 60, 141)'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Rosado") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: rgb(255, 123, 244)'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Naranja") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()'  style='background: #F5C055'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Amarillo") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: yellow'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Cian") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: lightblue'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Azul") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: blue'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Verde claro") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: lightgreen'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Naranja oscuro") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()' style='background: #FA6C36'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "Rojo claro") {
                        echo "<div onclick = 'saludo(this)' class = 'element' onclick = 'saludo()'style='background: #F9918A'><h1>{$elementos[$i][$o]}</h1></div>";
                    } elseif ($color[$i][$o] == "n") {
                    }
                }
            }
        }

        ?>
        <br>
        <br>
        <h1 style="text-align: center;">Leyenda</h1>
        <div class="leyenda" id="hola" style='background: rgb(163, 60, 141)'><br>Alcalinos</div>
        <div class="leyenda" style='background: rgb(255, 123, 244)'>Alcalino<br>Ferreos</div>
        <div class="leyenda" style="background: #F5C055">Metales Bloque D</div>
        <div class="leyenda" style="background: #F9918A"><br>Lantanidos</div>
        <div class="leyenda" style="background: #F9918A"><br>Lactanidos</div>
        <div class="leyenda" style="background: yellow">Otro<br>metales</div>
        <div class="leyenda" style="background: lightgreen"><br>Metaloides</h3>
        </div>
        <div class="leyenda" style="background: green">Otros no metales</div>
        <div class="leyenda" style="background: lightblue"><br>Halogenos</div>
        <div class="leyenda" style="background: blue">Gases<br>nobles</div>
    </section>
</body>
<script>
    function saludo(e) {
        e.setAttribute("class", "vacio");
        e.setAttribute("style","background: gray");
        e.innerHTML = "";
        
       

    }
</script>
</html>