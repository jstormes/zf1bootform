/**
 * Look for any input with a pattern class and apply a formatter.
 * 
 * See https://github.com/firstopinion/formatter.js
 */


$( document ).ready(function() {
	
	// helper for formats applied with formatter
	// https://github.com/firstopinion/formatter.js
	(function() {
	    $( 'input[data-format]' ).each(function( index ) {
	    	var pattern = $(this).data('format');
			$(this).formatter({'pattern': pattern});
	    });
	})();
    
    // helper for date    
    (function() {
        var elem = document.createElement('input');
        elem.setAttribute('type', 'date');
        // if element cannot be set to date type, assusme we need to 
        // use our own datepicker.
        if ( elem.type === 'text' ) {
        	$('input[type="date"]').each(function( index ) {
            	$(this).attr({"pattern":'(19[0-9][0-9]|20[0-9][0-9])[/.-](0[1-9]|1[0-2])[/.-](0[1-9]|1[0-9]|2[0-9]|3[0-1])'});
            	$(this).attr({"placeholder":'YYYY-MM-DD'});
            	$(this).formatter({'pattern': '{{9999}}-{{99}}-{{99}}'});
            	$(this).daterangepicker({'singleDatePicker':true,
            		'showDropdowns':true,
            		'minDate':'1000-01-01',
    	    		'maxDate':'9999-12-31',
            		'format':'YYYY-MM-DD'});
            });
        }
        elem.remove();
     })();
    
    // helper for datetime
    (function() {
    	var elem = document.createElement('input');
        elem.setAttribute('type', 'datetime');
        // if element cannot be set to date type, assusme we need to 
        // use our own datepicker.
        if ( elem.type === 'text' ) {
		    $('input[type="datetime"]').each(function( index ) {
		    	$(this).attr({"pattern":'(19[0-9][0-9]|20[0-9][0-9])[/.-](0[1-9]|1[0-2])[/.-](0[1-9]|1[0-9]|2[0-9]|3[0-1])[T\s](0[1-9]|1[1-9]|2(1-4)[/.:]([0-6][0-9])'});
	        	$(this).attr({"placeholder":'YYYY-MM-DD 24:00'});
	        	$(this).formatter({'pattern': '{{9999}}-{{99}}-{{99}} {{99}}:{{99}}'});
		    	$(this).daterangepicker({'singleDatePicker':true,
		    		'showDropdowns':true,
		    		'timePicker':true,
		    		'timePickerIncrement':1,
		    		'minDate':'1000-01-01 00:00:00',
		    		'maxDate':'9999-12-31 23:59:59',
		    		'format':'YYYY-MM-DD HH:MM'});
		    });
        }
	    elem.remove();
    })();
    
    // Helper for TinyMCE HTML editor
	tinymce.init({
	    selector: "textarea.form-tinymce",
	    plugins: "textcolor",
	    toolbar: "undo redo |  bold italic forecolor backcolor | bullist numlist outdent indent | ",
	    menu: "false",
	    statusbar : false,
	    browser_spellcheck: true
	 });

	
	// File Helpers
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        var name = "#"+this.name+'_text';
        $(name).val(label);

        //input.trigger('fileselect', [numFiles, label]);
    });
    
    // Upload file????????
    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        //console.log(numFiles);
        //console.log(label);
        });
    });
    
    

    /* Make Enter move to the next field like tab.
     */
    $('body').on('keydown', 'input, select', function(e) {
        var self = $(this)
          , form = self.parents('form:eq(0)')
          , focusable
          , next
          ;
        if (e.keyCode == 13) {
            focusable = form.find('input,select').filter(':visible');
            next = focusable.eq(focusable.index(this)+1);
            if (next.length) {
                next.focus();
            } else {
                form.submit();
            }
            return false;
        }
    });
    
    // Set focus to the first input
    $('form:first *:input[type!=hidden]:first').focus();
    
});