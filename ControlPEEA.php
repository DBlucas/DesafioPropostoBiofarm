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
        <h2><center> Controle de produtos em estudo de estabilidade de acompanhamento </center></h2>

        <form method="POST">

            <label for="materiais">Materiais</label>
            <select name="materiais" required>
                <option value="">Selecione</option>
                <option value="1">Materias primas ativas não estereis</option>
                <option value="2">Materias primas ativas estereis</option>
                <option value="3">Materias primas não ativas (insumos)</option>
                <option value="4">Material de embalagem (frascos, caixas e rotulos)</option>
             </select>
            <p class=espaco></p>

            <label for="produto">Produto</label>
            <input name="produto" value="" required type="text">
            <p class=espaco></p>

            <label for="lote">Lote</label>
            <input name="lote" value="" required type="text">
            <p class=espaco></p>

            <label for="fabricacao">Fabricação</label>
            <input name="fabricacao" value="" required type="date">
            <p class=espaco></p>

            <label for="validade">Validade</label>
            <input name="validade" value="" required type="date">
            <p class=espaco></p>

            <label for="apresentacao">Apresentação</label>
            <input name="apresentacao" value="" required type="text">
            <p class=espaco></p>

            <label for="viaAdm">Via de administração</label>
            <select name="viaAdm" required>
                <option value="">Selecione</option>
                <option value="1">Injetável</option>
                <option value="2">Tópica</option>
                <option value="3">Oral</option>
             </select>
            <p class=espaco></p>

            <label for="classeTerapeutica">Classe terapêutica</label>
            <select name="classeTerapeutica" required>
                <option value="">Selecione</option>
                <option value="1">Hormônio</option>
                <option value="2">Multivitamínico</option>
                <option value="3">Dermatomicótico</option>
                <option value="4">Antitussígeno</option>
                <option value="5">Colírio</option>
                <option value="6">Antibiótico</option>
                <option value="7">Hepatoprotetor</option>
                <option value="8">Carrapaticida</option>
             </select>
            <p class=espaco></p>

            <label for="quantInicialEstocada">Qunatidade inicial estocada (un)</label>
            <input name="quantInicialEstocada" value="" required type="text">
            <p class=espaco></p>

            <label for="dataArmazenagem">Data da armazenagem</label>
            <input name="dataArmazenagem" value="" required type="date">
            <p class=espaco></p>

            <label for="dataAnalise">Data da análise</label>
            <input name="dataAnalise" value="" required type="date">
            <p class=espaco></p>

            <label for="tipoAnalise">Tipo de análise</label>
            <input name="tipoAnalise" value="" required type="text">
            <p class=espaco></p>

            <label for="periodoUtilizacao">Período de utilização</label>
            <input name="periodoUtilizacao" value="" required type="text">
            <p class=espaco></p>

            <label for="quantNecessAnalise">Quantidade necessária para as análises</label>
            <input name="quantNecessAnalise" value="" required type="text">
            <p class=espaco></p>

            <label for="localizacao">Localização</label>
            <input name="localizacao" value="" required type="text">
            <p class=espaco></p>

            <label for="statusEstudo">Status de estudo</label>
            <input name="statusEstudo" value="" type="text">
            <p class=espaco></p>

            <label for="statusProtocolo">Status de protocolo</label>
            <input name="statusProtocolo" value="" required type="text">
            <p class=espaco></p>

            <label for="numProtocolo">Número do protocolo</label>
            <input name="numProtocolo" value="" required type="text">
            <p class=espaco></p>

            <label for="statusRelatorio">Status do relatório</label>
            <input name="statusRelatorio" value="" required type="text">
            <p class=espaco></p>

            <label for="solicitarOP">Solicitar OP</label>
            <input name="solicitarOP" value="" required type="text">
            <p class=espaco></p>

            <label for="senha">Coloque sua senha para salvar dados</label>
            <input name="senha" value="" required type="password">
            <p class=espaco></p>

            <input value="Salvar" name="confirmar" type="submit">

        </form>

        </div>

    </body>

</html>