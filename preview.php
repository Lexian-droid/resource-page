<?php
	require("./config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Preview - <?php echo TITLE ?></title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .preview-container {
      margin: 0 auto;
      max-width: 500px;
      padding: 10px;
      border: 1px solid #ddd;
    }
    img {
      max-width: 100%;
    }
    .download-button, .back-button {
      display: block;
      margin: 10px auto;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <h1>Preview</h1>
  <a class="back-button" href="/">Back</a>
  <div class="preview-container">
    <?php
      if(isset($_GET['file'])) {
        $file = $_GET['file'];
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if($ext === 'txt') {
          echo '<pre>' . file_get_contents($file) . '</pre>';
        } elseif(in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
          echo '<img src="' . $file . '">';
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