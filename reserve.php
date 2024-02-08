<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="apply.css">

  </head>
  <body>


        <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="wrapper">
  <center>
   <div class="header">
        <h1><strong>APPLY FOR A JOB IN BARBAR COMPANY</strong></h1>
    </div>

    <div class="container">
        <div class="website">
            <h2 id="messagedisplay"></h2>
        </div>

        <form action="" id="vedformid" method="POST">

          <table>
            <tr>
                <th class="msg">ENTER ID:</th>
                <td><input type="number" class="txtbox" name="id" id="id" required></td>
            </tr>
             
            <tr>
                <th class="msg">ENTER Name:</th>
                <td><input type="text" class="txtbox" name="name" id="name" required></td>
            </tr>
                <br>
            <tr>
                <th class="msg">ENTER Email:</th>
                <td><input type="text" class="txtbox" name="email" id="email" required></td>
            </tr>
                    <br>
            <tr>
                <th class="msg">ENTER Phone:</th>
                <td><input type="number" class="txtbox" name="contact" id="contact" required></td>
            </tr>
                <br>
            <tr>
                <th class="msg">ENTER Gender:</th>
                <td><input type="text" class="txtbox" name="gender" id="gender" required></td>
            </tr>
                    
            <tr>
            
                <th></th>
                <td><input type="submit" class="btn btn-success" name="insertbtn" id="insertbtn" value="APPLY"></td>
            </tr>
                
          </table>

        </form>

    </div>

    <br><br><br><br><br>


    <a class="btn btn-primary" href="OfficialWebsite.php">Back TO Home</a>

    
   </center>



            <div class="modal-body">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
     
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>MY EMPLOYEES
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                          Add Employee
                        </button>   
                        </h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
      </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="apply.css">

  </head>
  <body>


        <div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="wrapper">
  <center>
   <div class="header">
        <h1><strong>APPLY FOR A JOB IN BARBAR COMPANY</strong></h1>
    </div>

    <div class="container">
        <div class="website">
            <h2 id="messagedisplay"></h2>
        </div>

        <form action="" id="vedformid" method="POST">

          <table>
            <tr>
                <th class="msg">ENTER ID:</th>
                <td><input type="number" class="txtbox" name="id" id="id" required></td>
            </tr>
             
            <tr>
                <th class="msg">ENTER Name:</th>
                <td><input type="text" class="txtbox" name="name" id="name" required></td>
            </tr>
                <br>
            <tr>
                <th class="msg">ENTER Email:</th>
                <td><input type="text" class="txtbox" name="email" id="email" required></td>
            </tr>
                    <br>
            <tr>
                <th class="msg">ENTER Phone:</th>
                <td><input type="number" class="txtbox" name="contact" id="contact" required></td>
            </tr>
                <br>
            <tr>
                <th class="msg">ENTER Gender:</th>
                <td><input type="text" class="txtbox" name="gender" id="gender" required></td>
            </tr>
                    
            <tr>
            
                <th></th>
                <td><input type="submit" class="btn btn-success" name="insertbtn" id="insertbtn" value="APPLY"></td>
            </tr>
                
          </table>

        </form>

    </div>

    <br><br><br><br><br>


    <a class="btn btn-primary" href="OfficialWebsite.php">Back TO Home</a>

    
   </center>



            <div class="modal-body">
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
     
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>MY EMPLOYEES
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                          Add Employee
                        </button>   
                        </h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
      </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>