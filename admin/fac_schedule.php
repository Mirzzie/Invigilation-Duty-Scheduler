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
    <title>Sidebars · Bootstrap v5.2</title>
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
      <a href="fac_schedule.php" class="nav-link active" aria-current="page" >
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Faculty Schedule
        </a>
      </li>
      <li>
        <a href="add_schedview.php" class="nav-link text-white">                   
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
        <a href="users.php" class="nav-link text-white">
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
  <div class="d-flex flex-column flex-grow-1" style="padding : 20px; overflow: auto">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Faculty Schedule</h3>
      <table id="data_table" class="table table-bordered border-dark">
		<thead>
			<tr>
        <th>ID</th>
				<th>Date</th>
        <th>Time</th>
        <th>Exam</th>
				<th>Faculty</th>
        <th>Room</th>
        <th>Modify</th>
     </tr>
		</thead>
		<tbody>
		<?php
      include '../server.php';
      $sql_query = "SELECT al_id,x_table_tb.x_date,x_table_tb.time, exam_tb.exam_name, alloc_tb.fid, fac_tb.fname, classroom_tb.room_no FROM alloc_tb LEFT JOIN (
        x_table_tb LEFT JOIN exam_tb
        ON exam_tb.exam_id = x_table_tb.exam_id)
        ON alloc_tb.table_id =x_table_tb.table_id
        LEFT JOIN fac_tb
        ON alloc_tb.fid = fac_tb.fid
        LEFT JOIN classroom_tb
        ON classroom_tb.class_id = alloc_tb.class_id";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
      if($resultset->num_rows == 0){
        echo "<tbody><tr>";
        echo "<td colspan='5'>No Allocations Found</td>";
        echo "</tr></tbody>";
      }
      else{
			 while( $row = mysqli_fetch_assoc($resultset) ) {
			 ?>
			   <tr id="<?php echo $row ['al_id']; ?>">
                <td><?php echo $row ['al_id']; ?></td>
                <td><?php echo $row ['x_date']; ?></td>
                <td><?php echo $row ['time']; ?></td>
                <td><?php echo $row ['exam_name']; ?></td>
                <td><?php echo $row ['fname']; ?></td>
                <td><?php echo $row ['room_no']; ?></td>
                <td><form class="form-horizontal" method="post"action=''>
                        <input type="hidden" name="al_id" value="<?php echo $row['al_id']; ?>">
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        <input type='submit' class='btn btn-outline-primary' name='Re-allocate' value='Change'>
                        </form></td>
			   </tr>
            </tr>
            <?php }} ?>
      <?php
      if(isset($_POST['Re-allocate'])){
        $al_id = $_POST['al_id'];
        echo "<script>window.location.href='re_allocate.php?al_id=$al_id'</script>";
      }

      if(isset($_POST['delete'])){
        $al_id = $_POST['al_id'];
        $delete = "DELETE FROM alloc_tb WHERE al_id='$al_id'";
        $result = mysqli_query($conn,$delete);
        if($result){
          echo "<script>alert('Deleted Successfully')</script>";
          echo "<script>window.location.href=''</script>";
        }
        else{
          echo "<script>alert('Failed to Delete')</script>";
          echo "<script>window.location.href=''</script>";
        }
      }
?>
		</tbody>
		</table>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</main>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/sidebars.js"></script>
</body>
</html>