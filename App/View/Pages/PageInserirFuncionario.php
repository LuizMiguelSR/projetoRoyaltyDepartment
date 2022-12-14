<?php
    ModelSession::verificaSessao();
    ModelSession::verificaRole();

    $titulo = 'Cadastro de Funcionários';
    $voltar = '/gerenciar_funcionarios';
    include 'App/View/Components/header.php';
?>
<body>
    <?php include 'App/View/Components/navbar.php'; ?>
    <section>
        <script src="App/View/js/apiCEP.js" type='module' defer></script>
        <script src="App/View/js/mascara.js" type='text/javascript'></script>
        <script src="path/to/jquery.js"></script>
        <main>
            <img src="App/View/Images/SystemImages/logobase.png" class="rounded" alt="Logo da Royalty" title="Logo da Royalty"><br><br>
            <div class="row">
                <h1 class="h3 mt-5 mb-2 fw-normal">Cadastro de um novo Funcionário</h1>
            </div>
            <div class="row mt-1">
                <form class="row g-3 formCad" method="post" enctype="multipart/form-data" action="/inserir_funcionario_model">
                    <!-- Dados Pessoais -->
                    <h3 class="my-5">Dados Pessoais</h3>
                    <div class="col-12">
                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" maxlength="50">
                    </div>
                    <div class="col-4">
                        <input name="rg" type="text" class="form-control" id="rg" placeholder="RG" onKeyPress="MascaraGenerica(this, 'RG');" inputmode="number" required pattern="[a-z0-9]+)" maxlength="13">
                    </div>
                    <div class="col-4">
                        <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF" onKeyPress="MascaraGenerica(this, 'CPF');" inputmode="number" maxlength="14" pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" required>
                    </div>
                    <div class="col-4">
                        <input name="telefone" type="text" maxlength="15" onKeyPress="MascaraGenerica(this, 'CELULAR');" class="form-control" id="telefone" placeholder="Telefone" required>
                    </div>
                    <div class="col-6">
                        <input name="email" type="email" class="form-control" id="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" required>
                    </div>
                    <div class="col-6">
                        <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha" maxlength="50" required>
                    </div>
                    <div class="col-12">
                        <input name="arquivo" type="file" accept="image/*" class="form-control-file" id="arquivo" required>
                    </div>
                    <h3 class="my-5">Endereço</h3>
                    <!-- Endereço -->
                    <div class="col-4">
                        <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP" pattern="[0-9]+$" maxlength="8" required>
                    </div>
                    <div class="col-4">
                        <input name="numero" type="text" class="form-control" id="numero" placeholder="Número" maxlength="6" pattern="[0-9]+$" required>
                    </div>
                    <div class="col-4">
                        <input name="complemento" type="text" class="form-control" id="complemento" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" maxlength="50" placeholder="Complemento">
                    </div>
                    <div class="col-6">
                        <input name="rua" type="text" class="form-control" id="endereco" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9 ]+)" placeholder="Rua" required>
                    </div>
                    <div class="col-6">
                        <input name="bairro" type="text" class="form-control" id="bairro" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="Bairro" required>
                    </div>
                    <div class="col-6">
                        <input name="cidade" type="text" class="form-control" id="cidade" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="Cidade" required>
                    </div>
                    <div class="col-6">
                        <input name="estado" type="text" class="form-control" id="estado" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="Estado" required>
                    </div>
                    <div class="col-6">
                        <input name="pais" type="text" class="form-control" id="pais" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="País" value="Brasil">
                    </div>
                    <h3 class="my-5">Dados da Empresa</h3>
                    <!-- Dados pertinentes a empresa -->
                    <div class="col-6">
                        <input name="salarioBase" type="number" step="0.01" min="0" max="50000" class="form-control" id="salarioBase" placeholder="Salário Base" required>
                    </div>
                    <div class="col-6">
                        <input name="numeroDependentes" type="text" class="form-control" id="numeroDependentes" placeholder="Nº Dependentes" pattern="[0-9]+$" maxlength="2" required>
                    </div>
                    <div class="col-6">
                        <select class="form-select" aria-h3="Default select example" name="departamento" id="departamento">
                            <option value="Administrativo">Administrativo</option>
                            <option value="Financeiro">Financeiro</option>
                            <option value="RH">Recursos Humanos</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Operacional">Operacional</option>
                            <option value="Vendas">Vendas</option>
                            <option value="T.I">Tecnologia da Informação</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="form-select" aria-h3="Default select example" name="cargo" id="cargo">
                            <option value="Diretor">Diretor</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Coordenador">Coordenador </option>
                            <option value="Consultor">Consultor</option>
                            <option value="Auxiliar">Auxiliar</option>
                            <option value="Estagiário">Estagiário</option>
                        </select>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn btn-primary">CADASTRAR</button>
                    </div>
                </form>
            </div>
            <?php include 'App/View/Components/backPainel.php'; ?>
            <?php include 'App/View/Components/footer.php'; ?>
        </main>
    </section>
</body>
</html>