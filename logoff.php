<?php
session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header('Location: index.php');
} else if (isset($_SESSION['manager'])) {
	session_destroy();
	header('Location: index.php');
} else {
	header('Location: index.php');
}
?>