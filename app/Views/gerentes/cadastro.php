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
            <!-- row-1 -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label>Usuário</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label>Senha</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row-1 -->
            <!-- row-2 -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="form-group">
                        <label>Data de Criação</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
            </div>
            <!-- /.row-2 -->
            <!-- row-3 -->
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label>Telefone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" id="telefone" name="telefone"></input>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <label>Observação</label>
                    <input class="form-control" style="width: 100%;"></input>
                </div>
            </div>
            <!-- /.row-3 -->
            <!-- row-4 -->
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label>Limite de Apostas Geral (R$)</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label>Limite de Apostas Simples (R$)</label>
                        <input class="form-control" style="width: 100%;" id="money"></input>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label>Comissão Sobre o Lucro (%)</label>
                        <input class="form-control" style="width: 100%;"></input>
                    </div>
                </div>
            </div>
            <!-- /.row-4 -->
            <!-- /.row-5 -->
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" aria-label="Default select example">
                            <option selected>Selecione uma opção</option>
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="form-group">
                        <label>Permissões</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Criar cambistas</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Alterar status dos cambistas</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                            <label class="form-check-label" for="flexSwitchCheckDisabled">Ativar/Desativar apostas dos cambistas</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Alterar limite apostas dos cambistas</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row-5 -->
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
<?= $this->section('js'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#telefone").inputmask({
            mask: ["(99) 9999-9999", "(99) 99999-9999", ],
            keepStatic: true
        });
        
        $("#money").maskMoney({
            prefix: "R$",
            decimal: ",",
            thousands: "."
        });
    });
</script>
<?= $this->endSection(); ?>