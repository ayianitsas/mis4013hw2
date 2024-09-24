<?php
$pageTitle = "Get";
include "view-header.php";
?>
<body style="background-color: green;">
    <h1 style="color: white; font-weight: bold;">Get</h1>
    <form method="get" action="get-result.php">
          <input type="text" name="my-name">
          <input type="submit" value="Get Data">
    </form>
<?php
include "view-footer.php";
?>
</body>
