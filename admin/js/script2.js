document.addEventListener("DOMContentLoaded", function () {

    // Get all cards
    const cards = document.querySelectorAll(".card");

    cards.forEach(function (card) {

        // Get elements inside the current card
        const editCard = card.querySelector(".edit-card");
        const title = card.querySelector(".editable-title");
        const text = card.querySelector(".editable-text");
        const button = card.querySelector(".edit-button");

        // Get the database ID
        const hotelId = card.dataset.id;


        // ==========================================
        // CLICK IMAGE / CARD TO ENABLE EDITING
        // ==========================================

        editCard.addEventListener("click", function (event) {

            event.preventDefault();

            // Make title editable
            title.contentEditable = "true";

            // Make description editable
            text.contentEditable = "true";

            // Add Bootstrap styling
            title.classList.add(
                "border",
                "border-primary",
                "rounded",
                "p-2"
            );

            text.classList.add(
                "border",
                "border-primary",
                "rounded",
                "p-2"
            );

            // Change button from Read More → Save
            button.textContent = "Save";

            // Change button color
            button.classList.remove("btn-primary");
            button.classList.add("btn-success");

            // Focus on title
            title.focus();

        });


        // ==========================================
        // CLICK SAVE BUTTON
        // ==========================================

        button.addEventListener("click", function (event) {

            event.preventDefault();

            // Only execute when button says Save
            if (button.textContent.trim() !== "Save") {
                return;
            }

            // Get updated values
            const newTitle = title.innerText.trim();
            const newDescription = text.innerText.trim();


            // ==========================================
            // BASIC VALIDATION
            // ==========================================

            if (newTitle === "") {
                alert("Please enter a title.");
                title.focus();
                return;
            }

            if (newDescription === "") {
                alert("Please enter a description.");
                text.focus();
                return;
            }


            // ==========================================
            // DISABLE BUTTON WHILE SAVING
            // ==========================================

            button.disabled = true;
            button.textContent = "Saving...";


            // ==========================================
            // SEND DATA TO PHP
            // ==========================================

            fetch("update_hotel.php", {

                method: "POST",

                headers: {
                    "Content-Type":
                        "application/x-www-form-urlencoded"
                },

                body: new URLSearchParams({

                    id: hotelId,

                    title: newTitle,

                    description: newDescription

                })

            })


            // ==========================================
            // GET PHP RESPONSE
            // ==========================================

            .then(function (response) {

                if (!response.ok) {
                    throw new Error(
                        "Server returned an error."
                    );
                }

                return response.text();

            })


            // ==========================================
            // HANDLE RESULT
            // ==========================================

            .then(function (data) {

                console.log("Server response:", data);

                // Show success message
                alert("Hotel details successfully updated!");


                // ==========================================
                // DISABLE EDITING
                // ==========================================

                title.contentEditable = "false";

                text.contentEditable = "false";


                // Remove Bootstrap editing styles
                title.classList.remove(
                    "border",
                    "border-primary",
                    "rounded",
                    "p-2"
                );

                text.classList.remove(
                    "border",
                    "border-primary",
                    "rounded",
                    "p-2"
                );


                // Change button back
                button.textContent = "Read more →";

                button.classList.remove("btn-success");
                button.classList.add("btn-primary");

                button.disabled = false;

            })


            // ==========================================
            // HANDLE ERROR
            // ==========================================

            .catch(function (error) {

                console.error(
                    "Error updating hotel:",
                    error
                );

                alert(
                    "Something went wrong while saving."
                );

                // Restore button
                button.textContent = "Save";
                button.disabled = false;

            });

        });

    });

});