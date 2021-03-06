<?php $alertLogin = strlen($alertLogin) ? '<div class="alert alert-danger">'.$alertLogin.'</div>' : '' ?>
<?php $alertCadastro = strlen($alertCadastro) ? '<div class="alert alert-danger">'.$alertCadastro.'</div>' : '' ?>

<div class="jumbotron text-dark">
    <div class="row">

        <div class="col">
            <form  method="post">
                <h2>Login</h2>
                <?=$alertLogin?>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="acao" value="logar" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>

        <div class="col">
            <form  method="post">
                <h2>Cadastre-se</h2>
                <?=$alertCadastro?>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="acao" value="cadastrar" class="btn btn-primary">Cadastra</button>
                </div>
            </form>
        </div>

    </div>
</div>