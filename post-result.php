<?php
$pageTitle = "Post result";
include "view-header.php";
?>
<body style="background-color: indigo;">
<h1 style="color: white; font-weight: bold;">Post result</h1>
<?php
echo getDisplay();
include "view-footer.php";

function getDisplay() {
    if (isset($_POST['my-name'])) {
      return "<p>The value sent is:</p>" . htmlspecialchars($_POST['my-name']);
    } else {
      return "<p>Nothing posted to the page.</p>";
    }    
}
?>
</body>
