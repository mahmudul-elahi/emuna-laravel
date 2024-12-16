 <nav id="navbar" class="sticky-top navbar navbar-expand-lg navbar-dark">
     <div class="container px-4 px-lg-0">
         <a class="navbar-brand" href="#">
             <img src="{{ asset('assets/client/images/logo.png') }}" alt="Logo">
         </a>
         <button class="navbar-toggler d-lg-none custom-toggler" type="button" data-bs-toggle="collapse"
             data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon">
                 <span></span>
             </span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
             <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                 <li class="nav-item">
                     <a class="nav-link" href="#">Seller Portal</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Admin</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Analyze Ingredients</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Favorites</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Logout</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
