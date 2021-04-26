<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="content">
    <!-- card-->
    <div class="card card-outline card-info">
        <!-- card-header -->
        <div class="card-header">
            <h3 class="card-title">Cadastrar Novo Gerente</h3>
        </div>
        <!-- /.card-header -->
        <!-- card-body -->
        <div class="card-body">
            <div class="row">
                <!-- coluna-1 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Usuário</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Limite de Apostas Geral (R$)</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Comissão Sobre o Lucro (%)</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Observação</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
                <!-- /.coluna-1 -->
                <!-- coluna-2 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data de Criação</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Limite de Apostas Simples (R$)</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Pode Lançar Resultados?</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                    <div class="form-group">
                        <label>Permissões</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
                <!-- /.coluna-2 -->
            </div>
        </div>
        <!-- /.card-body -->
        <!-- card-footer -->
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="submit" class="btn btn-danger">Voltar</button>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card-->
</section>
<!-- /.main content -->
<?= $this->endSection(); ?>
