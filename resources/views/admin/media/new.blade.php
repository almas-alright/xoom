<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Media Upload</title>
</head>
<body>
	
	<form action="{{ route('media.store') }}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
		<input type="file" name="m_files" multiple>
		<input type="submit" value="Upload" >
	</form>

</body>
</html>