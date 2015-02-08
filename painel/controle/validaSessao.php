<?php
if($_SESSION['login'] == ""){
	echo "<script>
				location.href = 'index.php?msg=2'
		  </script>";	
}
?>