<?php
include "navbar.php";
include "db/connection.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];

  $sql = "UPDATE `users` SET `name`='$name',`dob`='$dob',`phone`='$phone' WHERE id = $id";

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
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `users` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="row justify-content-center">
      <div class="col-6">
        <form action="" method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="name" id="floatingName" value="<?php echo $row['name'] ?>">
            <label for="floatingName">Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="date" class="form-control" name="dob" id="floatingdob" value="<?php echo $row['dob'] ?>">
            <label for="floatingdob">Date of Birth</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="phone" id="floatingName" value="<?php echo $row['phone'] ?>">
            <label for="floatingName">Phone</label>
          </div>

          <div class="">
            <button type="submit" class="btn btn-success" name="submit">Save</button>
            <a href="index.php" class="btn btn-danger ms-2">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>