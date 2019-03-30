<?php
// 检查空字段
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// 创建电子邮件并发送邮件
$to = 'linjurnye96@163.com'; // 将您的电子邮件地址添加到“”之间，替换为yourname@yourdomain.com-这是表单将向其发送邮件的位置。
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: linjurnye96@163.com\n"; // 这是生成的邮件将来自的电子邮件地址。我们建议使用noreply@yourdomain.com。
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>