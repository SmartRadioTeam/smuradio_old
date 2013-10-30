<?php
  class MyWechat extends Wechat {
    protected function onSubscribe() {
      $this->responseText('学长，学姐你们好！我是服务器娘月子同学，是三明学院论坛微信的看板娘！你可以发送任何信息来跟我聊天（调戏我-_-||）你还可以回复“我是+你的名字+我想点+你要点的歌曲名+在+想在什么时间播放+送给+想送给的人+想对她说+想说的话”(例如：我是qwe7002，我想点月牙湾在今天下午送给小小，想对她说祝你天天开心！)，月子会帮您发送到在三明学院点歌台的~您可以登录我们的论坛：http://www.smxybbs.net或者点歌台：http://r.smxybbs.net来查看信息！回复公告还能看到点歌台的最新通知呢！说了这么多！赶紧来试试吧！如果您还有神马不懂的或者有更好的建议，欢迎输入帮助查看或者联系微信hjh0855，我们会非常热心的为您解答和听取您的意见的！');
    }
	
    protected function onUnsubscribe() {
    }
	
    protected function onText() {
	//接受数据
$backmsg=$this->getRequest('content');
	  //过滤
      $backmsg = str_replace('＃', '#', $backmsg);
	  $backmsg = str_replace(' ', '', $backmsg);
	  preg_match('/\#([\s\S]+?)\#([\s\S]+?)$/',$backmsg,$t);
	  $arr_tcount=count($t);
	  if($arr_tcount==0){
	  if($backmsg=="公告"){ 
include("../../class/conn.php");
$sql = "SELECT * FROM `message`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
$message=iconv("gbk","UTF-8//TRANSLIT",$row['message']);
$this->responseText('公告：'.urldecode($message));
}
mysql_close($con);
}else{
if($backmsg=="帮助"){
$this->responseText('喵，我是服务器娘月子同学，现在我来讲解下微信公众平台的使用方法！你可以发送任何信息来跟我聊天（调戏我-_-||）还可以回复#+你的话+#月子回复的话来调教我哦！你还可以回复“我是+你的名字+我想点+你要点的歌曲名+在+想在什么时间播放+送给+想送给的人+想对她说+想说的话”(例如：我是qwe7002，我想点月牙湾在今天下午送给小小，想对她说祝你天天开心！)，月子会帮您发送到在三明学院点歌台的~您可以登录我们的论坛：http://www.smxybbs.net或者点歌台：http://r.smxybbs.net来查看信息！回复公告还能看到点歌台的最新通知呢！说了这么多！赶紧来试试吧！如果您还有神马不懂的或者有更好的建议，欢迎输入帮助查看或者联系微信hjh0855，我们会非常热心的为您解答和听取您的意见的！');
    }
      else{
	  $backmsg = str_replace('想对他说', '想对TA说', $backmsg);
	  $backmsg = str_replace('想对她说', '想对TA说', $backmsg);
	  $backmsg = str_replace('想对它说', '想对TA说', $backmsg);
	  $backmsg = str_replace('想对ta说', '想对TA说', $backmsg);
      preg_match('/\我是([\s\S]+?)\我想点([\s\S]+?)\在([\s\S]+?)\送给([\s\S]+?)\想对TA说([\s\S]+?)$/',$backmsg,$b);
	  $arr_count=count($b);
if($arr_count==0){
$backmsg=$this->getRequest('content');
include("../../class/conn.php");
$backmsg=urlencode($backmsg);
$sql = "SELECT * FROM `robot` where `keywords`='$backmsg'";
$query = mysql_query($sql,$con);
$backcount=mysql_num_rows($query); 
$arr_outcount=0;
if($backcount!=0){
while($row=mysql_fetch_array($query)){$outarr[]=$row['retun'];
$arr_outcount=$arr_outcount+1;
}
srand();
$this->responseText(urldecode($outarr[rand(0,$arr_outcount-1)]));
}else{
    $backmsg=$this->getRequest('content');
    $backmsg=biaoqing($backmsg);
	$backmsg=urlencode($backmsg);
    $ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://www.xiaojo.com/bot/chata.php"); 
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat=".$backmsg);
	$data = curl_exec($ch);
	curl_close($ch); 
	if(strstr($data,'murl')){
	$this->responseText('话说我五音不全就别叫我唱了……');
	}else{
	if($data==""){
	$this->responseText('TAT……月子不知道说啥好了……请换一种说法或者教我说吧！回复#+你的话+#+月子回复的话我就能学会啦！（例如：#我爱你#我也爱你）如果要点歌的话，你可以回复“我是+你的名字+我想点+你要点的歌曲名+在+想在什么时间播放+送给+想送给的人+想对她说+想说的话”(例如：我是qwe7002，我想点月牙湾在今天下午送给小小，想对她说祝你天天开心！)，月子会帮您发送到在三明学院点歌台的~');
	}else{
	if($data=="deletedanswer")
	{
	$this->responseText('TAT……月子不知道说啥好了……请换一种说法或者教我说吧！回复#+你的话+#+月子回复的话我就能学会啦！（例如：#我爱你#我也爱你）如果要点歌的话，你可以回复“我是+你的名字+我想点+你要点的歌曲名+在+想在什么时间播放+送给+想送给的人+想对她说+想说的话”(例如：我是qwe7002，我想点月牙湾在今天下午送给小小，想对她说祝你天天开心！)，月子会帮您发送到在三明学院点歌台的~');
	}else{
	$data = str_replace('小九', '月子', $data);
	
$this->responseText($data);
}
}
}
}
mysql_close($con);
}else{
$user=$b[1];
$name=$b[2];
$time=$b[3];
$to=$b[4];
$message=$b[5];
if($user==""||$name==""||$to==""||$time==""||$message==""){
$this->responseText('学长学姐～请不要输入空信息啦！，请回复“我是+你的名字+我想点+你要点的歌曲名+在+想在什么时间播放+送给+想送给的人+想对她说+想说的话”。系统将会自动提交您的点歌请求(例如：我是qwe7002，我想点月牙湾在今天下午送给小小，想对她说祝你天天开心！）您可以登录我们的论坛：http://www.smxybbs.net或者点歌台：http://r.smxybbs.net来查看信息！输入公告可获取最新信息,输入帮助可获取帮助！');
}else{
date_default_timezone_set ('PRC');
$uptime=date("Y-m-d H:i:s",time());
include("../../class/conn.php");
$cip= "weixinsend";
//转义过滤
$user = str_replace('<', '', $user);
$user = str_replace('>', '', $user);

$name = str_replace('<', '', $name);
$name = str_replace('>', '', $name);

$message = str_replace('<', '', $message);
$message = str_replace('>', '', $message);

$to = str_replace('<', '', $to);
$to = str_replace('>', '', $to);

$time = str_replace('<', '', $time);
$time = str_replace('>', '', $time);
//符号过滤
$user = str_replace('，', '', $user);
$user = str_replace(',', '', $user);
$user = str_replace('。', '', $user);
$user = str_replace('.', '', $user);

$name = str_replace('，', '', $name);
$name = str_replace(',', '', $name);
$name = str_replace('.', '', $name);
$name = str_replace('。', '', $name);

$message = str_replace(',', '', $message);
$message = str_replace('，', '', $message);
$message = str_replace('.', '', $message);
$message = str_replace('。', '', $message);

$to = str_replace('，', '', $to);
$to = str_replace('。', '', $to);
$to = str_replace(',', '', $to);
$to = str_replace('.', '', $to);

$time = str_replace(',', '', $time);
$time = str_replace('.', '', $time);
$time = str_replace('，', '', $time);
$time = str_replace('。', '', $time);

if(strlen($message)>280){
$this->responseText('祝福超过140字，请修改后重试');
}else{
$user=iconv("UTF-8","gbk//TRANSLIT",$user);
$name=iconv("UTF-8","gbk//TRANSLIT",$name);
$to=iconv("UTF-8","gbk//TRANSLIT",$to);
$time=iconv("UTF-8","gbk//TRANSLIT",$time);
$message=iconv("UTF-8","gbk//TRANSLIT",$message);
$user=urlencode($user);
$name=urlencode($name);
$message=urlencode($message);
$to=urlencode($to);
$time=urlencode($time);
$uptime=urlencode($uptime);
$cip=urlencode($cip);
$sql = "INSERT INTO `qwe7002_radio`.`radio` (`user`, `name`, `message`,`to`,`time`,`uptime`,`ip`) VALUES ('$user', '$name', '$message', '$to', '$time','$uptime','$cip');";
$result = mysql_query($sql,$con);
if($result){
$this->responseText('您的信息已经成功提交到数据库，请耐心等待广播站排序播放！谢谢！您可以登录我们的点歌台地址：http://r.smxybbs.net 来查看歌曲是否被播放！');
}else{
$this->responseText('服务器错误！请通知管理员！管理员微信号：qwe7002');
}
}
}
}
mysql_close($con);
        }
		}
		}else{
include("../../class/conn.php");
$keywords=urlencode($t[1]);
$retun=urlencode($t[2]);
$sql = "INSERT INTO `qwe7002_radio`.`robot` (`keywords`, `retun`) VALUES ('$keywords', '$retun');";
$result = mysql_query($sql,$con);
if($result){
$this->responseText('喵~我已经学会"'.$t[1].'"怎么说啦！');
}else{
$this->responseText('喵~服务器出错啦！赶快通知管理员来处理吧！管理员微信号：hjh0855');
}
mysql_close($con);
}
		}

    protected function onImage() {
	$arry[]='先辈，你叫我看图说话我还真的无能为力了…………唔姆唔姆唔姆……真是个完美的，十足的，童叟无欺的变态呢……';
	$arry[]='先辈，这个是个嘛……为嘛我就是看不懂呢……';
	$this->responseText(urldecode($arry[rand(0,2)]));
    }

    protected function onLocation() {
		$arry[]='先辈，我地理没学好……不知道你说的那个地方是极地气候还是热带沙漠性气候呢……你能告诉我么……';
	$arry[]='嘛……这个地方貌似我一点都不知道在哪里……';
	$this->responseText(urldecode($arry[rand(0,2)]));
    }

    protected function onLink() {
	$arry[]='先辈，这个蓝色的东西是个什么呐?!好吃么？！唔姆唔姆唔姆……';
	$arry[]='先辈，这个蓝色的东西好吃么？！唔姆唔姆唔姆……我可是食量大如牛啊！';
	$this->responseText(urldecode($arry[rand(0,2)]));
    }

    protected function onUnknown() {
	$arry[]='先辈又在嘀嘀咕咕了……';
	$arry[]='不要啊，变态住手啊!不要啊！';
	$this->responseText(urldecode($arry[rand(0,2)]));
    }
  }