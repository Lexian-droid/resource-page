<?php
	require("./config.php");
?>
<?php
  $original_dir = 'files/';
  $dir = isset($_GET['dir']) ? $_GET['dir'] : $original_dir; // get the directory from the URL or use the default
  $files = scandir($dir); // scan the directory and get the file list
?>

<!DOCTYPE html>
<html>
<head>
  <title>Resources - <?php echo TITLE ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1><?php echo TITLE ?></h1>
  <?php if($dir !== $original_dir && $dir !== $original_dir . '/'): ?>
    <a class="back-button" href="/">Back</a>
  <?php endif; ?>
  <ul>
    <?php
      foreach($files as $file) {
        if($file !== '.' && $file !== '..') { // ignore . and .. directories
			$was_used = true;
          if(is_dir($dir . $file)) {
            echo '<li><a href="?dir=' . $dir . $file . '/">' . $file . '</a></li>';
          } else {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            if(in_array($ext, ['txt', 'jpg', 'jpeg', 'png', 'gif'])) {
              echo '<li><a href="preview.php?file=' . $dir . $file . '">' . $file . '</a></li>';
            } else {
              echo '<li><a href="' . $dir . $file . '">' . $file . '</a></li>';
            }
          }
        }
      }
	  
	  if($was_used == false) {
		  echo "<p>No resources found.</p>";
	  }
    ?>
  </ul>
  <script src="js/script.js"></script>
</body>
</html>