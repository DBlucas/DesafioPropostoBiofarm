<html>
    <head>
        <meta charset="utf-8">
        <title>DesafioBIOFARM</title>
        <style> 
        .principal{
            width:50%;
            margin: 0 auto;
            background-color:#04B404;
            border: 1px solid #000000;
            border-radius: 10px;
        }
        body{
            background: #CEF6CE;
            padding: 20px;
            font-family: Arial;
            font-size: 18px;        
        }
        label{ display: block; font-weight: bold;}
        .espaco{ height: 15px; display: block;}
        input{ font-size: 16px; padding: 5px; border-radius: 40px;}
        </style>
    </head>

    <body>
        <div class=principal>

            <h1>BIOFARM</h1>
            <h2>Login</h2>

            <form>

                <label for="email">E-mail</label>
                <input name="email" value="" required type="email">
                <p class=espaco></p>

                <label for="senha">Senha</label>
                <input name="senha" value="" required type="password">
                <p class=espaco></p>

                <input value="Logar" name="confirmar" type="submit">

            </form>

            <a href="cadastro.php">Não possui acesso, clique aqui e cadastre-se</a>

        </div>

    </body>

</html>