
<html>
<?php
include("class/testmobile.php");
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>��ҳ - ����ѧԺ���̨</title>
<?php
include("tem/hand.htm");
include("../class/img.php");
?>
<div id="fixedLayer"><img src="http://img.smxydxslt.com/getqrcode.jpg"></div>
<script type="text/javascript">
resizeBackground();
$(window).resize(function() {
    resizeBackground();
})
</script>

<div id="main">
    <div>
        <h1>����ѧԺ���̨</h1>
        <h6>ÿ�����ֺ�����</h6>
		<?php
include ("tem/t.htm");
include ("../class/message.php");
?>	
    </div><br>
    <div>
        <h3>�����ѵ���Ŀ�б�</h3>
		    <table class='table table-bordered'>
        <thead>
            <tr>
			    <th>��������</th>
                <th>����ˣ�</th>
				<th>����˵�Ļ���</th>
            </tr> 
        </thead>
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
while($row=mysql_fetch_array($query)){
echo "<thead><tr><td>".urldecode($row[name])."</td><td>".urldecode($row[user])."</td><td>�͸���".urldecode($row[to])."<br>�����TA˵����".urldecode($row[message])."��</td></tr> </thead>";
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