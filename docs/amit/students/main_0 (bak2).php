<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>

<br>
<br>

<style>
.simpleborder
{
border-style: solid;
border-width: 2px;
border-color: #606060;
} 

.tablegrid
{
border-style: solid;
border-width: 1px;
border-color: #606060;
}

#table td, #table th ,#table1 td, #table1 th ,#table2 td, #table2 th ,#table3 th
{
font-size:1em;
border:1px solid rgb(204, 170, 51);
padding:3px 7px 2px 7px;
}

#table th ,#table1 th ,#table2 th ,#table3 th
{
font-size:1.1em;
padding-top:5px;
padding-bottom:4px;
background-color:rgb(204, 170, 51);
color:#ffffff;
}

#table tr.rowN td , #table1 tr.rowN td, #table2 tr.rowN td , #table3 tr.rowN td
{
color:#000000;
}

ul.tabs
{
    padding: 7px 0;
    font-size: 0;
    margin:0;
    list-style-type: none;
    text-align: left;
	margin-bottom: 0;
}
 
ul.tabs li
{
    display: inline;
    margin: 0;
    margin-right:3px;
	
}
 
ul.tabs li a
{
    font: normal 12px Verdana;
    text-decoration: none;
    position: relative;
    z-index: 1;
    padding: 7px 16px;
    border: 1px solid #CCC;
    border-bottom-color:#606060;
    color: #000;
    background: #F0F0F0;
    border-radius: 0px 0px 0px 0px;
	-moz-border-radius: 6px 6px 0px 0px;
    outline:none;
}
 
ul.tabs li a:hover
{
    border: 1px solid #606060;
    background:#E0E0E0;
}
 
ul.tabs li.selected a
{
    position: relative;
    top: 0px;
    font-weight:bold;
    background: #76848D;
    border: 1px solid #606060;
    border-bottom-color: 606060;
    color: beige;
}
</style>

<script>
    function tabClick(x) 
    {
        $('*[id^=liSidebar]').each(function() {
            $(this).removeClass("selected");
        });
        $("#liSidebar"+x).addClass("selected");
        if(x===4)
        {
            $('#div_phds').hide();
            $('#div_master').hide();
            $('#div_postDocs').hide();
            $('#div_overView').show();
        }
        else if(x===3)
        {
            $('#div_phds').hide();
            $('#div_master').hide();
            $('#div_overView').hide();
            $('#div_postDocs').show();
        }
        else if(x===2)
        {
            $('#div_postDocs').hide();
            $('#div_phds').hide();
            $('#div_overView').hide();
            $('#div_master').show();
        }
        else
        {
            $('#div_postDocs').hide();
            $('#div_master').hide();
            $('#div_overView').hide();
            $('#div_phds').show();
            
        }
    }

</script>
<div>
    <ul id="tab_ul" class="tabs">
            <li  id="liSidebar4" class="selected" id="tab_overView"><a href="#" onclick="tabClick(4)">Overview</a></li>

            <li  id="liSidebar1" class="" id="tab_phds"><a href="#" onclick="tabClick(1)">PhD</a></li>

            <li id="liSidebar2" class="" id="tab_master"><a href="#" onclick="tabClick(2)">MS With Thesis</a></li>

            <li id="liSidebar3" class="" id="tab_postDocs"><a href="#" onclick="tabClick(3)">Post-Doc</a></li>
        
    </ul>
</div>
<div id="div_overView" style="width:100% !important">
    <table class="simpleborder" id="table3" style="width:100%; padding-top:10px; cellpadding=5;">
        <tr class="rowN" >
            <td style="padding-left:10px;">
                <p>
                    An important measure of my success is whether my advisees/mentees can compete with the those from the top universities in their career choices (most of them have chosen from academia, research,  entrepreneurship). Below are some of the objective measures that demonstrate that they do. Equally important is the progress in their earlier career, which demonstrate their well rounded capabilities that include communication skills, social and networking, innovation, teamwork, mentoring, and leadership skills; for that see other tabs.
                </p>
                
                <strong>Citations as a Recognition of Publication Impact:</strong>
                <br>
                <p>
                    A majority of former my PhD advisees (11 out of 18 as of March 2015) have over 1,000 citations each; two of them -
                    <a href="http://scholar.google.com/citations?user=n9JFmAkAAAAJ&hl=en">Jorge Cardoso</a> and 
                    <a href="http://scholar.google.com/citations?user=eyVwKs4AAAAJ&hl=en">Kunal Verma</a> have > 5,000 citations each (<a href="https://drive.google.com/file/d/0BzeJBtSxi0JidW5sQjNTa1NfWGM/view">Kunal's position in WWW, 10-year impact</a>). 
                    Some had 1,000 around the time they defended their dissertation. Here is a list (Nov 2014, <a href="http://scholar.google.com/citations?view_op=list_colleagues&hl=en&user=2T3H4ekAAAAJ">see latest</a>)
                </p>
                <ul>
                    <li>
                        Former advisee with > 1,000 citations: <a href="http://scholar.google.com/citations?user=eyVwKs4AAAAJ&hl=en">Kunal Verma</a>,
                        <a href="http://scholar.google.com/citations?user=n9JFmAkAAAAJ&hl=en">Jorge Cardoso</a>, 
                        <a href="http://scholar.google.com/citations?user=igSmY2QAAAAJ&hl=en">Vipul Kashyap</a>, 
                        <a href="http://scholar.google.com/citations?user=MqYog5sAAAAJ&hl=en">Meena Nagarajan</a>,
                        <a href="http://scholar.google.com/citations?user=an7BPvUAAAAJ">Karthik Gomadam</a>, 
                        <a href="http://scholar.google.com/citations?user=tZSWCG0AAAAJ">Cartic Ramakrishnan</a>, 
                        <a href="http://scholar.google.com/citations?user=Lmj2JBUAAAAJ">Satya Sahoo</a>, 
                        <a href="http://scholar.google.com/citations?user=vdvzlBYAAAAJ">Cory Henson</a>,  
                        <a href="http://scholar.google.com/citations?user=v2eraF8AAAAJ">Kemafor Anyanwu</a>,
						<a href="http://scholar.google.com/citations?user=yMhC7tAAAAAJ&hl=en">Pablo Mendes</a>,
						<a href="http://scholar.google.com/citations?user=YB9-iLQAAAAJ&hl=en">Ajith Ranabahu</a>
                    </li>

                    <li>
                        Former advisee with > 500 citations: 
                            <a href="http://scholar.google.com/citations?user=dw6p89EAAAAJ&hl=en">Christopher Thomas</a>
                            
                    </li>
					
					<li>
                        Former mentee with > 1,000 citations: 
							<a href="http://scholar.google.com/citations?user=nrYfN2AAAAAJ&hl=en">Eduardo Mena</a>
                    </li>
					


                </ul>
                
                <strong>
                   
                        Keynotes at International Events Before Graduation:
                    
                </strong>
                
                <ul>
                    <li>
                        <a href="http://wiki.knoesis.org/index.php/Cory_Andrew_Henson">Cory Henson</a> gave the keynote at the 
                        <a href="http://www.iot-week.eu/overview_2013/iot-week-2012/programme-1/tuesday-1/semantic-interoperability.html">2012 Semantic Interoperability Workshop</a> in Venice,
                        Italy. <a href="http://www.iot-week.eu/overview_2013/iot-week-2012/programme-1/tuesday-1/presentations/semantic-interoperability/K2_Henson-W3C-SSN-XG-IoTWeek2012.pdf">Slides</a>
                    </li>

                    <li>
                        <a href="http://knoesis.wright.edu/researchers/meena/homepage/">Meena Nagarajan</a> gave the keynote at the Social Data on the Web Workshop, collocated with the International Semantic Web
                        Conference (ISWC) 2009. <a href="http://knoesis.org/library/resource.php?id=731">Slides</a>, 
                        <a href="https://www.youtube.com/watch?v=-iNARgd5GSM">Introduction</a>, 
                        <a href="http://youtu.be/jcoti3eSXIg">first few minutes</a>
                    </li>

                </ul>
                <strong>
                   
                        Major International Awards and Recognition:
                     
                </strong>
                <ul>
                    <li>
                        <a href="http://knoesis.org/hemant">Hemant Purohit</a> won 
                        <a href="http://telecomworld.itu.int/take-part/innovate/">UN agency ITU's Telecom World Young Innovators Competition 2014</a> 
                        on <a href="https://ideas.itu.int/blog#blog/post/60076">Open Source Technologies for Disaster Management</a>, based on 
                        <a href="https://ideas.itu.int/post/58502">idea from his research</a> among 150 worldwide applications, Aug. 2014. <a href="https://www.scribd.com/doc/248474454/SoMeC-Social-Media-Coordination-Hemant-Purohit">Brochure</a>
                    </li>

                    <li>
                        <a href="http://knoesis.org/researchers/pramod/">Pramod Anantharam</a> was selected for the 
                        <a href="http://dssg.io/">Eric & Wendy Schmidt Data Science for Social Good Fellowship</a> for Summer 2014.
                    </li>

                    <li>
                        <a href="http://knoesis.org/hemant">Hemant Purohit</a> received Google, USAID and ICT4Peace fellowship for CrisisMappers ICCM-2013 at UN Nairobi, 
                        selected as one of the 8 international fellows, Oct 2013. Ignite talk 
                        <a href="https://www.youtube.com/watch?v=FQiqslKBcTI">Video</a>, 
                        <a href="http://www.slideshare.net/knoesis/iccm-2013ignitetalkhemantpurohitunnairobi">Slides</a>
                    </li>

                    <li>
                        <a href="http://knoesis.wright.edu/researchers/ajith/">Ajith Ranabahu</a> (and the Kno.e.sis team), 
                        <a href="http://knoesis.wright.edu/researchers/ajith/awards">Technology award at the 2012 Fukuoka Ruby Award Competition</a> awarded by the Fukuoka Center for Overseas Commerce in America. Competition judged by Yukihiro Matsumoto, the creator of the Ruby programming language. Only academic entry out of 81 to get this prestigious award.
                    </li>

                </ul>
                <strong>
                   
                        Invited Talks at Significant Events:

                   
                </strong>
                <ul>
                    <li>
                        <a href="http://knoesis.wright.edu/researchers/pavan/">Pavan Kapanipathi</a> gave an invited talk at the 
                        <a href="http://researcher.ibm.com/researcher/view_group_subpage.php?id=5565">IBM's invitational workshop on Frontiers of Cloud Computing and Big Data, 2014</a>
                    </li>

                </ul>
                <strong>
                   
                        Tutorials at Major Conferences Given Before Graduation (Partial List):
                   
                </strong>
                <ul>
                    <li>
                        Hemant Purohit (with <a href="http://www.chato.cl/research/">Carlos Castillo</a> and <a href="http://research.microsoft.com/en-us/people/fdiaz/">Fernando Diaz</a>):  
                        <a href="http://www.siam.org/meetings/sdm14/tutorials.php">Leveraging Social Media and Web of Data for assisting Crisis Response Coordination</a> ,
                        SIAM Int'l Conf on Data Mining (SDM-2014), Apr. 2014 
                        (<a href="http://knoesis.org/hemant/present/sdm2014">Details and Slides</a>)

                    </li>

                    <li>
                        Hemant Purohit (with Patrick Meier, Carlos Castillo, Amit Sheth): 
                        <a href="http://www.icwsm.org/2013/program/tutorial/">Crisis Mapping, Citizen Sensing and Social Media Analytics: Leveraging Citizen Roles for Crisis Response</a>, 
                        the Seventh International Conference on Weblogs and Social Media (ICWSM-13), Jul. 2013 
                        (<a href="http://www.knoesis.org/hemant/present/icwsm2013">Details and Slides</a>).
                    </li>

                    <li>
                        Pramod Anantharam (with Payam Barnaghi and Amit Sheth): 
                        <a href="http://aida.ii.uam.es/wims13/keynotes.php#tutorials">Data Processing and Semantics for Advanced Internet of Things (IoT) Applications: modeling, annotation, integration, and perception</a> at 
                        <a href="http://aida.ii.uam.es/wims13/">WIMS 2013</a>, Madrid, Spain, Jun. 2013
                    </li>

                    <li>
                        Cory Henson (with Payam Barnaghi and Wei Wang): 
                        <a href="http://knoesis.org/iot-tutorial-ekaw2012/">Data Modeling and Knowledge Engineering for the Internet of Things</a>, at 18th International Conference on Knowledge Engineering and Knowledge Management (2012): 
                        (<a href="http://www.slideshare.net/andrewhenson/data-Modeling-and-knowledge-engineering-for-the-internet-of-things">presentation</a>)
                    </li>

                    <li>
                        Cartic Ramakrishnan, Meena Nagarajan, Amit Sheth: 
                        <a href="http://knoesis.org/library/resource.php?id=00329">Text Analytics for Semantic Computing - the good, the bad and the ugly</a>, Second IEEE International Conference on Semantic Computing, Aug. 2008.
                    </li>

                    <li>
                        Kunal Verma (with Amit Sheth): 
                        <a href="http://lists.w3.org/Archives/Public/www-archive/2007May/att-0081/SAWSDL-STC07-May21.ppt">Using SAWSDL for Semantic Service Interoperability</a>, Semantic Technology Conference, San Jose, CA, May 21, 2007.
                    </li>

                </ul>
                <strong>
                    
                        Chairing Program Committees, Journal Editorship, Panels or Significant Organizational Roles Before Graduation:
                   
                </strong>
                <ul>
                    <li>
                        Hemant Purohit, Co-chair for the AAAI Spring Symposium 2015: 
                        <a href="http://www.knoesis.org/hemant/symposium/aaai2015">Structured Data for Humanitarian Technologies: Perfect fit or Overkill?</a>, Jul. 2014.
                     </li>

                     <li>
                         Cory Henson, <strong>Co-Guest Editor</strong>, <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=6468014">Special Issue on the Web of Things</a> , IEEE Intelligent Systems, Nov/Dec 2013.
                     </li>

                     <li>
                         Cory Henson, <strong>Co-Chair</strong> of the <a href="http://knoesis.org/ssn2013/">6th International Workshop on Semantic Sensor Networks</a> (held at ISWC 2013).
                     </li>

                     <li>
                         Delroy Cameron, Program Co-Chair of the <a href="http://knoesis.org/swlbd2012/">1st International Workshop on the role of Semantic Web in Literature-Based Discovery</a> (SWLBD 2012).

                     </li>

                     <li>
                         Cory Henson, <strong>Co-Chair</strong> of the <a href="http://ceur-ws.org/Vol-904/">5th International Workshop on Semantic Sensor Network</a> (held at ISWC 2012).
                     </li>
 
                     <li>
                         Meena Nagarajan, Invited <strong>Panel Presentation</strong> at the Search in Social Media Workshop, collocated with the Third ACM International Conference on Web Search and Data Mining, 2010.
                     </li>

                </ul> 
                <strong>
                   
                        Media Coverage: 
                   
                </strong>
                <p>
                    Students activities have appeared in many influential media articles and influential posts: Time.com, Daily Mail (UK), Fast Company, La Croix, The Hindu, Hindustan Times, MIT Technology Review, Tech President. See more 
                    <a href="http://knoesis.org/amit/media">here</a>.
                </p>
                <strong>
                    Student Profiles in the News:
                  
                </strong>
                <ul>
                    <li>
                        Hemant Purohit: <a href="https://www.scribd.com/doc/247523756/Hemant-Purohit-Computational-Social-Scientist-Wright-State-Newsroom">Computational Social Scientist</a>, 11/2014

                    </li>

                    <li>
                        Pramod Anantharam, <a href="http://webapp2.wright.edu/web1/newsroom/2013/11/22/researchers-work-with-european-union-gains-international-notice/">Researcher’s work with European Union gains international notice</a>, 11/2013

                    </li>

                    <li>
                        Cory Henson: <a href="https://www.scribd.com/doc/247521085/Cory-Henson-Profile-Data-Master">Data Master: student researcher fusing Web, sensors to create thinking, life saving devices</a>, 03/2013
                    </li>

                </ul>
                <strong>
                    
                        Major Standards Contributions/Leadership/Editorship:
                  
                </strong>
                <ul>
                    <li>
                        Hemant Purohit, Invited as subject matter expert by the DHS S&T institute, for bridging socio-technical communication gap between technologists and emergency managers during emergency response exercise of federal agencies at JIFX, Feb. 2014.

                    </li>

                    <li>
                        Cory Henson, final report co-editor, key participant/co-organizer for <a href="http://www.w3.org/2005/Incubator/ssn/XGR-ssn-20110628/">W3C XG on Semantic Sensor Networking</a>, 2010-2011.
                    </li>

                    <li>
                        Karthik Gomadam and Ajith Ranabahu were co-editor of the W3C Member submission, <a href="http://www.w3.org/Submission/SA-REST/">SA-REST: Semantic Annotation of Web Resources</a>. 
                    </li>

                    <li>
                        Satya Sahoo developed Provenir ontology for semantic provenance which was one of the key inputs to W3C’s PROV specifications, including the PROV Ontology (PROV-O); Satya was active and key participant. 2009-2011.

                    </li>

                    <li>
                        Kunal Verma, key participant in/contributions to <a href="http://www.w3.org/2002/ws/sawsdl/">Semantic Annotations for WSDL (SAWSDL)</a>, W3C recommendation, 2006-2007. Ajith Ranabahu was the primary author of the SAWSDL4J reference implementation for SAWSDL, 2007.
                    </li>

                    <li>
                        Christopher Thomas was the key developer of GLYDE II standards that is adapted worldwide by complex carbohydrate research community. 2005-.
                    </li>

                    <li>
                        Meena Nagarajan and Kunal Verma (with R. Akkiraju, J. Farrell, J.Miller, M. Nagarajan, M. Schmidt, A. Sheth), <a href="http://www.w3.org/Submission/WSDL-S/">Web Service Semantics - WSDL-S</a>, W3C Member Submission (which was the primary input to the resulting W3C’s SAWSDL recommendation/standard), 2005.

                    </li>

                </ul>
                <strong>
                    Intellectual Property, Innovations, and Commercialization:
                </strong>
                <p>
                    Students are frequent co-inventors on patents (appox. one per year) and IP disclosures filed through Wright State University. On average 2-3 patents are filed per year based on inventions resulting from student's internships at companies such as IBM, Samsung, Bosch, etc. Their participation in industry sponsored research at Kno.e.sis have also led to commercial products such as one from <a href="http://www.ezdi.us/">edDI</a>. Recent patent:
                </p>
                <ul>
                    <li>
                        Amit Sheth, Karthik Gomadam, Meena Nagarajan: <a href="http://www.lens.org/lens/patent/US_8688791_B2">Methods And Systems For Analysis Of Real-time User-generated Text Messages</a>, US 8688791 B2, April 1, 2014.
                    </li>

                </ul>
                <strong>
                   
                        University/College Recognition as Best/Outstanding PhD Student in Computer Science:
                   
                </strong>
                <ul>
                    <li>
                        Ajith Ranabahu, <strong>Presidential Commendation for Excellence</strong> in co-Curricular activities awarded by President David R. Hopkins, 2011-2012. 
                        <a href="http://knoesis.org/resources/library-resources/files/download/certificate-ajith-2012.jpg">Certificate</a>, 
                        <a href="http://knoesis.org/resources/library-resources/files/download/glass_plaq-ajith-2012.jpg">Plaque</a>

                    </li>

                    <li>
                        Hemant Purohit, Outstanding Student Award, Computer Science department, Wright State Univ., Apr. 2014
                    </li>

                    <li>
                        WSU Graduate Student Excellence Award for Ph.D. in Computer Science and Engineering (basically the best student in our CS program as selected by a faculty committee): Cory Henson, 2013; Prateek Jain, 2012; Ajith Ranabahu, 2011; Meenakshi Nagarajan, 2010; Karthik Gomadam, 2009.

                    </li>

                    <li>
                        Ashwin Manjunatha, Best MS Student Award in Computer Science, Graduate School, Wright State University, 2011.
                    </li>

                </ul>
                <strong>
                   
                         Program Committees in Top Conferences Before Graduation (Partial List): 
                   
                </strong>
                <p>
                    Lu Chen (WebSci-2014, SocInfo-2014, SocInfo-2013), Pramod Anantharam (WWW 2015, ISWC 2014, ), Hemant Purohit (ICWSM 2015, ISCRAM 2015, HICSS 2014, WWW 2014, SocInfo-2014/2013), Cory Henson (ESWC 2010/2011/2012/2013, ISWC 2013, EKAW 2012 ), Meena Nagarajan (ISWC 2007, CIKM 2007, WSDM 2009, ICWSM 2010, ESWC 2010), …
                 </p>
                <p>
                    Several PhD students have been invited for and served on over 15 PCs before graduating.
                </p>
                <strong>
                   
                        Student Fellowship and Travel Awards:
                   
                </strong>
                <p>
                    Too many to list. Practically all my students have received these and often have received multiple travel awards/fellowships.

                </p>
            </td>
        </tr>
    </table>
</div>
<div id="div_phds" style="width:100% !important; display:none">
<table border="1px" cellspacing="0" cellpadding="5" width="100%">
	<tbody>
		<tr>
			<td width="168">
				<p align="center">
					<strong>Name</strong>
				</p>
			</td>
			<td width="216">
				<p align="center">
					<strong>Dissertation</strong>
				</p>
			</td>
			<td width="204">
				<p align="center">
					<strong>Jobs/Career</strong>
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Delroy Cameron <br>
					PhD (WSU): 12/2014
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=2007">A Context-Driven Subgraph Model for Literature-Based Discovery</a>
				</p>
			</td>
			<td width="204">
			<p>
			URX, Inc.
			</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Pablo Mendes <br>
					PhD (WSU): 12/2013
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1947">Adaptive Semantic Annotation of Entity and Concept Mentions in Text</a>
				</p>
			</td>
			<td width="204">
				<p>
					IBM Almaden Research Center (innovation division for the IBM Watson Computer (Core Technologies))
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Cory Henson <br>
					PhD (WSU): 11/2013
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1948">Semantics-based Approach to Machine Perception</a> 
				</p>
			</td>
			<td width="204">
				<p>
					Bosch Research &amp; Technology Center
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Pratik Desai <br>
					PhD (WSU): 04/2013 <br>
					(Co-advisor: Kuldip Rattan)
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1949">A Situation Awareness Framework for Indoor Cyber-Physical Systems Aided by Fuzzy Abductive Reasoning and Semantic Web</a>
				</p>
			</td>
			<td width="204">
				<p>
					Seer Labs, Inc.
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Christopher Thomas <br>
					PhD (WSU): 12/2012
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1799">Knowlwedge Acquisition in a System</a>
				</p>
			</td>
			<td width="204">
				<p>
					Samsung Research and Development Center
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Ajith Ranabahu <br>
					PhD (WSU): 08/2012
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1802">Abstraction Driven Application and Data Portability in Cloud Computing</a>
				</p>
			</td>
			<td width="204">
				<p>
					Amazon's core Cloud Platform group
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Prateek Jain <br>
					PhD (WSU): 08/2012
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1770">Linked Open Data Alignment and Querying</a>
				</p>
			</td>
			<td width="204">
				<p>
					IBM TJ Watson Research Center
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Meenakshi Nagarajan <br>
					PhD (WSU): 0/2010
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=850">Understanding User-Generated Content on Social Media</a>
				</p>
			</td>
			<td width="204">
				<p>
					IBM Almaden Research Center
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Satya S. Sahoo <br>
					PhD (WSU): 07/2010
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=852">
						Semantic Provenance: Modeling, Querying, and Application in Scientific Discover
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					Case Western Reserve University (tenure track)
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Karthik Gomadam <br>
					PhD (WSU): 08/2009
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1021">Semantics Enriched Service Environments</a>
				</p>
			</td>
			<td width="204">
				<p>
					Accenture Labs
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Angela Maduko <br>
					PhD (WSU): 05/2009
				</p>
			</td>
			<td width="216">
				<p>
					Building Statistical Summaries for Obtaining Accurate Estimates of the Cardinality of Graph Pattern Matching Queries
				</p>
			</td>
			<td width="204">
				<p>
					Teradata; earlier: ADVIS Lab at University of Illinois at Chicago
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Matthew Perry <br>
					PhD (WSU): 07/2008
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=00322">A Framework to Support Spatial, Temporal and Thematic Analytics over Semantic Web Data</a>
				</p>
			</td>
			<td width="204">
				<p>
					Oracle
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Cartic Ramakrishnan <br>
					PhD (WSU): 10/2008
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=00335">
						Extracting, Representing and Mining Semantic Metadata from Text: Facilitating Knowledge Discovery in Biomedicine
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					IBM Research Center, Earlier: Datapop; ISI; CCHMC
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Kemafor Anyanwu <br>
					PhD (UGA): 08/2007
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1737">
						Supporting Link Analysis using Advanced Querying Methods on Semantic Web Databases
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					North Carolina State University
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Kunal Verma <br>
					PhD (UGA): 08/2006
					<br>
					(Co-advisor: John A. Miller)
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1563">Configuration and Adaptation of Semantic Web Processes</a>
				</p>
			</td>
			<td width="204">
				<p>
					Accenture Labs
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Jorge Cardoso <br>
					PhD (UGA): 08/2002
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1759">Quality of Service and Semantic Composition of Workflows</a>
				</p>
			</td>
			<td width="204">
				<p>
					Prof. University of Coimbra; earlier: SAP Research; Asst. Prof., U. Madiera
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Zongwei Luo <br>
					PhD (UGA): 02/2001
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1733">Knowledge Sharing, Coordinated Exception Handling, and Intelligent Problem Solving for Cross-Organizational Business Processes</a>
				</p>
			</td>
			<td width="204">
				<p>
					Assoc. Prof., South University of Science and Technology of China; earlier: U of Hong Kong; IBM Watson Research.
				</p>
			</td>
		</tr>
	</tbody>
</table>
</div>
<div id="div_master" style="width:100% !important; display:none">
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
	<tbody>
		<tr>
			<td width="168">
				<p align="center">
					<strong>Name</strong>
				</p>
			</td>
			<td width="216">
				<p align="center">
					<strong>Thesis</strong>
				</p>
			</td>
			<td width="204">
				<p align="center">
					<strong>Jobs/Career</strong>
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Revathy Krishnamurthy<br>
					MS (WSU): 04/2015
				</p>
			</td>
			<td width="216">
				<p>
					<a href ="http://rave.ohiolink.edu/etdc/view?acc_num=wright1424349831">Knowledge Enabled Location Prediction of Twitter Users</a>
				</p>
			</td>
			<td width="204">
			<p>
			FactSet
			</p>
			</td>
		</tr>
				<tr>
			<td width="168">
				<p>
					Gaurish Anand <br>
					MS (WSU): 08/2014
				</p>
			</td>
			<td width="216">
				<p>
					<a href= "http://rave.ohiolink.edu/etdc/view?acc_num=wright1410962490">Automatic Identification of Interestingness in Biomedical Literature</a>
				</p>
			</td>
			<td width="204">
				<p>
					Sandia National Lab
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Ashwin Manjunatha <br>
					MS (WSU): 06/2011
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1559">
						A Domain Specific Language Based Approach for Developing Complex Cloud Computing Applications
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					CISCO
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Harshal Patni <br>
					MS (WSU): 06/2011
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1618">Real TimeSemantic Analysis of Streaming Sensor Data</a>
				</p>
			</td>
			<td width="204">
				<p>
					Entrepreneur. Earlier Zynx Health
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Sujeeth Thirumalai <br>
					MS (UGA): 08/2007 <br>
					(Co-advisor: J. Miller)
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=804">Keyword Search Interface for Path Queries in RDF</a>
				</p>
			</td>
			<td width="204">
				<p>
					Akamai Technologies
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Bilal Gonen <br>
					MS (UGA): 08/2006
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1738">Semantic Browser</a>
				</p>
			</td>
			<td width="204">
				<p>
					University of West Florida (Asst. Prof.)
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Ravi Pavagada <br>
					MS (UGA): 08/2006
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1732">Supporting keyword search on semantic web documents</a>
				</p>
			</td>
			<td width="204">
				<p>
					Manager, Comcast; earlier: Excelacom
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					William Milnor <br>
					MS (UGA): 12/2005
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=00101">Discovering Informative Subgraphs in RDF Graphs</a>
				</p>
			</td>
			<td width="204">
				<p>
					Topquadrant
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Swapna Onudhakar <br>
					MS (UGA): 12/2004
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1742">Semantic Web service discovery in a multi-ontology environment</a>
				</p>
			</td>
			<td width="204">
				<p>
					ADP
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Rohit Aggrawal <br>
					MS (UGA): 08/2004 <br>
					(Co-advisor: J. Miller)
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1739">Constraint driven Web service composition in METEOR-S</a>
				</p>
			</td>
			<td width="204">
				<p>
					NetCracker; earlier: senior positions in Convergys
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Christian Halaschek-Wiener <br>
					MS (UGA): 08/2004 <br>
					(Co-advisor: I.B. Arpinar)
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1757">
						A Flexible Approach for Ranking Complex Relationships on the Semantic Web
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					CTO &amp; Co-Founder at HashGo; earlier: SemanticSpace Technologies
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Abhijit Patil <br>
					MS (UGA): 12/2003
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1760">METEOR-S Web Service Annotation Framework</a>
				</p>
			</td>
			<td width="204">
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Kaarthik Sivashanmuga <br>
					MS (UGA): 08/2003 <br>
					(Co-advisor: J. Miller)
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1758">The METEOR-S Framework for Semantic Web Process Composition</a>
				</p>
			</td>
			<td width="204">
				<p>
					Microsoft
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Madhan Arumugam <br>
					MS (UGA): 12/2001
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/download/Madhan_Thesis.pdf">The Peer-to-Peer Semantic Web: A Distributed Environment for Sharing Semantic Knowledge on the Web</a>
				</p>
			</td>
			<td width="204">
				<p>
					Lead Program Manager, Microsoft; earlier: Intel
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Wonjung Kim <br>
					MS (UGA): 12/2001
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1564">Knowledge Based Personalization</a>
				</p>
			</td>
			<td width="204">
				<p>
					Samsung
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Shuchi Patel <br>
					MS (UGA): 08/2001
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/download/Shuchi_patel_thesis.pdf">Planning and Optimizing Semantic Information Requests on Heterogeneous Information Sources Using Semantically Modeled Domain and Source Characteristics</a>
				</p>
			</td>
			<td width="204">
				<p>
					Tech Lead at Verizon
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Sanjeev Thacker <br>
					MS (UGA): 08/2001
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1535">Knowledge Modeling for Study of Domains and Inter-domain Relationships - A Learning Paradigm</a>
				</p>
			</td>
			<td width="204">
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Zhongqiao Li <br>
					MS (UGA): 08/2000
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1562">
						Using Collaboration Task in OrbWork Enactment System for METEOR Workflow Management System
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					Earlier: i2 Technologies
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Narayan Palsena <br>
					MS (UGA): 08/2000
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1819">
						A Framework for Creating Information Landscapes and Modeling Metadata in the Context of Digital Earth
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					SAP
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Sriram Lakshminarayan <br>
					MS (UGA): 07/2000
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/download/Sriram-Thesis.pdf">Semantic Interoperability in Digital Libraries using Inter-Ontological Relationships</a>
				</p>
			</td>
			<td width="204">
				<p>
					Engineering Manager at Elance; earlier: Yahoo!!
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Dilpreet Singh <br>
					MS (UGA): 12/2000
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1734">
						An Agent Based Architecture for Query Planning and Cost Modeling of Web Sources
					</a>
				</p>
			</td>
			<td width="204">
				<p>
					Co-founder, CTO at Life360; earlier: Director, Kana
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Mukesh Guntamadugu <br>
					MS (UGA): 08/2000
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1755">M&#201;TIS: Automating Metabase Creation from Multiple Heterogeneous Sources</a>
				</p>
			</td>
			<td width="204">
				<p>
					CBS Interactive; Earlier: Looksmart
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Subrajit Ray <br>
					MS (UGA): 08/1999
				</p>
			</td>
			<td width="216">
				<p>
					Ontology-based Media Independent Correlation of Information Across Heterogeneous Distributed Sources
				</p>
			</td>
			<td width="204">
				<p>
					VP, Deutsche Bank
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Vineet Mahajan <br>
					MS (UGA): 08/1999
				</p>
			</td>
			<td width="216">
				<p>
					A Multi-Agent System for Metadata Management and Information Brokering
				</p>
			</td>
			<td width="204">
				<p>
					SmartBrief (CTO); earlier Interim CTO at HuffingtonPost; VP at AOL
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Clemens Bertram <br>
					MS (UGA): 12/1998
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=1753">Metadata and Ontology Based Query Processing in the InfoQuilt System</a>
				</p>
			</td>
			<td width="204">
				<p>
					VP at Goldman Sachs; earlier: VP of Tech at Semagix/Director of Engg at Voquette/Taalee
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Krishnan Parsuraman <br>
					MS (UGA): 12/1998
				</p>
			</td>
			<td width="216">
				<p>
					Agent Support in the InfoQuilt System
				</p>
			</td>
			<td width="204">
				<p>
					IBM - Digital Media (CTO); Earlier: Netezza, Infosys, Exemplary
				</p>
			</td>
		</tr>
				<tr>
			<td width="168">
				<p>
					Vipul Kashyap <br>
					MS (Rutgers): 10/1997
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=00092">Information Brokering over Heterogeneous Digital Data</a>
				</p>
			</td>
			<td width="204">
				<p>
					Director, Clinical Decision Support and Knowledge Management at CIGNA; earlier: Partner Healthcare; NLM, Bellcore
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Selvam Velmurugan <br>
					MS (UGA): 9/1997
				</p>
			</td>
			<td width="216">
				<p>
					Collaborative Tele-Consulting for Healthcare: CATCH
				</p>
			</td>
			<td width="204">
				<p>
					Director of Groupon; earlier: Netflix, Amazon;
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Srilekha Mudumbai <br>
					MS (UGA): 05/1997
				</p>
			</td>
			<td width="216">
				<p>
					<a href="http://knoesis.org/library/resource.php?id=00236">ZEBRA Image Access System</a>
				</p>
			</td>
			<td width="204">
				<p>
					Owner (entrepreneur), JitBit; earlier: Lawrence Berkeley National Lab; Verizon;
				</p>
			</td>
		</tr>
		<tr>
			<td width="168">
				<p>
					Devashish Worah <br>
					MS (UGA): 05/1997
				</p>
			</td>
			<td width="216">
				<p>
					Error Handling and Recovery for the ORBWork Workflow Enactment Service in METEOR
				</p>
			</td>
			<td width="204">
				<p>
					VP, Virtuasa
				</p>
			</td>
		</tr>
	</tbody>
</table>

</div>
<div id="div_postDocs" style="width:100% !important; display:none">
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
       <tbody>
		<tr>
			<td width="120">
				<p align="center">
					<strong>
						Post-Doc
						<br/>
						(Where &amp; When)
					</strong>
				</p>
			</td>
			<td width="136">
				<p align="center">
					<strong>
						Academic Degree
						<br/>
						Institution, Year
					</strong>
				</p>
			</td>
			<td width="211">
				<p align="center">
					<strong>Title of Research Project</strong>
				</p>
			</td>
			<td width="156">
				<p align="center">
					<strong>Current Position of Past Trainees / Source of Support of Current Trainees</strong>
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Tanvi Banerjee <br/>
					(WSU: 08/2014-Present)
				</p>
			</td>
			<td>
				<p>
					U. of Missouri, 2014
				</p>
			</td>
			<td>
				<p>
					SoCS: Collaborative Research: Social Media Enhanced Organizational Sensemaking in Emergency Response
				</p>
			</td>
			<td>
				<p>
					NSF/NIH
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Kera Z. Watkins <br/>
					(WSU: 10/2012-2013)
				</p>
			</td>
			<td>
				<p>
					North Carolina St. U., 2006
				</p>
			</td>
			<td>
				<p>
					PREscription Drug Abuse Online Surveillance and Epidemiology
				</p>
			</td>
			<td>
				<p>
					Lecturer, Wright State University
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Priti Parikh<br/>
					(WSU: 08/2009-12/2011)
				</p>
			</td>
			<td>
				<p>
					Virginia Polytechnic Institute and State University, 2007
				</p>
			</td>
			<td>
				<p>
					Semantics and Services Enabled Problem Solving Environment for Trypanosoma cruzi
				</p>
			</td>
			<td>
				<p>
					Research Director and Asst. Prof., Surgery, Wright State University
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Ramakanth Kavaluru<br/>
					(WSU: 09/2009-07/2011)
				</p>
			</td>
			<td>
				<p>
					U. of Kentucky, 2009
				</p>
			</td>
			<td>
				<p>
					SemDIS: Discovering Complex Relationships in the Semantic Web
				</p>
			</td>
			<td>
				<p>
					Asst. Prof., University of Kentucky
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Farshad Hakimpour<br/>
					(U. of Georgia: 7/2005-7/2006)
				</p>
			</td>
			<td>
				<p>
					U. of Zurich, 2003
				</p>
			</td>
			<td>
				<p>
					SemDis: Discovering Complex Relationships in Semantic Web
				</p>
			</td>
			<td>
				<p>
					Asst. Prof., Tehran University
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					I.Budak Arpinar<br/>
					(U. of Georgia: 12/1998-04/2001)
				</p>
			</td>
			<td>
				<p>
					METU-Turkey, 1997
				</p>
			</td>
			<td>
				<p>
					METEOR: Healthcare Information Infrastructure Program-Enterprise Workflow Automation
				</p>
			</td>
			<td>
				<p>
					Assoc. Prof., University of Georgia
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Shengli Wu<br/>
					(U. of Georgia: 2002-2002)
				</p>
			</td>
			<td>
				<p>
					Southeast University, Nanjing, China, 2000
				</p>
			</td>
			<td>
				<p>
					Extending METEOR with workflow reuse, adaptation, and collaboration
				</p>
			</td>
			<td>
				<p>
					Lecturer
					<br/>
					School of Computing and Mathematics University of Ulster
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Shengli Wu<br/>
					(U. of Georgia: 2002-2002)
				</p>
			</td>
			<td>
				<p>
					Southeast University, Nanjing, China, 2000
				</p>
			</td>
			<td>
				<p>
					Extending METEOR with workflow reuse, adaptation, and collaboration
				</p>
			</td>
			<td>
				<p>
					Lecturer
					<br/>
					School of Computing and Mathematics University of Ulster
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					Yanbo Han<br/>
					(U. of Georgia: 1995-1997)
				</p>
			</td>
			<td>
				<p>
					Technical University of Berlin, 1995
				</p>
			</td>
			<td>
				<p>
					METEOR: Healthcare Information Infrastructure Program-Enterprise Workflow Automation
				</p>
			</td>
			<td>
				<p>
					Professor,
					<br/>
					North China University of Technology.
				</p>
			</td>
		</tr>
	</tbody>
    </table>
</div>