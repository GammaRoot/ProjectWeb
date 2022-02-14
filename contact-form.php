<?php include('server.php');
?>

<?php if (isset($_SESSION["role"]) && $_SESSION["role"] === "admin") : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="dashboard.css">
    </head>

    <body id="page-top">
        <div id="wrapper">

            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Project Web</div>
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
                <li class="nav-item">
                    <a class="nav-link" href="contact-form.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Contact form</span></a>
                </li>
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
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                    <img style="width: 50px; height: 50px; object-fit: cover;" class="circle" src="Images/undraw_profile_2.svg">
                </a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">


        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Contact form</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '', 'projectweb');
                            // Check connection
                            if (mysqli_connect_errno()) {
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }


                            $query = "SELECT * FROM contact";

                            $result = mysqli_query($con, $query);

                            while ($row    = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['subject'] . "</td>";
                                echo "<td>" . $row['message'] . "</td>";
                                echo "</tr>";
                            }

                            mysqli_close($con);
                            ?>
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
            <span>Copyright © ProjectWeb 2022</span>
        </div>
    </div>
</footer>

</div>
        </div>
    </body>

    </html>
<?php else : ?>
    <?php header('location: index.php'); ?>
<?php endif ?>