
(function ($) {
	$('.dropdown-menu li.dropdown').on('click', function (e) {
		$(this).toggleClass("show");
		var $subMenu = $(this).find('ul:nth-child(1)').addClass('show');
		$subMenu.toggleClass('show');

		// $(this).parents('.dropdown-menu.show').on('hidden.bs.dropdown', function (e) {
		// 	// $('.show').removeClass("show");
		// });
		return false;
	});

	 var $hamburgerMenu=$('div.hamburgerMenu');
	console.log($hamburgerMenu);

	$('li.dropdown-item').on('click',function(e){
		$(this).parents('ul.dropdown-menu.show').removeClass('show');
		$(this).parents('li.nav-item.dropdown.show').removeClass('show');
		$(this).parents('div.collapse').prev('div.hamburger-menu.navbar-toggler').addClass('collapsed');

		// $(this).parents('div.collapse').prev('div.hamburger-menu.navbar-toggler').children('.navbar-toggler-icon').removeClass('change');
		// return false;
		// $(this).parents('div.navbar-right').children('div.hamburger-menu').addClass('collapsed')

		// console.log($(this).parents('div.collapse').prev('div.hamburger-menu').toggleClass('collapsed'))
	})
	$('li.list-item').on('click',function(){
		$(this).parents('div.navbar-right').children('div.hamburger-menu.navbar-toggler').addClass('collapsed');
	})

	$('li.list-item').on('mouseenter',function(){
		$(this).parents('div.navbar-right').children('div.hamburger-menu.navbar-toggler').addClass('collapsed');
	})

	// $('div.hamburger-menu').on('click',function(){

	// 	$('li.dropdown-item').on('click',function(e){
	// 		$(this).parents('ul.dropdown-menu.show').removeClass('show');
	// 		$(this).parents('li.nav-item.dropdown.show').removeClass('show');
	// 		$(this).find('div.hamburger-menu').addClass('collapsed');
	// 	})
	// })

	
})(jQuery)


// let navItem = document.querySelector('.nav-item');
// let dropdownMenuShow = document.querySelector('.show')

let nanBarTogglerIcon = document.querySelector('.navbar-toggler-icon');

nanBarTogglerIcon.addEventListener('click', function (e) {
	nanBarTogglerIcon.classList.toggle("change");

})

// navItem.addEventListener('click', function (e) {
    // navItem.classList.add('active');
    // navItem.classList.remove('active')
// })

// navItem.classList.remove('active');