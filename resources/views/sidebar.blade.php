<!-- Sidebar -->

<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                <li class="nav-item">
                    <a data-toggle="collapse" href="#user">
                        <i class="fas fas fa-users"></i>
                        <p>USER</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="user">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('users.index') }}">
                                    <span class="icon-eye"> Lihat User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#pesanan">
                        <i class="fas fa-money-check"></i>
                        <p>PESANAN</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pesanan">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('pesanans.index') }}">
                                    <span class="icon-eye"> Lihat Pesanan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#produk">
                        <i class="fas fa-store"></i>
                        <p>PRODUK</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="produk">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('products.index') }}">
                                    <span class="icon-eye"> Lihat Produk</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('registration-products.index') }}">
                                    <span class="icon-basket-loaded"> Registrasi Produk</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('products.create') }}">
                                    <span class="icon-note"> Tambah Produk</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->