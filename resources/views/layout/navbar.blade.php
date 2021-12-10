<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/posts">PRADIPTA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active':' ' }}" href="/">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? 'active':' ' }}" href="/about">About</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is('posts') ? 'active':' ' }}" href="/posts">Blog Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories') ? 'active':' ' }}" href="/categories">Blog Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang , {{ auth()->user()->name }} !
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
                </li>
            </ul>
          </li>
          @else  
          <li class="nav-item">
            <a class="nav-link {{ ($active == "login") ? 'active' : '' }}" href="/login">Login <i class="bi bi-box-arrow-in-right"></i></a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    </nav>