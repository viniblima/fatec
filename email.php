<!DOCTYPE html>
<html>
<head>
    <title>E-mail enviado!</title>
    <style>
        html{
            font: 15pt Arial;
        }
        body{
            background:url("_css/fundo.jpg") no-repeat  top center fixed transparent;
            background-size: cover;

        }

        .classe:before {
            content: "Muito obrigado, usuário!";
            font: 10pt Arial;
            font-weight: bold;
            color: white;
            background-color: #273747;
            padding: 5px;
            display: block;
            position: relative;
            top: -10px;
            left: -10px;
            width: 560px;
        }

        .classe {
            background-color: rgba(255,255,255,.8);
            margin: 100px auto 200px auto;
            padding: 10px;
            width: 550px;
            min-height:300px;
        }

        .botao {
            background-color: #273747;
            color: white;
            padding: 8px;
            box-shadow: 2px 2px 1px #aaaaaa;
        }
    </style>
    
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div class = "classe">
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['mail'];


        $corpo = "Obrigado, $nome pelo seu cadastro e avaliar o site! 
        Espero ter agradado com esse site e, qualquer toque, por favor, 
        poste bem explicado para melhorar sempre este trabalho!";

    
    Ini_set ('display_errors', 1);
 
    Error_reporting (E_ALL);
 
    $from = "viniblima2016@gmail.com";
 
    $to = "$email";
 
    $subject = "Avaliação do site!";
 
    $message = "$corpo";
 
    $headers = "De:". $from;
 
    Mail($to, $subject, $message, $headers);
 
    echo "A mensagem de e-mail foi enviada! Cheque seu e-mail!";
    
    ?>
    <br/><br/>
    <a href = "index.html" class = "botao">Home</a

</div>
</body>
</html>