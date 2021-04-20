<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Regulamento do site
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                  <textarea id="summernote">
                    Place <em>some</em> <u>text</u> <strong>here</strong>
                  </textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
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
            $('#summernote').summernote({
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