<style>
    .bg-purple {
      background-color: rgb(68, 0, 128);
    }
  </style>
  <ul class="navbar-nav  sidebar sidebar-dark accordion bg-purple"  id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon"><!-- rotate-n-15-->
        <i class='fas fa-school' style='font-size:36px'></i>
      </div>
      <div class="sidebar-brand-text mx-3">PFEMANAGER</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
     <!-- Gerer les cours -->
     <li class="nav-item ">
      <a href="{{route('showCours')}}" class="nav-link ">
        <i  class="fas fa-book mr-3"></i>
        <span>Les cours</span>
      </a>
    </li>
  
    
      <!-- Repondre au question-->
       <li class="nav-item ">
        <a href="{{ route('qcm.check') }}" class="nav-link ">
          <i class="fas fa-swatchbook mr-3"></i>
          <span>QCM</span>
        </a>
      </li>
       
   
     <!-- VOIR les emplois  -->
     <li class="nav-item ">
      <a href="{{route('EtdEmplois.index')}}" class="nav-link ">
        <i class="fas fa-book-reader mr-3"></i>
        <span>Les emplois de temps</span>
      </a>
    </li>
    <!-- LA BIBLIOTHEQUE -->
    <li class="nav-item ">
      <a href="/biblioETD" class="nav-link ">
        <i class="fas fa-swatchbook mr-3"></i>
        <span>La bibliothèque</span>
      </a>
    </li>

     <!-- LA BIBLIOTHEQUE -->
     <li class="nav-item ">
      <a href="{{route('EtdExam.index')}}" class="nav-link ">
        <i class="fas fa-book-reader mr-3"></i>
        <span>La planification des <p class="mr-3 text-center">examens</p></span>
      </a>
    </li>

    <li class="nav-item ">
      <a href="/note" class="nav-link ">
        <i class="fas fa-book-reader mr-3"></i>
        <span>Les notes</p></span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
  </ul>