<?php
$pageTitle = "Post";
include "view-header.php";
?>
<body style="background-color: lightgreen;">
<h1>Post</h1>
<form method="post" action="post-result.php">

<!-- Textbox: -->
  <input type="text" name="my-name">

<!-- Submit Button: -->
  <input type="submit" value="Post Data">
</form>
<?php
include "view-footer.php";
?>
</body>
