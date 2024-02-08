<?php

  if (isset($_POST['emp_id'])) {
    
    $output = '';

    $connection = mysqli_connect("localhost", "root", "", "companyproject");
    $query = "SELECT * FROM jobapplicants WHERE id = '".$_POST['emp_id']."' ";
    $result = mysqli_query($connection, $query);

    
    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
              <tr>  
                   <td width="30%"><label>Name</label></td>  
                   <td width="70%">'.$row["name"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Nat -ID -N0</label></td>  
                   <td width="70%">'.$row["idNum"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>email</label></td>  
                   <td width="70%">'.$row["email"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Phone</label></td>  
                   <td width="70%">'.$row["phone"].'</td>  
              </tr>  
              <tr>  
                   <td width="30%"><label>Gender</label></td>  
                   <td width="70%">'.$row["gender"].'</td>  
              </tr>  
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  





  }

?>