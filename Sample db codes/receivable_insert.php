<?php
include 'db.php';
if(isset($_POST["mode_of_payment"], $_POST["posting_date"], $_POST["doc_date"], $_POST["due_date"], $_POST["total_amount"], $_POST["remarks"], $_POST["gl_code"], $_POST["gl_name"], $_POST["amount_paid"], $_POST["balance_due"] ))
{
 $mode_of_payment = $_POST["mode_of_payment"];
 $posting_date = $_POST["posting_date"];
 $doc_date = $_POST["doc_date"];
 $due_date = $_POST["due_date"];
 $total_amount = $_POST["total_amount"];
 $remarks = $_POST["remarks"];
 $gl_code = $_POST["gl_code"];
 $gl_name = $_POST["gl_name"];
 $amount_paid = $_POST["amount_paid"];
 $balance_due = $_POST["balance_due"];
 $query = $db->prepare("INSERT INTO acct_receivable(mode_of_payment, posting_date, doc_date, due_date, total_amount, remarks, gl_code, gl_name, amount_paid, balance_due) VALUES(:mode_of_payment, :post_date, :doc_date, :due_date, :total_amount, :remarks, :gl_code, :gl_name, :amount_paid, :balance)");
 $query->bindParam(':mode_of_payment', $mode_of_payment);
 $query->bindParam(':post_date', $posting_date);
 $query->bindParam(':doc_date', $doc_date);
 $query->bindParam(':due_date', $due_date);
 $query->bindParam(':total_amount', $total_amount);
 $query->bindParam(':remarks', $remarks);
 $query->bindParam(':gl_code', $gl_code);
 $query->bindParam(':gl_name', $gl_name);
 $query->bindParam(':amount_paid', $amount_paid);
 $query->bindParam(':balance', $balance_due);
 try{

 	$query->execute();
 	echo 'Data Inserted';
 	header("location:ar_entry_modal.php");
 } catch(Exception $e) {
 	throw $e;
 }
}
?>