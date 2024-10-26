<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TEST</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kartu-keluarga.index') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('kartu-keluarga.index') }}">Kartu Keluarga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ktp.index') ? 'active' : '' }}"
                        href="{{ route('ktp.index') }}">KTP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
