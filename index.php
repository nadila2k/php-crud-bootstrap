<?php 
include "dbcon.php";
session_start();
?>
<?php include 'includes/header.php';?>
  <div class="container mt-4">
  <?php include("message.php"); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Details
              <a href="student-create.php" class="btn btn-primary float-end">Add Student Details</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "Select*from students";
                $res = mysqli_query($conn, $query);
                if (mysqli_num_rows($res) > 0) {
                  foreach ($res as $student) {
                ?>
                    <tr>
                      <td><?php echo $student['id'] ?></td>
                      <td><?php echo $student['name'] ?></td>
                      <td><?php echo $student['email'] ?></td>
                      <td><?php echo $student['phone'] ?></td>
                      <td><?php echo $student['course'] ?></td>
                      <td>
                      <a href="student-view.php?id=<?php echo $student['id']?>"class="btn btn-info btn-sm">View</a>
                        <a href="student-edit.php?id=<?php echo $student['id']?>"class="btn btn-success btn-sm">Edit</a>
                       <form action="code.php" method="post" class="d-inline">
                       <button type="submit" name="delete" class="btn btn-danger" value="<?php echo $student['id'] ?>">Delete</button>
                       </form>
                      </td>
                      
                    </tr>
                <?php
                  }
                } else {
                  echo "<h5>No Record Found </h5>";
                }



                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include "includes/footer.php";?>