
$(document).ready(function () {
    // let inputCheckboxes = document.querySelectorAll('input[type=checkbox]')

    $('input[type=checkbox]').on('click', function (e) {
        // $(this).children('input[type=checkbox]:cheked')
    })

    $('span.ti-angle-left').on('click', function (e) {
        $(this).toggleClass('rotate')
        $(this).parents('li.row').children('ul#level-2').toggleClass('d-none')
    })

    $('a.label-link').on('click', function (e) {
        $(this).parents('li.row').children('span.ti-angle-left').toggleClass('rotate');
        $(this).parents('div.form-check').next('ul#level-2').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-3').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-4').toggleClass('d-none');

    })

    let angleLefts = document.getElementsByClassName('ti-angle-left')

    // angleLefts.addEventListener('click',function(e){
    //         console.log('kkkk');
            
    //         e.classList.toggle('rotate');
    //     })
    

    // angleLefts.forEach(angleLeft=>angleLeft.addEventListener('click',function(e){
    //     console.log('kkkk');
        
    //     e.classList.toggle('rotate');
    // }))




})