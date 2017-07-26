<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Media Upload</title>
	<link href="{{ asset('admin/vendors/dropzone.css') }}" rel="stylesheet">
	
	<script src="http://code.jquery.com/jquery-1.12.4.min.js" ></script>
	<script src="{{ asset('admin/vendors/dropzone.js') }}" ></script>
</head>
<body>
	
	<form id="file-upload" class="dropzone" action="{{ route('media.store') }}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
	</form>

	<script>
		 

		$(document).ready(function(){
			console.log('dfg');
			// $("div#file-upload").dropzone({ 
			// 	url: "{{ route('media.store') }}",
			// 	paramName: "m_files",
			// });

			Dropzone.options.fileUpload = {
			url: "{{ route('media.store') }}",
            maxFilesize:       4,
            paramName: "m_files",
		    uploadMultiple: true,
		    parallelUploads: 100,
		    maxFiles: 100,
		    init: function () {
            this.on("success", function (file, response) {
                console.log(file.name)
            });
        	}

        	};

        	
		});

		

	</script>

</body>
</html>