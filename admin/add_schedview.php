<?php
session_start();
$uname = $_SESSION['uname'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Sidebars · Bootstrap v5.2</title><!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
<main class="d-flex flex-nowrap" style="height: 990px;">
  <h1 class="visually-hidden">Sidebars examples</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <!-- <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg> -->
      <span class="fs-4">Admin Dashboard</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="admin_dash.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
        </a>
      </li>
      <li>
      <a href="fac_schedule.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Faculty Schedule
        </a>
      </li>
      <li>
        <a href="add_sched.php" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Create Schedule
        </a>
      </li>
      <li>
        <a href="exam_table.php" class="nav-link text-white" >
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Exam Schedule
        </a>
      </li>
      <li>
        <a href="./leaves/leavereq.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Leave Requests
        </a>
      </li>
      <li>
        <a href="users.php" class="nav-link text-white" >
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Users
        </a>
      </li>
    </ul>
    <hr>

    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <strong><?php echo $uname;?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="../logout.php">Sign out</a></li>
      </ul>
    </div>
  </div>
<div class="d-flex flex-column flex-grow-1" style="padding-top : 30px;">
  <div class="card">
  <h5 class="card-header">
    CREATE SCHEDULE
  </h5>
  <form method="POST" action="" style= "padding: 30px; width: 880px;">
  <label for="inputPassword" class="col-sm-2 col-form-label">Name of the Examination</label>
        <table>
      <tr>
      <select name="exam_id" class="form-select" aria-label="Default select example" required>
                        <option selected value="">Select</option>
                        <?php
                         include '../server.php';
		                       	$sql = "SELECT exam_id, exam_name FROM exam_tb";
		                        $result = $conn->query($sql);
		                        while ($row=$result->fetch_assoc()){
		                          echo "<option value='".$row['exam_id']."'>".$row['exam_name']."</option>";
		                        }
		                    	?>
              </select>
    </tr><br>
    <tr>
    <button type="submit" class="btn btn-primary mb-3" name="view">View Timetable</button>
    </form>
    </tr>
    </table>
    </div>
    </div>
    </div>

    <?php
include '../server.php';

// Check if the 'view' request parameter has been set
if (isset($_REQUEST['view'])) {
  // Create a connection to the database

  // Prepare the SELECT statement
  $fetch_table="SELECT * FROM exam_tb,x_table_tb, dep_tb,sub_tb WHERE dep_tb.depid= sub_tb.depid AND sub_tb.sub_id= x_table_tb.sub_id AND exam_tb.exam_id=$exam_id AND x_table_tb.exam_id=$exam_id";
  // echo $fetch_table;
  $result = mysqli_query($conn, $fetch_table);

  // Start building the HTML table
  echo "<div class='card'>";
  echo "<table id='data_table' class='table table-bordered border-dark'>";
  echo "<thead><tr>";
  echo "<th>Date</th>";
  echo "<th>Time</th>";
  echo "<th>Course</th>";
  echo "<th>Subject</th>";
  echo "</tr></thead>";
  echo "<tbody>";
  $exam_id = $_POST['exam_id'];

  // Iterate over the rows in the result set
  while ($row = mysqli_fetch_assoc($result)) {
    // Generate a table row for each row in the result set
    echo "<tr>";
    echo "<td>" . $row['x_date'] . "</td>";
    echo "<td>" . $row['time'] . "</td>";
    echo "<td>" . $row['dname'] . "</td>";
    echo "<td>" . $row['sub_name'] . "</td>";
    echo "<td><a class='btn-btn-primary' href='allocate.php?table_id=" . $row['table_id'] . "'>Allocate</a></td>";
    echo "</tr>";
  }

  // Close the table and container elements
  echo "</tbody></table></div>";

  // Close the database connection
}
?>
<<<<<<< HEAD

=======
>>>>>>> parent of 77ad689 (check1)

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebars.js"></script>
</body>
</html>