<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>联系我们_华科快递王</title>
<meta name="description" content="华科快递王是华中科技大学校园内最大的快递公司。" />
<meta name="keywords" content="华科快递王" />
<link href="css.css" rel="stylesheet" type="text/css" />
<link rel="Shortcut Icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
 <div id="wrap">
 <div id="top">
 <div class="logo"><a href="index.html"><img src="images/logo.png" alt="华科快递王" border="0" /></a></div>
 <div id="nav">
  <ul>
   <li><a href="#">网站首页</a></li>
   <li><a href="#">最新动态</a></li>
  </ul>
 </div>
 </div>
 <div id="main" style="height: 800px;">
  <div class="mainleft">
   <ul>
    <li><a href="index.html">关于我们 <span class="en">About Us</span></a></li>
    <li><a href="news.html">业务介绍 <span class="en">Business Introduction</span></a></li>
    <li><a href="disclaimer.html">职能部门 <span class="en">Functional Department</span></a></li>
    <li><a href="privacy.html">组织结构 <span class="en">Organization Structure</span></a></li>
    <li><a href="job.php">员工介绍 <span class="en">Employee Referrals</span></a></li>
    <li><a href="links.php">销售情况 <span class="en">Finance Condition</span></a></li>
    <li><a href="contact.php" class="hover">联系我们 <span class="en">Contact Us</span></a></li>
   </ul>
  </div>  
  <div class="mainright">
   <div class="content">
    <h3>联系我们<sub>Contact Us</sub></h3>
    <p>&nbsp;</p>
    
    <form method ='post' action="contact.php">
    <label for "nickname">留言人：</label>
    <input type ="text" name ="nickname"/><br />
    <br />
    <label for "liuyan">请输入您宝贵的意见：</label>
    <input type ="text" name ="liuyan"/><br />
    <br />
    <input type ="submit" name ="submit" value="提交" />
</form>
<br />
<h4>温馨提示：提交后会显示确认信息</h4>
    
<P align=right>华科快递王<BR>2017/12/17</P> 
<?php

$dbc = mysqli_connect('localhost','root','','huakekuaidiwang')
or die ('Error connecting to mysql server');
@$nickname = $_POST['nickname'];
@$liuyan = $_POST['liuyan'];

if(!empty($nickname) || !empty($liuyan)){
$query = "INSERT INTO liuyanban ( nickname , liuyan ) VALUES ('$nickname', '$liuyan')";
mysqli_query($dbc,$query);
echo'
<br />
<h3>谢谢您的宝贵意见</h3>
    1. 您的名字是：' . $nickname .'<BR> 
    2. 您的意见是：'.$liuyan; 
}

mysqli_close($dbc);

?>
<BR>
    
    <p><BR>
	</p>
	</div>
 </div>
 </div>
 <div id="footer">Copyright &copy; 2017 华科快递王 All rights reserved.   来源:<a href="https://www.baidu.com/s?wd=%E5%8D%8E%E7%A7%91%E5%BF%AB%E9%80%92%E7%8E%8B&rsv_spt=1&rsv_iqid=0xc9503b430000c484&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&rsv_sug3=11&rsv_sug1=13&rsv_sug7=100&rsv_t=2f0dwVGU61ek95yoF%2BdYhvuLyiYIr%2BgzlFPuUo6eJgFkXkPfy16oUIQed3om6I%2FQf7ia" target="_blank">华科快递王</a>
 </div>
</body>
</html>
