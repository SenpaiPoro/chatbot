<?php include 'include/header.php'; ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0"><strong>Add Hotel</strong></h4>
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
                    <button type="submit" class="btn btn-primary">Add Hotel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>