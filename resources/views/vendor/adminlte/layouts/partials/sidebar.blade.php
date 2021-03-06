<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            {{--
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ url('home') }}">
                    <i class='fa fa-home'></i>
                    <span>Inicio</span>
                </a>
            </li>
            --}}
            @can('bahia.list')
            <li class="{{ Request::is('bahia*') ? 'active' : '' }}">
                <a href="{{ url('bahia') }}">
                    <i class='fa fa-arrow-right'></i>
                    <span>Bahia al Dia</span>
                </a>
            </li>
            @endcan
            @can('vivienda.list')
                <li class="{{ Request::is('viviendas*') ? 'active' : '' }}">
                    <a href="{{ url('viviendas') }}">
                        <i class='fa fa-arrow-right'></i>
                        <span>Viviendas</span>
                    </a>
                </li>
            @endcan
            @can('estado-cuenta')
                <li class="{{ Request::is('estado-cuenta*') ? 'active' : '' }}">
                    <a href="{{ url('estado-cuenta') }}">
                        <i class='fa fa-arrow-right'></i>
                        <span>Estado de Cuentas</span>
                    </a>
                </li>
            @endcan
            @can('cuenta-contable')
                <li class="{{ Request::is('cuenta-contable*') ? 'active' : '' }}">
                    <a href="{{ url('cuenta-contable') }}">
                        <i class='fa fa-arrow-right'></i>
                        <span>Cuenta Contables</span>
                    </a>
                </li>
            @endcan

            <li class="treeview {{ Request::is('gestion-administrativa*') || Request::is('talento-humano*') || Request::is('comunicados*') || Request::is('normas-y-reglamentos*') ? 'active' : '' }}">
                <a href="#">
                    <i class='fa fa-file-text-o'></i>
                    <span>Informes y Documentos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @can('files-and-document.list')
                        <li class="{{ Request::is('gestion-administrativa*') ? 'active' : '' }}">
                            <a href="{{ url('gestion-administrativa') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Gestion Administrativa</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('talento-humano*') ? 'active' : '' }}">
                            <a href="{{ url('talento-humano') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Talento Humano</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('comunicados*') ? 'active' : '' }}">
                            <a href="{{ url('comunicados') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Comunicados</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('normas-y-reglamentos*') ? 'active' : '' }}">
                            <a href="{{ url('normas-y-reglamentos') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Normas y Reglamentos</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            @canany(['charst','morosidad.list'])
                <li class="treeview {{ Request::is('charst*') || Request::is('morosidad*') ? 'active' : '' }}">
                    <a href="#">
                        <i class='fa fa-bar-chart'></i>
                        <span>Graficos</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @can('charst')
                            <li class="{{ Request::is('charst*') ? 'active' : '' }}">
                                <a href="{{ url('charst') }}">
                                    <i class='fa fa-arrow-right'></i>
                                    <span>Grafico Morosidad</span>
                                </a>
                            </li>
                        @endcan
                        @can('morosidad.list')
                            <li class="{{ Request::is('morosidad*') ? 'active' : '' }}">
                                <a href="{{ url('morosidad') }}">
                                    <i class='fa fa-arrow-right'></i>
                                    <span>Datos Morosidad</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @canany(['user.list','role.list','permission.list'])
                <li class="treeview {{ Request::is('usuarios*') || Request::is('roles*') || Request::is('permisos*') ? 'active' : '' }}">
                    <a href="#">
                        <i class='fa fa-users'></i>
                        <span>Usuarios</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @can('user.list')
                            <li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
                                <a href="{{ url('usuarios') }}">
                                    <i class='fa fa-arrow-right'></i>
                                    <span>Usuarios</span>
                                </a>
                            </li>
                        @endcan
                        @can('role.list')
                            <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                                <a href="{{ url('roles') }}">
                                    <i class='fa fa-arrow-right'></i>
                                    <span>Roles</span>
                                </a>
                            </li>
                        @endcan
                        @can('permission.list')
                            <li class="{{ Request::is('permisos*') ? 'active' : '' }}">
                                <a href="{{ url('permisos') }}">
                                    <i class='fa fa-arrow-right'></i>
                                    <span>Permisos</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can(['import.csv'])
                <li class="treeview {{ Request::is('import*') ? 'active' : '' }}">
                    <a href="#">
                        <i class='fa fa-gears'></i>
                        <span>Importar Datos</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ Request::is('import-users*') ? 'active' : '' }}">
                            <a href="{{ url('import-users') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('import-vivienda*') ? 'active' : '' }}">
                            <a href="{{ url('import-vivienda') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Viviendas</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('import-edocta*') ? 'active' : '' }}">
                            <a href="{{ url('import-edocta') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Estados de Cuenta</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('import-ctacont*') ? 'active' : '' }}">
                            <a href="{{ url('import-ctacont') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Cuenta Contable</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('import-datamoroso*') ? 'active' : '' }}">
                            <a href="{{ url('import-datamoroso') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Data Moroso</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('import-bahia*') ? 'active' : '' }}">
                            <a href="{{ url('import-bahia') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>BAHIA AL DIA</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('pdf-import*') ? 'active' : '' }}">
                            <a href="{{ url('pdf-import') }}">
                                <i class='fa fa-arrow-right'></i>
                                <span>Informe PDF</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
        </ul><!-- /.sidebar-menu -->
        {{--
        <div class="widget">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-0d558f3a-751e-478f-8ead-1e067438e5c1"></div>
        </div>
        --}}
    </section>

    <!-- /.sidebar -->
</aside>
