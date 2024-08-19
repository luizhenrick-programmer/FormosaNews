<div class="d-flex p-3 bg-dark text-light">
  <div class="flex-1 text-center">
    <img src="{{ asset('img/FORMOSA.png') }}" alt="">
  </div>

  @if (Route::has('login'))
    <nav class="mx-3 flex justify-end align-items-center m-2">
      @auth
        <a href="{{ url('/dashboard') }}" class="bg-light text-dark p-2 rounded-md m-2 fs-6 text-decoration-none fw-bold">
          <span><i class="bi bi-box-arrow-in-right"></i></span>
          <span>Dashboard</span>
        </a>
      @else
        <!-- Botões "Sign In" e "Sign Up" para telas maiores -->
        <a href="{{ route('login') }}" class="bg-light text-dark p-2 rounded-md m-2 fs-6 text-decoration-none fw-bold d-none d-md-block">
          <span><i class="bi bi-box-arrow-in-right"></i></span>
          <span>Sign In</span>
        </a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="bg-light text-dark p-2 rounded-md m-2 fs-6 text-decoration-none fw-bold d-none d-md-block">
            <i class="bi bi-person-add"></i>
            <span>Sign Up</span>
          </a>
        @endif

        <!-- Botão de menu para telas menores -->
        <button class="btn btn-light d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
          <i class="bi bi-list"></i>
        </button>
      @endauth
    </nav>
  @endif
</div>

<!-- Offcanvas para "Sign In" e "Sign Up" -->
<div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-3">
      <span><i class="bi bi-box-arrow-in-right"></i></span>
      <span>Sign In</span>
    </a>
    @if (Route::has('register'))
      <a href="{{ route('register') }}" class="btn btn-secondary w-100">
        <i class="bi bi-person-add"></i>
        <span>Sign Up</span>
      </a>
    @endif
  </div>
</div>
