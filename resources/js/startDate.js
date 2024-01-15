const startDateInput = document.querySelector('#start_date')
const today = new Date();
const year = today.getFullYear();
let month = today.getMonth() + 1; 
let day = today.getDate();

month = month < 10 ? `0${month}` : month;
day = day < 10 ? `0${day}` : day;

const formattedDate = `${year}-${month}-${day}`;



if(startDateInput){

    startDateInput.value =formattedDate
}