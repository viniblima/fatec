<!DOCTYPE html>
<html>
<head>
    <style>
        html{
            font: 15pt Arial;
        }
        body{
            background:url("_css/fundo.jpg") no-repeat  top center fixed transparent;
            background-size: cover;

        }

        .classe:before {
            content: "Contato";
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
    <title>Login</title>
</head>
<body>
<div class = "classe">
    <?php
        $login = $_POST['login1'];
        $senha = $_POST['senha1'];

        $strcon = mysqli_connect('localhost', 'id3900076_root', '07071994', 'id3900076_login');
        $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";

        $check = mysqli_query($strcon, $sql);
        
        
        if($check){
            echo "Login efetuado com sucesso!";
        }
        else{

            echo "Login ou senha errados!";


        }
        
        
    ?>
    <br/><br/>
        <a href = "index.html" class = "botao">Home</a>
   
</div>
</body>
</html>