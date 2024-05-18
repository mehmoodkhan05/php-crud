<?php
include "navbar.php";
include "db/connection.php";

if (isset($_POST["submit"])) {
   $name = $_POST['name'];
   $dob = $_POST['dob'];
   $phone = $_POST['phone'];

   $sql = "INSERT INTO `users`(`id`, `name`, `dob`, `phone`) VALUES (NULL,'$name','$dob','$phone')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<body>
   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="row justify-content-center">
         <div class="col-6">
            <form action="" method="POST">
               <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="name" id="floatingName" required>
                  <label for="floatingName">Name</label>
               </div>

               <div class="form-floating mb-3">
                  <input type="date" class="form-control" name="dob" id="floatingdob" required>
                  <label for="floatingdob">Date of Birth</label>
               </div>

               <div class="form-floating mb-3">
               <input type="text" class="form-control" name="phone" id="floatingName" required>
                  <label for="floatingName">Phone</label>
               </div>

               <div class="">
                  <button type="submit" class="btn btn-success" name="submit">Add</button>
                  <a href="index.php" class="btn btn-danger ms-2">Cancel</a>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>