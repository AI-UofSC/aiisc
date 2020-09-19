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
	<link rel="stylesheet" href="<?php echo $root; ?>index.css" media="all" type="text/css" />
	<link rel="meta" type="application/rdf+xml" title="FOAF" href="<?php echo $urlroot; ?>foaf.rdf" />
         <script type="application/ld+json">
        { 
            "@context" : "http://schema.org",
            "@type" : "Person",
            "name" : "Amit P. Sheth",
            "url" : "https://sc.edu/study/colleges_schools/engineering_and_computing/faculty-staff/amitsheth.php",
            "sameAs" : [ "http://www.facebook.com/Kno.e.sis",
                         "https://www.youtube.com/user/knoesisCenter",
                         "http://twitter.com/amit_p",
                         "https://plus.google.com/u/1/+AmitSheth/posts",
                         "https://www.linkedin.com/in/amitsheth"] 
        }
        </script>
</head>
<body>
<div itemscope itemtype="http://schema.org/Person">
	<div class="main_container">
	<div class="main_shell">
		<table style="border-collapse:collapse;width:100%;height:174px" class="top_shell">
			<tr>
			<td style="text-align:right;width:100px;background-color:white" rowspan="2" class="top_shell">
				<a href="http://amit.aiisc.ai">
				
				<img src="http://amit.aiisc.ai/amit_standing.jpg" height="200px" width="200px" alt="Dr. Amit Sheth"/></span></a>
			</td>
			<td style="height:124px;padding-left:10px;background-color:white" class="top_shell">
				<!--<img src="https://sc.edu/study/colleges_schools/engineering_and_computing/faculty-staff/amitsheth.jpg"/>-->

				<div style="color: #663300; font-family: Georgia, Verdana, Arial, Sans-Serif; font-size: 18pt">
		   			<span itemprop="name">Amit P. Sheth</span><br>
		   		<!--</div>
			</td>
			</tr>
			<tr>
			<td style="background-color:white;height:50px;padding-left:10px" class="top_shell">
				<div style="color: #663300; font-family: Verdana, Arial, Sans-Serif; font-size: 10pt">-->
					<span itemprop="award">LexisNexis Ohio Eminent Scholar</span><br>
					<!--<a href="http://www.engineering.wright.edu/cse/" class="top_a">Computer Science & Engineering</a>,
					<a href="http://www.wright.edu/" class="top_a">Wright State University</a><br/>-->
					<!--<a href="http://knoesis.org" class="top_a"><span property="v:affiliation">Executive Director,</span> Kno.e.sis</a>-->
					
					<a href="http://aiisc.ai" class="top_a"><span itemprop="jobTitle">Executive Director,</span> <span itemprop="affiliation">Kno.e.sis</span></a>

		   		</div>
		   	</td>
		   	</tr>
		</table>

		<div style="border-bottom: 1px solid #606060; border-top: 3px solid #FFFFFF"></div>
		<table style="border-style:none;padding:0px 0px 0px 0px;width:100%">
			<tr>
			<td class="leftnav_shell">

			<?php include("leftnav.php"); ?>
			</td>
			<td colspan="3" class="main_shell">

