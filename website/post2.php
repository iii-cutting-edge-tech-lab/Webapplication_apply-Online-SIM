<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.post_css {
	font-size: 18px;
}
.post_css strong {
	font-size: 24px;
}

.fancytable{border:1px solid #cccccc; width:100%;border-collapse:collapse;}
.fancytable td{border:1px solid #cccccc; color:#555555;text-align:center;line-height:28px;}
.headerrow{ background-color:#efefef;}
.headerrow td{ color:#000000; text-align:center;}
.datarowodd{background-color:#ffffff;}
.dataroweven{ background-color:#efefef;}
.datarowodd td{background-color:#ffffff;}
.dataroweven td{ background-color:#efefef;}
.sexyborder{
     border:1px solid #0066cc; padding:5px;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
}

body,td,th {
	font-weight: bold;
	color: #000;
}
</style>
</head>
<body background="/../images/bg.jpg" text="#000000">
<p align="center">
  <?php              
        $name = $_POST['name'];
	$phone = $_POST['phone'];
	$id_num = $_POST['id_num'];
	$email_address = $_POST['email_address'];
	$address =$_POST['address'];


        $link=mysql_connect("cc101-db-ins.cjwgvzkbfvw1.us-west-2.rds.amazonaws.com","cc101_user","12345678") or die("連接失敗"); 

		mysql_query("SET NAMES utf8");
        mysql_select_db("db2");  
		
		

        $query = "insert into products (Name,Phone,USERID,Email,Address)VALUES('$name','$phone','$id_num','$email_address','$address') ";  
        mysql_query($query) or die("寫入失敗");           

echo "Sucess";
?>
  <?php
  $to ="$email_address"; //收件者
  $subject = "487無敵超值方案成功訂購通知"; //信件標題
  $msg = "$name 先生/小姐, 謝謝您選購本方案!!!\r\n門號號碼: $phone\r\n地址: $address\r\n";//信件內容
  $headers = "From: iotusercc101@gmail.com"; 
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "訂購成功, 信件已發送。";
else:
   echo "信件發送失敗！";
  endif;
?> 
  
  
  
</p>
<p align="center" class="post_css">&nbsp;</p>
<p align="center" class="post_css"><img src="/../images/logo.png"></p>
<p align="center" class="post_css">&nbsp;</p>
<p align="center" class="post_css"><strong>487無敵超值荷包</strong></p>
<p align="center" class="post_css"><strong>成功建立訂單</strong></p>
<table class="fancytable" >
<tr class="headerrow">
  <td><strong>申辦人:</strong></td><td><?php 	echo "$name"; ?></td></tr>
<tr  class="datarowodd">
  <td><strong>Phone:</strong></td><td><?php echo "$phone"; ?></td></tr>
<tr  class="dataroweven">
  <td><strong>身分證:</strong></td><td><?php echo "$id_num"; ?></td></tr>
<tr  class="datarowodd">
  <td><strong>EMAIL:</strong></td><td><?php echo "$email_address"; ?></td></tr>
<tr  class="dataroweven">
  <td><strong>戶籍地址:</strong></td><td><?php echo "$address"; ?></td></tr>
</table>


<p align="center"><a href="/../index.html" style="color:red;"><strong>回首頁</strong></a></p>

</body>   
</html>
