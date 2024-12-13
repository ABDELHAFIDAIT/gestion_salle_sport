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





const addActivityForm = document.getElementById('add-activity-form');
const openActivityPopup = document.getElementById('btn-add-activity');
const btnConfirmActivity = document.getElementById('confirm-add-activity');
const btnCancelActivity = document.getElementById('cancel-add-activity');


btnCancelActivity.addEventListener('click', function(){
    addActivityForm.classList.add('hidden');
});

openActivityPopup.addEventListener('click', function(){
    addActivityForm.classList.remove('hidden');
});