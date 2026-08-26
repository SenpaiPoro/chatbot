<?php include 'include/header.php'; ?>

<?php

$paramResult = checkId('id');

echo $paramResult;

if ($paramResult === null) {
    die('Hotel ID not found.');
}

$sql = "SELECT code
        FROM hotels
        WHERE id = $paramResult";
$result = mysqli_query($connection, $sql);

$row = $result->fetch_assoc();

?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Hotel Details</h4>
                <p class="card-text">Here are the details of the selected hotel.</p>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>