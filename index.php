<?php

if (isset($_POST['tmfonte'])) {

    setcookie('tm_fonte', $_POST['tmfonte'], time() + 120);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


$fonte = isset($_COOKIE['tm_fonte']) ? $_COOKIE['tm_fonte'] : '9'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock In Rio - Escolha a fonte da letra</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            font-size: <?php echo $fonte; ?>;
        }
        .fonte-selecionada {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <h1>Bem-vindo ao Rock In Rio!</h1>
    <p>Escolha a cor tamanho da fonte:</p>

    <form method="post">
        <button type="submit" name="fonte" value="10px" style="font-size: 10px;">10 </button>
        <button type="submit" name="fonte" value="20px" style="font-size: 20px;">20</button>
        
    </form>
    
    <?php

if (isset($_POST['fonte'])) {

    setcookie('tm_fonte', $_POST['fonte'], time() + 120);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}


$corFundo = isset($_COOKIE['tm_fonte']) ? $_COOKIE['tm_fonte'] : '9'; 
?>
    <div class="fonte-selecionada">
        <?php if (isset($_COOKIE['tm_fonte'])): ?>
            <p>Você escolheu a fonte: <strong style="fonte: <?php echo $fonte; ?>;"><?php echo $fonte; ?></strong></p>
        <?php else: ?>
            <p>A fonte ainda não foi escolhida.</p>
        <?php endif; ?>
    </div>

    <p>Essa escolha ficará salva por 2 minutos!</p>

</body>
</html>