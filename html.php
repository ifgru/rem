<?php
    function HEAD() {
        echo "<head> 
                <title>IFSP - REMATRÍCULA</title>
                <link rel='stylesheet' href='style.css'>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
              </head>";       
    }
    
    function DIVPRINCIPAL() {
        echo "<div id='divPrincipal'>
            <div id='Logo'>
                <img src='logo.png'>
                Rematrícula 2015 (LOGO)
                <hr>
            </div>";
    }
    
    function LOGIN() {
        echo "       
            <form action='rematricular.php' method='POST'>
                Prontuário: <input type='text' name='AL_PRONT'><br>
                <input type='submit' value='Buscar'>                    
            </form>";
    }
?>