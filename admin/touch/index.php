<!DOCTYPE html>
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<?php
setcookie('adminua','touch',time()+315360000,"/");
if(!isset($_COOKIE['login'])){header("location:login.php");}
include("../../class/conf.php");
include("tem/hand.htm");
?>
<title>��ҳ - <?php echo PROJECTNAME;?>�������� - Powered by smuradio</title>
<body>
<?php 
include("tem/t.php");
?>
<div class="container" id="body" style="width: 90%;">
<?php 
include ("infomation.php");
?>
<br>
<div class="alert alert-danger">
<form name=myform action="../class/del.php" method="post">
�����¼����ָ���ʼ�����˲���������������ݲ����޷��ָ��������ã���<input type="text"name="pw"><input type="submit" value="�ύ" class="btn btn-danger" >
</form>
</div>
<br>
<div>
<?php
include("../../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo '<div class="anime img-thumbnail" id="anime">';
echo '״̬��';
$info=$row[info];
if($info=="0"){
echo '<span class="label label-default">δ����</span>';
}
if($info=="1"){
echo '<span class="label label-success">�Ѳ���</span>';
}
if($info=="2"){
echo '<span class="label label-danger">�޷�����</span>';}
echo "<br><br>
�ύʱ�䣺".urldecode($row[uptime])."<br><br>
ϣ�����ŵ�ʱ�䣺".urldecode($row[time])."<br><br>
��������".urldecode($row[name])."<br><br>
����ˣ�".urldecode($row[user])."<br><br>
�͸���".urldecode($row[to])."<br><br>
���ԣ�".urldecode($row[message])."<br><br>
Ͷ����ip��".urldecode($row[ip])."<br><br>";
echo '<form action="../class/delmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-success" value="���Ϊ�Ѳ���" />
</form>
<br><form action="../class/backmusic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-default" value="���Ϊδ����" />
</form>
<br>
<form action="../class/delnoplay.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="'.$row[id].'">
<input type="submit" name="submit" class="btn btn-danger" value="���Ϊ�޷�����" />
</form>';

echo '<div style="height:1px; margin-top:-1px;clear: both;overflow:hidden;"></div></div>';

}
mysql_close($con);
?>
 </div>
<hr>
</div>
<script type="text/javascript">reformobile()</script></div>
</div>
    </div>
<?php
include("tem/foot.htm");
?>
</body></html>