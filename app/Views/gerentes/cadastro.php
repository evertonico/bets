<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="content">
    <!-- mensagens de erro -->
    <?php
    if (isset($errors)):
        foreach ($errors as $error) : ?>
            <div class="alert alert-danger" role="alert">
                <?= esc($error) ?>
            </div>
        <?php
        endforeach;
    endif;
    ?>
    <!-- /.mensagem de erro -->
    <!-- mensagens de sucesso -->
    <?php if (isset($success)): ?>
        <div class="alert alert-success" role="alert">
            <?= esc($success) ?>
        </div>
    <?php endif; ?>
    <!-- /.mensagem de sucesso -->
    <!-- card-->
    <div class="card card-outline card-info">
        <?php echo form_open(base_url('gerentes/salvar'), $attributes = ['id' => 'form']); ?>
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
                            <input class="form-control" style="width: 100%;" id="txt-nome" name="txt-nome"></input>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" class="form-control" id="txt-usuario" name="txt-usuario"></input>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>Senha</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" maxlength="8" id="txt-senha" name="txt-senha"></input>
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
                            <input class="form-control" style="width: 100%;" id="txt-endereco" name="txt-endereco"></input>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" style="width: 100%;" id="txt-email" name="txt-email"></input>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>Data de Criação</label>
                            <input class="form-control" style="width: 100%;" id="txt-data-criacao" name="txt-data-criacao" disabled></input>
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
                                <input type="text" class="form-control" id="txt-telefone" name="txt-telefone"></input>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label>Observação</label>
                            <input class="form-control" style="width: 100%;" id="txt-observacao" name="txt-observacao"></input>
                        </div>
                    </div>
                </div>
                <!-- /.row-3 -->
                <!-- row-4 -->
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Limite de Apostas Geral (R$)</label>
                            <input class="form-control" style="width: 100%;" id="txt-limite-geral" name="txt-limite-geral"></input>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Limite de Apostas Simples (R$)</label>
                            <input class="form-control" style="width: 100%;" id="txt-limite-simples" name="txt-limite-simples"></input>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Comissão Sobre o Lucro (%)</label>
                            <input class="form-control" style="width: 100%;" id="txt-comissao-lucro" name="txt-comissao-lucro"></input>
                        </div>
                    </div>
                </div>
                <!-- /.row-4 -->
                <!-- /.row-5 -->
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" aria-label="Default select example" id="select-status" name="select-status">
                                <option selected>Selecione uma opção</option>
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="form-group">
                            <label>Permissões</label>
                            <?php foreach ($data['listPermissoes'] as $array) { ?>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="check-permissoes" name="check-permissoes" value="<?=$array->ci_permissao?>">
                                    <label class="form-check-label" for="check-permissoes"><?=$array->ds_permissao?></label>
                                </div>
                            <?php } ?>
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
        <?php echo form_close(); ?>
    </div>
    <!-- /.card-->
</section>
<!-- /.main content -->
<?= $this->endSection(); ?>
<?= $this->section('js'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#txt-telefone").inputmask({
            mask: ["(99) 9999-9999", "(99) 99999-9999", ],
            keepStatic: true
        });

        $("#txt-limite-geral").maskMoney({
            prefix: "R$",
            decimal: ",",
            thousands: "."
        });

        $("#txt-limite-simples").maskMoney({
            prefix: "R$",
            decimal: ",",
            thousands: "."
        });

        $("#txt-comissao-lucro").maskMoney({
            decimal: ",",
            suffix: "%",
            thousands: "."
        });
    });
</script>
<?= $this->endSection(); ?>