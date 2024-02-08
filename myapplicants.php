<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "companyproject";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM jobapplicants";

$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>JOB APPLICANTS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

     <center>
     <h1 style="color: green"><strong>JOB APPLICANTS IN YOUR COMPANY</strong></h1>

     </center>

   <div class="container">

 
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
   
  
<?php

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {


    ?>

    <tr>
        <td><?php echo $row['id']  ?></td>
        <td><?php echo $row['name']  ?></td>
        <td><button id = '<?php echo $row['id']  ?>' class="btn btn-info">View</button></td>
    </tr>

<?php


  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

  
        </tbody>
    </table>
 </div>


 <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

     
      <div class="modal-header">
        <h4 class="modal-title">APPLICANT INFO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

     
      <div class="modal-body">
        Modal body..
      </div>

     
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


    
  <script>
      $(document).ready(function(){
          $('button').click(function(){
        id_emp = $(this).attr('id')
              $.ajax({url: "select.php",
              method:'post',
              data:{emp_id:id_emp},
              success: function(result){
          $(".modal-body").html(result);
        }});


              $('#myModal').modal("show");
          })
      })

  </script>
      <br><br><br><br>
    <center>
        <a href="index.php" class="btn btn-primary">Back To DASHBOARD</a>
    </center>


    <br><br><br><br>
</body>
</html>