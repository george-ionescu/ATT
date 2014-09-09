/* ==========================================================================
   ieViewportFix - fixes viewport problem in IE 10 SnapMode and IE Mobile 10
   ========================================================================== */
   
	function ieViewportFix() {
	
		var msViewportStyle = document.createElement("style");
		
		msViewportStyle.appendChild(
			document.createTextNode(
				"@-ms-viewport { width: device-width; }"
			)
		);

		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			
			msViewportStyle.appendChild(
				document.createTextNode(
					"@-ms-viewport { width: auto !important; }"
				)
			);
		}
		
		document.getElementsByTagName("head")[0].
				appendChild(msViewportStyle);

	}
	
	
/* ==========================================================================
   style select
   ========================================================================== */
	
	function styleSelect(){
       alert('style select');
	}

/* ==========================================================================
   exists - Check if an element exists
   ========================================================================== */		
	
	function exists(e) {
		return $(e).length > 0;
	}

/* ==========================================================================
   isTouchDevice - return true if it is a touch device
   ========================================================================== */

	function isTouchDevice() {
		return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
	}

/* ==========================================================================
   create a jquery diaolog
   ========================================================================== */
	
	function createWindow(name, title, content, w, h) {
		removeWindow(name);
		$('body').append('<div id="' + name + '"></div>');
		$('#' + name).attr("title", title).html(content).dialog({
			hide: 'fade',
	        show: 'fade',
			width:w, 
			height:h, 
			modal:true,
			closeOnEscape: true,
		   	draggable: false,
		    resizable: false,
		    dialogClass: 'customDialog',
		    open: function(event, ui) { $('.ui-widget-overlay').bind('click', function(){ $('#' + name).dialog('close'); }); }
		});
	}

/* ==========================================================================
   close a jquery dialog
   ========================================================================== */	

	function removeWindow(name) {
		$('#' + name).dialog('destroy').remove();
	}
	
/* ==========================================================================
   show master preloader
   ========================================================================== */
	
	function showPreloader(){
		
	}
	
/* ==========================================================================
   hide master preloader
   ========================================================================== */
	
	function hidePreloader(){
		
	}