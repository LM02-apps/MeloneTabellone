<?php

    session_start();
    echo "<h1>TABELLONE SCRUTINIO</h1>";
    echo $_SESSION["stringaGenerale"];

    session_destroy();
?>