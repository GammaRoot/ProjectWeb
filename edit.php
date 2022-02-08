<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="edit.css" rel="stylesheet">
</head>
<body>

<div id="wrapper">

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://autosell.mk/mk">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-laugh-wink"></i>
</div>
<div class="sidebar-brand-text mx-3">AutoSell</div>
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
<span>Posts</span>
</a>
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
<h6 class="m-0 font-weight-bold text-primary">Create New User</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Actions</th>
</tr>
</thead>
<tfoot>
<tr>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Actions</th>
 </tr>
</tfoot>
<tbody>
<tr>
<form action="https://autosell.mk/mk/dashboard/users/1/update" method="POST"></form>
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input type="hidden" name="_method" value="PUT"> <td><input value="Superadmin" style="width:100%;" type="text" name="name" disabled=""></td>
<td><input value="superadmin@autosell.com" style="width:100%;" type="email" name="email" disabled=""></td>
<td><select style="width:100%;" name="role" id="role" required="">
<option disabled="" selected="">superadmin</option>
<option value="administrator">administrator</option>
<option value="company">company</option>
<option value="user">user</option>
<option value="superadmin">superadmin</option>
</select></td>
<td><input type="submit" class="btn btn-info" value="Update"></td>

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