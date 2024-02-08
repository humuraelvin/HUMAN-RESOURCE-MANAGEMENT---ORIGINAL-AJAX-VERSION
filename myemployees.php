<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recruitment Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="apply.css"> -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

  </head>
  <body>

    <div class="modal fade" id="employeeAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="saveEmployee">

           
            <div class="modal-body">

               <div id="errormessage" class="alert alert-warning d-none">

               </div>
            
                <div class="mb3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb3">
                    <label for="email">Email: </label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="mb3">
                    <label for="idNum">National-ID-N<sup>o</sup>: </label>
                    <input type="text" name="idNum" class="form-control">
                </div>

                <div class="mb3">
                    <label for="phone">Phone-Number: </label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb3">
                    <label for="gender">Gender: </label>
                    <input type="text" name="gender" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Employee</button>
            </div>

            </form>

            </div>
        </div>
    </div>


    <!-- anotherpart -->
    <div class="modal fade" id="employeeEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form action="" method="POST" id="updateEmployee">

           
            <div class="modal-body">

               <div id="errormessageUpdate" class="alert alert-warning d-none">

               </div>

               <input type="hidden" name="employee_id" id="employee_id" readonly>
            
                <div class="mb3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb3">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="mb3">
                    <label for="idNum">National-ID-N<sup>o</sup>: </label>
                    <input type="text" name="idNum" id="idNum" class="form-control">
                </div>

                <div class="mb3">
                    <label for="phone">Phone-Nbr: </label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                <div class="mb3">
                    <label for="gender">Gender: </label>
                    <input type="text" name="gender" id="gender" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </div>

            </form>

            </div>
        </div>
    </div>
     
    <!-- viewpart -->
    <div class="modal fade" id="employeeViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">View Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

           
            <div class="modal-body">

        
                <div class="mb3">
                    <label for="name">Name: </label>
                    <p id="view_name" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="email">Email: </label>
                    <p id="view_email" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="idNum">National-ID-N<sup>o</sup>: </label>
                    <p id="view_idNum" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="phone">Phone-Nbr: </label>
                    <p id="view_phone" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="gender">Gender: </label>
                    <p id="view_gender" class="form-control"></p> 
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
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
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#employeeAddModal">
                          Add Employee
                        </button>   
                        </h4>
                    </div>
                    <div class="card-body">

                      <table id="myTable" class="table table-bordered table-textriped">

                        <thead>                  

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Nat-ID-No</th>
                                <th>Phone</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                           
                           require 'dbcon.php';

                           $query = "SELECT * FROM Employees";

                           $query_run = mysqli_query($connection, $query);

                           if (mysqli_num_rows($query_run) > 0) {
                            
                               foreach ($query_run as $employee) {
                                
                                  ?>

                                <tr>

                                     <td><?= $employee['id'] ?></td>
                                     <td><?= $employee['name'] ?></td>
                                     <td><?= $employee['email'] ?></td>
                                     <td><?= $employee['idNum'] ?></td>
                                     <td><?= $employee['phone'] ?></td>
                                     <td><?= $employee['gender'] ?></td>

                                     <td>   
                                        <button type="button" value="<?= $employee['id']; ?>" class="viewEmployeeBtn btn btn-info">View</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" value="<?= $employee['id']; ?>" class="editEmployeeBtn btn btn-success">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" value="<?= $employee['id']; ?>" class="deleteEmployeeBtn btn btn-danger">Delete</button>
                                    </td>
                                
                                </tr>


                                  <?php

                               }

                           }

                           ?>
                        </tbody>


                      </table>

                    </div>
                </div>
            </div>`
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
         document.addEventListener("DOMContentLoaded", function() {
    // Create Employee
    document.querySelector("#saveEmployee").addEventListener("submit", function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("save_employee", true);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "code.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var res = JSON.parse(xhr.responseText);
                    if (res.status == 422) {
                        document.getElementById('errormessage').classList.remove('d-none');
                        document.getElementById('errormessage').textContent = res.message;
                    } else if (res.status == 200) {
                        document.getElementById('errormessage').classList.add('d-none');
                        document.getElementById('employeeAddModal').classList.remove('show');
                        document.getElementById('employeeAddModal').style.display = 'none';
                        document.getElementById('saveEmployee').reset();
                        alertify.success(res.message);
                        document.getElementById('myTable').innerHTML = res.table;
                    }
                }
            }
        };
        xhr.send(formData);
    });

    // Delete Employee
    document.querySelectorAll('.deleteEmployeeBtn').forEach(function(button) {
        button.addEventListener('click', function() {
            var employee_id = this.value;
            if (confirm('Are You Sure You Want To Delete This Employee?')) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "code.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            var res = JSON.parse(xhr.responseText);
                            if (res.status == 500) {
                                alert(res.message);
                            } else {
                                alertify.success(res.message);
                                document.getElementById('myTable').innerHTML = res.table;
                            }
                        }
                    }
                };
                xhr.send("delete_employee=true&employee_id=" + encodeURIComponent(employee_id));
            }
        });
    });

    // View Employee
    document.querySelectorAll('.viewEmployeeBtn').forEach(function(button) {

        button.addEventListener('click', function(e) {
            e.preventDefault();
            var employee_id = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "code.php?employee_id=" + encodeURIComponent(employee_id), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var res = JSON.parse(xhr.responseText);
                        if (res.status == 200) {
                            document.getElementById('view_name').textContent = res.data.name;
                            document.getElementById('view_email').textContent = res.data.email;
                            document.getElementById('view_idNum').textContent = res.data.idNum;
                            document.getElementById('view_phone').textContent = res.data.phone;
                            document.getElementById('view_gender').textContent = res.data.gender;
                            document.getElementById('employeeViewModal').classList.add('show');
                            document.getElementById('employeeViewModal').style.display = 'block';
                            
                            document.querySelector('#employeeViewModal .btn-close').addEventListener('click', function() {
                                document.getElementById('employeeViewModal').classList.remove('show');
                                document.getElementById('employeeViewModal').style.display = 'none';
                            });
                        } else {
                            alert(res.message);
                        }
                    }
                }
            };
            xhr.send();
        });
    });

    document.querySelector("#updateEmployee").addEventListener("submit", function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append("update_employee", true);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "code.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var res = JSON.parse(xhr.responseText);
                    if (res.status == 422) {
                        document.getElementById('errormessageUpdate').classList.remove('d-none');
                        document.getElementById('errormessageUpdate').textContent = res.message;
                    } else if (res.status == 200) {
                        document.getElementById('errormessageUpdate').classList.add('d-none');
                        alertify.success(res.message);
                        document.getElementById('employeeEditModal').classList.remove('show');
                        document.getElementById('employeeEditModal').style.display = 'none';
                        document.getElementById('updateEmployee').reset();
                        document.getElementById('myTable').innerHTML = res.table;
                    }
                }
            }
        };
        xhr.send(formData);
    });

})
    </script>
     
         <br><br><br><br><br>
         <center>
         <a href="index.php" class="btn btn-primary">Back TO Admin DASHBOARD</a>
         </center>


  </body>
</html>