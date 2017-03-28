$(function(){
	
	var mySlider = (function (){

		var dom = {};
			dom.ul = $("#slider");
			dom.items = dom.ul.find("li");

		// Variables de control
		var sliderInterval, currentSlide = 0, nextSlide = 1, lengthSlide = dom.items.length;

		// Activar el slider
		var slide = {};
		slide.init = function(settings) {
			this.settings = settings || {duration: 4000}
			var htmlLi = '';

			// Creamos dinamicamente los controles
			for (var i = 0; i < lengthSlide; i++) {
				if (i == 0) {
					htmlLi += "<li class='active'></li>";
				}else{
					htmlLi += "<li></li>";
				}
			}

			$("#controls ul").html(htmlLi).on('click', 'li', function() {
				var $this = $(this);
				//console.log($this.index());
				if (currentSlide != $this.index()) {
					changeSlide($this.index());
				}
			});
		}

		var changeSlide = function(id) {
			var panels = dom.items,
				controls = $("#controls ul li");
			if (id >= lengthSlide) {
				id = lengthSlide - 1;
			} 

			// Efectos
			controls.removeClass('active').eq(id).addClass('active');
			if (panels.eq(id).hasClass('hidden')) {
				panels.eq(id).removeClass('hidden').addClass('current');
				panels.eq(currentSlide).removeClass('current');
			} else {
				panels.eq(id).addClass('current');				
				panels.eq(currentSlide).removeClass('current').addClass('hidden');
			}

			currentSlide = id;
		}

		return slide;
		
	})();

	mySlider.init();

});