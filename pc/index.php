<html>
<?php
include("class/testmobile.php");
include("../class/conf.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>��ҳ - <?php echo PROJECTNAME;?> - Powered by smuradio</title>
<?php
include("tem/hand.htm");
include("post.php");
include("../class/img.php");
?>
<div id="fixedLayer"><img src="http://img.smxybbs.net/getqrcode.jpg"></div>
<script type="text/javascript">
resizeBackground();
$(window).resize(function() {
    resizeBackground();
})
</script>

<div id="main">
    <div>
        <h1><?php echo PROJECTNAME;?></h1>
        <h6>ÿ�����ֺ�����</h6>
		<?php
include ("tem/t.htm");
echo "<br>";
include ("../class/bsmessage.php");
?>	
    </div>
    <div>
        <h3>�����ѵ���Ŀ�б�</h3>
		  <table class='table table-bordered' width=948>
        <thead>
            <tr>
			    <th width=100>��������</th>
                <th width=100>����ˣ�</th>
				<th width=748>����˵�Ļ���</th>
            </tr> 
        </thead>
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<thead>
<tr>
<td>".urldecode($row[name])."</td>
<td>".urldecode($row[user])."</td>
<td>״̬��";
$info=$row[info];
if($info=="0"){
echo '<span class="label">δ����</span>';
}
if($info=="1"){
echo '<span class="label label-success">�Ѳ���</span>';
}
if($info=="2"){
echo '<span class="label label-important">�޷�����</span>';}
echo "
<br>�͸���".urldecode($row[to])."<br>
�����TA˵����".urldecode($row[message])."��
</td>
</tr>
</thead>";
}
mysql_close($con);
?>	
</table>
</div>
    </div>
</div><br>
	<?php
include ("tem/foot.htm");
?>