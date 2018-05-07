<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>

            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-home"></i> <span>Home </span>
                </a>
            </li>

            @permission('clients.list|budgets.list')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-group "></i> <span>Clientes</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    @permission('clients.list')
                         <li><a href="{{route('admin.clients.index')}}"><span class="menu">Lista de Clientes</span></a></li>
                    {{--<li class={{ Request::segment(2) == "prospectos" ? 'active' : '' }}><a--}}
                                {{--href="{{route('admin.prospectos.index')}}"><span>Lista de Prospectos</span></a></li>--}}
                    @endpermission
                </ul>
            </li>
            @endpermission


            @permission('items.list|modelslistsprices.list|additionals.list | brands.list | categories.list | models.list | colors.list | additionals.list')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase "></i> <span>Articulos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">

                    @permission('items.list')
                    <li ><a href="{{route('admin.items.index')}}"><span class="menu" >Stock</span></a></li>
                    @endpermission
                    @permission('modelslistsprices.list')
                    <li class={{ Request::segment(2) == "modelsListsPrices" ? 'active' : '' }}><a
                                href="{{route('admin.modelsListsPrices.index')}}"><span> Listas de Precios </span></a>
                    </li>
                    @endpermission

                    @permission('additionals.list | brands.list | categories.list | models.list | colors.list | additionals.list')
                    <li class="treeview {{ in_array(Request::segment(2), ["brands", "categories","models","colors","additionals"]) ? 'active' : '' }}">
                        <a href="#">
                            <span>Definiciones</span>
                            <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                        </a>
                        <ul class="treeview-menu">
                            @permission('categories.list')
                            <li class={{ Request::segment(2) == "categories" ? 'active' : '' }}><a
                                        href="{{route('admin.categories.index')}}"><span> Categorias</span></a></li>
                            @endpermission
                            @permission('brands.list')
                            <li class={{ Request::segment(2) == "brands" ? 'active' : '' }}><a
                                        href="{{route('admin.brands.index')}}"><span> Marcas</span></a></li>
                            @endpermission
                            @permission('models.list')
                            <li class={{ Request::segment(2) == "models" ? 'active' : '' }}><a
                                        href="{{route('admin.models.index')}}"><span> Modelos</span></a></li>
                            @endpermission
                            {{--@permission('colors.list')--}}
                            {{--<li class={{ Request::segment(2) == "colors" ? 'active' : '' }}><a--}}
                            {{--href="{{route('admin.colors.index')}}"><span> Colores</span></a></li>--}}
                            {{--@endpermission--}}
                            {{--@permission('additionals.list')--}}
                            {{--<li class={{ Request::segment(2) == "additionals" ? 'active' : '' }}><a--}}
                            {{--href="{{route('configs.additionals.index')}}"><span> Adicionales</span></a></li>--}}
                            {{--@endpermission--}}
                        </ul>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission

            @permission('smallboxes.list')
            <li class="treeview {{ in_array(Request::segment(2), ["smallBoxes"]) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Caja</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                </a>
                <ul class="treeview-menu">
                    <li class={{ Request::segment(3) == 1 ? 'active' : '' }}><a
                                href="{{route('admin.smallBoxes.index')}}"><span>Movimientos</span></a></li>
                </ul>
            </li>
            @endpermission


            @permission('roles.list|permissions.list|users.list|logs.list|additionals.list|company.list|branches.list|additionals.list')
                <li class="treeview {{ in_array(Request::segment(2), ["branches","roles","permissions","users","logs", "checkbooks","additionals","company"]) ? 'active' : '' }}">
                    <a href="#"><i class="fa fa-gear"></i> <span>Configuración</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li class="{{ in_array(Request::segment(2), ["branches","additionals","company"]) ? 'active' : '' }}">
                        <a href="#"><span>Empresa</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                    <ul class="treeview-menu">
                    <li class="{{ Request::segment(2) == "company" ? 'active' : '' }}"><a
                    href="{{route('configs.company.index')}}"><span>Datos</span> </a></li>
                    <li class={{ Request::segment(2) == "branches" ? 'active' : '' }}><a
                    href="{{route('configs.branches.index')}}"><span> Sucursales</span></a></li>

                    </ul>
                    </li>
                    <li class="{{ (Request::segment(2) == "roles" || Request::segment(2) == "permissions" || Request::segment(2) == "users")  ? 'active' : '' }}">
                    <a href="#"><span> Accesos </span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                        <ul class="treeview-menu">
                        @permission('roles.list')
                            <li class={{ Request::segment(2) == "roles" ? 'active' : '' }}><a href="{{route('configs.roles.index')}}"><span>Roles</span> </a></li>
                        @endpermission
                        @permission('permissions.list')
                            <li class={{ Request::segment(2) == "permissions" ? 'active' : '' }}><a href="{{route('configs.permissions.index')}}"><span> Permisos</span> </a></li>
                        @endpermission
                        @permission('users.list')
                            <li class={{ Request::segment(2) == "users" ? 'active' : '' }}><a href="{{route("configs.users.index")}}"><span> Usuarios</span> </a></li>
                        @endpermission
                        </ul>
                    </li>
                        @permission('logs.list')
                            <li class={{ Request::segment(2) == "logs" ? 'active' : '' }}><a href="{{route('configs.logs.index')}}"><span>Logs</span></a></li>
                        @endpermission

                        @permission('financials.list')
                            <li class={{ Request::segment(2) == "financials" ? 'active' : '' }}><a href="{{route('admin.financials.index')}}"><span>Financiamientos</span></a></li>
                        @endpermission

                        @permission('paymethods.list')
                            <li class={{ Request::segment(2) == "payMethods" ? 'active' : '' }}><a href="{{route('admin.payMethods.index')}}"><span>Metodos de Pago</span></a></li>
                        @endpermission

                        @permission('checkbooks.list')
                            <li class={{ Request::segment(2) == "checkbooks" ? 'active' : '' }}><a href="{{route('admin.checkbooks.index')}}"><span>Chequera</span></a></li>
                        @endpermission
                </ul>
                </li>
            @endpermission

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


