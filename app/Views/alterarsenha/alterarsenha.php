<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content" style="width:450px;margin: auto;">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Redefenir senha de acesso</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Informe a senha atual</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Informe uma nova senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Confirme a nova senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>
