<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login 02</title>
    <style>
        body{
            background: linear-gradient(to right, rgb(20, 147, 200), rgb(17, 54, 71));
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            padding: 70px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;
        }
        input{
            border: none;
            padding: 5px;
            outline: none;
            font-size: 15px;
        }
        .InputSubmit{
            border: none;
            border-radius: 10px;
            border: 3px solid dodgerblue;
            width: 100%;
            padding: 15px;
            color: white;
            font-size: 15px;
            background-color: Transparent;
        }
        .InputSubmit:hover{
            background-color: dodgerblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testelogin.php" method='POST'>
        <input type="text" name = 'email' placeholder="Email">
        <br><br>
        <input type="password" name='senha' placeholder="Senha" >
        <br><br>
        <input class= 'ImputSubmit' type="submit" name='submit' value='Enviar'>
        </form>
    </div>
</body>
</html>