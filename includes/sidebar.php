
 <!-- Favicon -->
 <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Added Libraries -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

  <!-- Sidebar Start -->
<div class="sidebar pe-4 pb-5">
    <nav class="navbar bg-secondary navbar-dark" style="border-bottom-right-radius: 20px;">
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                 <!-- <img src="lasalle.png" alt="Image 2" style="height: 150px;"> -->
                <?php
                
                    include('authentication.php');
                    $userID = $_SESSION['admin_id'];
                    $query = "SELECT * FROM add_admin WHERE admin_id = $userID";
                    $sql_run =  mysqli_query($conn, $query);

                    $user = mysqli_num_rows($sql_run) > 0;

                    if($user){
                        while($row = mysqli_fetch_assoc($sql_run)){
                ?>
                <a href="user_information.php">
                <img class="rounded-circle" src="<?php echo $row['profilePicture']; ?>" style="width: 45px; height: 45px;border:1px solid green;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3" style="text-color:#0f1116;">
            
                <h6 class="mt-0 mb-1" style="font-family:Open Sans;"><?php echo $row['firstName'] . ' ' . $row['lastName']; ?></h6>

                <span style="color:black;"><?php echo $row['user_type']; ?></span>
                </a>
            <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="dashboard.php" class="nav-item nav-link"style="color:black;"><i class="fa fa-dashboard me-1"></i>Dashboard</a>
            <a href="staff_table.php" class="nav-item nav-link"style="color:black;"><i class="fa fa-users me-1"></i>Staff</a>
            <a href="overview.php" class="nav-item nav-link" style="color:black;"><i class="fa fa-info-circle me-1"></i> About</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->