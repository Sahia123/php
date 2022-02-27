<?php 
$con = mysqli_connect("localhost","root","","primedb");
if(isset($_POST["submit"]))
{
$Name = $_POST["Name"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Gender = $_POST["Gender"];
$IsInsert = mysqli_query($con,"insert into student(Name,Phone,Email,Password,Gender) values('$Name','$Phone','$Email','$Password','$Gender')");
if($IsInsert)
{
    echo "Insert successfully";
}
else
{
    echo "Error";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <form action="crud.php" method="post">
          <div class="form-group row">
                  <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                  <div class="col-sm-1-12">
                      <input type="hidden" class="form-control" name="Id" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-1-12 col-form-label">Name:</label>
                  <div class="col-sm-1-12">
                      <input type="text" class="form-control" name="Name" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-1-12 col-form-label">Phone:</label>
                  <div class="col-sm-1-12">
                      <input type="text" class="form-control" name="Phone" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-1-12 col-form-label">Email:</label>
                  <div class="col-sm-1-12">
                      <input type="text" class="form-control" name="Email" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="inputName" class="col-sm-1-12 col-form-label">Password:</label>
                  <div class="col-sm-1-12">
                      <input type="text" class="form-control" name="Password" id="inputName" placeholder="">
                  </div>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="Gender" id="" value="Male" >
                 Male
                </label>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="Gender" id="" value="Female" >
                 Female
                </label>
              </div>
             
              <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                  </div>
              </div>
          </form>

      </div>
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Gender</th>
                  <th>Delete</th>
                  <th>Edit</th>
              </tr>
          </thead>
          <tbody>
              <?php
              $q = mysqli_query($con,"select * from student");
              while($row=mysqli_fetch_array($q))
              {
                  ?>
              <tr>
                  <td><?php  echo $row["id"]?></td>
                  <td><?php  echo $row["Name"]?></td>
                  <td><?php  echo $row["Phone"]?></td>
                  <td><?php  echo $row["Email"]?></td>
                  <td><?php  echo $row["Password"]?></td>
                  <td><?php  echo $row["Gender"]?></td>
                  <td>
                      <a href="crud.php?DeleteId=<?php echo $row['Id']?>">
                      <img src="php_practice/Images/dlt.png" width="30"></a>
                </td>
                  <td>  <a href="crud.php?EditId=<?php echo $row['Id']?>">
                      <img src="Images/edit.png" width="30"></a></td>
              </tr>
              <?php
              }
         
          ?>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>