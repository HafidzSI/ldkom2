<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('home.index') }}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Transaksi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('print.index') }}" class="">Print</a></li>
                            <li><a href="{{ route('print.rekap') }}" class="">Rekap transaksi</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('user.index') }}" class=""><i class="lnr lnr-user"></i> <span>User
                </span></a></li>
            </ul>
        </nav>
    </div>
</div>