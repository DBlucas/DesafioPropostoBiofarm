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
        <h2>Cadastrar Usuário</h2>

        <form method="POST">

            <label for="nome">Nome</label>
            <input name="nome" value="" required type="text">
            <p class=espaco></p>

            <label for="sobrenome">Sobrenome</label>
            <input name="sobrenome" value="" required type="text">
            <p class=espaco></p>

            <label for="email">E-mail</label>
            <input name="email" value="" required type="email">
            <p class=espaco></p>

            <label for="sexo">Sexo</label>
            <select name="sexo" required>
                <option value="">Selecione</option>
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
             </select>
            <p class=espaco></p>

            <label for="senha">Senha</label>
            A senha deve ter entre 8 e 16 caracteres.
            <input name="senha" value="" required type="password">
            <p class=espaco></p>

            <label for="rsenha">Repita a senha</label>
            <input name="rsenha" value="" required type="password">
            <p class=espaco></p>

            <input value="Salvar" name="confirmar" type="submit">

        </form>

        </div>

    </body>

</html>