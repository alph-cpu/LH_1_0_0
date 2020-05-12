<?php
include ('header.php');
?>

<title>Lighthouse-Home</title>
<body>
<?php if (!isset($_SESSION['username'])) {

 } else {
    echo $_SESSION['success'];
 }  ?>

</body>

</html>