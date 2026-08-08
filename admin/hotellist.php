<?php include 'include/header.php'; ?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2">
                    <h4 class="mb-0"><strong>Hotel</strong></h4>
                    <a href="hotel_add.php" class="btn btn-primary">Add Hotel</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <tr>
                                <td><?= htmlspecialchars($DataList['name']); ?></td>
                                <td><?= htmlspecialchars($DataList['address']); ?></td>
                                <td><?= htmlspecialchars($DataList['code']); ?></td>
                                <td>
                                    <a href="resume_edit.php?id=<?= $DataList['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="include/deleteresume.php?id=<?= $DataList['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this experience?');">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">No Record!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>