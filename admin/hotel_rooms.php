<?php include 'include/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Information</title>
    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container py-6">
    <div class="card">
        <div class="card-header">
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2">
                <h4 class="mb-0">
                    <strong>Hotel Rooms information</strong>
                </h4>
                <div class="d-flex gap-2">

                    <a href="hotel_view.php" class="btn btn-danger">
                        Back
                    </a>
                </div>
            </div>
        </div>

    <!-- City + Province -->
    <form>

    <div class="mb-4">

        <h5 class="mb-0">
            <strong>Room Types</strong>
        </h5>

        <small class="text-muted">
            Select the room types available in this hotel and set their availability and price.
        </small>

    </div>


    <!-- Selected Room Types -->
    <div id="roomList">

        <!-- Room rows will appear here -->

    </div>


    <!-- Add Room Type -->
    <div class="row align-items-end mb-4">

        <div class="col-md-7">

            <label for="roomTypeSelect" class="form-label fw-bold">
                Add Room Type
            </label>

            <select
                class="form-select"
                id="roomTypeSelect"
            >
                <option value="" selected disabled>
                    Select a room type
                </option>

                <option value="NK1">
                    NK1 - Non-Smoking King, 1 bed
                </option>

                <option value="NK2">
                    NK2 - Non-Smoking King, 2nd room variation
                </option>

                <option value="NQ1">
                    NQ1 - Non-Smoking Queen, 1 bed
                </option>

                <option value="NQ2">
                    NQ2 - Non-Smoking Queen, 2 beds
                </option>

                <option value="ND1">
                    ND1 - Non-Smoking Double, 1 bed
                </option>

                <option value="ND2">
                    ND2 - Non-Smoking Double, 2 beds
                </option>

                <option value="NT1">
                    NT1 - Non-Smoking Twin, 1 bed
                </option>

                <option value="SNK1">
                    SNK1 - Smoking King Suite
                </option>

                <option value="SNQ1">
                    SNQ1 - Smoking Queen Suite
                </option>

            </select>

        </div>

    </div>


    <!-- Buttons -->
    <div class="d-flex justify-content-end align-items-center gap-3 mt-4">

        <button
            type="button"
            class="btn btn-cancel"
        >
            CANCEL
        </button>

        <button
            type="submit"
            class="btn btn-update"
        >
            UPDATE
        </button>

    </div>

</form>

</form>
</div>

</body>
</html>

<?php include 'include/footer.php'; ?>