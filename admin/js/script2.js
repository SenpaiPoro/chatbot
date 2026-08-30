
document.querySelectorAll('.card').forEach(function(card) {

    const editCard = card.querySelector('.edit-card');
    const title = card.querySelector('.editable-title');
    const text = card.querySelector('.editable-text');
    const button = card.querySelector('.edit-button');

    editCard.addEventListener('click', function(e) {

        e.preventDefault();

        // Make title editable
        title.contentEditable = true;

        // Make description editable
        text.contentEditable = true;

        // Add visual indication
        title.classList.add('border', 'border-primary', 'p-2');
        text.classList.add('border', 'border-primary', 'p-2');

        // Change button
        button.textContent = 'Save';

        // Change button behavior
        button.classList.remove('btn-primary');
        button.classList.add('btn-success');

    });

    button.addEventListener('click', function(e) {

        e.preventDefault();

        if (button.textContent === 'Save') {

            const newTitle = title.innerText.trim();
            const newText = text.innerText.trim();

            console.log("Title:", newTitle);
            console.log("Description:", newText);

            // Make read-only
            title.contentEditable = false;
            text.contentEditable = false;

            title.classList.remove('border', 'border-primary', 'p-2');
            text.classList.remove('border', 'border-primary', 'p-2');

            // Change button back
            button.textContent = 'Read more →';

            button.classList.remove('btn-success');
            button.classList.add('btn-primary');

        }

    });

});
