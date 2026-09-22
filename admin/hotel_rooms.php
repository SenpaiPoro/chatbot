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
    <form method="POST" action="../configuration/code.php">

    <div class="p-4">

    <div class="mb-4">
        <h5 class="mb-1">
            <strong>Room Types</strong>
        </h5>

        <small class="text-muted">
            Select the room types available in this hotel and set their availability and price.
        </small>
    </div>

    <div id="roomList">
        <!-- Room rows appear here -->
    </div>

    <!-- Add Room Type -->
    <div class="row align-items-end mt-4">

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
            class="btn btn-danger"
        >
            CANCEL
        </button>

        <button
            type="submit"   
            class="btn btn-info"
            name="save_rooms"
        >
            SAVE
        </button>
    </div>
</form>

</form>
</div>
</body>
</html>
<script>

const roomTypeSelect = document.getElementById("roomTypeSelect");
const roomList = document.getElementById("roomList");


roomTypeSelect.addEventListener("change", function () {

    const selectedOption = roomTypeSelect.options[
        roomTypeSelect.selectedIndex
    ];

    const code = selectedOption.value;
    const roomName = selectedOption.textContent;
    // Don't add empty values
    if (code === "") {
        return;
    }

    // Create room row
    const roomRow = document.createElement("div");

    roomRow.classList.add(
        "row",
        "align-items-center",
        "mb-3",
        "py-2"
    );
    roomRow.dataset.code = code;
    roomRow.innerHTML = `

        <!-- Room Type -->
        <div class="col-md-7 mb-2 mb-md-0">

            <div class="d-flex align-items-center">

                <div>
                    <strong>${code}</strong>

                    <span class="text-muted ms-2">
                        ${roomName.substring(code.length + 3)}
                    </span>
                </div>

            </div>

        </div>
        <!-- Rooms Available -->
        <div class="col-md-2 mb-2 mb-md-0">

            <input
                type="number"
                class="form-control"
                name="rooms_${code}"
                min="0"
                value="0"
                placeholder="0"
            >
        </div>
        <!-- Price -->
        <div class="col-md-3">

            <div class="input-group">

                <span class="input-group-text">
                    ₱
                </span>

                <input
                    type="number"
                    class="form-control"
                    name="price_${code}"
                    min="0"
                    step="0.01"
                    value="0.00"
                    placeholder="0.00"
                >

                <button
                    type="button"
                    class="btn btn-outline-danger remove-room"
                    title="Remove room"
                >
                    ×
                </button>

            </div>

        </div>

    `;


    // Add row to page
    roomList.appendChild(roomRow);


    // Remove selected option from dropdown
    selectedOption.remove();


    // Reset dropdown
    roomTypeSelect.selectedIndex = 0;

});


// Remove room
roomList.addEventListener("click", function (event) {

    if (!event.target.classList.contains("remove-room")) {
        return;
    }


    const roomRow = event.target.closest(".row");

    const code = roomRow.dataset.code;


    // Find original option
    const option = document.createElement("option");


    const roomNames = {

        NK1: "NK1 - Non-Smoking King, 1 bed",

        NK2: "NK2 - Non-Smoking King, 2nd room variation",

        NQ1: "NQ1 - Non-Smoking Queen, 1 bed",

        NQ2: "NQ2 - Non-Smoking Queen, 2 beds",

        ND1: "ND1 - Non-Smoking Double, 1 bed",

        ND2: "ND2 - Non-Smoking Double, 2 beds",

        NT1: "NT1 - Non-Smoking Twin, 1 bed",

        SNK1: "SNK1 - Smoking King Suite",

        SNQ1: "SNQ1 - Smoking Queen Suite"
    };
    option.value = code;
    option.textContent = roomNames[code];
    // Put it back into dropdown
    roomTypeSelect.appendChild(option);
    // Remove row
    roomRow.remove();
});
</script>
<?php include 'include/footer.php'; ?>