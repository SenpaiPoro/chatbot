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
    <form  class="py-4 px-lg-5" action="../configuration/code.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= htmlspecialchars($hotel['id']); ?>"
        >

    <!-- Section Title -->
    <div class="mb-3">
        <h5 class="mb-0">
            <strong>Room Types</strong>
        </h5>
        <small class="text-muted">
            Set the available rooms and price per night for each room type.
        </small>
    </div>


    <!-- Column Headers -->
    <div class="row mb-2 d-none d-md-flex">
        <div class="col-md-7">
            <span class="small fw-bold text-muted">
                ROOM TYPE
            </span>
        </div>

        <div class="col-md-2">
            <span class="small fw-bold text-muted">
                ROOMS AVAILABLE
            </span>
        </div>

        <div class="col-md-3">
            <span class="small fw-bold text-muted">
                PRICE / NIGHT
            </span>
        </div>
    </div>


    <!-- NK1 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">NK1</span>
                <span class="text-muted ms-2">
                    Non-Smoking King, 1 bed
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_NK1"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_NK1"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- NK2 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">NK2</span>
                <span class="text-muted ms-2">
                    Non-Smoking King, 2nd room variation
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_NK2"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_NK2"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- NQ1 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">NQ1</span>
                <span class="text-muted ms-2">
                    Non-Smoking Queen, 1 bed
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_NQ1"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_NQ1"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- NQ2 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">NQ2</span>
                <span class="text-muted ms-2">
                    Non-Smoking Queen, 2 beds
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_NQ2"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_NQ2"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- ND1 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">ND1</span>
                <span class="text-muted ms-2">
                    Non-Smoking Double, 1 bed
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_ND1"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_ND1"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- ND2 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">ND2</span>
                <span class="text-muted ms-2">
                    Non-Smoking Double, 2 beds
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_ND2"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_ND2"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- NT1 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">NT1</span>
                <span class="text-muted ms-2">
                    Non-Smoking Twin, 1 bed
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_NT1"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_NT1"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- SNK1 -->
    <div class="row align-items-center mb-3">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">SNK1</span>
                <span class="text-muted ms-2">
                    Smoking King Suite
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_SNK1"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_SNK1"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- SNQ1 -->
    <div class="row align-items-center mb-4">

        <div class="col-md-7 mb-2 mb-md-0">
            <div>
                <span class="fw-bold">SNQ1</span>
                <span class="text-muted ms-2">
                    Smoking Queen Suite
                </span>
            </div>
        </div>

        <div class="col-md-2 mb-2 mb-md-0">
            <input
                type="number"
                class="form-control"
                name="rooms_SNQ1"
                min="0"
                placeholder="0"
            >
        </div>

        <div class="col-md-3">
            <div class="input-group">
                <span class="input-group-text">₱</span>
                <input
                    type="number"
                    class="form-control"
                    name="price_SNQ1"
                    min="0"
                    step="0.01"
                    placeholder="0.00"
                >
            </div>
        </div>

    </div>


    <!-- Buttons -->
    <div class="d-flex justify-content-end align-items-center gap-3 mt-4">

        <button
            type="button"
            class="btn btn-danger"
        >
            CANCEL
        </button>

        <button
            type="submit"
            class="btn btn-info "
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