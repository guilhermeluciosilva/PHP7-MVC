<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Cadastre-se</h2>
            <small>Preencha o formulário abaixo para fazer o seu cadastro</small>
            <form action="<?=URL?>/usuarios/cadastrar" name="cadastrar" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" value="<?=$dados['nome'];?>" class="form-control <?php if($dados['nome_erro'] == ''){$dados['nome_erro'] = 'is-invalid';} echo $dados['nome_erro'];?>">
                    <div class="invalid-feedback">
                        <?=$dados['nome_erro']?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="email" class="form-control" name="email" id="email" value="<?=$dados['email'];?>">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control" name="senha" id="senha" value="<?=$dados['senha'];?>">
                </div>
                <div class="mb-3">
                    <label for="confirma_senha" class="form-label">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control" name="confirma_senha" value="<?=$dados['confirma_senha'];?>" id="confirma_senha">
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>

                    <div class="col">
                        <a href="#">Você tem uma conta? Faça login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>