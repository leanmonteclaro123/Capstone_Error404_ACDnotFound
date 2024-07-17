    <link rel="stylesheet" href="{{asset('css/registrationform.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<div class="container home-section" id="registration" style="display: none">
<br><br>
<div class="registercontainer">
    <div class="registrationheader">
        <h3>VEHICLE REGISTRATION FORM</h3>
    </div>
    <div class="two-form">
        <div class="section1">
            <h4>Vehicle 1</h4>
            <div class="form-group">
                <label for="license-plate-number">License Plate No.:</label>
                <input type="text" id="license-plate-number" name="license-plate-number" required>
            </div>
            <div class="form-group">
                <label for="province">Province/State:</label>
                <input type="text" id="province" name="province">
            </div>
            <div class="form-group">
                <label for="make-model">Make/Model:</label>
                <input type="text" id="make-model" name="make-model">
            </div>
            <div class="form-group">
                <label for="year-color">Year/Color:</label>
                <input type="text" id="year-color" name="year-color">
            </div>
        </div>

        <div class="section1">
            <h4>Vehicle 2 (Optional)</h4>
            <div class="form-group">
                <label for="license-plate-number-2">License Plate No.:</label>
                <input type="text" id="license-plate-number-2" name="license-plate-number-2">
            </div>
            <div class="form-group">
                <label for="province-2">Province/State:</label>
                <input type="text" id="province-2" name="province-2">
            </div>
            <div class="form-group">
                <label for="make-model-2">Make/Model:</label>
                <input type="text" id="make-model-2" name="make-model-2">
            </div>
            <div class="form-group">
                <label for="year-color-2">Year/Color:</label>
                <input type="text" id="year-color-2" name="year-color-2">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="form-group">
            <label for="campus">Campus:</label>
            <input type="text" id="campus" name="campus">
        </div>

        <div class="two-box">
            <div class="form-group">
                <label for="faculty-id">Faculty/Employee ID No.:</label>
                <input type="text" id="faculty-id" name="faculty-id">
            </div>
            <div class="form-group">
                <label for="student-id">Student ID No.:</label>
                <input type="text" id="student-id" name="student-id">
            </div>
        </div>

        <div class="form-group checkbox-group">
            <label>Role:</label>
            <label><input type="checkbox" name="role" value="Faculty/Employee" class="role-checkbox"> Faculty/Employee</label>
            <label><input type="checkbox" name="role" value="Student" class="role-checkbox"> Student</label>
            <label><input type="checkbox" name="role" value="Parent" class="role-checkbox"> Parent</label>
            <label><input type="checkbox" name="role" value="Others" class="role-checkbox"> Others, please specify:</label>
            <input type="text" name="role-other">
        </div>

        <div class="form-group">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name">
        </div>
        <div class="form-group">
            <label for="current-address">Current Address:</label>
            <input type="text" id="current-address" name="current-address">
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
        </div>
        <div class="form-group">
            <label for="province">Province:</label>
            <input type="text" id="province" name="province">
        </div>
        <div class="form-group">
            <label for="postal-code">Postal Code:</label>
            <input type="text" id="postal-code" name="postal-code">
        </div>
        <div class="form-group">
            <label for="telephone-cell">Telephone (Cell):</label>
            <input type="text" id="telephone-cell" name="telephone-cell">
        </div>
        <div class="form-group">
            <label for="telephone-home">Telephone (Home):</label>
            <input type="text" id="telephone-home" name="telephone-home">
        </div>
        <div class="form-group">
            <label for="telephone-office">Telephone (Office):</label>
            <input type="text" id="telephone-office" name="telephone-office">
        </div>
    </div>

    <div class="section">
        <div class="form-group">
            <label for="registered-owner-name">Registered Owner's Name:</label>
            <input type="text" id="registered-owner-name" name="registered-owner-name">
        </div>
        <div class="form-group">
            <label for="permanent-address">Permanent Address:</label>
            <input type="text" id="permanent-address" name="permanent-address">
        </div>
        <div class="form-group">
            <label for="city-2">City:</label>
            <input type="text" id="city-2" name="city-2">
        </div>
        <div class="form-group">
            <label for="province-2">Province:</label>
            <input type="text" id="province-2" name="province-2">
        </div>
    </div>

    <div class="upload-container">
        <div class="upload-file">
            <div class="upload-grid">
                <div class="upload-group" data-label="OR">
                    <input type="file" id="or">
                    <label for="or">
                        <i class="fas fa-upload"></i>
                        <span>Upload OR</span>
                    </label>
                    <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                </div>
                <div class="upload-group" data-label="CR">
                    <input type="file" id="cr">
                    <label for="cr">
                        <i class="fas fa-upload"></i>
                        <span>Upload CR</span>
                    </label>
                    <button class="remove-btn" onclick="removeFile(this)">Remove</button>
                </div>
            </div>
            <div class="upload-group full-width" data-label="Driver License">
                <input type="file" id="dl">
                <label for="dl">
                    <i class="fas fa-upload"></i>
                    <span>Upload Driver License</span>
                </label>
                <button class="remove-btn" onclick="removeFile(this)">Remove</button>
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
        </div>
    </div>

    <!-- Modal for full-size image view -->
    <div id="modal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const roleCheckboxes = document.querySelectorAll('.role-checkbox');
        roleCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                roleCheckboxes.forEach(box => {
                    if (box !== checkbox) box.checked = false;
                });
            });
        });
    });

    //upload file

    document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('.upload-group input[type="file"]');
    
    inputs.forEach(input => {
        input.addEventListener('change', function() {
            const file = this.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const label = input.nextElementSibling; // Get the label element
                    label.innerHTML = ''; // Clear the label text
                    
                    // Create and style the image element
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = file.name;
                    
                    // Append the image to the label
                    label.appendChild(img);
                    
                    // Add click listener to enable full-size view
                    img.addEventListener('click', function() {
                        const modal = document.getElementById('modal');
                        const modalImg = document.getElementById('modal-img');
                        modal.style.display = 'block';
                        modalImg.src = this.src;
                    });
                };
                
                // Read the uploaded file as a data URL
                reader.readAsDataURL(file);
            }
        });
    });

    // Get the modal
    const modal = document.getElementById('modal');

    // Get the <span> element that closes the modal
    const span = document.getElementsByClassName('close')[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = 'none';
    }

    // When the user clicks anywhere outside of the modal image, close it
    modal.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});

function submitForm() {
    // Handle form submission logic here if needed
    alert('Form submitted!');
}

function removeFile(button) {
    const uploadGroup = button.parentElement;
    const input = uploadGroup.querySelector('input[type="file"]');
    const label = uploadGroup.querySelector('label');
    
    // Clear the input value
    input.value = '';
    
    // Restore the default label content
    label.innerHTML = `
        <i class="fas fa-upload"></i>
        <span>${label.getAttribute('for')}</span>
    `;
    
    // Hide the remove button
    button.style.display = 'none';
    
    // Reattach the event listener to handle file changes
    input.addEventListener('change', handleFileUpload);
}

function handleFileUpload(event) {
    const file = event.target.files[0];
    const label = event.target.nextElementSibling;
    const uploadGroup = event.target.parentElement;
    const removeBtn = uploadGroup.querySelector('.remove-btn');
    
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            // Create and style the image element
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = file.name;
            
            // Clear the label and append the image
            label.innerHTML = '';
            label.appendChild(img);
            
            // Show the remove button
            removeBtn.style.display = 'inline-block';
            
            // Add click listener to enable full-size view
            img.addEventListener('click', function() {
                const modal = document.getElementById('modal');
                const modalImg = document.getElementById('modal-img');
                modal.style.display = 'block';
                modalImg.src = this.src;
            });
        };
        
        // Read the uploaded file as a data URL
        reader.readAsDataURL(file);
    } else {
        // If no file is selected, hide the remove button and restore default label
        label.innerHTML = `
            <i class="fas fa-upload"></i>
            <span>${label.getAttribute('for')}</span>
        `;
        
        removeBtn.style.display = 'none';
    }
}

// Attach initial event listeners to file inputs
document.querySelectorAll('.upload-group input[type="file"]').forEach(input => {
    input.addEventListener('change', handleFileUpload);
});



</script>