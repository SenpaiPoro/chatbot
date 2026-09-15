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
        <!-- Full Name -->
        <div class="mb-3">
            <label for="fullName" class="form-label">
                Full Name
            </label>

            <input
                type="text"
                class="form-control custom-input"
                id="fullName"
                name="full_name"
            >
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">
                Email Address
            </label>
            <input
                type="email"
                class="form-control custom-input"
                id="email"
                name="email"
            >
        </div>
        <!-- Phone -->
        <div class="mb-3">
            <label for="phone" class="form-label">
                Phone Number
            </label>
            <input
                type="text"
                class="form-control custom-input"
                id="phone"
                name="phone"
            >
        </div>
        <!-- Plan + Billing Interval -->
        <div class="row">

            <div class="col-md-6 mb-3">
                <label for="plan" class="form-label">
                    Plan
                </label>
                <input
                    type="text"
                    class="form-control custom-input"
                    id="plan"
                    name="plan"
                >
            </div>
            <div class="col-md-6 mb-3">
                <label for="billing" class="form-label">
                    Billing Interval
                </label>
                <select
                    class="form-select custom-input"
                    id="billing"
                    name="billing"
                >
                    <option selected>Monthly</option>
                    <option>Yearly</option>
                </select>
            </div>
        </div>
        <!-- Street Address -->
        <div class="mb-3">
            <label for="address" class="form-label">
                Street Address
            </label>
            <input
                type="text"
                class="form-control custom-input"
                id="address"
                name="address"
            >
        </div>
        <!-- City + Province -->
        <div class="row">
            <div class="col-md-6 mb-3">
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
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">
                    Password
                </label>
                <input
                    type="password"
                    class="form-control custom-input"
                    id="password"
                    name="password"
                >
            </div>
            <div class="col-md-6 mb-3">
                <label for="confirmPassword" class="form-label">
                    Confirm Password
                </label>

                <input
                    type="password"
                    class="form-control custom-input"
                    id="confirmPassword"
                    name="confirm_password"
                >
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
</div>

</body>
</html>

<?php include 'include/footer.php'; ?>