<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>~�ء�������������������군��-404 Not Found</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<STYLE type=text/css>.font14 {
	FONT-SIZE: 14px
}
.font12 {
	FONT-SIZE: 12px
}
</STYLE>

<META content="MSHTML 6.00.2900.3354" name=GENERATOR></HEAD>
<BODY>
<TABLE height=500 cellSpacing=0 cellPadding=0 width=500 align=center 
background=http://img.smxydxslt.com/errorimg/404.jpg border=0>
  <TBODY>
  <TR>
    <TD height=330>&nbsp;</TD></TR>
  <TR>
    <TD vAlign=top>
      <DIV class=font14 align=center><STRONG>��~~~����ʼ������ޱ���Ǳ�е�����ߵ��Ҳ�����ҳ��������ʵ�����<FONT 
      color=#0099ff>���군</FONT>,��<FONT color=#ff0000>���������͹���Գ��</FONT>����������~������<a href=http://smxybbs.net>�������</a>������ҳ����~��ι��������������è�ƶ����������233333333��<BR><BR><BR><BR></STRONG><SPAN 
      class=font12><FONT color=#666666>����ѧԺ��̳ 404 Not Foundҳ</FONT></SPAN></DIV></TD></TR></TBODY></TABLE></BODY>
	<?php
$sysos = $_SERVER["SERVER_SOFTWARE"];      //��ȡ��������ʶ���ִ�
$sysversion = PHP_VERSION;                   //��ȡPHP�������汾
//����������������MySQL���ݿⲢ��ȡMySQL���ݿ�汾��Ϣ
mysql_connect("localhost", "qwe7002", "331022");
$mysqlinfo = mysql_get_server_info();
//��PHP�����ļ��л�ýű������ִ��ʱ��
$max_ex_time= ini_get("max_execution_time")."��";
//����������ȡ������ʱ�䣬�й���½���õ��Ƕ�������ʱ��,����ʱ��д��Etc/GMT-8
date_default_timezone_set("Etc/GMT-8");
$systemtime = date("Y-m-d H:i:s",time());
/*  *******************************************************************  */
/*   ��HTML������ʽ�����ϻ�ȡ���ķ�������Ϣ������ͻ��������          */
/*  *******************************************************************  */
echo "<table align=center cellspacing=0 cellpadding=0>";
echo "<tr> <td> Web��������    </td> <td> $sysos        </td> </tr>";
echo "<tr> <td> PHP�汾��      </td> <td> $sysversion   </td> </tr>";
echo "<tr> <td> MySQL�汾��    </td> <td> $mysqlinfo    </td> </tr>";
echo "<tr> <td> ���ִ��ʱ�䣺 </td> <td> $max_ex_time  </td> </tr>";
echo "<tr> <td> ������ʱ�䣺   </td> <td> $systemtime   </td> </tr>";
echo "</table>";
?>
	  </HTML>
