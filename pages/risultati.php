<?php
    session_start();

    error_reporting(0);
    $_SESSION['nomestudente'] = $_POST['nomestudente'];
    $_SESSION['sesso'] = $_POST['sesso'];
    $_SESSION['materia'] = $_POST['materia'];
    $stringaGenerale;

    if($_SESSION['nomestudente']==null)
    {
      header("Location: errore.php", TRUE, 301);

    }

      if ($_SESSION['nomestudente']!=null)
      {
        if($_SESSION['materia']==null)
        {
            $stringaGenerale .= "Risultati di ". $_SESSION['nomestudente'] . ": <b>ammesso\a</b> <br>";
        }


        else if(count($_SESSION['materia']) < 3)
        {
          $stringaGenerale .=  "Risultati di ". $_SESSION['nomestudente'] . ": <b>ammesso\a</b> con debiti in" . " " . $_SESSION['materia'][0] . " " . $_SESSION['materia'][1] . " " . $_SESSION['materia'][2] . " " . $_SESSION['materia'][3] . "<br>";
        }
        else
        {
          $stringaGenerale .= "Risultati di ". $_SESSION['nomestudente'] . ": <b>non ammesso\a</b> " . "<br>";
        }
        $_SESSION["stringaGenerale"] .= $stringaGenerale;

        echo $_SESSION["stringaGenerale"];
      }



?>

<html>
    <body>
        <br><br>  
        <a href="../index.php">Inserisci un nuovo utente<a><br>
        <a href="../pages/terminascrutinio.php">Termina scrutinio<a>
    <body>
</html>