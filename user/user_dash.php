<?php
session_start();
$uname = $_SESSION['uname'];
if (empty($uname)){
    header("location:../index.html");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>USER HOME</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      --------------------

      * {
        box-sizing: border-box;
      }
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      /* Float four columns side by side */
      .column {
        margin-top: 40px;
        margin-left: 40px;
        float: left;
        width: 25%;
        padding: 0 10px;
      }
      /* Remove extra left and right margins, due to padding in columns */
      .row {margin: 0 -5px;}
      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      /* Style the counter cards */
      .card {

        text-padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
        text-align: left;
        background-color: #f1f1f1;
      }

      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
      }
      /* Responsive columns - one column layout (vertical) on small screens */
      @media screen and (max-width: 600px) {
        .column {
          width: 100%;
          display: block;
          margin-bottom: 20px;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="../assets/css/sidebars.css" rel="stylesheet">
  </head>
  <body>
<main class="d-flex flex-nowrap" style="height: 990px;" >
  <h1 class="visually-hidden">Sidebars examples</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
  <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <!--<svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>-->
      <span class="fs-4">Dashboard</span>
    </div>
    <hr>
       <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="user_dash.php" class="nav-link active" aria-current="page">
          <i class="fi fi-rr-home bi pe-none me-2"></i>
          Home
        </a>
      </li>
      <li>
        <a href="schedule.php" class="nav-link text-white">
       <i class="fi fi-rr-calendar-pen  bi pe-none me-2"></i>
          Schedule
        </a>
      </li>
      <li>
        <a href="timetable.php" class="nav-link text-white">
          <i class="fi fi-rr-calendar-clock bi pe-none me-2"></i>
          Time Table
        </a>
      </li>
      <li>
        <a href="leave_application.php" class="nav-link text-white">
        <i class="fi fi-rr-document-signed bi pe-none me-2"></i>
          Leave Application
        </a>
      </li>
      <li>
        <a href="leave_status.php" class="nav-link text-white">
        <i class="fi fi-rr-time-check bi pe-none me-2"></i>
            Leave Status
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <span><i class="fi fi-rr-user  bi pe-none me-2"></i><?php echo $uname;?></span> <!--user name-->
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
      <li><a class="dropdown-item" href="../logout.php"><i class="fi fi-rs-sign-out-alt bi pe-none me-2"></i>Sign out</a></li>
      </ul>
    </div>
  </div>
  
<?php
  //fetch card data
  include "../server.php";
  $sql = "SELECT * from fac_tb WHERE status = '1'";
  $avail_fac_count = mysqli_query($conn,$sql);
  
  include "../server.php";
  $sql = "SELECT * from exam_tb ";
  $exam_count = mysqli_query($conn,$sql);

?>

  <div class="row">
    <div class="column">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><b>Exams</b></h5>
          <h6 class="card-subtitle mb-2 text-muted">Ongoing</h6>
          <p class="card-text"><?php echo mysqli_num_rows($exam_count); ?></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title"><b>Faculties</b></h5>
        <h6 class="card-subtitle mb-2 text-muted">Total</h6> 
        <p class="card-text"><?php echo mysqli_num_rows($avail_fac_count); ?></p>
      </div></div>
    </div>
  <div class="d-flex flex-column flex-grow-1" style="padding-top : 30px;">
  
  <div class="card">
  <h5 class="card-header">Upcoming Examinations</h5>
    
    <div class="table-responsive">
      <table class="table table-bordered border-dark">
        <thead>
          <tr>
            
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Name of Examination</th>
            
          </tr>
        </thead>
        <tbody>

		<?php
      include '../server.php';
      $sql_query = "SELECT * FROM exam_tb WHERE status='1'";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			   <tr id="<?php echo $row ['exam_id']; ?>">

         <td><?php echo $row ['start_date']; ?></td>
			   <td><?php echo $row ['end_date']; ?></td>
			   <td><?php echo $row ['exam_name']; ?></td>
			   </tr>
			<?php } ?>
          
        </tbody>
      </table>
    </div>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</main>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

      <script src="../assets/js/sidebars.js"></script>
  </body>
</html>
