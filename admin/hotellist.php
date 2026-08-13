<?php include 'include/header.php'; ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2">
                    <h4 class="mb-0"><strong>Hotel</strong></h4>
<div class="text-start">
                        <a href="index.php" class="btn btn-danger">Back</a>
                        <a href="addhotel.php" class="btn btn-primary">Add Hotel</a>
                    </div>
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
                            <?php
                        $Data = Getdata("chatbot_responses");
                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>
                            <tr>
                                <td><?= htmlspecialchars( $DataList['id']); ?></td>
                                <td><?= htmlspecialchars($DataList['keyword']); ?></td>
                                <td><?= htmlspecialchars($DataList['reply']); ?></td>
                                <td>
                                    <a href="resume_edit.php?id=<?= $DataList['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="include/deleteresume.php?id=<?= $DataList['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this experience?');">Delete</a>
                                </td>   
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">
                                    No Record!
                                </td>
                            </tr>
                        <?php
                    }
                  ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>