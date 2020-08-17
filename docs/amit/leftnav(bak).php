<?php
//highlighted sections
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

	//import globals
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

	//set the directory level from which to get the plugin
	$level = "";
	$level2 = "";
	for($i=0; $i<$end-1; $i++){
		$level = $level."../";
	}
	if($end > 0)
		$level2 = $level."../";

	//get the plugin file from the top directory
	include($level2."plugin.php");

	$i=0;
//	echo "BEG: $beg  END: $end";

	//while there is a directory present in the plugin
	while(isset(${'Dir'.$i})){
		//print the directory in the list
		if(${'Dir'.$i} == $subsec[$beg]){
			//if the specified subsection of the array is equal
			//to the current directory in the plugin
			if($beg == 1){
				//if the beginning index is equal to 1
				echo "<div class='leftnav_on_dark'>".${'Dir'.$i}."</div>\n";
			}else{
				//otherwise
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
		//while there is a section present in the plugin
		while(isset(${$section . $i})){

			//print the section in the list
			if($i==$page && $end==0)	 //if this page is active
				echo "<div class='$class3'>".${$section.$i}."</div>\n";
			else
				echo "<div class='$class4'><a href='".$level2."index.php?page=$i' class='$class2'>".${$section . $i}."</a></div><div style=\"border-top: 1px solid #606060; border-bottom: 1px solid #FFFFFF\"></div>\n";

			$i++;
		}
	}



}

printLeftNav(0, count($subsection), $subsection, 1);
?>

<ul style="list-style:none;">
	<li>	<a href="http://www.twitter.com/amit_p">
				<img src="<?php echo $root; ?>images/Twitter_Square.png" height=50px width=50px alt="Twitter"/>
			</a>
	</li>

	<li>	<a href="http://www.linkedin.com/in/amitsheth">
				<img src="<?php echo $root; ?>images/LinkedIn_Square.png" height=50px width=50px alt="LinkedIn"/>
			</a>
	</li>

	<li>	
			<a href="https://www.plus.google.com/+AmitSheth">
				<img src="<?php echo $root; ?>images/GooglePlus_Square.png" height=50px width=50px alt="Google Plus"/>
			</a>
	</li>

	<li>	
			<a href="https://www.facebook.com/Kno.e.sis">
				<img src="<?php echo $root; ?>images/Facebook_Square.jpg" height=50px width=50px alt="Facebook"/>
			</a>
	</li>

	<li>		
			<a href="http://www.about.me/amitsheth">
				<img src="<?php echo $root; ?>images/About_Me.jpg" height=50px width=50px alt="AboutMe"/>
			</a>
	</li>

	<li>		
			<a href="http://www.slideshare.net/apsheth/presentations">
				<img src="<?php echo $root; ?>images/Slideshare_Square.png" height=50px width=50px alt="SlideShare"/>
			</a>
	</li>

	<li>	<a href="http://www.amitsheth.blogspot.com/">
				<img src="<?php echo $root; ?>images/Blogger_Square.png" height=50px width=50px alt="blog"/>		
			</a>

	<li>		
			<a href="http://www.scribd.com/amitpsheth">
				<img src="<?php echo $root; ?>images/Scribd_Square.jpg" height=50px width=50px alt="Scribd"/>
			</a>
	</li>

	<li>	
			<a href="https://www.quora.com/Amit-Sheth-1">
				<img src="<?php echo $root; ?>images/Quora_Square.png" height=50px width=50px alt="Quora"/>
			</a>
	</li>
</ul>