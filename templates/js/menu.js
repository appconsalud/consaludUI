/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// selector
var menu = document.querySelector('.hamburger');

// method
function toggleMenu (event) {
  this.classList.toggle('is-active');
  document.querySelector( ".menuppal" ).classList.toggle("is_active");
  event.preventDefault();
}

// event ACA ESTA FALLANDO
menu.addEventListener('click', toggleMenu, false);

//Solución con jQUery
$(document).ready(function(){
	$('.hamburger').click(function() {
		$('.hamburger').toggleClass('is-active');
		$('.menuresponsive').toggleClass('is-active');
		return false;
	});
});