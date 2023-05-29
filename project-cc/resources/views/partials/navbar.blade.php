<nav class="navbar navbar-expand-lg navbar-dark sticky-top flex-md-nowrap p-0 shadow" style = "background-color:darkcyan">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="/img/logosurakarta.png" width="35">    
            Kota Surakarta
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Informasi") ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="/about-us">Pejabat Surakarta</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ ($title === "Pertumbuhan" ||$title === "Berdasarkan Usia dan Jenis Kelamin" ||$title === "Berdasarkan Agama") ? 'active' : '' }}" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Penduduk
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/berdasarkan-agama">Berdasarkan Agama</a></li>
                        <li><a class="dropdown-item" href="/berdasarkan-usia-dan-jenis-kelamin">Berdasarkan Usia dan Jenis Kelamin</a></li>
                        <li><a class="dropdown-item" href="/pertumbuhan-penduduk">Pertumbuhan Penduduk</a></li>
                    </ul>
                </li>

            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" style="background-color:aliceblue" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>