
$(document).ready(function () {
let inputCheckboxes = document.querySelectorAll('input[type=checkbox]')
console.log(inputCheckboxes)

$('input[type=checkbox]').on('click',function(e){
$(this).parents('li.row').children('span.ti-angle-left').toggleClass('rotate')
  
})







})