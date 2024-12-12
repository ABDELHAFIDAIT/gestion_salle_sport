const manageActivity = document.getElementById('manage-activity');
const manageBooking = document.getElementById('manage-booking');
const managePayment = document.getElementById('manage-payment');

const optionActivity = document.getElementById('option-activity');
const optionBooking = document.getElementById('option-booking');
const optionPayment = document.getElementById('option-payment');

const addForm = document.getElementById('add-form');
const openPopup = document.getElementById('add-new-booking');
const btnConfirm = document.getElementById('confirm-add');
const btnCancel = document.getElementById('cancel-add');


btnCancel.addEventListener('click', function(){
    addForm.classList.add('hidden');
});

openPopup.addEventListener('click', function(){
    addForm.classList.remove('hidden');
});


optionActivity.addEventListener('click', function(){
    optionActivity.classList.add('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionPayment.classList.remove('text-orange-500');

    manageActivity.classList.remove('hidden');
    manageBooking.classList.add('hidden');
    managePayment.classList.add('hidden');
});


optionBooking.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.add('text-orange-500');
    optionPayment.classList.remove('text-orange-500');

    manageActivity.classList.add('hidden');
    manageBooking.classList.remove('hidden');
    managePayment.classList.add('hidden');
});


optionPayment.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionPayment.classList.add('text-orange-500');

    manageActivity.classList.add('hidden');
    manageBooking.classList.add('hidden');
    managePayment.classList.remove('hidden');
});




//==============================================================================



const form = document.querySelector('form');
const lastNameInput = document.getElementById('last-name');
const firstNameInput = document.getElementById('first-name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');

btnConfirm.addEventListener('click', () => {
    let isValid = true;


    const nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(lastNameInput.value)) {
        alert('Veuillez entrer un nom valide (lettres uniquement).');
        isValid = false;
    }

    if (!nameRegex.test(firstNameInput.value)) {
        alert('Veuillez entrer un prénom valide (lettres uniquement).');
        isValid = false;
    }


    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value)) {
        alert('Veuillez entrer une adresse email valide.');
        isValid = false;
    }

    const phoneRegex = /^\d{10,15}$/;
    if (!phoneRegex.test(phoneInput.value)) {
        alert('Veuillez entrer un numéro de téléphone valide (10 à 15 chiffres).');
        isValid = false;
    }

    if (isValid) {
        addForm.classList.add('hidden');
        addForm.firstElementChild.reset();
    }
});