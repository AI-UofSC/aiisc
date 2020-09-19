<?php

if( isset($_REQUEST["write"]) )
{

	$filename = $_SESSION["file"];

		if (is_writable($filename)) {

		if (!$handle = fopen($filename, 'wb')) {
			echo "<p style='color:red'>Could not open file ($filename)</p>";
			exit;
		}

		if (fwrite($handle, $_REQUEST["content"]) === FALSE) {
			echo "<p style='color:red'>Cannot write to file ($filename)</p>";
			exit;
		}

	   echo "<p style='color:red'>$filename was updated successfully.</p>";
	   fflush($handle);
	   fclose($handle);

	} else {
  		echo "<p style='color:red'>$filename is not writable</p>";
  	}

}


$data = ( isset($_REQUEST["file"]) ) ? file_get_contents($_REQUEST["file"]) : file_get_contents($_SESSION["file"]);

?>
<script language="Javascript1.2"><!-- // load htmlarea
_editor_url = "htmlarea/";   // URL to htmlarea files
var win_ie_ver = parseFloat(navigator.appVersion.split("MSIE")[1]);
if (navigator.userAgent.indexOf('Mac')        >= 0) { win_ie_ver = 0; }
if (navigator.userAgent.indexOf('Windows CE') >= 0) { win_ie_ver = 0; }
if (navigator.userAgent.indexOf('Opera')      >= 0) { win_ie_ver = 0; }
if (win_ie_ver >= 5.5) {
  document.write('<scr' + 'ipt src="' +_editor_url+ 'editor.js"');
  document.write(' language="Javascript1.2"></scr' + 'ipt>');
} else { document.write('<scr'+'ipt>function editor_generate() { return false; }</scr'+'ipt>'); }
// --></script>

<form name="Element" method="post" action="<? echo $root."editor/?write=yes"; ?>">
<p>
<table align="left" style="padding-top:15px;width:100%">
<tr>
<td>
<textarea name="content" style="width:100%" rows="30">
<?
	if( isset($data) ) echo $data;
?>
</textarea>
</td>
</tr>
<tr>
	<td style="text-align:right">
		<input class="submit" type="submit" value="Write Changes">
	</td>
</tr>
</table>
</p>
</form>
<script language="JavaScript1.2" defer>
editor_generate('content');
</script>
<?
if( isset($data) ) $_SESSION["data"] = $data;
$_SESSION["file"] = isset($_REQUEST["file"]) ? $_REQUEST["file"] : $_SESSION["file"];
?>