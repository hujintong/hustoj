<?php require_once("admin-header.php");
if (!(isset($_SESSION[$OJ_NAME.'_'.'administrator']))){
	echo "<a href='../loginpage.php'>Please Login First!</a>";
	exit(1);
}

echo "<hr>";
echo "<center><h2>$MSG_ADD"."$MSG_NEWS</h2></center>";

?>

<?php
include_once("kindeditor.php") ;
?>

<div class="container">
  <form method=POST action=news_add.php>
    <p align=left><?php echo $MSG_TITLE?>:<input type=text name=title size=71></p>
    <textarea class=kindeditor name=content ></textarea>
    </p>
    <input type=submit value=Submit name=submit>
    <?php require_once("../include/set_post_key.php");?>
  </form>
</div>
