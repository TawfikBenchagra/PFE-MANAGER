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
    
     <!-- Gerer les cours -->
     <li class="nav-item ">
        <a href="{{route('showCoursEns')}}" class="nav-link ">
          <i  class="fas fa-book mr-3"></i>
          <span>Les cours</span>
        </a>
      </li>
      
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{route('Elist:Etdlist_pour_Ens')}}">
            <i class="fas fa-user-graduate mr-3"></i>
            <span>Liste des étudiants</span> 
        </a>    
   </li>

     <!-- Gerer les emplois -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('EnsEmplois.index') }}">
        <i class="far fa-clock mr-3"></i>
        <span>Emplois de temps</span></a>
    </li>
    
   
     <!-- GERER LES EXAMENS -->
     
      <!-- LA BIBLIOTHEQUE -->
      <li class="nav-item ">
        <a href="{{route('quiz.index')}}" class="nav-link ">
          <i class="fas fa-file-signature mr-3"></i>
          <span>Quiz</span>
        </a>
      </li>

         <!-- GERER LES EXAMENS -->
     <li class="nav-item ">
      <a href="{{route('Ens_planification')}}" class="nav-link ">
        <i class="far fa-calendar-check mr-3"></i>
        <span>Calendrier des examens</span>
      </a>
    </li>
    
    <!-- LA BIBLIOTHEQUE -->
    <li class="nav-item ">
      <a href="{{route('Ensbibliotheque.index')}}" class="nav-link ">
        <i class="fas fa-swatchbook mr-3"></i>
        <span>La bibliothèque</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
  </ul>