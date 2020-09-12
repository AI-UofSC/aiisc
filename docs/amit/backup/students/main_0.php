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


.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 250px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    opacity: .85;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
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

            <li  id="liSidebar1" class="" id="tab_phds"><a href="#"< onclick="tabClick(1)">PhD</a></li>

            <li id="liSidebar2" class="" id="tab_master"><a href="#" onclick="tabClick(2)">MS with Thesis</a></li>

            <li id="liSidebar3" class="" id="tab_postDocs"><a href="#" onclick="tabClick(3)">Postdoc</a></li>

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
                    Nearly half of my former PhD advisees (11 out of 23 as of July 2016) have over 1,000 citations each; three of them&mdash;<a href="http://scholar.google.com/citations?user=n9JFmAkAAAAJ&hl=en">Jorge Cardoso</a>,
                    <a href="http://scholar.google.com/citations?user=eyVwKs4AAAAJ&hl=en">Kunal Verma</a>, and <a href="https://scholar.google.com/citations?user=igSmY2QAAAAJ&hl=en">Vipul Kashyap</a> have > 5,000 citations each (<a href="https://drive.google.com/file/d/0BzeJBtSxi0JidW5sQjNTa1NfWGM/view">Kunal's position in WWW, 10-year impact</a>). Some had 1,000 around the time they defended their dissertation. Here is a list (Nov. 2014, <a href="http://scholar.google.com/citations?view_op=list_colleagues&hl=en&user=2T3H4ekAAAAJ">see latest citations</a>).
                </p>
<ul>
<li><div class="tooltip">Former advisee(s) with > 1,000 citations
  <span class="tooltiptext"><table style="width:100%; text-align:left;">
  <tr spancol=2>(As of 11/2016)</tr>
  <tr>
    <th style="background:black;border:none;align:left;">Student</th>
    <th style="background:black;border:none;align:left;">Citations</th>
  </tr>
  <tr>
    <td style="color:white;">Jorge Cardoso</td>
    <td style="color:white;">6,214</td>
  </tr>
  <tr>
    <td style="color:white;">Vipul Kashyap</td>
    <td style="color:white;">6,059</td>
  </tr>
  <tr>
    <td style="color:white;">Kunal Verma</td>
    <td style="color:white;">5,858</td>
  </tr>
  <tr>
    <td style="color:white;">Cory Henson</td>
    <td style="color:white;">2,533</td>
  </tr>
  <tr>
    <td style="color:white;">Satya Sahoo</td>
    <td style="color:white;">2,034</td>
  </tr>
  <tr>
    <td style="color:white;">Pablo Mendes</td>
    <td style="color:white;">2,012</td>
  </tr>
  <tr>
    <td style="color:white;">Meena Nagarajan</td>
    <td style="color:white;">1,747</td>
  </tr>
  <tr>
    <td style="color:white;">Karthik Gomadam</td>
    <td style="color:white;">1,584</td>
  </tr>
  <tr>
    <td style="color:white;">Kemafor Anyanwu</td>
    <td style="color:white;">1,565</td>
  </tr>
  <tr>
    <td style="color:white;">Cartic Ramakrishnan</td>
    <td style="color:white;">1,406</td>
  </tr>
  <tr>
    <td style="color:white;">Ajith Ranabahu </td>
    <td style="color:white;">1,314</td>
  </tr>
</table></span>
</div>: <a href="http://scholar.google.com/citations?user=eyVwKs4AAAAJ&hl=en">Kunal Verma</a>,
                        <a href="http://scholar.google.com/citations?user=n9JFmAkAAAAJ&hl=en">Jorge Cardoso</a>,
                        <a href="http://scholar.google.com/citations?user=igSmY2QAAAAJ&hl=en">Vipul Kashyap</a>,
                        <a href="http://scholar.google.com/citations?user=MqYog5sAAAAJ&hl=en">Meena Nagarajan</a>,
                        <a href="http://scholar.google.com/citations?user=an7BPvUAAAAJ">Karthik Gomadam</a>,
                        <a href="http://scholar.google.com/citations?user=tZSWCG0AAAAJ">Cartic Ramakrishnan</a>,
                        <a href="http://scholar.google.com/citations?user=Lmj2JBUAAAAJ">Satya Sahoo</a>,
                        <a href="http://scholar.google.com/citations?user=vdvzlBYAAAAJ">Cory Henson</a>,
                        <a href="http://scholar.google.com/citations?user=v2eraF8AAAAJ">Kemafor Anyanwu</a>,
   <a href="http://scholar.google.com/citations?user=yMhC7tAAAAAJ&hl=en">Pablo Mendes</a>, and
   <a href="http://scholar.google.com/citations?user=YB9-iLQAAAAJ&hl=en">Ajith Ranabahu</a>.

                    </li>

                    <li>
                        Former advisee(s) with > 500 citations:
                            <a href="http://scholar.google.com/citations?user=dw6p89EAAAAJ&hl=en">Christopher Thomas</a>

                    </li>

     <li>
                        Former mentee(s) with > 1,000 citations:
   <a href="https://scholar.google.com/citations?user=nrYfN2AAAAAJ&hl=en">Eduardo Mena</a>,
   <a href="https://scholar.google.com/citations?user=b6JffjsAAAAJ&hl=en">Boanerges Aleman-    Meza</a>, and
   <a href="https://scholar.google.com/citations?user=LQWOrTQAAAAJ&hl=en">Farshad Hakimpour</a>.

                    </li>

                    <li>Average citations of 1,800+ and a mean of 1,378 for his 19 PhD advisees (07/2016).</li>

                </ul>


                <strong>

                        Keynotes at International Events Before Graduation:

                </strong>

                <ul>
                    <li>
                        <a href="http://wiki.knoesis.org/index.php/Cory_Andrew_Henson">Cory Henson</a> gave the keynote at the
                        <a href="http://www.iot-week.eu/overview_2013/iot-week-2012/programme-1/tuesday-1/semantic-interoperability.html">2012 Semantic Interoperability Workshop</a> in Venice,
                        Italy. [<a href="http://www.iot-week.eu/overview_2013/iot-week-2012/programme-1/tuesday-1/presentations/semantic-interoperability/K2_Henson-W3C-SSN-XG-IoTWeek2012.pdf">Slides</a>.]
                    </li>

                    <li>
                        <a href="http://knoesis.wright.edu/researchers/meena/homepage/">Meena Nagarajan</a> gave the keynote at the Social Data on the Web Workshop, collocated with the International Semantic Web
                        Conference (ISWC) 2009. [<a href="http://www.knoesis.org/library/resource.php?id=731">Slides</a>,
                        <a href="https://www.youtube.com/watch?v=-iNARgd5GSM">introduction</a>, and the
                        <a href="http://youtu.be/jcoti3eSXIg">first few minutes</a>.]
                    </li>

                </ul>
                <strong>

                        Major International Awards and Recognition:

                </strong>
                <ul>
                    <li>
                        <a href="http://www.knoesis.org/hemant">Hemant Purohit</a> won the
                        <a href="http://telecomworld.itu.int/take-part/innovate/">UN agency ITU's Telecom World Young Innovators Competition 2014</a>
                        on <a href="https://ideas.itu.int/blog#blog/post/60076">Open Source Technologies for Disaster Management</a>, based on
                        <a href="https://ideas.itu.int/post/58502">ideas from his research</a>. He was awarded on August 2014 from among the 150 applications received worldwide. [<a href="https://www.scribd.com/doc/248474454/SoMeC-Social-Media-Coordination-Hemant-Purohit">Brochure</a>.]
                    </li>

                    <li>
                        <a href="http://www.knoesis.org/researchers/pramod/">Pramod Anantharam</a> was selected for the
                        <a href="http://dssg.io/">Eric & Wendy Schmidt Data Science for Social Good Fellowship</a> for Summer 2014.
                    </li>

                    <li>
                        <a href="http://www.knoesis.org/hemant">Hemant Purohit</a> received a Google, USAID, and ICT4Peace fellowship for CrisisMappers ICCM-2013 at UN Nairobi,
                        and he was selected to be one of eight international fellows, Oct 2013. [Ignite talk:
                        <a href="https://www.youtube.com/watch?v=FQiqslKBcTI">video</a>,
                        <a href="http://www.slideshare.net/knoesis/iccm-2013ignitetalkhemantpurohitunnairobi">slides</a>.]
                    </li>

                    <li>
                        <a href="http://knoesis.wright.edu/researchers/ajith/">Ajith Ranabahu</a> (and the Kno.e.sis team),
                        <a href="http://knoesis.wright.edu/researchers/ajith/awards">technology award at the 2012 Fukuoka Ruby Award Competition</a> awarded by the Fukuoka Center for Overseas Commerce in America. Competition judged by Yukihiro Matsumoto, the creator of the Ruby programming language. Only academic entry out of 81 to get this prestigious award.
                    </li>

                </ul>
                <strong>

                        Invited Talks at Significant Events:


                </strong>
                <ul>
                    <li>
                        <a href="http://knoesis.wright.edu/researchers/pavan/">Pavan Kapanipathi</a> gave an invited talk at the <a href="http://researcher.ibm.com/researcher/view_group_subpage.php?id=5565">IBM's invitational workshop on Frontiers of Cloud Computing and Big Data, 2014</a>.
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
                        [<a href="http://www.knoesis.org/hemant/present/sdm2014">Details and slides</a>]

                    </li>

                    <li>
                        Hemant Purohit (with Patrick Meier, Carlos Castillo, Amit Sheth):
                        <a href="http://www.icwsm.org/2013/program/tutorial/">Crisis Mapping, Citizen Sensing and Social Media Analytics: Leveraging Citizen Roles for Crisis Response</a>,
                        the Seventh International Conference on Weblogs and Social Media (ICWSM-13), Jul. 2013
                        [<a href="http://www.knoesis.org/hemant/present/icwsm2013">Details and slides</a>].
                    </li>

                    <li>
                        Pramod Anantharam (with Payam Barnaghi and Amit Sheth):
                        <a href="http://aida.ii.uam.es/wims13/keynotes.php#tutorials">Data Processing and Semantics for Advanced Internet of Things (IoT) Applications: modeling, annotation, integration, and perception</a> at
                        <a href="http://aida.ii.uam.es/wims13/">WIMS 2013</a>, Madrid, Spain, Jun. 2013
                    </li>

                    <li>
                        Cory Henson (with Payam Barnaghi and Wei Wang):
                        <a href="http://www.knoesis.org/iot-tutorial-ekaw2012/">Data Modeling and Knowledge Engineering for the Internet of Things</a>, at 18th International Conference on Knowledge Engineering and Knowledge Management (2012):
                        <a href="http://www.slideshare.net/andrewhenson/data-Modeling-and-knowledge-engineering-for-the-internet-of-things">presentation</a>.
                    </li>

                    <li>
                        Cartic Ramakrishnan, Meena Nagarajan, Amit Sheth:
                        <a href="http://www.knoesis.org/library/resource.php?id=00329">Text Analytics for Semantic Computing - the good, the bad and the ugly</a>, Second IEEE International Conference on Semantic Computing, Aug. 2008.
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
                         Cory Henson, <strong>Co-Chair</strong> of the <a href="http://www.knoesis.org/ssn2013/">6th International Workshop on Semantic Sensor Networks</a> (held at ISWC 2013).
                     </li>

                     <li>
                         Delroy Cameron, Program Co-Chair of the <a href="http://www.knoesis.org/swlbd2012/">1st International Workshop on the role of Semantic Web in Literature-Based Discovery</a> (SWLBD 2012).

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
                    <a href="http://www.knoesis.org/amit/media">here</a>.
                </p>
                <strong>
                    Student Profiles in the News:

                </strong>
                <ul>
                    <li>
                        Hemant Purohit: <a href="https://www.scribd.com/doc/247523756/Hemant-Purohit-Computational-Social-Scientist-Wright-State-Newsroom">Computational Social Scientist</a>, 11/2014.

                    </li>

                    <li>
                        Pramod Anantharam, <a href="http://webapp2.wright.edu/web1/newsroom/2013/11/22/researchers-work-with-european-union-gains-international-notice/">Researcher’s work with European Union gains international notice</a>, 11/2013.

                    </li>

                    <li>
                        Cory Henson: <a href="https://www.scribd.com/doc/247521085/Cory-Henson-Profile-Data-Master">Data Master: student researcher fusing Web, sensors to create thinking, life saving devices</a>, 03/2013.
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
                    Students are frequent co-inventors on patents (appox. one per year) and IP disclosures filed through Wright State University. On average 2-3 patents are filed per year based on inventions resulting from student's internships at companies such as IBM, Samsung, Bosch, etc. Their participation in industry sponsored research at Kno.e.sis have also led to commercial products such as one from <a href="http://www.ezdi.us/">edDI</a>. Recent patent(s):
                </p>
                <ul>
        <li>
                        Nehal Shah, Amit Sheth, Shreyansh Bhatt, Raxit Goswami, Vatsal Shah, Rahil Kanani, Amrish Patel, Parth Pathak: <a href="http://knoesis.org/?q=node/2773">Data Processing System and Method for Computer-Assisted Coding of Natural Language Medical Text</a>, US 2016/0132648 A1, May 12, 2016.
                    </li>

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
                        [<a href="http://www.knoesis.org/resources/library-resources/files/download/certificate-ajith-2012.jpg">Certificate</a>, <a href="http://www.knoesis.org/resources/library-resources/files/download/glass_plaq-ajith-2012.jpg">Plaque</a>.]

                    </li>

                    <li>
                        Hemant Purohit, Outstanding Student Award, Computer Science department, Wright State Univ., Apr. 2014.
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
                    Too many to list. Practically all my students have received these and often have received multiple travel awards/fellowships. For additional details, visit <a href="http://www.knoesis.org/?q=aboutus/thesis_defense">http://www.knoesis.org/aboutus/thesis_defense</a>.
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
     Sarasi Lalithsena <br>
     PhD (WSU): 04/2018
     <br><br><a href="https://www.linkedin.com/in/sarasi-lalithasena-255b291a/"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/node/2890">Domain-specific Knowledge Extraction from the Web of Data
</a>
    </p>
   </td>
   <td width="204">
   <p>IBM Almaden (IBM Watson)</p>
   </td>
  </tr>

  
  <tr>
   <td width="168">
    <p>
     Vinh Nguyen <br>
     PhD (WSU): 12/2017
     <br><br><a href="https://www.linkedin.com/in/vinhtknguyen/"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/node/2881">Semantic Web Foundations for Representing, Reasoning, and Traversing Contextualized Knowledge Graphs</a>
    </p>
   </td>
   <td width="204">
   <p>National Library of Medicine</p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Kalpa Gunaratna <br>
     PhD (WSU): 04/2017
     <br><br><a href="http://www.linkedin.com/in/kalpagunaratna"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#gunaratna">Semantics-based Summarization of Entities in Knowledge Graphs</a>
    </p>
   </td>
   <td width="204">
   <p>Samsung Research</p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Sujan Perera <br>
     PhD (WSU): 08/2016
     <br><br><a href="https://www.linkedin.com/in/sujan-perera-7a0ab85"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#perera">Knowledge-driven Implicit Information Extraction</a>
    </p>
   </td>
   <td width="204">
   <p>IBM Almaden Research (Watson Health) </p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Lu Chen <br>
     PhD (WSU): 08/2016
     <br><br><a href="https://www.linkedin.com/in/iluchen"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#chen">Mining and Analyzing Subjective Experiences in User Generated Content</a>
    </p>
   </td>
   <td width="204">
   <p>LinkedIn Research</p>
   </td>
  </tr>


  <tr>
   <td width="168">
    <p>
     Ashutosh Jadhav <br>
     PhD (WSU): 04/2016
<br><br><a href="https://www.linkedin.com/in/ashutoshjadhav"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#jadhav">Knowledge-driven Search Intent Mining</a>
    </p>
   </td>
   <td width="204">
   <p><a href="http://researcher.ibm.com/researcher/view.php?person=us-ashutosh">IBM Almaden Research Center</a>
   </p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Pavan Kapanipathi <br>
     PhD (WSU): 04/2016
    <br><br><a href="https://www.linkedin.com/in/pavankapanipathi"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
</p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#kapanipathi">Personalized and Adaptive Semantic Information Filtering for Social Media</a>
    </p>
   </td>
   <td width="204">
   <p>IBM TJ Watson
   </p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Pramod Anantharam <br>
     PhD (WSU): 04/2016
<br><br><a href="https://www.linkedin.com/in/pramodprofile"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
</p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#anantharam">Knowledge-empowered Probabilistic Graphical Models for Physical-Cyber-Social Systems</a>
    </p>
   </td>
   <td width="204">
   <p><a href="http://www.bosch.us/content/language1/html/9764.htm">Bosch Research & Technology Center</a></p>
   </td>
  </tr>


  <tr>
   <td width="168">
    <p>
     Wenbo Wang <br>
     PhD (WSU): 06/2015
    <br><br><a href="https://www.linkedin.com/in/wenbo-wang-71595627"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#wenbo">Automatic Emotion Identification from Text</a>
    </p>
   </td>
   <td width="204">
   <p>
   GoDaddy
   </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Hemant Purohit <br>
     PhD (WSU): 06/2015
    <br><br><a href="https://www.linkedin.com/in/purohithemant"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#hemant">Mining Behavior of Citizen Sensor Communities to Improve Cooperation with Organizational Actors</a>
    </p>
   </td>
   <td width="204">
   <p>
   <a href="http://ist.gmu.edu/~hpurohit/">George Mason University</a>
   </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Delroy Cameron <br>
     PhD (WSU): 12/2014
    <br><br><a href="https://www.linkedin.com/in/delroycameron"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#delroy">A Context-Driven Subgraph Model for Literature-Based Discovery</a>
    </p>
   </td>
   <td width="204">
   <p>
   Apple
   </p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Pablo Mendes <br>
     PhD (WSU): 12/2013
     <br><br><a href="https://www.linkedin.com/in/pablomendes"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#pablo">Adaptive Semantic Annotation of Entity and Concept Mentions in Text</a>
    </p>
   </td>
   <td width="204">
    <p>
     <a href="http://researcher.ibm.com/researcher/view.php?person=us-pnmendes">IBM Almaden Research Center</a> (innovation division for the IBM Watson Computer (Core Technologies))
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Cory Henson <br>
     PhD (WSU): 11/2013
     <br><br><a href="https://www.linkedin.com/in/cory-henson-9140352"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#cory">Semantics-based Approach to Machine Perception</a>
    </p>
   </td>
   <td width="204">
    <p>
     <a href="http://www.bosch.us/content/language1/html/9764.htm">Bosch Research &amp; Technology Center</a>
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Christopher Thomas <br>
     PhD (WSU): 12/2012
     <br><br><a href="https://www.linkedin.com/in/christopher-thomas-4035b43"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#christopher">Knowlwedge Acquisition in a System</a>
    </p>
   </td>
   <td width="204">
    <p>
     Head of NLP R&D at Glint Inc.
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Ajith Ranabahu <br>
     PhD (WSU): 08/2012
     <br><br><a href="https://www.linkedin.com/in/ajithranabahu"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#ajith">Abstraction Driven Application and Data Portability in Cloud Computing</a>
    </p>
   </td>
   <td width="204">
    <p>
     Amazon (member of core cloud platforming group)
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Prateek Jain <br>
     PhD (WSU): 08/2012
     <br><br><a href="https://www.linkedin.com/in/prateekj"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#prateek">Linked Open Data Alignment and Querying</a>
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
     Meena Nagarajan <br>
     PhD (WSU): 08/2010
     <br><br><a href="https://www.linkedin.com/in/m33na"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#meena">Understanding User-Generated Content on Social Media</a>
    </p>
   </td>
   <td width="204">
    <p>
     <a href="http://researcher.watson.ibm.com/researcher/view.php?person=us-MeenaNagarajan">IBM Watson Health</a>
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Satya S. Sahoo <br>
     PhD (WSU): 07/2010
     <br><br><a href="https://www.linkedin.com/in/satya-sahoo-7936a41"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#satya">
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
     <br><br><a href="https://www.linkedin.com/in/gomadam"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#karthik">Semantics Enriched Service Environments</a>
    </p>
   </td>
   <td width="204">
    <p>
     Castlight Health
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
     <a href="http://purl.galileo.usg.edu/uga_etd/maduko_angela_i_200905_phd ">Graph Summaries for Optimizing Graph Pattern Queries on RDF Databases</a>
    </p>
   </td>
   <td width="204">
    <p>
     Teradata; earlier, ADVIS Lab at University of Illinois at Chicago
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
     <a href="http://www.knoesis.org/aboutus/thesis_defense#matthew">A Framework to Support Spatial, Temporal and Thematic Analytics over Semantic Web Data</a>
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
     <br><br><a href="https://www.linkedin.com/in/cartic-ramakrishnan-b634306"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/aboutus/thesis_defense#cartic">
      Extracting, Representing and Mining Semantic Metadata from Text: Facilitating Knowledge Discovery in Biomedicine
     </a>
    </p>
   </td>
   <td width="204">
    <p>
     IBM Research Center, earlier, Datapop; ISI; CCHMC
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Kemafor Anyanwu <br>
     PhD (UGA): 08/2007
     <br><br><a href="https://www.linkedin.com/in/kemafor-anyanwu-ogan-b0766b7"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://knoesis.org/?q=node/2363">
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
     <br><br><a href="https://www.linkedin.com/in/kunalv"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://knoesis.org/?q=node/1988">Configuration and Adaptation of Semantic Web Processes</a>
    </p>
   </td>
   <td width="204">
    <p>
     AppZen (CTO and Co-Founder); formerly, Accenture Labs
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Jorge Cardoso <br>
     PhD (UGA): 08/2002
     <br><br><a href="https://pt.linkedin.com/in/jorge-cardoso-75ba40"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://knoesis.org/?q=node/2361">Quality of Service and Semantic Composition of Workflows</a>
    </p>
   </td>
   <td width="204">
    <p>
     Prof. University of Coimbra; earlier, SAP Research; Asst. Prof., U. Madiera
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
     <a href="http://knoesis.org/?q=node/2364">Knowledge Sharing, Coordinated Exception Handling, and Intelligent Problem Solving for Cross-Organizational Business Processes</a>
    </p>
   </td>
   <td width="204">
    <p>
     <a href="http://www.sustc.edu.cn/en/faculty_finder/f/Luo_Zongwei_eee1">South University of Science and Technology of China</a>; earlier, U. of Hong Kong; IBM Watson Research.
    </p>
   </td>
  </tr>
<tr>
   <td width="168">
    <p>
     Vipul Kashyap <br>
     PhD (Rutgers): 10/1997
     <br><br><a href="https://www.linkedin.com/in/vipulkashyap"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=00092">Information Brokering over Heterogeneous Digital Data</a>
    </p>
   </td>
   <td width="204">
    <p>
     Director, Clinical Decision Support and Knowledge Management at CIGNA; earlier, Partner Healthcare; NLM, Bellcore
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
   Venkatesh Edupuganti<br>
   MS (WSU): 2017
   <br><br><a href="https://www.linkedin.com/in/venkatesh-edupuganti/"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
  </p>
 </td>
 <td width="216">
  <p>
    Harassment Detection on Twitter using Conversations
  </p>
 </td>
 <td width="204">
 <p>
Data Scientist
 </p>
 </td>
</tr>

    <tr>
   <td width="168">
    <p>
     PavanKalyan Yallamelli<br>
     MS (WSU): 2017
     <br><br><a href="https://www.linkedin.com/in/pavankalyan-yallamelli-004b807b/"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     A Co-Training Approach for Multi-View Power Iteration Clustering
    </p>
   </td>
   <td width="204">
   <p>
 RNet-Technologies
   </p>
   </td>
  </tr>

    <tr>
   <td width="168">
    <p>
     Siva Cheekula<br>
     MS (WSU): 2017
     <br><br><a href="https://www.linkedin.com/in/sivakumarcheekula/"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
    Characterizing Concepts in Taxonomy for Entity Recommendations
    </p>
   </td>
   <td width="204">
   <p>
   RxPredict Inc. [Senior Data Scientist]
   </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Adarsh Alex<br>
     MS (WSU): 08/2016
     <br><br><a href="https://www.linkedin.com/in/adarsh-k-alex-576b155b"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://knoesis.org/node/2784">Identifying Tweets with Implicit Entity Mentions</a>
    </p>
   </td>
   <td width="204">
   <p>
    IBM [Senior Strategy Consultant-NLP]
   </p>
   </td>
  </tr>

  <tr>
   <td width="168">
    <p>
     Nishita Jaykumar<br>
     MS (WSU): 05/2016
     <br><br><a href="https://www.linkedin.com/in/nishita-jaykumar-a1b4115b"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>
    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://knoesis.org/?q=node/2751">ResQu: A Framework for Automatic Evaluation of Knowledge-Driven Automatic Summarization</a>
    </p>
   </td>
   <td width="204">
   <p>
    Siemens
   </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Surendra Marupudi<br>
     MS (WSU): 05/2016
     <br><br><a href="https://www.linkedin.com/in/surendramarupudi"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="https://etd.ohiolink.edu/!etd.send_file?accession=wright1472505847&disposition=inline">Framework for Semantic Integration and Scalable Processing of City Traffic Events</a>
    </p>
   </td>
   <td width="204">
   <p>
   Walmart [Data Engineer]
   </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Swapnil Soni<br>
     MS (WSU): 05/2015
     <br><br><a href="https://www.linkedin.com/in/swapnilsonidatascience"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=2209">Domain-specific Document Retrieval Framework for Near Real-time Social Health Data</a>
    </p>
   </td>
   <td width="204">
   <p>
   DropThought
   </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Revathy Krishnamurthy<br>
     MS (WSU): 04/2015
     <br><br><a href="https://www.linkedin.com/in/revathy-krishnamurthy-a6702b54"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
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
     <br><br><a href="https://www.linkedin.com/in/gaurish-anand-303a5834"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
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
     <br><br><a href="https://www.linkedin.com/in/ashwinmanjunatha"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1559">
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
     <br><br><a href="https://in.linkedin.com/in/harshalpatni"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1618">Real TimeSemantic Analysis of Streaming Sensor Data</a>
    </p>
   </td>
   <td width="204">
    <p>
     Entrepreneur; earlier, Zynx Health
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Sujeeth Thirumalai <br>
     MS (UGA): 08/2007 <br>
     (Co-advisor: J. Miller)
     <br><br><a href="https://www.linkedin.com/in/sujeeth-thirumalai-2726b53"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=804">Keyword Search Interface for Path Queries in RDF</a>
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
     <br><br><a href="https://www.linkedin.com/in/bilalgonen"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1738">Semantic Browser</a>
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
     <br><br><a href="https://www.linkedin.com/in/raviexcelacom"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1732">Supporting keyword search on semantic web documents</a>
    </p>
   </td>
   <td width="204">
    <p>
     Manager, Comcast; earlier, Excelacom
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     William Milnor <br>
     MS (UGA): 12/2005
     <br><br><a href="https://www.linkedin.com/in/williemilnor"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=00101">Discovering Informative Subgraphs in RDF Graphs</a>
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
     Swapna Oundhakar <br>
     MS (UGA): 12/2004
     <br><br><a href="https://www.linkedin.com/in/swapna-oundhakar-76073b2"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1742">Semantic Web service discovery in a multi-ontology environment</a>
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
     <br><br><a href="https://ca.linkedin.com/in/rohitagg"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1739">Constraint driven Web service composition in METEOR-S</a>
    </p>
   </td>
   <td width="204">
    <p>
     NetCracker; earlier, senior positions in Convergys
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Christian Halaschek <br>
     MS (UGA): 08/2004 <br>
     (Co-advisor: I.B. Arpinar)
     <br><br><a href="https://www.linkedin.com/in/chalaschek"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1757">
      A Flexible Approach for Ranking Complex Relationships on the Semantic Web
     </a>
    </p>
   </td>
   <td width="204">
    <p>
     CTO &amp; Co-Founder at HashGo; earlier, SemanticSpace Technologies
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Abhijit Patil <br>
     MS (UGA): 12/2003
     <br><br><a href="https://www.linkedin.com/in/patilabhijit"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1760">METEOR-S Web Service Annotation Framework</a>
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
     <br><br><a href="https://www.linkedin.com/in/kaarthik"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1758">The METEOR-S Framework for Semantic Web Process Composition</a>
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
     <br><br><a href="https://www.linkedin.com/in/madhanar"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/download/Madhan_Thesis.pdf">The Peer-to-Peer Semantic Web: A Distributed Environment for Sharing Semantic Knowledge on the Web</a>
    </p>
   </td>
   <td width="204">
    <p>
     Lead Program Manager, Microsoft; earlier, Intel
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Wonjung Kim <br>
     MS (UGA): 12/2001
     <br><br><a href="https://kr.linkedin.com/in/wonjung-kim-ba9b746a"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1564">Knowledge Based Personalization</a>
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
     <br><br><a href="https://www.linkedin.com/in/patelshuchi"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/download/Shuchi_patel_thesis.pdf">Planning and Optimizing Semantic Information Requests on Heterogeneous Information Sources Using Semantically Modeled Domain and Source Characteristics</a>
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
     <a href="http://www.knoesis.org/library/resource.php?id=1535">Knowledge Modeling for Study of Domains and Inter-domain Relationships - A Learning Paradigm</a>
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
     <a href="http://www.knoesis.org/library/resource.php?id=1562">
      Using Collaboration Task in OrbWork Enactment System for METEOR Workflow Management System
     </a>
    </p>
   </td>
   <td width="204">
    <p>
     Earlier, i2 Technologies
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
     <a href="http://www.knoesis.org/library/resource.php?id=1819">
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
     <br><br><a href="https://www.linkedin.com/in/sriram-lakshminarayan-3784862"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/download/Sriram-Thesis.pdf">Semantic Interoperability in Digital Libraries using Inter-Ontological Relationships</a>
    </p>
   </td>
   <td width="204">
    <p>
     Engineering Manager at Elance; earlier, Yahoo!!
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Dilpreet Singh <br>
     MS (UGA): 12/2000
     <br><br><a href="https://www.linkedin.com/in/dilsingh"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1734">
      An Agent Based Architecture for Query Planning and Cost Modeling of Web Sources
     </a>
    </p>
   </td>
   <td width="204">
    <p>
     Co-founder, CTO at Life360; earlier, Director, Kana
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Mukesh Guntamadugu <br>
     MS (UGA): 08/2000
     <br><br><a href="https://www.linkedin.com/in/mukesh-guntamadugu-4b83851"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1755">M&#201;TIS: Automating Metabase Creation from Multiple Heterogeneous Sources</a>
    </p>
   </td>
   <td width="204">
    <p>
     CBS Interactive; earlier, Looksmart
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Subrajit Ray <br>
     MS (UGA): 08/1999
     <br><br><a href="https://www.linkedin.com/in/subhrajitray"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
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
     <br><br><a href="https://www.linkedin.com/in/vineetmahajan"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
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
     <br><br><a href="https://www.linkedin.com/in/clemens-bertram-8930931"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=1753">Metadata and Ontology Based Query Processing in the InfoQuilt System</a>
    </p>
   </td>
   <td width="204">
    <p>
     VP at Goldman Sachs; earlier, VP of Tech at Semagix/Director of Engg at Voquette/Taalee
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Krishnan Parsuraman <br>
     MS (UGA): 12/1998
     <br><br><a href="https://www.linkedin.com/in/kparasuraman"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     Agent Support in the InfoQuilt System
    </p>
   </td>
   <td width="204">
    <p>
     IBM - Digital Media (CTO); earlier, Netezza, Infosys, Exemplary
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Selvam Velmurugan <br>
     MS (UGA): 9/1997
     <br><br><a href="https://www.linkedin.com/in/selvamvelmurugan"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     Collaborative Tele-Consulting for Healthcare: CATCH
    </p>
   </td>
   <td width="204">
    <p>
     Director of Groupon; earlier, Netflix, Amazon;
    </p>
   </td>
  </tr>
  <tr>
   <td width="168">
    <p>
     Srilekha Mudumbai <br>
     MS (UGA): 05/1997
     <br><br><a href="https://www.linkedin.com/in/srilekhamudumbai"><img src="../images/Square_LinkedIn.png" height="25px" width="25px" alt="LinkedIn" title="LinkedIn"></a>    </p>
   </td>
   <td width="216">
    <p>
     <a href="http://www.knoesis.org/library/resource.php?id=00236">ZEBRA Image Access System</a>
    </p>
   </td>
   <td width="204">
    <p>
     Owner (entrepreneur), JitBit; earlier, Lawrence Berkeley National Lab; Verizon;
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
     Saeedeh Shekharpour <br>
	 WSU: 01/2016 - Present)
    </p>
   </td>
   <td>
    <p>
     University of Bonn
    </p>
   </td>
   <td>
    <p>
     HazardSEES, Harassment on Social Media, Kno.e.sis Knowledge Graph Platform
    </p>
   </td>
   <td>
    <p>
     NSF, NIH
    </p>
   </td>
  </tr>
  <tr>
   <td>
    <p>
     Tanvi Banerjee <br/>
     (WSU: 08/2014-7/2016)
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
     Asst. Prof., Computer Sc., Wright State University
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
     North China University of Technology
    </p>
   </td>
  </tr>
 </tbody>
    </table>
</div>
