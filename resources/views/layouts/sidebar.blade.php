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
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-users mr-3"></i>
        <span>Liste des comptes</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Adm"><i class="fas fa-user-tie mr-3"></i>Administrateurs</a>
            <a class="collapse-item" href="Ens"><i class="fas fa-user-tie mr-3"></i>Enseignants</a>
            <a class="collapse-item" href="Etd"><i class="fas fa-user-graduate mr-3"></i>Etudiants</a>
            <a class="collapse-item" href="Par"><i class="fas fa-male mr-3"></i>Parents</a>

        </div>
    </div>
 </li>
   <!-- Gerer les cours -->
   <li class="nav-item ">
    <a href="{{route('coursAdm.indexCours')}}" class="nav-link ">
      <i  class="fas fa-book mr-3"></i>
      <span>Les PFE</span>
    </a>
  </li>

   <!-- Gerer les emplois -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('emplois.index') }}">
      <i class="far fa-clock mr-3"></i>
      <span>Emplois de temps</span></a>
  </li>
  
 
   <!-- GERER LES EXAMENS -->
   <li class="nav-item ">
    <a href="{{route('exams.index')}}" class="nav-link ">
      <i class="far fa-calendar-check mr-3"></i>
      <span>Planifier des examens</span>
    </a>
  </li>
  <!-- LA BIBLIOTHEQUE -->
  <li class="nav-item ">
    <a href="{{route('bibliotheque.index')}}" class="nav-link ">
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