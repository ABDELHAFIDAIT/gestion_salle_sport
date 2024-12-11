const manageActivity = document.getElementById('manage-activity');
const manageBooking = document.getElementById('manage-booking');
const managePayment = document.getElementById('manage-payment');

const optionActivity = document.getElementById('option-activity');
const optionBooking = document.getElementById('option-booking');
const optionPayment = document.getElementById('option-payment');


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