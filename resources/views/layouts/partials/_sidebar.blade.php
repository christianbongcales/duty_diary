<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="\admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book fa-solid"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Duty Diary</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item
        {{ request()->is('admin') ? 'active' : '' }}
    ">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item
        {{ request()->is('diaries') ? 'active' : '' }}
    ">
        <a class="nav-link" href="{{ route('diaries.index')}}">
            <i class="fas fa-solid fa-book-open"></i>
            <span>Diaries</span></a>
    </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item
        {{ request()->is('documentations') ? 'active' : '' }}
    ">
        <a class="nav-link" href="{{ route('documentations.index')}}">
            <i class="fas fa-solid fa-images"></i>
            <span>Documentations</span></a>
    </li>

    @if(Session::get('USERROLE') == 1 || Session::get('USERROLE') == 2)
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Nav Item - Charts -->
     <li class="nav-item
        {{ request()->is('approval-requests') ? 'active' : '' }}
    ">
         <a class="nav-link" href="{{ route('approval-requests.index')}}">
            <i class="fas fa-solid fa-check"></i>
             <span>Approval Requests</span>
        </a>
     </li>
     @endif

     @if(Session::get('USERROLE') == 1)
      <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item
        {{ request()->is('approval-requests') ? 'active' : '' }}
    ">
         <a class="nav-link" href="{{ route('users.index')}}">
            <i class="fas fa-solid fa-users"></i>
             <span>Users</span>
        </a>
     </li>
     @endif


</ul>


<!-- End of Sidebar -->
