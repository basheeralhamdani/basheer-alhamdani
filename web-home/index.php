<?php
require('DB.php');
$results = result(); // Call the result() function once and assign the result to $results variable
?>

<html>
<head>
    <title>student info </title>
    <link href="assest/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="assest/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>
 .custom-cell { 
  padding-left: 10px; text-align: center; 
 
 
 } 

 .font-weight-bold{

  font-size: larger;
 }

 .text_color{
  color: cornflowerblue;
 }
</style>
</head>

<body>
    
<div class="container mt-3">
<div class="container  d-flex justify-content-center mb-2"><button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add new student </button></div>
<div class="table-responsive  border  ">
  <div class="table table-bordered">
    <div class="table-header">
      <div class="row font-weight-bold text_color" >
        <div class="col custom-cell border text-center">student name</div>
        <div class="col custom-cell border text-center">student number</div>
        <div class="col custom-cell border text-center">student gender</div>
        <div class="col custom-cell border text-center">student email</div>
      </div>
</div>
    <div class="table-body ">

<?php
        if (mysqli_num_rows($results) > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                ?>
      <div class="row">
        <div class="col custom-cell  border ">
                     <?php
                        echo $row['name'];
                        ?>
      </div>
        <div class="col custom-cell border">
               <?php
                        echo $row['number'];
                        ?>
</div>
        <div class="col custom-cell border">
                 <?php
                        echo $row['gender'];
                        ?>
</div>
        <div class="col custom-cell border">
                    <?php
                        echo $row['email'];
                        ?>
</div>
      
    </div>
<?php
          }
              }
            
         else {
            echo "No data available.";
        }
        ?>

  </div>
</div>

</div>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="register.php" method="post">
          <div class="mb-3">
            <label for="sname" class="col-form-label">student name:</label>
            <input type="text" class="form-control" id="sname" name="sname">
          </div>

          <div class="mb-3">
            <label for="sgender" class="col-form-label">student number:</label>
            <input type="text" class="form-control" id="sgender" name="snumber">
          </div>

          <div class="mb-3">
            <label class="col-form-label">Student gender:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sgender" id="male" value="male">
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sgender" id="female" value="female">
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>
         
          <div class="mb-3">
            <label for="semail" class="col-form-label">student email:</label>
            <input type="text" class="form-control" id="semail" name="semail">
          </div>

          <button name="submit" class="btn btn-primary">add</button>
        </form>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



</body>
</html>
