<?php
	require("./config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Preview - <?php echo TITLE ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Preview</h1>
  <a class="back-button" href="/">Back</a>
  <div class="preview-container">
	<?php
	  if(isset($_GET['file'])) {
		$file = $_GET['file'];
		$ext = pathinfo($file, PATHINFO_EXTENSION);
		if(in_array($ext, ['txt', 'doc', 'docx', 'pdf'])) {
		  echo '<pre>' . file_get_contents($file) . '</pre>';
		} elseif(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff'])) {
		  echo '<img src="' . $file . '">';
		} elseif(in_array($ext, ['mp4', 'webm', 'ogg'])) {
		  echo '<video controls><source src="' . $file . '" type="video/' . $ext . '">Your browser does not support the video tag.</video>';
		} else {
		  echo 'Unsupported file format';
		}
		echo '<a class="download-button" href="' . $file . '" download>Download</a>';
	  } else {
		echo 'No file specified';
	  }
	?>
  </div>
</body>
</html>
