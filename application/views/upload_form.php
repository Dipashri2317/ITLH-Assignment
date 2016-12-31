<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>


<form method="post" action="upload_aman" enctype="multipart/form-data"> 
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>