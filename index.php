<?php


?>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="divform">
            <form action="pages/risultati.php" method="POST">
            <label>Nominativo:</label><br>
            <input type="text" name="nomestudente"><br>
            
            <input type="radio" name="sesso" value="m">
            <label>M<br>     
            <input type="radio" name="sesso" value="f">
            <label>F<br>
            
            <p>Debiti: 
            <input type="checkbox" name="materia[]" value="italiano">
            <label>ITA  
            <input type="checkbox" name="materia[]" value="matematica">
            <label>MAT 
            <input type="checkbox" name="materia[]" value="telecomunicazioni">
            <label>TEL 
            <input type="checkbox" name="materia[]" value="informatica">
            <label>INF <br><br>
            
            <div class="container">
                <div class="center">
                    <input type="submit" value="Esito scrutinio" class="centerform">
                </div>
            </div>
            <br>
            
            </form>
        </div>
    </body>
</html>