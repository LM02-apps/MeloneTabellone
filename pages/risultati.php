<?php

    
    $array=array(
        
        $a=array($_POST["nomestudente"],$_POST["sesso"],$_POST["materia"])
        $b=array()
    );

    if (is_null($array[0][2]))
    {
        
        echo "<p>Risultato di".$array[0][0].": <b>ammesso</b>";
    }
    else if(count($array[0][2])<=2)
    {

        echo "<p>Risultato di".$array[0][0].": <b>ammesso</b> con debiti in ";
        foreach ($array[0][2] as $item) {
            echo $item.",";
           
        };

    }
    else
    {
        echo "<p>Risultato di".$array[0][0].": <b>non ammesso</b>";
    }
    //print_r(array_values($array2));

   // var_dump($array2[0[1]]);   
    //array
    



?>

<html>
    <body>
        <br><br>  
        <a href="../index.php">Inserisci un nuovo utente<a><br>
        <a href="../pages/terminascrutinio.php">Termina scrutinio<a>
            <form>
                <input type="hidden" name="array" value="informatica">
            </form>
    <body>
</html>