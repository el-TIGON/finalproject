 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    
    <div class="sidebar-brand-text mx-3">Home service ms </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    pages
</div>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
                <a class="nav-link" href="messages.php">
                    <i class="fas fa-comments"></i>
                    <span>messages</span></a>
            </li>
<li class="nav-item">
                <a class="nav-link" href="clients.php">
                    <i class="fas fa-user"></i>
                    <span>clients request</span></a>
            </li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
                <a class="nav-link" href="job.php">
                    <i class="fas fa-user"></i>
                    <span>job Request</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="projects_taken.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>projects </span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="service_provider.php">
                    <i class="fas fa-users"></i>
                    <span>service_providers</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="registration.php">
                    <i class="fas fa-users"></i>
                    <span>Admin registration</span></a>
            </li>
            

<!-- Divider -->
</ul>
<!-- End of Sidebar -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="logout.php" method="POST"> 
          
                         <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

                    </form>
                
                </div>
            </div>
        </div>
    </div>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
       
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                   
                    Admin


                </span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                   
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
