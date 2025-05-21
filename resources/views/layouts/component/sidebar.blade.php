<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile border-bottom">
      <a href="#" class="nav-link flex-column">
        <div class="nav-profile-image">
          <img src="../assets/images/faces/face1.jpg" alt="profile" />
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
          <span class="font-weight-semibold mb-1 mt-2 text-center">Admin Nih Bos</span>
          <span class="text-secondary icon-sm text-center">Saldo Admin:$47.599.543.127</span>
        </div>
          </a>
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head">Template Pages</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
          <i class="mdi mdi-web menu-icon"></i>
          <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-spotify menu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jenis.index') }}">
              <i class="mdi mdi-microsoft menu-icon"></i>
              <span class="menu-title">Jenis</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('artikel.index') }}">
              <i class="mdi mdi-microsoft menu-icon"></i>
              <span class="menu-title">Artikel</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>