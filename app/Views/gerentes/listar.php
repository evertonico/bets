<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
    <!-- Main content -->
    <section class="content">
        <?php
        // To print success flash message
        if (session()->get("success")) {
            ?>
            <div class="alert alert-success" role="alert">
                <?= session()->get("success") ?>
            </div>
            <?php
        }
        ?>
        <div class="card card-outline card-info">
            <!-- card-header -->
            <div class="card-header">
                <form action="enhanced-results.html">
                    <div class="row" style="padding: 10px">
                        <div class="col-md-8">
                            <div class="input-group mb-3 mr-auto">
                                <input type="text" class="form-control" placeholder="Nome do Gerente"
                                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-0 ml-auto">
                            <a href="<?= base_url('gerentes/cadastro'); ?>" class="btn btn-primary">Novo Gerente</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th style="width: 40%">Nome</th>
                        <th style="text-align: center; width: 25%">Comissão Sobre o Lucro</th>
                        <th style="text-align: center; width: 20%">Telefone</th>
                        <th style="text-align: center; width: 5%">Status</th>
                        <th style="text-align: center; width: 5%">Editar</th>
                        <th style="text-align: center; width: 5%">Excluir</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Everton Joaquim Siqueira Chagas</td>
                        <td style="text-align: center">10%</td>
                        <td style="text-align: center">(85) 99956-5944</td>
                        <td style="text-align: center">
                            <button type="submit" class="btn btn-success btn-sm rounded-0">Ativo</button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>José Herbete Queiroz de Lavor</td>
                        <td style="text-align: center">10%</td>
                        <td style="text-align: center">(85) 99563-5532</td>
                        <td style="text-align: center">
                            <button type="submit" class="btn btn-success btn-sm rounded-0">Ativo</button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>Murilo de Sousa Paiva</td>
                        <td style="text-align: center">10%</td>
                        <td style="text-align: center">(85) 94656-9857</td>
                        <td style="text-align: center">
                            <button type="submit" class="btn btn-success btn-sm rounded-0">Ativo</button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td>João Filho Fernandes Teodósio</td>
                        <td style="text-align: center">10%</td>
                        <td style="text-align: center">(85) 97649-5341</td>
                        <td style="text-align: center">
                            <button type="submit" class="btn btn-success btn-sm rounded-0">Ativo</button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                        <td style="text-align: center">
                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <!-- card-footer -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
            <!-- /.card-footer -->
        </div>

    </section>
    <!-- /.content -->
<?= $this->endSection(); ?>