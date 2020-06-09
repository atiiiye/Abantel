
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
                console.log('yohoooo');
                if(childRest[i].checked){
                     counter++
                     console.log(counter);
                        if (counter === lengthItem) {
                            let selected = $(this).children('div.form-check').children('input').prop('checked','true');
                            console.log(selected); 
                        }
                    }
                  

                // childRest.forEach(item => item.addEventListener('change', function (e) {
                    // childL2.each(function(){
                        // for(let i=0;i< lengthItem;i++){
                         
                            // if (this.checked) {
                            //     ++counter;
                            //     console.log(counter);
                            //     return counter   
                            // }
                            
                            // if (counter === lengthItem) {
                            //     console.log('Hello');        
                            //     let selected = $(this).parent('div.form-check').parent('li').parent('ul#level-2').parent('li.row.list-item').children('div.form-check').children('input').prop('checked','true')
                            //     // let selectRest=[...selected]
                            //     // console.log(selected); 
                            //     // selectRest.checked=true
                            //     // console.log(selectRest);
                            // }
                        // }
                    // })  
                // }))
            }
        }
    })


    $('ul#level-2').children('li').on('click', function (e) {
        let par2 = $(this).children('div.form-check')
        let childL3 = par2.siblings('ul#level-3').children('li').children('div.form-check').children('input');
        if (!par2.siblings('ul#level-3').hasClass('d-none')) {
            let counter = 0;
            var childRest = [...childL3];
            const lengthItem = childRest.length

            for (let i = 0; i < lengthItem; i++) {
                console.log('yohoooo');
                if(childRest[i].checked){
                     counter++
                     console.log(counter);
                        if (counter === lengthItem) {
                            let selected = $(this).children('div.form-check').children('input').prop('checked','true');
                            console.log(selected); 
                        }
                    }
                }


            // for (i = 0; i < lengthItem; i++) {
                // childRest.forEach(item => item.addEventListener('change', function (e) {

                //     if (this.checked) {
                //         counter += 1;
                //         console.log(counter);
                //         if (counter == lengthItem) {
                //             let select = $(this).parent('div.form-check').parent('li').parent('ul#level-3').parent('li.sub-item').children('div.form-check').children('input').each(function () {
                //                 this.checked = true
                //             });
                //             return counter
                //         }
                //     } else if (!this.checked) {
                //         counter -= 1
                //     }
                // }))
            // }

        }

    })


    $('ul#level-3').children('li').on('click', function (e) {
        let par3 = $(this).children('div.form-check')

        let childL4 = par3.siblings('ul#level-4').children('li').children('div.form-check').children('input');
        if (!par3.siblings('ul#level-4').hasClass('d-none')) {
            let counter = 0;
            var childRest = [...childL4];
            const lengthItem = childRest.length

            for (let i = 0; i < lengthItem; i++) {
                console.log('yohoooo');
                if(childRest[i].checked){
                     counter++
                     console.log(counter);
                        if (counter === lengthItem) {
                            let selected = $(this).children('div.form-check').children('input').prop('checked','true');
                            console.log(selected); 
                        }
                    }
                }
            

            // for (i = 0; i < childSpread.length; i++) {
                // childSpread.forEach(item => item.addEventListener('change', function (e) {
                //     if (this.checked) {
                //         counter += 1;
                //         console.log(counter);

                //         if (counter == childSpread.length) {
                //             let select = $(this).parent('div.form-check').parent('li').parent('ul#level-4').parent('li.sub-item').children('div.form-check').children('input').each(function () {
                //                 this.checked = true
                //             });
                //         }
                //     } else if (!this.checked) {
                //         counter -= 1
                //     }
                // }))
            // }
        }
    })







    
})