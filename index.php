<?php
include('model/server.php');
require ('Session_manage.php');
include ('header.php');
?>

<title>Lighthouse-Home</title>
<body>
<?php if (!isset($_SESSION['username'])) {
    header('location: intro.php');
 } else {
    header('location: intro.php');
 }  ?>

</body>

</html>