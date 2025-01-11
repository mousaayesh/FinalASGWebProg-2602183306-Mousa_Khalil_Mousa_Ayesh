<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item {{ ($pengguna)? '' : 'd-none' }}">
                <a class="nav-link text-primary" href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ ($pengguna)? '' : '' }}">
                <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item {{ ($pengguna)? '' : 'd-none' }}">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item {{ ($pengguna)? '' : 'd-none' }}">
                <a class="nav-link" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>