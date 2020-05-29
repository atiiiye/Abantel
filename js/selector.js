
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
    // let list2 = document.querySelectorAll('ul#level-2 li div.form-check input');
    // let list3 = document.querySelectorAll('ul#level-3 li div.form-check input');
    // let list4 = document.querySelectorAll('ul#level-4.list.l4')

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


    $('ul#level-3').children('li').children('div.form-check').children('label.form-check-label').children('a.label-link').on('click', function (e) {
        let par = $(this).parents('div.form-check')

        let childL4 = par.siblings('ul#level-4').children('li').children('div.form-check').children('input');
        if (!par.siblings('ul#level-4').hasClass('d-none')) {
            // console.log(...childL4);
            let counter = 0;
            var childSpread = [...childL4];
            // console.log(childSpread);

            // for (i = 0; i < childSpread.length; i++) {
            // console.log(childSpread[i]);
            // console.log(childSpread[i].checked);
            childSpread.forEach(item => item.addEventListener('click', function (e) {
                // console.log(this);

                if (this.checked) {
                    counter += 1;
                    console.log(counter);
                    // console.log(childSpread.length);

                    if (counter == childSpread.length) {
                        let select = $(this).parent('div.form-check').parent('li').parent('ul#level-4').parent('li.sub-item').children('div.form-check').children('input').each(function () {
                            this.checked = true
                        });
                        return counter
                        // console.log(select);
                    }
                } else if (!this.checked) {
                    counter -= 1
                }
            }))
            // }
        }
    })


    $('ul#level-2').children('li').children('div.form-check').children('label.form-check-label').children('a.label-link').on('click', function (e) {
        let par = $(this).parents('div.form-check')
        let childL3 = par.siblings('ul#level-4').children('li').children('div.form-check').children('input');
        console.log(childL3);
        if (!par.siblings('ul#level-3').hasClass('d-none')) {
            let counter = 0;
            var childsSpread = [...childL3];
            console.log(childsSpread);

            childsSpread.forEach(item => item.addEventListener('click', function (e) {
                // console.log(this);

                if (this.checked) {
                    counter += 1;
                    console.log(counter);
                    if (counter == childsSpread.length) {
                        let select = $(this).parent('div.form-check').parent('li').parent('ul#level-3').parent('li.sub-item').children('div.form-check').children('input').each(function () {
                            this.checked = true
                        });
                        return counter
                    }
                } else if (!this.checked) {
                    counter -= 1
                }
            }))

        }

    })

















})