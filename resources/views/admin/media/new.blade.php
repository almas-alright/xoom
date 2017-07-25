<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Media Upload</title>
</head>
<body>
	
	<form action="{{ route('media.store') }}" enctype="mutipart/form-data" method="post">
		{{ csrf_field() }}
		<input type="file" name="files">
		<input type="submit" value="Upload" >
	</form>

</body>
</html>