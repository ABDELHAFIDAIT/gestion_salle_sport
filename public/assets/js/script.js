const manageActivity = document.getElementById('manage-activity');
const manageBooking = document.getElementById('manage-booking');
const manageMembers = document.getElementById('manage-members');
const statistics = document.getElementById('statistics');

const optionActivity = document.getElementById('option-activity');
const optionBooking = document.getElementById('option-booking');
const optionMembers = document.getElementById('option-members');
const optionStatistics = document.getElementById('option-statistics');

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
    optionMembers.classList.remove('text-orange-500');
    optionStatistics.classList.remove('text-orange-500');

    manageActivity.classList.remove('hidden');
    manageBooking.classList.add('hidden');
    manageMembers.classList.add('hidden');
    statistics.classList.add('hidden');
});


optionBooking.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.add('text-orange-500');
    optionMembers.classList.remove('text-orange-500');
    optionStatistics.classList.remove('text-orange-500');

    manageActivity.classList.add('hidden');
    manageBooking.classList.remove('hidden');
    manageMembers.classList.add('hidden');
    statistics.classList.add('hidden');
});


optionMembers.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionMembers.classList.add('text-orange-500');
    optionStatistics.classList.remove('text-orange-500');

    manageActivity.classList.add('hidden');
    manageBooking.classList.add('hidden');
    manageMembers.classList.remove('hidden');
    statistics.classList.add('hidden');
});


optionStatistics.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionMembers.classList.remove('text-orange-500');
    optionStatistics.classList.add('text-orange-500');

    manageActivity.classList.add('hidden');
    manageBooking.classList.add('hidden');
    manageMembers.classList.add('hidden');
    statistics.classList.remove('hidden');
});



//==============================================================================



// const form = document.querySelector('form');
// const lastNameInput = document.getElementById('last-name');
// const firstNameInput = document.getElementById('first-name');
// const emailInput = document.getElementById('email');
// const phoneInput = document.getElementById('phone');

// btnConfirm.addEventListener('click', () => {
//     let isValid = true;


//     const nameRegex = /^[a-zA-Z\s]+$/;
//     if (!nameRegex.test(lastNameInput.value)) {
//         alert('Veuillez entrer un nom valide (lettres uniquement).');
//         isValid = false;
//     }

//     if (!nameRegex.test(firstNameInput.value)) {
//         alert('Veuillez entrer un prénom valide (lettres uniquement).');
//         isValid = false;
//     }


//     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (!emailRegex.test(emailInput.value)) {
//         alert('Veuillez entrer une adresse email valide.');
//         isValid = false;
//     }

//     const phoneRegex = /^\d{10,15}$/;
//     if (!phoneRegex.test(phoneInput.value)) {
//         alert('Veuillez entrer un numéro de téléphone valide (10 à 15 chiffres).');
//         isValid = false;
//     }

//     if (isValid) {
//         addForm.classList.add('hidden');
//         addForm.firstElementChild.reset();
//     }
// });