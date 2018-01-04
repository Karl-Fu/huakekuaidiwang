<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>销售情况_华科快递王</title>
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
    <li><a href="links.php" class="hover">销售情况 <span class="en">Finance Condition</span></a></li>
    <li><a href="contact.php">联系我们 <span class="en">Contact Us</span></a></li>
   </ul>
  </div>  
  <div class="mainright">
   <div class="content">
    <h3>销售情况<sub>Finance Condition</sub></h3>
    <p>&nbsp;</p>

<?php

$dbc = mysqli_connect('localhost','root','','huakekuaidiwang')
or die ('Error connecting to mysql server');

$query = "SELECT * FROM sale order by sale ASC";
$result= mysqli_query($dbc,$query);

function draw_bar_graph($width, $height, $data, $max_value, $filename) {
    $img = imagecreatetruecolor($width, $height);

    $bg_color = imagecolorallocate($img, 255, 255, 255);     
    $text_color = imagecolorallocate($img, 255, 255, 255);     
    $bar_color = imagecolorallocate($img, 100,100, 255);         
    $border_color = imagecolorallocate($img, 192, 192, 192);   

    imagefilledrectangle($img, 0, 0, $width, $height, $bg_color);

    @$date=array(2013,2014,2015,2016);
    $bar_width = $width / ((count($data) * 2) + 1);
    for ($i = 0; $i < count($data); $i++) {
      imagefilledrectangle($img, ($i * $bar_width * 2) + $bar_width, $height,
        ($i * $bar_width * 2) + ($bar_width * 2), $height - (($height / $max_value) * $data[$i]), $bar_color);
      imagestringup($img, 5, ($i * $bar_width * 2) + ($bar_width), $height - 5, $date[$i], $text_color);
    }
    
    imagerectangle($img, 0, 0, $width - 1, $height - 1, $border_color);

    for ($i = 1; $i <= $max_value; $i++) {
      imagestring($img, 5, 0, $height - ($i * ($height / $max_value)), $i, $bar_color);
    }

    imagepng($img, $filename, 5);
    imagedestroy($img);
  }

  $sell = array();
  
while($row = mysqli_fetch_array($result)){
@$sale = $row['sale'];
array_push($sell, $sale);
}
draw_bar_graph(500,380,$sell,5,'images\sale.png');

echo'
<h4> 近四年营业额（亿元）：</h4>
<p>&nbsp;</p>';

echo '	<p align="center"><img src="images\sale.png" alt="No such a graph"/></p>';
mysqli_close($dbc);
?>
    
<P align=right>华科快递王<BR>2017/12/17</P> 
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
