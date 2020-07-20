
$(document).ready(function () {

    // ****************************************************************
    //                    Angle-left
    // ****************************************************************
    $('span.ti-angle-left').on('click', function (e) {
        $(this).toggleClass('rotate')

        $(this).next('div.form-check').next('ul#level-2').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-3').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-4').toggleClass('d-none');
    })

    $('span.label-link').on('click', function (e) {
        $(this).parent('label.form-check-label').parent('div.form-check').siblings('span.ti-angle-left').toggleClass('rotate');

        $(this).parents('div.form-check').next('ul#level-2').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-3').toggleClass('d-none');
        $(this).parents('div.form-check').next('ul#level-4').toggleClass('d-none');

        $(this).parent('label.form-check-label').siblings('input[type=checkbox]').each(function(){
            if (this.checked){
                this.checked = false;
                console.log('checked');
            }else if (!this.checked){
                this.checked = true;
                console.log('not checked');  
            }
        })
    })
    // $('span.label-link').one('click', function (e) {
    //     $(this).parent('label.form-check-label').parent('div.form-check').children('input').prop('checked','false')
    // })

    // ****************************************************************
    //                    Input checkbox
    // ****************************************************************
    $('input[type=checkbox]').on('click', function (e) {
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

            $(this).parent('div.form-check').siblings('ul#level-2').children('li').children('div.form-check').children('input[type=checkbox]').each(function () {
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
    })

    $('li.row.list-item').on('click', function (e) {
        let par = $(this).children('div.form-check')

        if (!par.siblings('ul#level-2').hasClass('d-none')) {
            let childL2 = par.siblings('ul#level-2').children('li').children('div.form-check').children('input');
            let childRest = [...childL2]
            const lengthItem = childRest.length
            let counter = 0;

            for (let i = 0; i < lengthItem; i++) {
                if (childRest[i].checked) {
                    counter++
                    if (counter === lengthItem) {
                        let selected = $(this).children('div.form-check').children('input').prop('checked', 'true');
                    }
                }
            }
        }
    })

    $('ul#level-2').children('li').on('click', function (e) {
        let par2 = $(this).children('div.form-check')

        if (!par2.siblings('ul#level-3').hasClass('d-none')) {
            let childL3 = par2.siblings('ul#level-3').children('li').children('div.form-check').children('input');
            let childRest = [...childL3];
            const lengthItem = childRest.length
            let counter = 0;

            for (let i = 0; i < lengthItem; i++) {
                if (childRest[i].checked) {
                    counter++
                    if (counter === lengthItem) {
                        let selected = $(this).children('div.form-check').children('input').prop('checked', 'true');
                    }
                }
            }
        }
    })

    $('ul#level-3').children('li').on('click', function (e) {
        let par3 = $(this).children('div.form-check')

        if (!par3.siblings('ul#level-4').hasClass('d-none')) {
            let childL4 = par3.siblings('ul#level-4').children('li').children('div.form-check').children('input');
            let childRest = [...childL4];
            const lengthItem = childRest.length
            let counter = 0;

            for (let i = 0; i < lengthItem; i++) {
                if (childRest[i].checked) {
                    counter++
                    if (counter === lengthItem) {
                        let selected = $(this).children('div.form-check').children('input').prop('checked', 'true');
                    }
                }
            }
        }
    })
})