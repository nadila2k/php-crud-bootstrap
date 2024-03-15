<?php 
include "dbcon.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
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
                      <a href=""class="btn btn-info btn-sm">View</a>
                        <a href=""class="btn btn-success btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>