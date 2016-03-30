/**
 * 
 */
$( document ).ready(function() {
	   // Helper for file upload
    // Variable to store your files
    var files;

    // Add events
    $('input[type=file]').on('change', UploadFile);

    // Grab the files and set them to our variable
    function prepareUpload(event)
    {
      files = event.target.files;
      console.log("prepareUpload");
    }
    
	// upload files
	function UploadFile(event) {
		var file = event.target.files[0];
		var id = event.target.id;

		console.log("UploadFile(event)");
		console.log(id);
		console.log(file);
		
		var xhr = new XMLHttpRequest();
		if (xhr.upload) {

			// create progress bar
			console.log("ctest");
			var parent = $("#ctest").parent();
			var progressBarParent = $('#profile_pic_progress_template').clone().show().removeAttr('id');
			progressBarParent.prependTo(parent)
			
			var progressBar = $(progressBarParent).find('.progress-bar');
			
			//return;
			//var o = $id("progress");
			//var progress = o.appendChild(document.createElement("p"));
			//progress.appendChild(document.createTextNode("upload " + file.name));


			// progress bar
			xhr.upload.addEventListener("progress", function(e) {
				var pc = parseInt(100 - (e.loaded / e.total * 100));
				//console.log(pc);
				$(progressBar).css('width', pc+'%').attr('aria-valuenow', pc);
			}, false);

			// file received/failed
			xhr.onreadystatechange = function(e) {
				if (xhr.readyState == 4) {
					if (xhr.status!=200) {
						
					}
					else {
						
					}
					//console.log(xhr.status);
					//progress.className = (xhr.status == 200 ? "success" : "failure");
				}
			};

			// start upload
			xhr.open("POST", '/file/upload', true);
			xhr.setRequestHeader("X_FILENAME", file.name);
			xhr.setRequestHeader("X_MD5", 'wertwert546357456');
			xhr.send(file);

		}

	}
});