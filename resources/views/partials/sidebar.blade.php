<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/assets/admin/images/icon/loker2.jpg" alt="Loker Bandung" style="max-height:65px;max-width:150px;margin-top:7px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{url('/home')}}">
                                <i class="fas fa-th-large"></i>Beranda</a>
                        </li>
                        @role('admin')
                        <li>
                            <a href="{{route('user.index')}}">
                            <i class="fa fa-users"></i><font size="2" face="Comic Sans Ms">User</font></a>
                        </li>
                        <li>
                            <a class="js-arrow" href="{{route('kategori.index')}}">
                                <i class="fas fa-bullseye"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="{{route('perusahaan.index')}}">
                                <i class="fas fa-circle"></i>Perusahaan</a>
                        </li>
                        <li>
                            <a href="{{route('lowongan.index')}}">
                                <i class="fas fa-suitcase"></i>Lowongan</a>
                        </li>
                        <li>
                            <a href="{{route('pelamar.index')}}">
                                <i class="fas fa-copy"></i>Pelamar</a>
                        </li>
                        @endrole
                        @role('perusahaan')

                         <li>
                            <a class="js-arrow" href="{{route('kategori.index')}}">
                                <i class="fas fa-bullseye"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="{{route('perusahaan.index')}}">
                                <i class="fas fa-circle"></i>Perusahaan</a>
                        </li>
                        <li>
                            <a href="{{route('lowongan.index')}}">
                                <i class="fas fa-suitcase"></i>Lowongan</a>
                        </li>
                        <li>
                            <a href="{{route('pelamar.index')}}">
                                <i class="fas fa-copy"></i>Pelamar</a>
                        </li>
                        @endrole
                        @role('pelamar')
                        <li>
                            <a href="{{route('pelamar.index')}}">
                            <i class="fa fa-users"></i><font size="2" color="black" face="Comic Sans Ms"></font>
                        </li>
                        @endrole
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
