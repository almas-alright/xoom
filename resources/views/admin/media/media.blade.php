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
	
	<form action="{{ route('media.store') }}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
		<input type="file" name="m_files[]" multiple>
		<input type="submit" value="upload">
	</form>

	

</body>
</html>