
$(document).ready(function () {

    // ****************************************************************
    //                    Angle-left
    // ****************************************************************

    $('span.ti-angle-left').on('click', function (e) {
        $(this).toggleClass('rotate')
        // $(this).parents('li.row').children('ul#level-2').toggleClass('d-none')
        // $(this).parents('li').children('ul#level-3').toggleClass('d-none')
        // $(this).parents('li').children('ul#level-4').toggleClass('d-none')

        $(this).next('div.form-check').next('ul#level-2').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-3').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-4').toggleClass('d-none');
    })

    $('a.label-link').on('click', function (e) {

        $(this).parent('label.form-check-label').siblings('span.ti-angle-left').toggleClass('rotate')

        $(this).parent('label.form-check-label').parent('div.form-check').siblings('span.ti-angle-left').toggleClass('rotate');
        
        $(this).parents('div.form-check').next('ul#level-2').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-3').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-4').toggleClass('d-none');
    })

    // ****************************************************************
    //                    Input checkbox
    // ****************************************************************

    $('input[type=checkbox]').on('click', function (e) {
        // console.log($(this).parent('div.form-check').siblings('ul').children('input[type=checkbox]'));
        if (this.checked) {

            $(this).parent('div.form-check').siblings('ul#level-2').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = true;
            }).parent('div.form-check').siblings('ul#level-3').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = true;
            }).parent('div.form-check').siblings('ul#level-4').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = true;
            })

            $(this).parent('div.form-check').siblings('ul#level-3').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = true;
            }).parent('div.form-check').siblings('ul#level-4').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = true;
            })

            $(this).parent('div.form-check').siblings('ul#level-4').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = true;
            })


        }else if(!this.checked){
            $(this).parents('li').children('div.form-check').children('input[type=checkbox]').each(function(){
                this.checked = false;
            })
            $(this).parent('div.form-check').siblings('ul').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            }).parent('div.form-check').siblings('ul#level-2').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            }).parent('div.form-check').siblings('ul#level-3').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            }).parent('div.form-check').siblings('ul#level-4').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            })

            $(this).parent('div.form-check').siblings('ul#level-3').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            }).parent('div.form-check').siblings('ul#level-4').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            })

            $(this).parent('div.form-check').siblings('ul#level-4').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
                this.checked = false;
            })
            
        }
        // else if(this.checked && $(this).parents('li').siblings('li').children('div.form-check').children('input[type=checkbox]').checked){

        //     $(this).parents('li').children('div.form-check').children('input[type=checkbox]').checked=true
        // }

        // return
    })

















})