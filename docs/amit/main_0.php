<head>
<meta content="width=device-width, initial-scale=1" name="viewport">

	<!-- <link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet"> -->

    
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}
	.w3-black {opacity: 0.80}
	.w3-btn-floating {opacity: 0.40}
	.w3-large { font-size: 17px!important; }
	
	u {
    text-decoration: underline;
	}
    </style>

    <title>
    </title>
</head>


<div class="w3-content" style="max-width:800px;position:relative">

<div class="w3-display-container mySlides">
  <img src="sheth-educator.jpg" style="width:100%">
  
	  <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-black">
		As an Educator: advisees that compete with the best from top 10 programs with exceptional career outcomes; average citations of 1,700+ and a mean of 1,378 for his PhD advisees (07/2016).
	  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="sheth-researcher.jpg" style="width:100%">

	  <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-black">
		As a Researcher: multidisciplinary, fully-scaled research with real-world impact; among the top 100 in CS and among the top cited in WWW and DB; h-index = 99; 55+ keynotes; $27+M in research/ 6+M in commercialization funding.
	  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="sheth-entrepreneur.jpg" style="width:100%">


	  <div class="w3-display-bottommiddle w3-large w3-container w3-padding-16 w3-black">
		As an Entrepreneur: founded startups resulting in significant employment; served as CEO/COB; advised many startups; many commercial products and fully deployed applications serving businesses and scientists.
	  </div>
</div>


<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

    /* BEGIN: Variables to Advance Slides Automatically */
    var myIndex = 0;
    carousel();
    /* END: Variables to Advance Slides Automatically */

    /* BEGIN: Function to Advance Slides Automatically */
    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 8000); // Change image every 8 seconds
    }
    /* END: Function to Advance Slides Automatically */
</script>

<p>
	Amit Sheth is an educator, researcher, and entrepreneur. He is the LexisNexis Ohio Eminent Scholar, an IEEE Fellow, an AAAI Fellow, and the executive director of Kno.e.sis&mdash;the Ohio Center of Excellence in Knowledge-enabled Computing. Kno.e.sis is a multidisciplinary Ohio Center of Excellence in BioHealth Innovation. Its faculty and researchers are computer scientists, cognitive scientists, biomedical researchers, and clinicians. It has the largest US academic research group in the area of Semantic Web and maintains a very high publication impact. In recent years, Kno.e.sis’ research impact has been responsible for Wright State University placing 2nd in World Wide Web (WWW) research with world-class universities for 5-year impact (<a href="http://j.mp/www-Mar13">http://j.mp/www-Mar13</a>) and earning a spot among the top 10 universities in the world based on its 10-year impact (<a href="http://j.mp/www-org-Jun15">http://j.mp/www-org-Jun15</a>).
</p>
<p>
	Previously, Dr. Sheth was a professor at the University of Georgia, where he started the LSDIS lab in 1994. His earlier professional appointments include senior scientist/staff positions in R&D groups at Bellcore, Unisys, and Honeywell. He has founded three startups (operationally managed two), co-founded two others, and has advised several others.
</p>
<p>
	Sheth is working towards a vision of Computing for Human Experience enabled by the capabilities at the intersection of AI (semantic, cognitive, and perceptual computing), Big and Smart Data (exploiting multimodal Physical-Cyber-Social data), and Augmented Personalized Health. His recent work has involved Web 3.0 technologies and involves enterprise, social, sensor/IoT data and applications. In the past, he has worked extensively on federated databases, semantic interoperability, services computing, and workflow management. Since founding Kno.e.sis, he has predominately been involved in multidisciplinary research with key collaboration and applications in the areas of healthcare and life sciences (including connected health/dHeath/mHealth, biomedicine, and public health), national defense/intelligence, smart cities, disaster coordination, manufacturing science, human/social/economic development, etc. He is also intimately involved in open source activities, social entrepreneurship, technology transfer and licensing, commercialization, and regional economic development as he continues to seek a real-world impact through research. 
	<br>
	<br>
</p>
<p>
	<h3>As an Educator</h3>
</p>
<p>
	Sheth's most prized achievement is the <strong>exceptional success of his past advisees</strong>, all of whom compete successfully against graduates from top 20 institutions. Several of his students have received prestigious international awards and fellowships and been mentioned in numerous articles in top global media outlets. Two of them have given keynotes at significant events prior to completing their PhDs, and eleven of his twenty-three former PhD advisees have over 1,000 citations each, including three with 5,000+ citations each, and one who places 5th in WWW based on 10-year impact worldwide. The average citation for his past PhD advisees on Google Scholar exceeds 1,700  (<a href="http://j.mp/Kimpact">http://j.mp/Kimpact</a>).
</p>
<p>
	Sheth's students are employed at major research universities (North Carolina State University, Case Western Reserve University, and GMU), top industry research labs (IBM Research Almaden—three of them in the IBM's prestigious Watson for Life Science division, Samsung Research, etc.), top technology companies (Facebook, LinkedIn, Amazon, Apple, CISCO, etc.), hold executive positions, and are successful entrepreneurs. Their high demand is demonstrated by first year compensation in the $200-$250K range for a PhD advisee and $120K for several of his MS advisees.
</p>
<p>
	Sheth has demonstrated academic initiatives and innovations in the form of initiating/advising new academic programs (most recently, on Big and Smart Data Sciences), being among the first in the world in offering courses on emerging topics (Internet Programming in 2000, Enterprise Information Systems & Distributed Workflow in 1995, Global/Web Information Systems in 1995, Semantic Web in 2001, Web 3.0 in 2013, etc.), online teaching, international educational and research collaborations, and extensive tutorial presentations to academic and professional audiences. Sheth takes prides in nurturing <strong>diversity</strong>. Compared to a female student population of around 14% in good graduate schools, over 35% of his group consists of females. 
	<br/>
	<br/>
</p>
<p>
	<h3>As a Researcher</h3>
</p>
<p>
	
His h-index is 102 (May 2019) with > 42,000 citations to his publications (placed among the top 100 researchers in the world for computer science based on h-index in 2018; historical information based on Microsoft Academic Search: <a href="http://j.mp/MAS-a">http://j.mp/MAS-a</a>). He has been a PI of numerous competitive research <strong>grants</strong>, totaling over $27 million, sponsored by federal agencies (NSF, NIH, DARPA, AFRL, etc.) as well as industry (Microsoft Research, IBM Research, HP labs, etc.). Additionally, more than $5 million has been awarded to support his technology commercialization and R&D efforts. He has had highest graduate research focused expenditure in his college (and likely, his university) since he joined academia (directly <strong>supporting approximately 25</strong> students and post-docs, including 13-18 PhD students) During the 10 years starting his move to Wright State University, his research grants funded 1,036 months of GRA (which translate to 148 quarters (until 2012) and 148 semesters of GRA support. He is on several journal editorial boards (including IEEE Internet Computing), was the founding EIC of the International Journal on Semantic Web and Information Systems (IJSWIS), is the joint EIC of Distributed and Parallel Databases (DAPD), and a co-editor of two Springer book series. He has organized and/or co-organized over 100 international events (conferences/workshops), served on 230+ PCs, and given <strong>55+ keynotes</strong>.  
	<br/>
	<br/>
	</p>
<p>
	<h3>As an Entrepreneur, Innovator, Technologist, Executive, and Leader with Real-world Impact </h3>
</p>
<p>
	Sheth’s research has led to the founding of several companies resulting in significant regional impact and development of high-tech jobs.  <strong>Three</strong> of the companies (one acquired, one sustaining, and one recently formed) are <strong>based on the licensing of technologies that resulted from his research</strong> from universities. His work has also resulted in incubating companies, several commercial products, and many deployed applications in the financial, health care, biomedical and Internet domains. He has a long history of leading multidisciplinary, multi-institutional, and multinational activities.  In the areas of healthcare and life sciences areas, his intensive collaborations with clinicians as well as biomedical researchers have resulted in a large number of research and commercial tools, systems, and applications. As of Fall 2016, his research encompassed applications to asthma, dementia, GI, cardiovascular, mental health, and other diseases or health challenges (e.g., drug abuse).
</p>

<p>
<p>
	<u>As a leader, he has been able to demonstrate the ability to create world-class entities to achieve unprecedented institutional outcomes. Kno.e.sis with its ability to position Wright State University among the top 10 in the world in the area of World Wide Web, and similar previous success for the LSDIS lab and the University of Georgia are key exemplars. His leadership approach includes the ability to create a strong ecosystem with a focus on vision, people, collaborations, and resources</u>. He has pursued vision with a multidisciplinary scope, placing bets on  high risk and high reward topics well before those topics have ascended the hype curve, developed a highly collaborative environment that attracts exceptional members (e.g., faculty, staff, student), personally and collectively securing highly competitive funds, and ensuring exceptional outcomes (e.g., student success, significantly enhanced productivity of collaborating faculty, IP creation and licensing, technology transfer, and regional economic development). Example innovations and the terms he coined include Smart Data (2004), Citizen Sensing (2008), Semantic Perception (2008), and Continuous Semantics (2009).
</p>
<p>
	For the companies he has founded, he has also played executive roles encompassing Chairman of the Board, President and CEO, Senior VP, CTO, and Chief Scientist, supervising a full range of activities including fundraising, finance, customer acquisition/sales, business development and marketing, engineering, recruiting and training. His second (VC-funded) company grew to approximately 35 employees (with a majority recruited from the university) and spent $7 million in local payroll before it was acquired. He has served (and continues to serve) on technology and business advisory broads and in a variety of advising roles including international research projects, academic programs, and startups. He has had a long-term interest in higher education, and has given a number of presentations covering policy and strategic issues to policy and decision-makers. Details: <a href="http://knoesis.org/amit">http://knoesis.org/amit</a>.
	<br/>
	<br/>
</p>

<a href ="http://knoesis.org/projects/funding" target="_blank" title="Click the image for more funding details."><img src="http://knoesis.org/resources/images/KnoesisNov2016.png" style="width:100%;"/></a>

<p>
Three page vita overview <a href="http://knoesis.org/amit/Microsoft Word - 3page-Summary-Jan2018.docx.pdf">[PDF],</a>a CV <a href="http://knoesis.org/amit/Microsoft Word - Amit-Sheth-Vita-Jan31-2018.docx.pdf">[PDF] </a> and find additional information at <a href="http://www.linkedin.com/in/amitsheth">http://www.linkedin.com/in/amitsheth</a>
<p>

<p>For information on past and current grants, visit <a href="http://knoesis.org/amit/projects/">Dr. Sheth's project page</a>, the <a href=
"http://knoesis.org/projects/funding">Kno.e.sis Center's funding page</a>, and <a href="http://grantome.com/search?q=@author%20%20Amit%20Sheth">Grantome</a>.</p>
