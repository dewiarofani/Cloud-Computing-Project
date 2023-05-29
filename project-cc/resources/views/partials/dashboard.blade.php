<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ $title === "Informasi" ? 'active' : '' }}" aria-current="page" href="/">
                <span data-feather="informasi"></span>
                Informasi Umum BPS
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $title === "Visi dan Misi" ? 'active' : '' }}" href="/visi-dan-misi">
                <span data-feather="file"></span>
                Visi dan Misi BPS
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $title === "Alamat dan Kontak" ? 'active' : '' }}" href="/alamat-dan-kontak">
                <span data-feather="file"></span>
                Alamat dan Kontak BPS
            </a>
        </li>
      </ul>
    </div>
  </nav>