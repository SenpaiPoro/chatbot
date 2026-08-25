<?php include 'include/header.php'; ?>
<div class="row">
    <div class="col-12">
        <div class="card">
         <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center px-4 py-3">
                    <h4 class="mb-4"><strong>Admin Registration</strong></h4>
                <div class="text-start mb-0">
                   <a href="hotellist.php" class="btn btn-danger">Back</a>
                </div>
                </div>
            <div class="card-body">
                <form action="../configuration/code.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" class="form-control" id="code" name="code" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add_admin">Add Admin</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>