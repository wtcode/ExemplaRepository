<?php
	session_start();
	unset($_SESSION['login']);
?>
<script>
location.href = "../index.php";
</script>