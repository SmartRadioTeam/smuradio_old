<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>~呜——☆！喵——！世界已完蛋！-403 Forbidden</TITLE>
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
background=http://img.smxydxslt.com/errorimg/403.jpg border=0>
  <TBODY>
  <TR>
    <TD height=330>&nbsp;</TD></TR>
  <TR>
    <TD vAlign=top>
      <DIV class=font14 align=center><STRONG>呗う：就不告诉你~就不告诉你~就不~告诉你~喵！（自行补脑小龙人……）<BR><BR><BR><BR></STRONG><SPAN 
      class=font12><FONT color=#666666>三明学院论坛 403 Forbidden页</FONT></SPAN></DIV></TD></TR></TBODY></TABLE></BODY>
	  	<?php
$sysos = $_SERVER["SERVER_SOFTWARE"];      //获取服务器标识的字串
$sysversion = PHP_VERSION;                   //获取PHP服务器版本
//以下两条代码连接MySQL数据库并获取MySQL数据库版本信息
mysql_connect("localhost", "qwe7002", "331022");
$mysqlinfo = mysql_get_server_info();
//从PHP配置文件中获得脚本的最大执行时间
$max_ex_time= ini_get("max_execution_time")."秒";
//以下两条获取服务器时间，中国大陆采用的是东八区的时间,设置时区写成Etc/GMT-8
date_default_timezone_set("Etc/GMT-8");
$systemtime = date("Y-m-d H:i:s",time());
/*  *******************************************************************  */
/*   以HTML表格的形式将以上获取到的服务器信息输出给客户端浏览器          */
/*  *******************************************************************  */
echo "<table align=center cellspacing=0 cellpadding=0>";
echo "<tr> <td> Web服务器：    </td> <td> $sysos        </td> </tr>";
echo "<tr> <td> PHP版本：      </td> <td> $sysversion   </td> </tr>";
echo "<tr> <td> MySQL版本：    </td> <td> $mysqlinfo    </td> </tr>";
echo "<tr> <td> 最大执行时间： </td> <td> $max_ex_time  </td> </tr>";
echo "<tr> <td> 服务器时间：   </td> <td> $systemtime   </td> </tr>";
echo "</table>";
?>
</HTML>
