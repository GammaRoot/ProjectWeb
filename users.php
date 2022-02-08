<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Autosell</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="users.css" rel="stylesheet">
</head>
<body id="page-top">

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
<div class="card-header py-3 d-flex justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">Users</h6>
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
<td>Superadmin</td>
<td>superadmin@autosell.com</td>
<td>superadmin</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_1" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/1/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>Simple User</td>
<td>simpleuser@autosell.com</td>
<td>user</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_2" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/2/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>Auto Sallon</td>
<td>autosallon@autosell.com</td>
<td>company</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_3" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/3/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>Administrator</td>
<td>administrator@autosell.com</td>
<td>administrator</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

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
<form action="https://autosell.mk/mk/dashboard/users/4/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>Florent Odai</td>
<td>autosellweb@gmail.com</td>
<td>user</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_5" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/5/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>Armend Ahmeti</td>
<td>ahmeti.armend@gmail.com</td>
<td>user</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_6" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/6/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
 <tr>
<td>florent odai</td>
<td>florentodai89@gmail.com</td>
<td>user</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_7" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/7/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
</form>
</div>
</div>
</div>
</div>
 </td>
</tr>
<tr>
<td>Amir Ahmeti</td>
<td>amirahmeti30@gmail.com</td>
<td>user</td>
<td class="d-flex justify-content-end gb_dashboard align-items-center">
<a class="btn btn-secondary" href="edit.php">Editrole</a>

<div id="confirmModal_8" class="modal fade">
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
<form action="https://autosell.mk/mk/dashboard/users/8/delete" method="POST">
<input type="hidden" name="_token" value="J8aurw5MbV1YmwdMlebBpaygT5Ysi7YybTf4qDGH"> <input class="btn btn-danger" type="submit" value="Delete">
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