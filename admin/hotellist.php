<?php include 'include/header.php'; ?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Hotel</b></h4>
                  <br>
                    <a href="hotel_add.php" class="btn btn-primary float-end"> Add Hotel </a>
                </h4> 
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
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
                                    <td> <?= htmlspecialchars($DataList['name']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['address']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['code']); ?></td>
                                <td> 
                                <a href="resume_edit.php?id=<?= $DataList['id'];?>   "class="btn btn-success btn-sm">Edit</a>
                                <a href="include/deleteresume.php?id=<?= $DataList['id'];?> "class="btn btn-danger btn-sm"
                                 onclick="return confirm('Are you Sure that you want to delete this Experience? ');">Delete</a>
                            </td>
                    </tr>
 
                            <tr>
                                <td colspan="4">
                                    No Record!
                                </td>
                            </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>