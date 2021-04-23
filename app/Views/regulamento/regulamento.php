<?= $this->extend('templates/template');
ini_set('display_errors', '1');
?>
<?= $this->section('content');
?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Mensagens de erro -->
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
                <!-- /mensagem de erro -->
                <!-- mensagens de sucesso -->
                <?php if (isset($success)): ?>
                    <div class="alert alert-success" role="alert">
                        <?= esc($success) ?>
                    </div>
                <?php endif; ?>
                <!-- /mensagem de sucesso -->

                <!-- Formulário -->
                <?php echo form_open(base_url('regulamento/update'), $attributes = ['id' => 'form']); ?>
                    <?= csrf_field() ?>
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Regulamento do site
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <textarea id="regulamento" name="regulamento" class="form-control">
                              <?php if (isset($errors)) echo set_value('regulamento'); else echo $data['result']->ds_regulamento; ?>
                          </textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                <!-- /formulário -->
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
    <!-- Summernote -->
    <script src="<?= base_url('public/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
    <script>
        $(function () {
            // Summernote
            $('#regulamento').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        })
    </script>
<?= $this->endSection(); ?>