/*
 * SimpleModal OSX Style Modal Dialog
 * http://simplemodal.com
 *
 * Copyright (c) 2013 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */

jQuery(function ($) {
	var OSX = {
		container: null,
		init: function () {
			$("a.modal1").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-1").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open1,
					onClose: OSX.close
				});
			});
			$("a.modal2").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-2").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open2,
					onClose: OSX.close
				});
			});
			$("a.modal3").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-3").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open3,
					onClose: OSX.close
				});
			});
			$("a.modal4").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-4").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open4,
					onClose: OSX.close
				});
			});
			$("a.modal5").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-5").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open5,
					onClose: OSX.close
				});
			});	
			$("a.modal6").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-6").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open6,
					onClose: OSX.close
				});
			});
			$("a.modal7").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-7").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open7,
					onClose: OSX.close
				});
			});
			$("a.modal8").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-8").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open8,
					onClose: OSX.close
				});
			});
			$("a.modal9").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-9").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open9,
					onClose: OSX.close
				});
			});
			$("a.modal10").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-10").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open10,
					onClose: OSX.close
				});
			});	
			$("a.modal11").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-11").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open11,
					onClose: OSX.close
				});
			});
			$("a.modal12").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-12").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open12,
					onClose: OSX.close
				});
			});
			$("a.modal13").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-13").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open13,
					onClose: OSX.close
				});
			});
			$("a.modal14").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-14").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open14,
					onClose: OSX.close
				});
			});
			$("a.modal15").click(function (e) {
				e.preventDefault();	
				$("#osx-modal-content-15").modal({
					overlayId: 'osx-overlay',
					containerId: 'osx-container',
					closeHTML: null,
					minHeight: 80,
					opacity: 65, 
					position: ['0',],
					overlayClose: true,
					onOpen: OSX.open15,
					onClose: OSX.close
				});
			});											
		},
		open1: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-1", self.container).show();
				var title = $("#osx-modal-title-1", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-1", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-1", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open2: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-2", self.container).show();
				var title = $("#osx-modal-title-2", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-2", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-2", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open3: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-3", self.container).show();
				var title = $("#osx-modal-title-3", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-3", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-3", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open4: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-4", self.container).show();
				var title = $("#osx-modal-title-4", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-4", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-4", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open5: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-5", self.container).show();
				var title = $("#osx-modal-title-5", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-5", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-5", self.container).show();
							}
						);
					}, 300);
				});
			})
		},	
		open6: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-6", self.container).show();
				var title = $("#osx-modal-title-6", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-6", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-6", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open7: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-7", self.container).show();
				var title = $("#osx-modal-title-7", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-7", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-7", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open8: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-8", self.container).show();
				var title = $("#osx-modal-title-8", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-8", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-8", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open9: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-9", self.container).show();
				var title = $("#osx-modal-title-9", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-9", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-9", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open10: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-10", self.container).show();
				var title = $("#osx-modal-title-10", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-10", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-10", self.container).show();
							}
						);
					}, 300);
				});
			})
		},	
		open11: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-11", self.container).show();
				var title = $("#osx-modal-title-11", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-11", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-11", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open12: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-12", self.container).show();
				var title = $("#osx-modal-title-12", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-12", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-12", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open13: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-13", self.container).show();
				var title = $("#osx-modal-title-13", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-13", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-13", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open14: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-14", self.container).show();
				var title = $("#osx-modal-title-14", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-14", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-14", self.container).show();
							}
						);
					}, 300);
				});
			})
		},
		open15: function (d) {
			var self = this;
			self.container = d.container[0];
			d.overlay.fadeIn('slow', function () {
				$("#osx-modal-content-15", self.container).show();
				var title = $("#osx-modal-title-15", self.container);
				title.show();
				d.container.slideDown('slow', function () {
					setTimeout(function () {
						var h = $("#osx-modal-data-15", self.container).height()
							+ title.height()
							+ 20; // padding
						d.container.animate(
							{height: h}, 
							200,
							function () {
								$("div.close", self.container).show();
								$("#osx-modal-data-15", self.container).show();
							}
						);
					}, 300);
				});
			})
		},													
		close: function (d) {
			var self = this; // this = SimpleModal object
			d.container.animate(
				{top:"-" + (d.container.height() + 20)},
				500,
				function () {
					self.close(); // or $.modal.close();
				}
			);
		}
	};

	OSX.init();

});
