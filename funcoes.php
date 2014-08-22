<?php

    //include 'classes.php';
    include 'html.php';
    include 'funcoes.php';
    include 'textos.php';
    
    function Conectar($AL_PRONT) {
        $dbc = mysqli_connect('localhost', 'root', 'senha', 'ESCOLA') or die('Falha na conexão');
        $dbs = "SELECT * FROM ALUNOS WHERE AL_PRONT = '$AL_PRONT'";
        $dbq = mysqli_query($dbc, $dbs) or die ('Não buscou');
        $row = mysqli_fetch_array($dbq);
    
        echo $row['AL_NOME'];
    }
    