<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<!-- main content -->
<section class="content">
    <!-- errors-messages -->
    <?php
        if (isset($errors)): ?>
            <div class="alert alert-danger" role="alert">
                 <?php foreach ($errors as $error) : ?>
                     <?=esc($error)?><br />
                <?php endforeach; ?>
            </div>
        <?php
        endif;
    ?>
    <!-- /.errors-messages -->
    <!-- sucess-messages -->
    <?php
        if (isset($success)): ?>
            <div class="alert alert-success" role="alert">
                <?=esc($success)?>
            </div>
    <?php endif; ?>
    <!-- /.sucess-messages -->
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
                            <?=form_input(array('name'=>'txt-nome','placeholder'=>'Nome','class'=>'form-control','value'=>set_value('txt-nome'))); ?>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>Usuário</label>
                            <?=form_input(array('name'=>'txt-usuario','placeholder'=>'Usuário','class'=>'form-control','value'=>set_value('txt-usuario',))); ?>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>Senha</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <?=form_input(array('name'=>'txt-senha','type'=>'password','class'=>'form-control','value'=>set_value('txt-senha'))); ?>
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
                            <?=form_input(array('name'=>'txt-endereco','placeholder'=>'Endereço','class'=>'form-control','value'=>set_value('txt-endereco'))); ?>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>E-mail</label>
                            <?=form_input(array('name'=>'txt-email','placeholder'=>'E-mail','class'=>'form-control','value'=>set_value('txt-email'))); ?>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            <label>Data de Criação</label>
                            <?=form_input(array('name'=>'txt-data-criacao','disabled'=>'true','class'=>'form-control','value'=>date("d/m/y"))); ?>
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
                                <?=form_input(array('id'=>'txt-telefone','name'=>'txt-telefone','class'=>'form-control','value'=>set_value('txt-telefone'))); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label>Observação</label>
                            <?=form_input(array('name'=>'txt-observacao','placeholder'=>'Observação','class'=>'form-control','value'=>set_value('txt-observacao'))); ?>
                        </div>
                    </div>
                </div>
                <!-- /.row-3 -->
                <!-- row-4 -->
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Limite de Apostas Geral (R$)</label>
                            <?=form_input(array('id'=>'txt-limite-geral','name'=>'txt-limite-geral','class'=>'form-control','value'=>set_value('txt-limite-geral'))); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Limite de Apostas Simples (R$)</label>
                            <?=form_input(array('id'=>'txt-limite-simples','name'=>'txt-limite-simples','class'=>'form-control','value'=>set_value('txt-limite-simples'))); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label>Comissão Sobre o Lucro (%)</label>
                            <?=form_input(array('id'=>'txt-comissao-lucro','name'=>'txt-comissao-lucro','class'=>'form-control','value'=>set_value('txt-comissao-lucro'))); ?>
                        </div>
                    </div>
                </div>
                <!-- /.row-4 -->
                <!-- /.row-5 -->
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label>Status</label>
                            <?=form_dropdown(
                                    [ 'name' => 'select-status','class' => 'form-control'],
                                    [''=>'-- Selecione uma opção --',
                                     'false' => 'Ativo',
                                     'true' => 'Bloqueado'],
                                    set_value('select-status'));
                            ?>
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