<?php
if(isset($_POST['add'])) {
    system("ls | grep -v -E 'コミット.php' | xargs rm -r");
    system("git clone https://github.com/rinkunnn-hp/rinkunnn.git");
    system("mv ./rinkunnn/* /var/www/html");
    system("rm -r /var/www/html/rinkunnn");
}
?>
<form action="コミット.php" method="post">
    <input type="submit" name="add" value="コミット">
    <input type="submit" name="logout" value="ログアウト">
</form>
<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER'])) {
    header('Location: /ログイン/index.php');
    exit;
}
 
//ログアウト機能
if(isset($_POST['logout'])){
    
    $_SESSION = [];
    session_destroy();
 
    header('Location: /ログイン/index.php');
    exit;
}
 
?>
