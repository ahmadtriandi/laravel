

<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container ">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Home") ? 'active' :'' }}" href="\">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "About") ? 'active' :'' }}" href="\about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Posts") ? 'active' :'' }}" href="\blog ">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Category") ? 'active' :'' }}" href="\categories ">Category</a>
          </li>
          
          
        </ul>

        <Ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === "login") ? 'active' :'' }}"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>

        </Ul>
      </div>
    </div>
  </nav>
