<?php
include 'db.php'
if(isset($_POST["id"]))
{
 $id = $_POST['id'];
 echo $id;
 exit;
 $query = $db->prepare("DELETE FROM acct_receivable WHERE id = ?");
 try{
 	$query->execute($id);
 }catch(Exception $e){
 	throw $e;
 }
}
 echo 'No '.$_POST['id'];
 exit;
?>