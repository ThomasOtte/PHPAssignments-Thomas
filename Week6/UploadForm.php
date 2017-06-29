<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>FileUploader</title>
</head>
<body>
	<div class="container">
		<section id="content" style="text-align: center;">
			<div>

				<form action="UploadScript.php" method="post"
					enctype="multipart/form-data">
					Select image to upload: <br>
					<input type="file" name="File"	id="fileToUpload"> <br>
					<input type="submit" value="Upload File" name="submit">
				</form>
			</div>
		</section>
	</div>
</body>
</html>

