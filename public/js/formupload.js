document.addEventListener('DOMContentLoaded', function() {
    const roleCheckboxes = document.querySelectorAll('.role-checkbox');
    const fileStates = {};

    roleCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            roleCheckboxes.forEach(box => {
                if (box !== checkbox) box.checked = false;
            });
        });
    });

    const inputs = document.querySelectorAll('.upload-group input[type="file"]');
    inputs.forEach(input => {
        input.addEventListener('change', function(event) {
            handleFileUpload(event, input);
        });
    });

    function handleFileUpload(event, input) {
        const file = event.target.files[0];
        const label = input.nextElementSibling;
        const uploadGroup = input.parentElement;
        const removeBtn = uploadGroup.querySelector('.remove-btn');
        const modal = document.getElementById('modal');
        const modalImg = document.getElementById('modal-img');
        const span = modal.querySelector('.close');

        span.onclick = function() {
            modal.style.display = 'none';
        };

        modal.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        };

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = file.name;
                img.classList.add('preview-image');

                label.innerHTML = ''; // Clear the label text
                label.appendChild(img);
                removeBtn.style.display = 'inline-block'; // Show the remove button

                img.addEventListener('click', function() {
                    modal.style.display = 'block';
                    modalImg.src = this.src;
                });

                // Store the file state
                fileStates[input.id] = {
                    file: file,
                    src: e.target.result
                };
            };

            reader.readAsDataURL(file);
        } else {
            // Clear the label text and hide the remove button
            label.innerHTML = `
                <i class="fas fa-upload"></i>
                <span>${input.getAttribute('data-label')}</span>
            `;
            removeBtn.style.display = 'none';
            delete fileStates[input.id];
        }
    }

    window.removeFile = function(button) {
        const uploadGroup = button.parentElement;
        const input = uploadGroup.querySelector('input[type="file"]');
        const label = uploadGroup.querySelector('label');

        input.value = ''; // Clear the file input value

        // Reset the label to its initial state
        label.innerHTML = `
            <i class="fas fa-upload"></i>
            <span>${input.getAttribute('data-label')}</span>
        `;
        button.style.display = 'none'; // Hide the remove button
        delete fileStates[input.id]; // Remove the file state
    };


    // Reload the file state after the DOM is loaded
    window.addEventListener('load', function() {
        for (const key in fileStates) {
            if (fileStates.hasOwnProperty(key)) {
                const state = fileStates[key];
                const input = document.getElementById(key);
                const label = input.nextElementSibling;
                const removeBtn = input.parentElement.querySelector('.remove-btn');

                const img = document.createElement('img');
                img.src = state.src;
                img.alt = state.file.name;
                img.classList.add('preview-image');

                label.innerHTML = '';
                label.appendChild(img);
                removeBtn.style.display = 'inline-block';

                img.addEventListener('click', function() {
                    const modal = document.getElementById('modal');
                    const modalImg = document.getElementById('modal-img');
                    modal.style.display = 'block';
                    modalImg.src = this.src;
                });
            }
        }
    });
});
