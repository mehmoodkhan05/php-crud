<?php
include "navbar.php";
include "db/connection.php";
?>

<body>
  <div class="container">
    <div class="add_btn text-end">
      <a href="add-new.php" class="btn btn-primary mb-3">Add New
        <i class="fa-solid fa-plus"></i>
      </a>
    </div>
    <table class="table table-hover text-center">
      <thead class="table-primary">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">DOB</th>
          <th scope="col">Phone</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["dob"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-success"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>