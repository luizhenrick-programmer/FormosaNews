<div class="d-flex pt-3 bg-dark text-light">
  <div class="flex-1 text-center">
    <img src="{{ asset('img/FORMOSA.png') }}" alt="">
  </div>
  @if (Route::has('login'))
    <nav class="mx-3 flex justify-end align-items-center m-2">
      @auth
        <a href="{{ url('/dashboard') }}" class="">
          Dashboard
        </a>
      @else
        <a href="{{ route('login') }}"
        class="bg-light text-dark p-2 rounded-md m-2 fs-6 text-decoration-none fw-bold">
        <span><i class="bi bi-box-arrow-in-right"></i></span>
          <span>Sign In</span>
        </a>

      @if (Route::has('register'))
        <a href="{{ route('register') }}"
        class="bg-light text-dark p-2 rounded-md m-2 fs-6 text-decoration-none fw-bold">
          <i class="bi bi-person-add"></i>
          <span>Sign Up</span>
        </a>
      @endif
      @endauth
    </nav>
  @endif
</div>