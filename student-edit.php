<?php
session_start();
include "dbcon.php";
?>
<?php include 'includes/header.php';?>

    <div class="container mb-5">
    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                        <div class="card-body">

                            <?php
                            if (isset($_GET['id'])) {
                                $id = mysqli_real_escape_string($conn, $_GET['id']);
                                $query = "Select*from students where id='$id'";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    $students = mysqli_fetch_array($query_run);
                            ?>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $students['id'];?>">
                                        <div class="mb-3">
                                            <label for="nmae">Student Name :</label>
                                            <input type="text" name="name" value="<?php echo $students['name'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Student Email :</label>
                                            <input type="email" name="email" value="<?php echo $students['email'];?>"  class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone">Student Phone :</label>
                                            <input type="text" name="phone" value="<?php echo $students['phone'];?>"  class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="course">Student Course :</label>
                                            <input type="text" name="course" value="<?php echo $students['course'];?>"  class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="update_student"  class="btn btn-primary">Update Student
                                                Data</button>
                                        </div>

                                    </form>
                            <?php
                                } else {
                                }
                            } else {
                            }



                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php include "includes/footer.php";?>