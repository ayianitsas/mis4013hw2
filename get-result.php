<?php
$pageTitle = "Get result";
include "view-header.php";
?>
<body style="background-color: lightpurple;">
    <h1>Get result</h1>
<?php
if (isset($_GET['my-name'])) {
?>
  <p>The value sent is:</p>
    <p><?php echo htmlspecialchars($_GET['my-name']); ?></p>
<?php
} else {
?>
  <p>Nothing sent to the page.</p>
<?php 
}
include "view-footer.php";
?>
</body>
