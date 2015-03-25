1
<?php $name = $_POST['name'];
2
$email = $_POST['email'];
3
$message = $_POST['message'];
4
$formcontent="From: $name \n Message: $message";
5
$recipient = "calicoknight@gmail.com<script type="text/javascript">
6
/* <![CDATA[ */
7
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
8
/* ]]> */
9
</script>";
10
$subject = "Contact Form";
11
$mailheader = "From: $email \r\n";
12
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
13
echo "Thank You!";
14
?>
