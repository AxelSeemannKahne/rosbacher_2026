document.addEventListener('DOMContentLoaded', () => {
    const submitButton = document.getElementById('submitButton');
    const form = document.getElementById('form');
    const mainErrorNote = document.getElementById('mainErrorNote');
    const successNote = document.getElementById('successNote');
    const submitSpinner = document.getElementById('submitSpinner');

    // Konstante für die maximale Dateigröße (10 MB in Bytes)
    const MAX_FILE_SIZE = 10 * 1024 * 1024;

    if (!form || !submitButton || !mainErrorNote || !submitSpinner) {
        console.error('Eines oder mehrere der benötigten DOM-Elemente wurden nicht gefunden.');
        return;
    }


    submitButton.addEventListener('click', async (event) => {
        event.preventDefault();

        let isValid = true;
        document.querySelectorAll('.error-note, .email-error-note').forEach(errorDiv => {
            errorDiv.style.display = 'none';
        });
        mainErrorNote.style.display = 'none';

        const firstNameInput = document.getElementById('firstName');
        if (firstNameInput && firstNameInput.value.trim() === '') {
            isValid = false;
            const errorDiv = firstNameInput.closest('.js-mandatory').querySelector('.error-note');
            if (errorDiv) errorDiv.style.display = 'block';
        }

        const lastNameInput = document.getElementById('lastName');
        if (lastNameInput && lastNameInput.value.trim() === '') {
            isValid = false;
            const errorDiv = lastNameInput.closest('.js-mandatory').querySelector('.error-note');
            if (errorDiv) errorDiv.style.display = 'block';
        }

        const emailInput = document.getElementById('email');
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (emailInput) {
            if (emailInput.value.trim() === '') {
                isValid = false;
                const errorDiv = emailInput.closest('.js-mandatory').querySelector('.error-note');
                if (errorDiv) errorDiv.style.display = 'block';
            } else if (!emailRegex.test(emailInput.value.trim())) {
                isValid = false;
                const errorDiv = emailInput.closest('.js-mandatory').querySelector('.email-error-note');
                if (errorDiv) errorDiv.style.display = 'block';
            }
        }

        const receiptImageInput = document.getElementById('receiptImage');

        if (receiptImageInput && (!receiptImageInput.files || receiptImageInput.files.length === 0)) {
            isValid = false;
            const errorDiv = document.getElementById("receiptImageErrorNote");
            if (errorDiv) {
                errorDiv.textContent = "Bitte lade einen Kassenbon hoch.";
                errorDiv.style.display = 'block';
            }
        } else if (receiptImageInput.files[0].size > MAX_FILE_SIZE) {

            isValid = false;
            const errorDiv = document.getElementById("receiptImageErrorNote");
            if (errorDiv) {
                errorDiv.textContent = "Datei überschreitet maximale Größe von 10MB (Fehlercode: E003)";
                errorDiv.style.display = 'block';
            }
            showErrorMessage('Datei überschreitet maximale Größe von 10MB (Fehlercode: E003)');
        }



        const agbCheckbox = document.getElementById('agbCheckbox');
        if (agbCheckbox && !agbCheckbox.checked) {
            isValid = false;
            const errorDiv = agbCheckbox.closest('.js-mandatory').querySelector('.error-note');
            if (errorDiv) errorDiv.style.display = 'block';
        }

        const privacyCheckbox = document.getElementById('privacyCheckbox');
        if (privacyCheckbox && !privacyCheckbox.checked) {
            isValid = false;
            const errorDiv = privacyCheckbox.closest('.js-mandatory').querySelector('.error-note');
            if (errorDiv) errorDiv.style.display = 'block';
        }


        if (!isValid) {
            showErrorMessage('Bitte fülle alle Pflichtfelder aus und akzeptiere die Teilnahmebedingungen und Datenschutzhinweise.');
            return;
        }

        const formData = new FormData();
        formData.append('firstName', firstNameInput.value);
        formData.append('lastName', lastNameInput.value);
        formData.append('email', emailInput.value);

        if (receiptImageInput && receiptImageInput.files && receiptImageInput.files[0]) {
            formData.append('receiptImage', receiptImageInput.files[0]);
        }

        submitSpinner.classList.remove('d-none');
        submitButton.classList.add('disabled');
        submitButton.style.pointerEvents = 'none';

        try {
            const response = await fetch('https://www.rosbacher-gewinnspiel.de/api/verifyWin.php', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                const errorData = await response.json().catch(() => null);
                if (errorData && errorData.error) {
                    showErrorMessage(errorData.error);
                } else if (errorData && errorData.errors) {
                    showValidationErrors(errorData.errors);
                } else if (response.status === 413) {
                    showErrorMessage('Datei überschreitet maximale Größe von 10MB (Fehlercode: E003)!');
                } else {
                    showErrorMessage(`HTTP-Fehler: ${response.status} ${response.statusText}`);
                }
                throw new Error(`Server response was not ok: ${response.status}`);
            }

            const data = await response.json();

            if (data.success) {
                successNote.innerHTML = "Deine Teilnahme war erfolgreich. Wir drücken dir die Daumen!";
                successNote.style.display = '';
                successNote.style.display = '';
                submitButton.remove();
            } else {
                if (data.errors) {
                    showValidationErrors(data.errors);
                } else if (data.error) {
                    showErrorMessage(data.error);
                } else {
                    showErrorMessage('Ein unbekannter Fehler ist aufgetreten.');
                }
            }
        } catch (error) {
            console.error('Ein unerwarteter Fehler ist aufgetreten:', error);
            if (mainErrorNote.style.display === 'none' || mainErrorNote.textContent === 'Bitte fülle alle Pflichtfelder aus und akzeptiere die Bedingungen.') {
                showErrorMessage('Ein unerwarteter Systemfehler ist aufgetreten. Bitte versuchen Sie es erneut.');
            }
        } finally {
            submitSpinner.classList.add('d-none');
            submitButton.classList.remove('disabled');
            submitButton.style.pointerEvents = 'auto';
        }
    });

    function showValidationErrors(errors) {
        if (mainErrorNote) {
            mainErrorNote.textContent = 'Ein Fehler ist aufgetreten';
            mainErrorNote.style.display = 'block';
            mainErrorNote.style.color = '#c8102e';
        }

        const errorFieldMap = {
            'salutation': 'salutation',
            'firstName': 'firstName',
            'lastName': 'lastName',
            'email': 'email',
            'receiptImage': 'receiptImage',
            'agb': 'agbCheckbox',
        };

        for (const fieldKey in errors) {
            const htmlElementId = errorFieldMap[fieldKey];
            if (htmlElementId) {
                const inputElement = document.getElementById(htmlElementId);
                if (inputElement) {
                    let errorDiv;
                    if (fieldKey === 'email' && errors[fieldKey].includes('Bitte gib Deine E-Mail-Adresse im korrekten Format an')) {
                        errorDiv = inputElement.closest('.js-mandatory').querySelector('.email-error-note');
                    } else {
                        errorDiv = inputElement.closest('.js-mandatory').querySelector('.error-note');
                    }
                    if (errorDiv) {
                        errorDiv.textContent = errors[fieldKey].join(', ');
                        errorDiv.style.display = 'block';
                    }
                }
            }
        }
    }

    function showErrorMessage(message) {
        if (mainErrorNote) {
            mainErrorNote.textContent = `Fehler: ${message}`;
            mainErrorNote.style.display = 'block';
            mainErrorNote.style.color = '#c8102e';
        }
    }

});



