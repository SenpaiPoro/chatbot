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

<div class="container py-4">
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
    <form>
        <div class="row">
            
            <div class="col-md-6 mb-3">
                <select
                    class="form-select custom-input"
                    id="province"
                    name="province"
                >
                    <option selected>Ontario</option>
                    <option>Manila</option>
                    <option>Cebu</option>
                    <option>Laguna</option>
                    <option>Rizal</option>
                </select>
                <label for="city" class="form-label">
                    City
                </label>
                <input
                    type="text"
                    class="form-control custom-input"
                    id="city"
                    name="city"
                >
            </div>
            <div class="col-md-6 mb-3">
                <label for="province" class="form-label">
                    Province
                </label>
                
            </div>
        </div>
        <!-- ZIP + Country -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="zip" class="form-label">
                    ZIP/Postal Code
                </label>
                <input
                    type="text"
                    class="form-control custom-input"
                    id="zip"
                    name="zip"
                >
            </div>
            <div class="col-md-6 mb-3">
                <label for="country" class="form-label">
                    Country
                </label>
                <select
                    class="form-select custom-input"
                    id="country"
                    name="country"
                >
                    <option selected>Canada</option>
                    <option>Philippines</option>
                    <option>United States</option>
                    <option>Japan</option>
                </select>
            </div>
        </div>
        <!-- Password + Confirm Password -->
        <div class="row">
          
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
</div>

</body>
</html>

<?php include 'include/footer.php'; ?>