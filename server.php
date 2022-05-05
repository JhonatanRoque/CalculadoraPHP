<?php

include ("MathHelp_jmd.php");


if ($_POST) {
    if (isset($_POST['raiz'])) {
        $numbers = $_POST['raiz'];

        $raiz = sqrt($numbers);
        echo $raiz;
    }


    if (isset($_POST['calcular'])) {
        $numbers = $_POST['calcular'];

        $resultado = MathHelp_jmd::calculate_str($numbers);
        if ($resultado == "NaN")
        {
            echo "Syntax Error";
        }
        else 
        {
            echo $resultado;
        }
    }


    if (isset($_POST['potencia']))
    {
        $numbers = $_POST['potencia'];

        $potencia = $numbers ** 2 ;

        echo $potencia;

    }


    if (isset($_POST['sen']))
    {
        $numbers = $_POST['sen'];

        $seno = sin(deg2rad($numbers));

        echo  $seno;
    }

    if (isset($_POST['cos']))
    {
        $numbers = $_POST['cos'];

        $coseno = cos(deg2rad($numbers));

        echo  $coseno;
    }

    if (isset($_POST['tan']))
    {
        $numbers = $_POST['tan'];

        $tangente = tan(deg2rad($numbers));

        echo  $tangente;
    }

    if (isset($_POST['sec']))
    {
        $numbers = $_POST['sec'];

        $secante = 1/cos(deg2rad($numbers));

        echo  $secante;
    }

    if (isset($_POST['csc']))
    {
        $numbers = $_POST['csc'];

        $cosecante = 1/sin(deg2rad($numbers));

        echo  $cosecante;
    }

    if (isset($_POST['cot']))
    {
        $numbers = $_POST['cot'];

        $cotangente = cos(deg2rad($numbers)) / sin(deg2rad($numbers));

        echo  $cotangente;
    }

    if (isset($_POST['arcsen']))
    {
        $numbers = $_POST['arcsen'];

        $arcoseno = asin(deg2rad($numbers));

        if ($arcoseno == "NAN")
        {
            echo "Syntax Error ";
        }
        else
        {
            echo  $arcoseno;
        }
    }

    if (isset($_POST['arcos']))
    {
        $numbers = $_POST['arcos'];

        $arcocoseno = acos(deg2rad($numbers));

        if ($arcocoseno == "NAN")
        {
            echo "Syntax Error ";
        }
        else
        {
            echo  $arcocoseno;
        }
    }


    if (isset($_POST['arctan']))
    {
        $numbers = $_POST['arctan'];

        $arcotangente = atan(deg2rad($numbers));

        if ($arcotangente == "NAN")
        {
            echo "Syntax Error ";
        }
        else
        {
            echo  $arcotangente;
        }
    }
    
    if (isset($_POST['log']))
    {
        $numbers = $_POST['log'];

        $logaritmo = log($numbers);

        echo $logaritmo;

    }


    if (isset($_POST['promedio']))
    {
        $number = $_POST['promedio'];

        $numbers = explode(".", $number);
        $promedio = array_sum($numbers) / count($numbers);

        echo $promedio;

    }
}

?>