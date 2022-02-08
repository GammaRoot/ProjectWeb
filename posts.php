<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="posts.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://autosell.mk/mk">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-laugh-wink"></i>
</div>
</a>

<hr class="sidebar-divider my-0">

<li class="nav-item active">
<a class="nav-link" href="dashboard.php">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Dashboard</span></a>
</li>

<hr class="sidebar-divider">


<li class="nav-item">
<a class="nav-link" href="users.php">
<i class="fas fa-fw fa-table"></i>
<span>Users</span></a>
</li>

<li class="nav-item">
<a class="nav-link" href="posts.php">
<i class="fas fa-fw fa-table"></i>
<span>Posts</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">

<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>


<div id="content-wrapper" class="d-flex flex-column">

<div id="content">

<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
<i class="fa fa-bars"></i>
</button>


<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown no-arrow d-sm-none">
<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-search fa-fw"></i>
</a>

<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fas fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<div class="topbar-divider d-none d-sm-block"></div>

<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small">Superadmin</span>
<img style="width: 50px; height: 50px; object-fit: cover;" class="circle" src="Images/undraw_profile_2.svg">
</a>

<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<a class="dropdown-item" href="#">
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile
</a>
<a class="dropdown-item" href="#">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Settings
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Logout
</a>
</div>
</li>
</ul>
</nav>

<div class="container-fluid">

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">List of Posts</h6>
</div>
<div class="card-body">
<div class="table-responsive">
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Brand</th>
<th>Description</th>
<th>Actions</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Brand</th>
<th>Description</th>
<th>Actions</th>
</tr>
</tfoot>
<tbody>
<tr>
<td><a href="Images/BMW.jpg" target="_blank">BMW</a>
</td>
<td>Premium</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_4" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/4/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/BMW M2.jpg" target="_blank">BMW M2</a>
</td>
<td>Standard</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_197" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/197/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/Mercedes.jpg" target="_blank">Mercedes</a>
</td>
<td>Premium</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_622" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/622/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/Murray T50.jpg" target="_blank">Murray T50</a>
</td>
<td>Premium</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_1629" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/1629/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/Audi.jpg" target="_blank">Audi</a>
</td>
<td>Premium</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_1673" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/1673/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
 </div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/A110.jpg" target="_blank">A110</a>
</td>
<td>Gold</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_2134" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/2134/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>
    <a href="Images/Citroen SM.jpg" target="_blank">Citroen SM</a>
</td>
<td>Premium</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_2511" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
 </div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/2511/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/Giulia.jpg" target="_blank">Giulia</a>
</td>
<td>Standard</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_2669" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/2669/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/R34.jpg" target="_blank">R34</a>
</td>
<td>Standard</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_2892" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/2892/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td><a href="Images/ZR1.jpg" target="_blank">ZR1</a>
</td>
<td>Standard</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Edit</a>

<div id="confirmModal_2968" class="modal fade">
<div class="modal-dialog modal-confirm">
<div class="modal-content">
<div class="modal-header">
<div class="icon-box">
<i class="bi bi-x-octagon"></i>
</div>
<h4 class="modal-title">Are you sure?</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="modal-body">
<p>Do you really want to delete these records? This process cannot be undone.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
<form action="https://autosell.mk/mk/vehicles/2968/delete" method="POST">
<input type="hidden" name="_token" value="hSPFUXXNgEW3BuRiu1SPfOAj47Eoqr4UyW36ICnx"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
<span>Copyright © Autosell 2021</span>
</div>
</div>
</footer>

</div>

</div>


<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>