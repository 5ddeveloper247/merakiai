  <!-- header -->
  <header id="header" class="fixed-top">

      <!-- .navbar -->
      <nav id="navbar" class="navbar nav-tb">
          <!--image logo -->
          <a href="{{ route('index') }}" class="logo">
              <img src="assets/images/logo.jpeg" alt="" class="img-fluid rounded">
          </a>

          <ul>
              <li><a class="nav-link scrollto {{ $customTitle === 'Home' ? 'active' : '' }}"
                      href="{{ route('index') }}">Home</a>
              </li>
              <li class="dropdown">
                  <a class="{{ $customTitle === 'Products' ? 'active' : '' }} custom-navlink" href="#">Products
                      <i class="bi bi-chevron-down"></i>
                  </a>
                  <ul>
                      <li><a href="products">Product One</a></li>
                      <li><a href="products">Product Two</a></li>
                  </ul>
              </li>

              <li><a class="nav-link scrollto {{ $customTitle === 'Pricing' ? 'active' : '' }}"
                      href="{{ route('pricing') }}">Pricing</a></li>
              <li><a class="nav-link scrollto {{ $customTitle === 'Tools' ? 'active' : '' }}"
                      href="{{ route('tools') }}">Tools</a></li>
              <li><a class="nav-link scrollto {{ $customTitle === 'Support' ? 'active' : '' }}"
                      href="{{ route('support') }}">Support</a></li>
              <li><a class="nav-link scrollto {{ $customTitle === 'Contact' ? 'active' : '' }}"
                      href="{{ route('contact') }}">Contact</a></li>
          </ul>
          <div class="nav-right">
              @if (Auth::user())
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  <div class="dropdown dropdown-navbar">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown button
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </div>
              @else
                  <a class="login scrollto1 me-2" href="{{ route('login') }}">Login</a>

                  <button class="contact_us scrollto" href="#">
                      <span class="icon-container">
                          <i class="bi bi-arrow-right-circle-fill"></i>
                      </span>
                      <span class="contact"> Start free 7-day trial</span>

                  </button>
              @endif


          </div>
          <i class="bi mobile-nav-toggle bi-list"></i>
      </nav>
      <!-- .navbar -->
  </header>
  <!-- End Header -->
