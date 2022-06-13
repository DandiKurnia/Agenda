                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                            <i class="ni ni-bullet-list-67 {{ Request::is('/') ? 'text-primary' : '' }}"></i> Dashboard
                        </a>
                    </li>
                    @can('admin')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-1 mt-4 mb-1 text-muted">
                        <span>Admin</span>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin*') ? 'active' : '' }}" href="/admin">
                            <i class="ni ni-bullet-list-67 {{ Request::is('admin*') ? 'text-primary' : '' }}"></i> Agenda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kelas*') ? 'active' : '' }}" href="/kelas">
                            <i class="ni ni-collection {{ Request::is('kelas*') ? 'text-yellow' : '' }} "></i> Kelas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('guru*') ? 'active'  :'' }}" href="/guru">
                            <i class="ni ni-single-02 {{ Request::is('guru*') ? 'text-red' : '' }}"></i> Guru
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('user*') ? 'active'  :'' }}" href="/user">
                            <i class="ni ni-circle-08 {{ Request::is('user*') ? 'text-pink' : '' }}"></i> User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('mapel*') ? 'active'  :'' }}" href="/mapel">
                            <i class="ni ni-books {{ Request::is('mapel*') ? 'text-info' : '' }}"></i> Mapel
                        </a>
                    </li>
                    @endcan
                    @can('guru')
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-1 mt-4 mb-1 text-muted">
                        <span>Guru</span>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('agendaguru*') ? 'active' : '' }}" href="/agendaguru">
                            <i class="ni ni-bullet-list-67 {{ Request::is('agendaguru*') ? 'text-primary' : '' }}"></i> Agenda
                        </a>
                    </li>
                    @endcan
                
                    {{-- <li class="nav-item">
                        <a class="nav-link " href="./examples/icons.html">
                            <i class="ni ni-planet text-blue"></i> Icons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./examples/maps.html">
                            <i class="ni ni-pin-3 text-orange"></i> Maps
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./examples/tables.html">
                            <i class="ni ni-bullet-list-67 text-red"></i> Tables
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/login.html">
                            <i class="ni ni-key-25 text-info"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/register.html">
                            <i class="ni ni-circle-08 text-pink"></i> Register
                        </a>
                    </li> --}}
                </ul>

                {{-- @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-1 mt-4 mb-1 text-muted">
                    <span>Admin</span>
                </h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('agenda/admin') ? 'active' : '' }}" href="/agenda/admin">
                            <i class="ni ni-bullet-list-67 {{ Request::is('agenda/admin') ? 'text-primary' : '' }}"></i> Admin
                        </a>
                    </li>
                </ul>
                @endcan --}}
                