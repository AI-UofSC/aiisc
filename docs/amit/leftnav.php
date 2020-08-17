<?php
//Highlighted sections
$class1= 'leftnav';
$class2= 'leftnav-a';


/**********************************************************
 * Recursively display the left nav bar
 *
 * Inputs:
 *		$beg:		The beginning index
 *		$end:		The last index
 *		$subsec:	The subsection array of the deepest level
 *		$alt:		Determines when to switch between menu styles
 * 	
 * Results:
 *		the left nav bar will be displayed
 **********************************************************/

function printLeftNav($beg, $end, $subsec, $alt){

	//Import globals
	global $class1, $class2, $page;

	if($alt == 1){
		$class3 = "leftnav_on_dark";
		$class4 = "leftnav_add";
	}else{
		if($alt == 2){
			$class3 = "leftnav_on_dark";
			$class4 = "leftnav";
		}else{
			$class3 = "leftnav2_on";
			$class4 = "leftnav2";
		}
	}

	if($alt == 2) $alt = 3;
	else $alt = 2;

	//Set the directory level from which to get the plugin
	$level = "";
	$level2 = "";
	for($i=0; $i<$end-1; $i++){
		$level = $level."../";
	}
	if($end > 0)
		$level2 = $level."../";

	//Get the plugin file from the top directory
	include($level2."plugin.php");

	$i=0;
	//	echo "BEG: $beg  END: $end";

	//While there is a directory present in the plugin
	while(isset(${'Dir'.$i})){
		//Print the directory in the list
		if(${'Dir'.$i} == $subsec[$beg]){
			//If the specified subsection of the array is equal
			//to the current directory in the plugin
			if($beg == 1){
				//If the beginning index is equal to 1
				echo "<div class='leftnav_on_dark'>".${'Dir'.$i}."</div>\n";
			}else{
				//Otherwise
				echo "<div class='leftnav_on'>".${'Dir'.$i}."</div>\n";
			}

			printLeftNav($beg+1, $end-1, $subsec, $alt);

			$i++;
		}else{
			echo "<div class='$class4'><a href='".$level2.$dirstruct[$i]."/' class='$class2'>" . ${'Dir' . $i} . "</a></div><div style=\"border-top: 1px solid #606060; border-bottom: 1px solid #FFFFFF\"></div>\n";
			$i++;
		}
	}

	for($i=0; $i<2; $i++){
		//While there is a section present in the plugin
		while(isset(${$section . $i})){

			//Print the section in the list
			if($i==$page && $end==0)	 //If this page is active
				echo "<div class='$class3'>".${$section.$i}."</div>\n";
			else
				echo "<div class='$class4'><a href='".$level2."index.php?page=$i' class='$class2'>".${$section . $i}."</a></div><div style=\"border-top: 1px solid #606060; border-bottom: 1px solid #FFFFFF\"></div>\n";

			$i++;
		}
	}
}

printLeftNav(0, count($subsection), $subsection, 1);
?>

<style>
#social{
	padding-left:7px; 
	padding-top:5px;
}
</style>

<div id="social">
		<!-- //ROW 1 -->
		<a href="http://www.linkedin.com/in/amitsheth">
			<img src="<?php echo $root; ?>images/Square_LinkedIn.png" height=50px width=50px alt="LinkedIn" title="LinkedIn"/>
		</a>
				
		<a href="http://www.about.me/amitsheth">
			<img src="<?php echo $root; ?>images/Square_Me.jpg" height=50px width=50px alt="AboutMe" title="AboutMe"/>
		</a>
		
		<a href="http://www.amitsheth.blogspot.com/">
			<img src="<?php echo $root; ?>images/Square_Blogger.png" height=50px width=50px alt="Blogger" title="Blogger"/>		
		</a>
		
		
		
		<!-- //ROW 2 -->
		<a href="https://www.facebook.com/Kno.e.sis">
			<img src="<?php echo $root; ?>images/Square_Facebook.jpg" height=50px width=50px alt="Facebook" title="Facebook"/>
		</a>
		
		<a href="http://www.twitter.com/amit_p">
			<img src="<?php echo $root; ?>images/Square_Twitter.png" height=50px width=50px alt ="Twitter" title="Twitter"/>
		</a>
						
		<a href="https://plus.google.com/+AmitSheth/about">
			<img src="<?php echo $root; ?>images/Square_GooglePlus.png" height=50px width=50px alt="Google+" title="Google Plus"/>
		</a>
		
		
		
		<!-- //ROW 3 -->
		<a href="http://www.slideshare.net/apsheth/presentations">
			<img src="<?php echo $root; ?>images/Square_SlideShare.png" height=50px width=50px alt="SlideShare" title="SlideShare"/>
		</a>
		
		<a href="http://www.scribd.com/amitpsheth">
			<img src="<?php echo $root; ?>images/Square_Scribd.jpg" height=50px width=50px alt="Scribd" title="Scribd"/>
		</a>
		
		<a href="https://www.quora.com/Amit-Sheth-1">
			<img src="<?php echo $root; ?>images/Square_Quora.png" height=50px width=50px alt="Quora" title="Quora"/>
		</a>
</div>