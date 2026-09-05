<?php include 'include/header.php'; ?>

<?php

// Get hotel ID from URL
$paramResult = checkId('id');

if ($paramResult === null) {
    die("Hotel ID not found.");
}

$hotelId = (int) $paramResult;


// Get existing hotel information
$sql = "SELECT *
        FROM hotels
        WHERE id = ?";

$stmt = $connection->prepare($sql);

$stmt->bind_param("i", $hotelId);

$stmt->execute();

$result = $stmt->get_result();


// Check if hotel exists
if ($result->num_rows === 0) {
    die("Hotel not found.");
}

$hotel = $result->fetch_assoc();

if ($hotel) {
    $hotelcode = $hotel['code'];

    $sql = "SELECT *
        FROM hotel_info
        WHERE code = ?";

    $stmt = $connection->prepare($sql);

    $stmt->bind_param("s", $hotelcode);

    $stmt->execute();

    $result = $stmt->get_result();
}
    $hotel_info = $result->fetch_assoc();

?>

<!-- Page Content -->
<section class="pt-6 py-5 px-lg-5">

    <div class="container px-lg-7">

        <!-- Header -->
        <div class="card-header">

            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2">

                <h4 class="mb-0">
                    <strong>Edit Hotel Information</strong>
                </h4>

                <div class="d-flex gap-2">

                    <a href="hotellist.php" class="btn btn-danger">
                        Back
                    </a>

                </div>

            </div>

        </div>


        <!-- Form Card -->
        <div class="card shadow-sm mt-4">

            <div class="card-body">

                <form action="update_hotel.php" method="POST">

                    <!-- Hotel ID -->
                    <input
                        type="hidden"
                        name="id"
                        value="<?= htmlspecialchars($hotel['id']); ?>"
                    >


                    <!-- Hotel Name -->
                    <div class="mb-3">

                        <label for="name" class="form-label">
                            <strong>Hotel Name</strong>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            value="<?= htmlspecialchars($hotel['name']); ?>"
                            required
                        >

                    </div>


                    <!-- Description -->
                    <div class="mb-3">

                        <label for="description" class="form-label">
                            <strong>Description</strong>
                        </label>

                        <textarea
                            class="form-control"
                            id="description"
                            name="description"
                            rows="6"
                            required
                        ><?= htmlspecialchars($hotel_info['description']); ?></textarea>

                    </div>


                    <!-- Address -->
                    <div class="mb-3">

                        <label for="address" class="form-label">
                            <strong>Address</strong>
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="address"
                            name="address"
                            value="<?= htmlspecialchars($hotel['address']); ?>"
                            required
                        >

                    </div>


                    <!-- Price -->
                    <div class="mb-3">

                        <label for="price" class="form-label">
                            <strong>Contact Number</strong>
                        </label>

                        <input
                            type="number"
                            class="form-control"
                            id="price"
                            name="price"
                            value=""
                            step="0.01"
                            required
                        >

                    </div>


                    <!-- Buttons -->
                    <div class="d-flex justify-content-end gap-2">

                        <a
                            href="hotellist.php"
                            class="btn btn-secondary"
                        >
                            Cancel
                        </a>

                        <button
                            type="submit"
                            name="update"
                            class="btn btn-primary"
                        >
                            Update Hotel
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- End of Page Content -->

<?php include 'include/footer.php'; ?>