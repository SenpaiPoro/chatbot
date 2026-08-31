document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".edit-button");

    buttons.forEach(function (button) {

        button.addEventListener("click", function () {

            // Find the description in this card
            const card = button.closest(".card");
            const description = card.querySelector(".editable-description");

            // Make description editable
            description.contentEditable = "true";

            // Add Bootstrap styling
            description.classList.add(
                "border",
                "border-primary",
                "rounded",
                "p-2"
            );

            // Change button text
            button.textContent = "Save";

            // Change button color
            button.classList.remove("btn-primary");
            button.classList.add("btn-success");

            // Put cursor inside description
            description.focus();

        });

    });

});