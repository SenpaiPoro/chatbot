<?php include 'include/header.php'; ?>

<?php

$paramResult = checkId('id');

if ($paramResult === null) {
    die('Hotel ID not found.');
}

$sql = "SELECT *
        FROM hotels
        WHERE id = $paramResult";
$result = mysqli_query($connection, $sql);

$row = $result->fetch_assoc();

?><div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <!-- Flex container: left info + right buttons -->
        <div class="d-flex justify-content-between align-items-center">
          
          <!-- Left side: hotel info -->
          <div>
            <h4 class="card-title mb-1"><?php echo $row['name']; ?></h4>
            <p class="card-text mb-0"><?php echo $row['address']; ?></p>
          </div>
          
          <!-- Right side: buttons -->
          <div class="d-flex gap-2">
            <a href="index.php" class="btn btn-danger">Back</a>
            <a href="add_admin.php" class="btn btn-primary">Add Admin</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'include/footer.php'; ?>