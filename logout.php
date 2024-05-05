 <?php
// *** Logout the current user.
$logoutGoTo = "login.php?status=successful";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['user'] = NULL;
$_SESSION['MM_UserGroups'] = NULL;
unset($_SESSION['user']);
unset($_SESSION['MM_UserGroups']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>
