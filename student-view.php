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
                        <h4>View Student
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
                                      
                                        <div class="mb-3">
                                            <label for="nmae">Student Name :</label>
                                           
                                            <p class="form-control">
                                            <?php echo $students['name'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email">Student Email :</label>
                                           
                                            <p class="form-control">
                                            <?php echo $students['email'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone">Student Phone :</label>
                                            
                                            <p class="form-control">
                                            <?php echo $students['phone'];?> 
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="course">Student Course :</label>
                                            
                                            <p class="form-control">
                                            <?php echo $students['course'];?>
                                            </p>
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