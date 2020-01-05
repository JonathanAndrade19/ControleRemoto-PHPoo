<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle Rmeoto</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            $controle = new ControleRemoto();
            $controle->ligar();
            $controle->abrirMenu();
            
            
        ?>
    </pre>
</body>
</html>