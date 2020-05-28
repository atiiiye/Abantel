
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
        if (this.style.display('')) {
            $(this).each(function (e) {
                var index = 0;
                if (this.checked) {
                    index += 1;
                    console.log(index);
                }
            });
        }
    })

    // ****************************************************************
    //                    Input checkbox
    // ****************************************************************
    // let list2 = document.querySelectorAll('ul#level-2 li div.form-check input');
    // let list3 = document.querySelectorAll('ul#level-3 li div.form-check input');
    let list4 = document.querySelector('ul#level-4.l4')

    // console.log(list4);

    // var index = 0;
    // list4.addEventListener('click', function (e) {

    //     // for (let i = 0; i == list4.length; i++) {
    //     if (item.checked) {
    //         index++
    //         // console.log(index);
    //         if (index == list4.length) {
    //             console.log('hellooo');

    //             let selector = $(this).parent('div.form-check').parent('li').parent('ul#level-4').parent('li').parent('ul#level-3').children('li').children('div.form-check').children('input[type=checkbox]').prop('checked', 'checked');
    //             console.log();
    //         }
    //     }
    //     //             }
    // })
    // var index = 0;

    // $('ul#level-4 li div.form-check input').on('click', function (e) {
    //     if (this.checked) {
    //         index += 1;
    //         console.log(index);
    //     }
    // })



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


        } else if (!this.checked) {
            $(this).parents('li').children('div.form-check').children('input[type=checkbox]').each(function () {
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