<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?=base_url('/dashboard');?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Início
                </p>
            </a>
        </li>

        <li class="nav-header">FINANCEIRO</li>

        <li class="nav-item">
            <a href="<?=base_url('/caixa');?>" class="nav-link">
                <i class="nav-icon fas fa-dollar-sign"></i>
                <p>
                    Caixa
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-chart-area"></i>
                <p>
                    Relatórios
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-money-bill-alt"></i>
                <p>
                    Caixas dos Cambistas
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>
                    Caixas dos Gerentes
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-hand-holding-usd"></i>
                <p>
                    Lançamentos de Caixa
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-map-marker-alt"></i>
                <p>
                    Mapa de Apostas
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-balance-scale"></i>
                <p>
                    Gerenciamento de Riscos
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                    Central de Descarrego
                </p>
            </a>
        </li>

        <li class="nav-header">COTAÇÕES</li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-funnel-dollar"></i>
                <p>
                    Gerenciar Cotações
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon far fa-share-square"></i>
                <p>
                    Lançar Resultados
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-eye"></i>
                <p>
                    Auditoria
                </p>
            </a>
        </li>

        <li class="nav-header">ESPORTES</li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-futbol"></i>
                <p>
                    Futebol
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-tv"></i>
                <p>
                    Ao vivo
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                <p>
                    Mais esportes
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-share-square"></i>
                <p>
                    Campeonato manual
                </p>
            </a>
        </li>

        <li class="nav-header">APOSTAS</li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Bilhetes
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-check-square"></i>
                <p>
                    Conferir bilhetes
                </p>
            </a>
        </li>

        <li class="nav-header">USUÁRIOS</li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Sub Administradores
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>
                    Grupo de Gerentes
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('/gerentes/'); ?>" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>
                    Gerentes
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-people-arrows"></i>
                <p>
                    Cambistas
                </p>
            </a>
        </li>

        <li class="nav-header">OUTRAS OPÇÕES</li>

        <li class="nav-item">
            <a href="<?= base_url('/regulamento/'); ?>" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Regulamento
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fa fa-cog"></i>
                <p>
                    Configurações
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="<?=base_url('/alterarsenha');?>" class="nav-link">
                <i class="nav-icon fas fa-key"></i>
                <p>
                    Alterar senha
                </p>
            </a>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
