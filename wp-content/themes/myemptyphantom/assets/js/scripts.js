(function ($, root, undefined) {
	
	$(function () {

		'use strict';

/*
		// animated background
		var Canvas = document.getElementById('canvas');
		var ctx = Canvas.getContext('2d');

		var resize = function() {
			Canvas.width = Canvas.clientWidth;
			Canvas.height = Canvas.clientHeight;
		};
		window.addEventListener('resize', resize);
		resize();

		var elements = [];
		var presets = {};

		presets.o = function (x, y, s, dx, dy) {
			return {
				x: x,
				y: y,
				r: 12 * s,
				w: 5 * s,
				dx: dx,
				dy: dy,
				draw: function(ctx, t) {
					this.x += this.dx;
					this.y += this.dy;

					ctx.fillStyle = "#FFFFFF";
					ctx.beginPath();
					ctx.arc(this.x + + Math.sin((50 + x + (t / 10)) / 100) * 3, this.y + + Math.sin((45 + x + (t / 10)) / 100) * 4, this.r, 0, 2 * Math.PI, false);
					ctx.fill();
						// ctx.beginPath();
						// ctx.arc(this.x + + Math.sin((50 + x + (t / 10)) / 100) * 3, this.y + + Math.sin((45 + x + (t / 10)) / 100) * 4, this.r, 0, 2 * Math.PI, false);
						// ctx.lineWidth = this.w;
						// ctx.strokeStyle = '#fff';
						// ctx.stroke();
				}
			};
		};

		presets.x = function (x, y, s, dx, dy, dr, r) {
			r = r || 0;
			return {
				x: x,
				y: y,
				s: 20 * s,
				w: 5 * s,
				r: r,
				dx: dx,
				dy: dy,
				dr: dr,
				draw: function(ctx, t) {
					this.x += this.dx;
					this.y += this.dy;
					this.r += this.dr;

					var _this = this;

					ctx.save();

					ctx.translate(this.x + Math.sin((x + (t / 10)) / 100) * 5, this.y + Math.sin((10 + x + (t / 10)) / 100) * 2);
					ctx.rotate(this.r * Math.PI / 180);

					ctx.restore();
				}
			};
		};

		for(var x = 0; x < Canvas.width; x++) {
			for(var y = 0; y < Canvas.height; y++) {
				if(Math.round(Math.random() * 8000) == 1) {
					var s = ((Math.random() * 5) + 1) / 10;
					if(Math.round(Math.random()) == 1)
						elements.push(presets.o(x, y, s, 0, 0));
					else
						elements.push(presets.x(x, y, s, 0, 0, ((Math.random() * 3) - 1) / 10, (Math.random() * 360)));
				}
			}
		}

		setInterval(function() {
			ctx.clearRect(0, 0, Canvas.width, Canvas.height);
		
			var time = new Date().getTime();
			for (var e in elements)
			elements[e].draw(ctx, time);
		}, 10);
*/

		// toggle hamburger & off-canvas nav
		var $hamburger = $(".hamburger");
		$hamburger.on("click", function() {
			$hamburger.toggleClass("is-active");
		});

		// off canvas menu
		$(function() {
			$('#off-canvas-button').click(function() {
				toggleNav();
			});
		});
		function toggleNav() {
			if ($('#wrapper').hasClass('show-nav')) {
				$('#wrapper').removeClass('show-nav');
			} else {
				$('#wrapper').addClass('show-nav');
			}
		}

		// disable save as image in right-click context menu
		$("body").on("contextmenu", "img", function() {
			return false;
		});

		// remove inline image width/height (thanks WooCommerce)
		$('img').each(function() {
			$(this).removeAttr('width');
			$(this).removeAttr('height');
		});

		// homepage image slider
		$('#image-slider').slick({
			dots: false,
			infinite: true,
			speed: 1000,
			autoplay: true,
			autoplaySpeed: 2500,
			fade: true,
			cssEase: 'linear',
			lazyLoad: 'ondemand',
			lazyLoadBuffer: 0,
			arrows: false,
		});

	});

})(jQuery, this);
