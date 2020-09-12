<?php

	if( isset($_REQUEST["editpage"]) )
	{
		$cwd = getcwd();
		$to= "http://lsdis.cs.uga.edu/~amit/editor/?file=$cwd\main_$page.php";

		header("Location: ". $to);
		exit;
	}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Keywords" content="Semantics, Semantic Web, Semantic Integration, Workflow Management, Infocosm, Metadata Management, Semanic Web Process, Amit P. Sheth, Amit Sheth, A. Sheth, A. P. Sheth"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Amit Sheth: Educator, Researcher, Entrepreneur</title>
	<link rel="stylesheet" href="<? echo $root; ?>index.css" media="all" type="text/css" />
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="<? echo $urlroot; ?>foaf.rdf" />
</head>
<body>
	<div class="main_container">
	<div class="main_shell">
		<table style="border-collapse:collapse;width:100%;height:174px" class="top_shell">
			<tr>
				<td>
					This is a copy of information as of 2006. Update will be posted shortly.
				</td>
			</tr>
			<tr>
			<td style="height:124px;padding-left:10px;background-color:#76848D" class="top_shell">
				<div style="color: #FEFEFE; font-family: Georgia, Verdana, Arial, Sans-Serif; font-size: 18pt">
		   			Dr. Amit P. Sheth
		   		</div>
			</td>
			<td style="text-align:right;width:254px;background-color:#BCC7CD" rowspan="2" class="top_shell">
				<a href="http://amit.aiisc.ai">
				<img src="http://amit.aiisc.ai/amit_standing.jpg" height="200px" width="200px" alt="Dr. Amit Sheth"/></span></a>
			</td>
			</tr>
			<tr>
			<td style="background-color:#BCC7CD;height:50px;padding-left:10px" class="top_shell">
				<div style="color: #FEFEFE; font-family: Verdana, Arial, Sans-Serif; font-size: 10pt">
					Professor: <a href="http://www.cs.uga.edu/" class="top_a">Computer Science</a>,
					<a href="http://www.uga.edu" class="top_a">University of Georgia</a><br/>
					Director: <a href="http://lsdis.cs.uga.edu" class="top_a">Large Scale
					Distributed Information Systems Lab</a>
		   		</div>
		   	</td>
		   	</tr>
		</table>

		<div style="border-bottom: 1px solid #606060; border-top: 3px solid #FFFFFF"></div>
		<table style="border-style:none;padding:0px 0px 0px 0px;width:100%">
			<tr>
			<td class="leftnav_shell">

			<? include("leftnav.php"); ?>
			</td>
			<td colspan="3" class="main_shell">

