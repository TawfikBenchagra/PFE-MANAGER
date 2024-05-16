<style>
  .bg-indigo {
    background-color: rgb(143, 39, 255);
  }
</style>
<nav class="navbar navbar-expand navbar-light bg-indigo topbar mb-4 static-top shadow">

  <div class="ml-auto">
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


        <h5 class="text-light " style="margin-right: 10px">
          {{Auth::guard('admin')->user()->nom}} 
          {{Auth::guard('admin')->user()->prenom}}
        </h5>
        <img class="img-profile rounded-circle" src="{{asset('storage/' . Auth::guard('admin')->user()->image)}}" style="width: 40px; height:40px;">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="/Admprofile">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{route('deconnexion')}}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </div>
  
</nav>