<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>

<br><br>
<style>
.border
{
border-style:solid;
border-color:#287EC7;
} 

<?php
//#table ,#table1 ,#table2,#table3
//{
//-moz-border-radius-topright: 2em;
//-moz-border-radius-topleft: 2em;
//}
?>

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
#table tr.row td ,#table1 tr.row td ,#table2 tr.row td , #table3 tr.row td
{
color:#000000;
background-color:#F4ED7C;
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
    border-bottom-color:#B7B7B7;
    color: #000;
    background: #F0F0F0;
    border-radius: 0px 0px 0px 0px;
 -moz-border-radius: 6px 6px 0px 0px;
    outline:none;
}
 
ul.tabs li a:hover
{
    border: 1px solid #B7B7B7;
    background:#E0E0E0;
}
 
ul.tabs li.selected a
{
    position: relative;
    top: 0px;
    font-weight:bold;
    background: #76848D;
    border: 1px solid #B7B7B7;
    border-bottom-color: white;
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
            <li id="liSidebar3" class="" id="tab_postDocs"><a href="#" onclick="tabClick(3)">PostDocs</a></li>        
    </ul>
</div>
<div id="div_overView" style="width:566px !important">
    <table id="table3" style="width:566px; padding-top:10px;"> 
        <tr class="rowN" >
            <td style="padding-left:10px;">
                <p>
                    An important measure of my success is whether my advisees/mentees can compete with the those from the top universities in their career choices (most of them have chosen from academia, research,  entrepreneurship). Below are some of the objective measures that demonstrate that they do. Equally important is the progress in their earlier career, which demonstrate their well rounded capabilities that include communication skills, social and networking, innovation, teamwork, mentoring,  and leadership skills; for that see other tabs.
                </p>
                
                <b>Citations as a recognition of publication impact</b>
                <br>
                <p>
                    A majority of former my PhD advisees (9 out of 17 as of Nov 2014) have over 1,000 citations each; two of them -
                    <a href="http://scholar.google.com/citations?user=n9JFmAkAAAAJ&hl=en">Jorge Cardoso</a> and 
                    <a href="http://scholar.google.com/citations?user=eyVwKs4AAAAJ&hl=en">Kunal Verma</a> have > 5,000 citations each (<a href="https://drive.google.com/file/d/0BzeJBtSxi0JidW5sQjNTa1NfWGM/view">Kunal's position in WWW, 10yr impact</a>). 
                    Some had 1,000 around the time they defended their 
                    dissertation. Here is a list (Nov 2014, <a href="http://scholar.google.com/citations?view_op=list_colleagues&hl=en&user=2T3H4ekAAAAJ">see latest</a>)
                </p>
                <ul>
                    <li>
                        Former advisee with > 1000 citations: <a href="http://scholar.google.com/citations?user=eyVwKs4AAAAJ&hl=en">Kunal Verma</a>,
                        <a href="http://scholar.google.com/citations?user=n9JFmAkAAAAJ&hl=en">Jorge Cardoso</a>, 
                        <a href="http://scholar.google.com/citations?user=igSmY2QAAAAJ&hl=en">Vipul Kashyap</a>, 
                        <a href="http://scholar.google.com/citations?user=MqYog5sAAAAJ&hl=en">Meena Nagarajan</a>,
                        <a href="http://scholar.google.com/citations?user=an7BPvUAAAAJ">Karthik Gomadam</a>, 
                        <a href="http://scholar.google.com/citations?user=tZSWCG0AAAAJ">Cartic Ramakrishnan</a>, 
                        <a href="http://scholar.google.com/citations?user=Lmj2JBUAAAAJ">Satya Sahoo</a>, 
                        <a href="http://scholar.google.com/citations?user=vdvzlBYAAAAJ">Cory Henson</a>,  
                        <a href="http://scholar.google.com/citations?user=v2eraF8AAAAJ">Kemafor Anyanwu</a>
                    </li>
                    <li>
                        Former advisee with > 500 citations: 
                        <a href="http://scholar.google.com/citations?user=yMhC7tAAAAAJ&hl=en">Pablo Mendes</a>, 
                        <a href="http://scholar.google.com/citations?user=dw6p89EAAAAJ&hl=en">Christopher Thomas</a>, 
                            <a href="http://scholar.google.com/citations?user=YB9-iLQAAAAJ&hl=en">Ajith Ranabahu</a>
                    </li>
                    <li>
                        Former mentee with > 1000 citations: <a href="http://scholar.google.com/citations?user=nrYfN2AAAAAJ&hl=en">Eduardo Mena</a>
                    </li>
                </ul>
                
                <b>
                   
                        Keynotes at international events before graduation
                    
                </b>
                
                <ul>
                    <li>
                        <a href="http://wiki.knoesis.org/index.php/Cory_Andrew_Henson">Cory Henson</a> gave the keynote at the 
                        <a href="http://www.iot-week.eu/overview_2013/iot-week-2012/programme-1/tuesday-1/semantic-interoperability.html">2012 Semantic Interoperability Workshop</a> in Venice,
                        Italy. <a href="http://www.iot-week.eu/overview_2013/iot-week-2012/programme-1/tuesday-1/presentations/semantic-interoperability/K2_Henson-W3C-SSN-XG-IoTWeek2012.pdf">Slides</a>
                    </li>
                    <li>
                        <a href="http://knoesis.wright.edu/researchers/meena/homepage/">Meena Nagarajan</a> gave the keynote at the 
                        Social Data on the Web Workshop, collocated with the International Semantic Web
                        Conference (ISWC) 2009. <a href="http://knoesis.wright.edu/library/resource.php?id=731">Slides</a>, 
                        <a href="https://www.youtube.com/watch?v=-iNARgd5GSM">Introduction</a>, 
                        <a href="http://youtu.be/jcoti3eSXIg">first few minutes</a>
                    </li>
                </ul>
                <b>
                   
                        Major International Awards and Recognition
                     
                </b>
                <ul>
                    <li>
                        <a href="http://knoesis.org/hemant">Hemant Purohit</a> won 
                        <a href="http://telecomworld.itu.int/take-part/innovate/">UN agency ITU's Telecom World Young Innovators Competition 2014</a> 
                        on <a href="https://ideas.itu.int/blog#blog/post/60076">Open Source Technologies for Disaster Management</a>, based on 
                        <a href="https://ideas.itu.int/post/58502">idea from his research</a> among 150 worldwide applications, Aug 2014. <a href="https://www.scribd.com/doc/248474454/SoMeC-Social-Media-Coordination-Hemant-Purohit">Brochure</a>
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
                        <a href="http://knoesis.wright.edu/researchers/ajith/awards">Technology award at the 2012 Fukuoka Ruby Award Competition</a> awarded by the Fukuoka Center 
                        for Overseas Commerce in America. Competition judged by Yukihiro Matsumoto, the creator of the Ruby programming language. Only academic entry out
                        of 81 to get this prestigious award.
                    </li>
                </ul>
                <b>
                   
                        Invited Talks at significant events

                   
                </b>
                <ul>
                    <li>
                        <a href="http://knoesis.wright.edu/researchers/pavan/">Pavan Kapanipathi</a> gave an invited talk at the 
                        <a href="http://researcher.ibm.com/researcher/view_group_subpage.php?id=5565">IBM's invitational workshop on Frontiers of Cloud Computing and Big Data, 2014</a>
                    </li>
                </ul>
                <b>
                   
                        Tutorials at Major Conferences given before graduation (partial list)
                   
                </b>
                <ul>
                    <li>
                        Hemant Purohit (with <a href="http://www.chato.cl/research/">Carlos Castillo</a> and <a href="http://research.microsoft.com/en-us/people/fdiaz/">Fernando Diaz</a>):  
                        <a href="http://www.siam.org/meetings/sdm14/tutorials.php">Leveraging Social Media and Web of Data for assisting Crisis Response Coordination</a> ,
                        SIAM Int'l Conf on Data Mining (SDM-2014), Apr 2014 
                        (<a href="http://knoesis.org/hemant/present/sdm2014">Details and Slides</a>)

                    </li>
                    <li>
                        Hemant Purohit (with Patrick Meier, Carlos Castillo, Amit Sheth): 
                        <a href="http://www.icwsm.org/2013/program/tutorial/">Crisis Mapping, Citizen Sensing and Social Media Analytics: Leveraging Citizen Roles for Crisis Response</a>, 
                        the Seventh International Conference on Weblogs and Social Media (ICWSM-13), Jul 2013 
                        (<a href="http://www.knoesis.org/hemant/present/icwsm2013">Details and Slides</a>).
                    </li>
                    <li>
                        Pramod Anantharam (with Payam Barnaghi and Amit Sheth): 
                        <a href="http://aida.ii.uam.es/wims13/keynotes.php#tutorials">Data Processing and Semantics for Advanced Internet of Things (IoT) Applications: modeling, annotation, integration, and perception</a> at 
                        <a href="http://aida.ii.uam.es/wims13/">WIMS 2013</a>, Madrid, Spain, Jun 2013
                    </li>
                    <li>
                        Cory Henson (with Payam Barnaghi and Wei Wang): 
                        <a href="http://knoesis.org/iot-tutorial-ekaw2012/">Data Modeling and Knowledge Engineering for the Internet of Things</a>, at 18th Intl Conf on Knowledge Engineering and Knowledge Management (2012): 
                        (<a href="http://www.slideshare.net/andrewhenson/data-modelling-and-knowledge-engineering-for-the-internet-of-things">presentation</a>)
                    </li>
                    <li>
                        Cartic Ramakrishnan, Meena Nagarajan, Amit Sheth: 
                        <a href="http://knoesis.org/library/resource.php?id=00329">Text Analytics for Semantic Computing - the good, the bad and the ugly</a>, Second IEEE International Conference on Semantic Computing, Aug 2008.
                    </li>
                    <li>
                        Kunal Verma (with Amit Sheth): 
                        <a href="http://lists.w3.org/Archives/Public/www-archive/2007May/att-0081/SAWSDL-STC07-May21.ppt">Using SAWSDL for Semantic Service Interoperability</a>,
                        Semantic Technology Conference, San Jose, CA, May 21, 2007.
                    </li>
                </ul>
                <b>
                    
                        Chairing Program Committees, Journal Editorship, Panels or Significant Organizational Roles before graduation
                   
                </b>
                <ul>
                    <li>
                        Hemant Purohit, Co-chair for the AAAI Spring Symposium 2015: 
                        <a href="http://www.knoesis.org/hemant/symposium/aaai2015">Structured Data for Humanitarian Technologies: Perfect fit or Overkill?</a>, July 2014.
                     </li>
                     <li>
                         Cory Henson, <b>Co-Guest Editor</b>, <a href="http://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=6468014">Special Issue on the Web of Things</a> , IEEE Intelligent Systems, Nov/Dec 2013.
                     </li>
                     <li>
                         Cory Henson, <b>Co-Chair</b> of the <a href="http://knoesis.org/ssn2013/">6th Intl Workshop on Semantic Sensor Networks</a> (held at ISWC 2013).
                     </li>
                     <li>
                         Delroy Cameron, Program Co-Chair of the <a href="http://knoesis.org/swlbd2012/">1st Intl Workshop on the role of Semantic Web in Literature-Based Discovery</a> (SWLBD 2012).

                     </li>
                     <li>
                         Cory Henson, <b>Co-Chair</b> of the <a href="http://ceur-ws.org/Vol-904/">5th Intl Workshop on Semantic Sensor Network</a> (held at ISWC 2012).
                     </li>
                     <li>
                         Meena Nagarajan, Invited <b>Panel Presentation</b> at the Search in Social Media Workshop, collocated with the Third ACM International Conference on Web Search and Data Mining, 2010.
                     </li>
                </ul> 
                <b>
                   
                        Media Coverage: 
                   
                </b>
                <p>
                    Students activities have appeared in many influential media articles and influential posts: Time.com, Daily Mail (UK), Fast Company, La Croix, The Hindu, Hindustan Times, MIT Technology Review, Tech President. See more 
                    <a href="http://knoesis.org/amit/media">here</a>.
                </p>
                <b>
                  
                       Student Profiles in News:
                  
                </b>
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
                <b>
                    
                        Major Standards Contributions/Leadership/Editorship:
                  
                </b>
                <ul>
                    <li>
                        Hemant Purohit, Invited as subject matter expert by the DHS S&T institute, for bridging socio-technical communication gap between technologists and emergency managers during emergency response exercise of federal agencies at JIFX, Feb 2014.

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
                <b>
                    Intellectual Property, Innovations and Commercialization
                </b>
                <p>
                    Students are frequent co-inventors on patents (appox. one per year) and IP disclosures filed through Wright State University.
                    On average 2-3 patents are filed per year based on inventions resulting from student's internships at 
                    companies such as IBM, Samsung, Bosch, etc. Their participation in industry sponsored research at Kno.e.sis have
                    also led to commercial products such as one from <a href="http://www.ezdi.us/">edDI</a>. Recent patent:
                </p>
                <ul>
                    <li>
                        Amit Sheth, Karthik Gomadam, Meena Nagarajan: <a href="http://www.lens.org/lens/patent/US_8688791_B2">Methods And Systems For Analysis Of Real-time User-generated Text Messages</a>, US 8688791 B2, April 1, 2014.
                    </li>
                </ul>
                <b>
                   
                        University/College Recognition: Best/Outstanding PhD student in Computer Science
                   
                </b>
                <ul>
                    <li>
                        Ajith Ranabahu, <b>Presidential Commendation for Excellence</b> in co-Curricular activities awarded by President David R. Hopkins, 2011-2012. 
                        <a href="http://knoesis.org/resources/library-resources/files/download/certificate-ajith-2012.jpg">Certificate</a>, 
                        <a href="http://knoesis.org/resources/library-resources/files/download/glass_plaq-ajith-2012.jpg">Plaque</a>

                    </li>
                    <li>
                        Hemant Purohit, Outstanding Student Award, Computer Science department, Wright State Univ., Apr 2014
                    </li>
                    <li>
                        WSU Graduate Student Excellence Award for Ph.D. in Computer Science and Engineering (basically the best student in our CS program as selected by a faculty committee): Cory Henson, 2013; Prateek Jain, 2012; Ajith Ranabahu, 2011; Meenakshi Nagarajan, 2010; Karthik Gomadam, 2009.

                    </li>
                    <li>
                        Ashwin Manjunatha, Best MS Student Award in Computer Science, Graduate School, Wright State University, 2011.
                    </li>
                </ul>
                <b>
                   
                         Program Committees in top conferences before graduation 
                   
                </b>(a small sample)
                <p>
                    Lu Chen (WebSci-2014, SocInfo-2014, SocInfo-2013),  Pramod Anantharam (WWW 2015, ISWC 2014, ), Hemant Purohit (ICWSM 2015, ISCRAM 2015, HICSS 2014, WWW 2014, SocInfo-2014/2013), Cory Henson (ESWC 2010/2011/2012/2013, ISWC 2013, EKAW 2012 ), Meena Nagarajan (ISWC 2007, CIKM 2007, WSDM 2009, ICWSM 2010, ESWC 2010), …
                 </p>
                <p>
                    Several PhD students have been invited for and served on over 15 PCs before graduating.
                </p>
                <b>
                   
                        Student Fellowship and Travel Awards
                   
                </b>
                <p>
                    Too many to list, practically all students have received these, often multiple of them.

                </p>
            </td>
        </tr>
    </table>
</div>
<div id="div_phds" style="width:566px !important; display:none">
<table id="table" style="width:566px">
    <tr id="row">
        <th style="max-width: 50px;">Name</th>
        <th style="max-width: 275px;">Thesis</th>
        <th style="max-width: 150px;">Jobs/Career</th>
        <th style="max-width: 25px;">Misc.</th>
    </tr>
    <tr class="rowN">
        <td>Pablo Mendes<br><br>

                        PhD (WSU): 04/2013 <br><br>
                        <a href="http://www.linkedin.com/in/pablomende">Linkedin Profile</a>
        </td>

        <td>“Adaptive Semantic Annotation of Entity and Concept Mentions in Text,” December 2013. </td>
        <td> IBM Almaden Research Center (innovation division for the IBM Watson Computer (Core Technologies)).</td>
        <td>If you know DBPedia Spotlight, you know Pablo. At Kno.e.sis, he also developed more open source tools, including Twarql and Cuebee.
        </td>
    </tr>
    <tr class="row">
        <td>Cory Henson <br><br>

                        PhD (WSU): 09/2013 <br><a href=" http://www.linkedin.com/pub/cory-henson/2/35/914">Linkedin Profile</a>
        </td>

        <td>A Semantics-based Approach to Machine Perception Senior Research Engineer</td>
        <td>Bosch Research & Technology Center</td>
        <td>Before graduating, Cory played leading role in W3C SSN, had about 25 publications with nearly 1000 citations, was PC co-chair of 3 ISWC-SSN workshops, and gave a keynote at a IoT event in Venice.</td>
    </tr>
    <tr class="rowN">
        <td>Pratikkumar Desai <br><br>

                        PhD (WSU): 04/2013 <br><br>
                        Co-advisor: Prof. Kuldip Rattan, EE <br><br>
                        <a href="http://www.linkedin.com/in/pratikkumardesai">Linkedin Profile</a>
        </td>

        <td>A Situation Awareness Framework for Indoor Cyber-Physical Systems Aided by Fuzzy Abductive Reasoning and Semantic Web</td>
        <td>Seer Labs, Inc</td>
        <td>Pratik's research on contextual situational awareness and indoor location awareness supports
        contextual data, ambiguity in domain knowledge, interoperability between interconnected systems and effective utilization of spatial information.
        </td>
    </tr>

    <tr class="row">
        <td>Christopher Thomas <br><br>

                        PhD (WSU): 12/2012 <br><a href="http://www.linkedin.com/pub/christopher-thomas/3/5b4/403">Linkedin Profile</a>
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1799">Knowledge Acquisition in a System</a></td>
        <td><a href="http://www.sisa.samsung.com/">Samsung R&D Center</a></td>
        <td>Topher developed Doozer to automatically create a domain model from a few keywords by mining Wikipedia.</td>
    </tr>
    <tr class="rowN">
        <td>Ajith Ranabahu <br><br>

                        PhD (WSU): 08/2012 <br><a href="http://www.linkedin.com/in/ajithranabahu">Linkedin Profile</a>
        </td>

        <td>Abstraction Driven Application and Data Portability in
        Cloud Computing</td>
        <td>Amazon's core Cloud Platform group
        </td>
        <td> Ajith's MobiCloud system received Technology Innovation award at the Fukuoka Ruby competition- it was the only academic institution to get the award.</td>
    </tr>
    <tr  class="row">
        <td>Prateek Jain <br><br>

                        PhD (WSU): 08/2012ccc<br><a href="http://www.linkedin.com/in/prateekj">Linkedin Profile</a>
        </td>
        <td>Linked Open Data Alignment and Querying</td>
        <td>IBM TJ Watson Research Center</td>
        <td>Prateek worked on widely recognized work on ontology alignment which was embodied in his BLOOMS++ tools.</td>
    </tr>
    <tr class="rowN">
        <td>Angela Maduko <br><br>
            PhD (WSU): 05/2009 <br><br>
            Co-advisor: John A. Miller<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://www.knoesis.org/library/resource.php?id=1751">Graph summaries for optimizing graph pattern queries on RDF databases</a></td>
        <td>Teradata; earlier: ADVIS Lab at University of Illinois at Chicago</td>
        <td></td>
    </tr>

    <tr class="row">
        <td>Karthik Gomadam <br><br>
            PhD (WSU): 08/2009<br><a href="http://www.linkedin.com/in/gomadam">Linkedin Profile</a>
        </td>
        <td><a href="http://www.knoesis.org/library/resource.php?id=1021">Semantics Enriched Service Environments</a></td>
        <td>Accenture Labs; Earlier: Univ. of Southern California</td>
        <td><a href="https://docs.google.com/file/d/0BzeJBtSxi0JiNjBhNGQzY2MtYjdhMi00YzU4LTkzNTUtNzZkYWM0OTdmNWQ0/edit?hl=en_US">Kats was listed at the 22nd place in WWW in the list of 5 year impact by the Microsoft Academic Search on 11/29/2011. Quite an achievement!.</a>Quite an achievement! </td>
    </tr>

    <tr class="rowN">
        <td>Satya S. Sahoo <br><br>
            PhD (WSU): 08/2010<br><a href="http://www.linkedin.com/pub/satya-sahoo/1/6a4/793">Linkedin Profile</a>
        </td>
        <td><a href="http://www.knoesis.org/library/resource.php?id=1751">Semantic Provenance: Modeling, Querying, and Application in Scientific Discover</a></td>
        <td>Case Western Research Univ (Asst. Prof.)</td>
        <td>Satya defined semantic (domain-specific) provenance. He is a poster-child for Kno.e.sis when demonstrating success in multidisciplinary research: He has bachelors in Statistics, received PhD in CS working on a NIH funded R01, and was recruited in CWRU’s School of Medicine!</td>
    </tr>

    <tr class="row">
        <td>Meenakshi Nagarajan <br><br>
            PhD (WSU): 07/2010<br><a href="http://www.linkedin.com/pub/meena-nagarajan/2/4a1/70a?trk=pub-pbmap">Linkedin Profile</a>
        </td>
        <td><a href="http://www.knoesis.org/library/resource.php?id=850">Understanding User-Generated Content on Social Media</a></td>
        <td>IBM Almaden Research Center</td>
        <td>Meena did pioneering work on extracting and understanding User Generated Content, and has made a place for herself in the global research community. She had a distinction of giving a keynote at an international event before she defended her dissertation.</td>
    </tr>

    <tr class="rowN">
        <td>Matthew Perry <br><br>
            PhD (WSU): 07/2008<br><!--<a href="http://www.linkedin.com/in/ajithranabahu">Linkedin Profile</a>-->
        </td>
        <td><a href="http://knoesis.org/library/resource.php?id=00322">A Framework to Support Spatial, Temporal and Thematic Analytics over Semantic Web Data</a></td>
        <td>Oracle</td>
        <td>Matt’s dissertation title is fairly descriptive.</td>
    </tr>

    <tr class="row">
        <td>Cartic Ramakrishnan <br><br>
            PhD (WSU): 09/2008<br><a href="http://www.linkedin.com/pub/cartic-ramakrishnan/6/430/b63">Linkedin Profile</a>
        </td>

        <td><a href="http://knoesis.wright.edu/library/resource.php?id=00335">Extracting, Representing and Mining Semantic Metadata from Text: Facilitating Knowledge Discovery in Biomedicine</a></td>
        <td>IBM Alamaden Research Center;<br> Earlier: Datapro, ISI, CCHMC</td>
        <td>Cartic ‘s contributions were in Unsupervised Identification/extraction of compound entities/relationships in biomedical text, and subgraph discovery over multi-relational networks.</td>
    </tr>
    <tr class="rowN">
        <td>Kemafor Anyanwu <br><br>
            PhD (UGA): 08/2007<br><a href="http://www.linkedin.com/pub/kemafor-anyanwu-ogan/7/66b/b07">Linkedin Profile</a>
        </td>
        <td><a href="http://www.knoesis.org/library/resource.php?id=1737">Supporting Link Analysis using Advanced Querying Methods on Semantic Web Databases</a></td>
        <td>Asst. Prof.: North Carolina State University</td>
        <td>Kemafor’s make pioneering contributions in finding meaningful paths/relationships in Semantic Web data, which was documented in her series of WWW Conf  (2003/2005/2007) papers</td>
    </tr>

    <tr class="row">
        <td>Kunal Verma <br><br>
           PhD(UGA): 08/2006 <br><br>
           Co-advisor: John A. Miller<br><a href="http://www.linkedin.com/in/kunalv">Linkedin Profile</a>
        </td>
        <td><a href="http://knoesis.org/library/resource.php?id=1563">Configuration and Adaptation of Semantic Web Processes</a></td>
        <td>Appzen;<br> Earlier Accenture Labs</td>
        <td>Kunal did pioneering work on adaptive and autonomic semantic web services/workflows and was core member of WSDL-S submission that later led to SAWSDL, a W3C standard.<a href="https://docs.google.com/file/d/0BzeJBtSxi0JiNjBhNGQzY2MtYjdhMi00YzU4LTkzNTUtNzZkYWM0OTdmNWQ0/edit?hl=en_US"> Kunal was listed at the 38nd place in WWW in the list of 5 year impact by the Microsoft Academic Search on 11/29/2011</a></td>
    </tr>
    <tr class="rowN">
        <td>Jorge Cardoso <br><br>
            PhD (UGA): 08/2002<br><a href="http://pt.linkedin.com/pub/jorge-cardoso/0/a40/75b">Linkedin Profile</a>
        </td>
        <td><a href="http://knoesis.org/library/resource.php?id=1759">Quality of Service and Semantic Composition of Workflows</a></td>
        <td>Prof. University of Coimbra; earlier: SAP Research; Asst. Prof., U. Madiera</td>
        <td>Jorge’s did early work addressed QoS issues in Semantic Web Services/Processes, resulting in this <a href="http://scholar.google.com/citations?view_op=view_citation&hl=en&user=2T3H4ekAAAAJ&citation_for_view=2T3H4ekAAAAJ:rHJHxKgnXwkC">highly cited paper in Web Semantics</a>. </td>
    </tr>
    <tr class="row">
        <td>Zongwei Luo <br><br>
             PhD (UGA): 02/2001<br><!--<a href="">Linkedin Profile</a>-->
        </td>
        <td><a href="http://knoesis.org/library/resource.php?id=1733">Knowledge Sharing, Coordinated Exception Handling, and Intelligent Problem Solving for Cross–Organizational Business Processes</a></td>
        <td>Assoc. Prof., South University of Science and Technology of China ; Earlier: U of Hong Kong; IBM Watson Research.</td>
        <td>Zongwei did early work on <a href="http://scholar.google.com/citations?view_op=view_citation&hl=en&user=2T3H4ekAAAAJ&pagesize=100&citation_for_view=2T3H4ekAAAAJ:O0nohqN1r9EC">exception handling in distributed workflows.</a></td>
    </tr>
    <tr class="rowN">
        <td>Vipul Kashyap<br><br>
            PhD (Rutgers): 10/1997 <br><br><a href="http://www.linkedin.com/in/vipulkashyap">Linkedin Profile</a>
        </td>
        <td>Information Brokering over Heterogeneous Digital Data</td>
        <td>Director, Clinical Decision Support and Knowledge Management at CIGNA; earlier: Partner Healthcare; NLM, Bellcore</td>
        <td>Vipul made key contributions to semantic proximity (1992, 1996)), semantic information brokering (1993, 1994), multi-ontology query processing (OBSERVER: 1996).</td>
    </tr>
   </table>
</div>
<div id="div_master" style="width:566px !important; display:none">
    <table id="table1" style="width:566px">
        <tr id="row1">
            <th style="max-width: 50px;">Name</th>
            <th style="max-width: 275px;">Thesis</th>
            <th style="max-width: 150px;">Jobs/Career</th>
            <th style="max-width: 25px;">Misc.</th>
        </tr>
        <tr class="rowN">
            <td>Ashwin Manjunatha <br><br>

                            MS (WSU): 06/2011<br><a href="http://www.linkedin.com/pub/ashwin-manjunatha/21/936/229">Linkedin Profile</a>
            </td>

            <td><a href="http://knoesis.org/library/resource.php?id=1559">A Domain Specific Language Based Approach for Developing Complex Cloud Computing Applications</a></td>
            <td>Cisco (earlier EMC Corp)</td>
            <td>Ashwin worked with Ajith Ranabahu in our award winning mobicloud project, and had an excellent sets of publications for a MS.</td>
        </tr>
        <tr class="row">
            <td>Harshal Patni <br><br>

                            MS (WSU): 03/2011<br><a href="http://www.linkedin.com/in/harshalpatni">Linkedin Profile</a>
            </td>

            <td><a href="http://knoesis.org/library/resource.php?id=1618">Real Time Semantic Analysis of Streaming
            Sensor Data</a></td>
            <td>Entrepreneur (earlier Zynx Health)</td>
            <td>Harshal worked on Linked Sensor Data and Real-time Feature Streams with Cory Henson and others, and had excellent sers of publications for a MS.</td>
        </tr>

        <tr class="rowN">
            <td>Sujeeth Thirumalai <br><br>

                            MS (UGA): 08/2007 <br><br>
                            Co-advisor: J. Miller<br><!--<a href="http://www.linkedin.com/in/ajithranabahu">Linkedin Profile</a>-->
            </td>

            <td><a href="http://knoesis.org/library/resource.php?id=804">Keyword Search Interface for Path Queries on Ontology</a></td>
            <td>Akamai Technologies</td>
            <td>Sujeeth developed a search interface for path queries on ontologies, which accepts keywords and finds answers where each answer is a subgraph containing paths between nodes that match the keywords.</td>
        </tr>

        <tr class="row">
            <td>Bilal Gonen <br><br>

                            MS (UGA): 08/2006<br><!--<a href="">Linkedin Profile</a>-->
            </td>

            <td><a href="http://www.knoesis.org/library/resource.php?id=1738">Semantic Browser</a></td>
            <td>University of West Florida (Asst. Prof.)</td>
            <td>Bilal’s thesis was probably the first one on the topic of semantic browsing. He pursued his PhD in Univ. of Nevada before starting his academic career.</td>
        </tr>

        <tr class="rowN">
            <td>Ravi Pavagada <br><br>

                            MS (UGA): 08/2006<br><!--<a href="">Linkedin Profile</a>-->
            </td>

            <td><a href="http://knoesis.org/library/resource.php?id=1732">Supporting keyword search on semantic web documents</a></td>
            <td>Manager, Comcast; earlier: Excelacom</td>
            <td>Ravi worked with Kemafor in developing an interesting semantic search, whereby search term is extended using ontological classes, literals and relationships. The results returned by our system are either a set of triples or a subgraph relevant to the query.</td>
        </tr>

        <tr class="row">
            <td>William Milnor <br><br>

                            MS (UGA): 12/2005<br><!--<a href="">Linkedin Profile</a>-->
            </td>

            <td><a href="http://knoesis.org/library/resource.php?id=00101">Discovering Informative Subgraphs in RDF Graphs</a></td>
            <td>Topquadrant</td>
            <td>William developed a novel semantic search technique that discovers informative subgraphs within RDF graphs.</td>
        </tr>

        <tr class="rowN">
            <td>Swapna Oundhakar <br><br>

                            MS (UGA): 12/2004<br><!--<a href="">Linkedin Profile</a>-->	
            </td>

            <td><a href="http://knoesis.org/library/resource.php?id=1742">Semantic Web service discovery in a multi-ontology environment</a></td>
            <td>ADP</td>
            <td>Swapna worked on semantic web service discovery in a multi-ontology environment.</td>
        </tr>

        <tr class="row">
            <td>Rohit Aggrawal <br><br>

                            MS (UGA): 08/2004 <br><br>
                            Co-adviser: John Miller<br><!--<a href="">Linkedin Profile</a>-->
             </td>

            <td><a href="http://knoesis.org/library/resource.php?id=1739">Constraint driven Web service composition in METEOR-S</a> </td>
            <td>NetCracker; earlier: senior positions in Convergys</td>
            <td>Rohit’s work involved developing techniques by which process designers can bind Web Services to an abstract process, based on business and process constraints and generate an executable workflows.</td>
        </tr>

        <tr class="rowN">
        <td>Christian Halaschek-Wiener <br><br>

                        MS (UGA): 08/2004  <br><br>
                        Co-adviser: I.B. Arpinar<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1757">A Flexible Approach for Ranking Complex Relationships on the Semantic Web</a></td>
        <td>CTO & Co-Founder at HashGo; earlier: SemanticSpace Technologies</td>
        <td>Chris initially joined a VC and now has his own startup.</td>
        </tr>

        <tr class="row">
        <td>Abhijit Patil <br><br>

                        MS (UGA): 12/2003<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1760">METEOR-S Web Service Annotation Framework</a></td>
        <td></td>
        <td>Abhijit’s work with Kunal published in <a href="http://scholar.google.com/citations?view_op=view_citation&hl=en&user=2T3H4ekAAAAJ&citation_for_view=2T3H4ekAAAAJ:AXkvAH5U_nMC">WWW2004</a> is highly cited.</td>
        </tr>

        <tr class="rowN">
        <td>Kaarthik Sivashanmugam (SK) <br><br>

                        MS (UGA): 08/2003  <br><br>
                        Co-adviser: John Miller<br><a href="http://www.linkedin.com/in/kaarthik">Linkedin Profile</a>
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1758">The METEOR-S Framework for Semantic Web Process Composition</a></td>
        <td>Microsoft</td>
        <td>With SK and Kunal, we forwarded four types of semantics covered in this <a href="http://scholar.google.com/citations?view_op=view_citation&hl=en&user=2T3H4ekAAAAJ&citation_for_view=2T3H4ekAAAAJ:6_hjMsCP8ZoC">highly cited ICWS2003 paper</a> that has been adopted by many later.</td>
        </tr>

        <tr class="row">
        <td>Madhan Arumugam <br><br>

                        MS (UGA): 12/2001<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1560">The Peer-to-Peer Semantic Web: A Distributed Environment for Sharing Semantic Knowledge on the Web</a></td>
        <td>Lead Program Manager, Microsoft; earlier: Intel</td>
        <td>We were early in anticipating that future environments will have many ontologies, so this 2000/2001 work on <a href="http://scholar.google.com/citations?view_op=view_citation&hl=en&user=2T3H4ekAAAAJ&pagesize=100&citation_for_view=2T3H4ekAAAAJ:jSAVyFp_754C">a system to search for relevant ontologies</a>  was perhaps earliest on that topic.
        </td>
        </tr>

        <tr class="rowN">
        <td>Wonjung Kim <br><br>

                        MS (UGA): 12/2001<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1564">Knowledge Based Personalization</a></td>
        <td>Samsung</td>
        <td>How would you find an ontology from among thousands exisiting ones that is best capable to describe user’s information need? This is the core issue Kim tries to address.</td>
        </tr>

        <tr class="row">
        <td>Shuchi Patel <br><br>

                        MS (UGA): 08/2001<br><a href="https://www.linkedin.com/pub/shuchi-patel/2/130/578">Linkedin Profile</a>
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1754">Planning and Optimizing Semantic Information Requests on Heterogeneous Information Sources Using Semantically Modeled Domain and Source Characteristics</a></td>
        <td ="">Tech Lead at Verizon</td>
        <td ="">CooPIS paper that captures Shuchi’s work.</td>
        </tr>

        <tr class="rowN">
        <td>Sanjeev Thacker <br><br>

                        MS (UGA): 08/2001<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1535">Knowledge Modeling for Study of Domains and Inter–domain Relationships – A Learning Paradigm</a></td>
        <td></td>
        <td>InfoQuilt made early contributions on systems involving multiple ontologies, inter-ontlogical relationships, Information Scapes, and complex relationships including causality. 
        <a href="http://knoesis.org/library/resource.php?id=00178">VLDBJ InfoQuilt paper that captures Sanjeev and Shuchi’s work.</a></td>
        </tr>

        <tr class="row">
        <td>Zhongqiao Li <br><br>

                        MS (UGA): 08/2000<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1562">Using Collaboration Task in OrbWork Enactment System for METEOR Workflow Management System</a></td>
        <td>earlier: i2 Technologies</td>
        <td></td>
        </tr>

        <tr class="rowN">
        <td ="">Naraynan Palsena <br><br>

                        MS (UGA): 08/2000<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1819">A Framework for Creating Information Landscapes and Modeling Metadata in the Context of Digital Earth</a></td>
        <td>SAP</td>
        <td></td>
        </tr>

        <tr class="row">
        <td>Sriram Lakshminarayan <br><br>

                        MS (UGA): 08/2000<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1561"> Semantic Interoperability in Digital Libraries using Inter–Ontological Relationships</a></td>
        <td>Engineering Manager at Elance; earlier: Yahoo!</td>
        <td></td>
        </tr>

        <tr class="rowN">
        <td>Dilpreet Singh <br><br>

                        MS (UGA): 12/2000<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1734">An Agent Based Architecture For Query Planning And Cost Modeling Of Web Sources</a></td>
        <td>Cofounder, CTO at Life360; earlier: Director, Kana </td>
        <td></td>
        </tr>

        <tr class="row">
        <td>Mukesh Guntamadugu <br><br>

                        MS (UGA): 08/2000<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1755">MÉTIS: Automating Metabase Creation from Multiple Heterogeneous Sources</a></td>
        <td>CBS Interactive; Earlier: Looksmart</td>
        <td></td>
        </tr>

        <tr class="rowN">
        <td>Subhrajit Ray <br><br>

                        MS(UGA):<br> 08/1999<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td>Ontology-based Media Independent Correlation of Information Across Heterogeneous Distributed Sources</td>
        <td>VP, Deutsche Bank</td>
        <td></td>
        </tr>

        <tr class="row">
        <td>Vineet Mahajan <br><br>

                        MS(UGA):<br> 08/1999<br><a href="http://www.linkedin.com/in/vineetmahajan">Linkedin Profile</a>
        </td>

        <td>A Multi-Agent System for Metadata Management and Information Brokering</td>
        <td>SmartBrief (CTO);<br> Earlier Interim CTO at HuffingtonPost; VP at AOL; </td>
        <td></td>
        </tr>

        <tr class="rowN">
        <td>Clemens Bertram <br><br>

                        MS(UGA):<br> 12/1988<br><a href="https://www.linkedin.com/pub/clemens-bertram/1/93/893">Linkedin Profile</a>
        </td>

        <td><a href="http://knoesis.org/library/resource.php?id=1753">Metadata and Ontology Based Query Processing in the InfoQuilt System</a></td>
        <td>VP at Goldman Sachs; earlier: VP of Tech at Semagix/Director of Engg at Voquette/Taalee </td>
        <td> Clemens played a key role in developing Taalee/Semagix technology (founded by me). <a href="http://knoesis.org/library/resource.php?id=00319">VideoAnywhere</a> system developed at LSDIS/UGA was licensed by me to found Taalee, leading to this <a href="http://knoesis.org/library/resource.php?id=1843">first patent on Semantic Web based system</a>.</td>
        </tr>

        <tr class="row">
        <td>Krishnan Parsuraman <br><br>

                        MS(UGA):<br> 12/1988<br><a href="https://www.linkedin.com/in/kparasuraman">Linkedin Profile</a>
        </td>

        <td>Agent Support in the InfoQuilt System</td>
        <td>IBM - Digital Media (CTO);<br> Earlier: Netezza, Infosys, Exemplary</td>
        <td></td>
        </tr>


        <tr class="rowN">
        <td>Selvam Velmurugan <br><br>

                        MS (UGA): 08/1988<br><a href="http://www.linkedin.com/in/selvamvelmurugan">Linkedin Profile</a>	
        </td>

        <td>Collaborative Tele-Consulting for Healthcare: CATCH</td>
        <td>Director of Groupon; earlier: Netflix, Amazon</td>
        <td></a></td>
        </tr>

        <tr class="row">
        <td ="">Srilekha Mudumbai <br><br>

                        MS (UGA): 05/1997<br><!--<a href="">Linkedin Profile</a>-->
        </td>

        <td>ZEBRA Image Access System</td>
        <td> Owner (Entrepreneur), JitBit; earlier: Lawrence Berkeley National Lab; Verizon;</td>
        <td>Thesis work reported in <a href="http://knoesis.org/library/resource.php?id=00236">ZEBRA Image Access System paper</a>.</td>
        </tr>

        <tr class="rowN">
        <td>Devashish Worah <br><br>

                        MS (UGA): 05/1997<br><a href="http://www.linkedin.com/in/devworah">Linkedin Profile</a>
        </td>

        <td>Error Handling and Recovery for the ORBWork Workflow Enactment Service in METEOR</td>
        <td>VP, Virtusa</td>
        <td>Fairly early work on error handling and recovery in distributed workflow management. Most cited work on <a href="http://knoesis.org/library/resource.php?id=00237">“Transactional Workflows”</a></td>
        </tr>
        <tr class="row">
        <td>Gaurish Anand<br><br>

                        MS (UGA): 12/2013<br><a href="https://www.linkedin.com/pub/gaurish-anand/34/a58/303">Linkedin Profile</a>
        </td>

        <td>Automatic Identification of Interestingness in Biomedical Literature</td>
        <td>Sandia National Lab</td>
        <td></td>
        </tr>

        </table>

</div>
<div id="div_postDocs"  style="width:566px !important; display:none">
    <table id="table2" style="width:566px">
        <tr id="row2">
        <th style="min-width: 60px;">PostDoc (Where & When PostDoc Training)</th>
        <th style="max-width: 275px;">Academic Degree Institution, Year</th>
        <th style="max-width: 150px;">Title of Research Project</th>
        <th style="max-width: 25px;">Current Position of Past Trainees / Source of Support of Current Trainees</th>
        </tr>
        <tr class="rowN">
        <td>Yanbo Han, <br>
            (Univ of GA, 1995–1997)
        </td>

        <td>Technical University of Berlin, 1995</td>
        <td>METEOR: Healthcare Information Infrastructure Program—Enterprise Workflow Automation</td>
        <td>Professor,<br/>
            North China University of Technology.</td>
        </tr>
        <tr class="row">
        <td>Shengli Wu,  <br>
            (Univ of GA, 2002-2002)
        </td>

        <td>Southeast University, Nanjing, China, 2000</td>
        <td>Extending METEOR with workflow reuse, adaptation, and collaboration</td>
        <td>Lecturer<br/>
            School of Computing and Mathematics University of Ulster</td>
        </tr>
        <tr class="rowN">
        <td>Shengli Wu,  <br>
            (Univ of GA, 2002-2002)
        </td>

        <td>Southeast University, Nanjing, China, 2000</td>
        <td>Extending METEOR with workflow reuse, adaptation, and collaboration</td>
        <td>Lecturer<br/>
            School of Computing and Mathematics University of Ulster</td>
        </tr>
        <tr class="row">
        <td>I.Budak Arpinar ,  <br>
            (Univ of GA, 12/1998 – 04/2001)
        </td>

        <td>METU–Turkey, 1997</td>
        <td>METEOR: Healthcare Information Infrastructure Program—Enterprise Workflow Automation</td>
        <td>Assoc. Prof., University of Georgia</td>
        </tr>
        <tr class="rowN">
        <td>Farshad Hakimpour ,  <br>
            (Univ. of GA, 7/2005–7/2006)
        </td>

        <td>Univ. of Zurich, 2003</td>
        <td>SemDis: Discovering Complex Relationships in Semantic Web</td>
        <td>Asst. Prof., Tehran University</td>
        </tr>
        <tr class="row">
        <td>Ramakanth Kavaluru ,  <br>
            (Wright State U, 09/2009 – 07/2011)
        </td>

        <td>University of Kentucky, 2009</td>
        <td>SemDIS: Discovering Complex Relationships in the Semantic Web</td>
        <td>Asst. Prof., University of Kentucky</td>
        </tr>
         <tr class="rowN">
        <td>Priti Parikh ,  <br>
            (Wright State U; 08/2009 – 12/2011)
        </td>

        <td>Virginia Polytechnic Institute and State University, 2007</td>
        <td>Semantics and Services Enabled Problem Solving Environment for Trypanosoma cruzi</td>
        <td>Research Director and Asst. Prof., Surgery, Wright State University</td>
         </tr>
         
         <tr class="rowN">
             <td>Kera Z. Watkins<br>
                 (Wright State U, 10/2012-2013)
             </td>
             <td>
                 North Carolona St. U, 2006
             </td>
             <td>
                 PREscription Drug abuse Online Surveillance and Epidemiology
             </td>
             <td>
                 Lecturer, Wright State University
             </td>
         </tr>
         <tr class="row">
             <td>
                 Tanvi Banerjee <br>
                 (Wright State University, <br> 08/2014-present)
             </td>
             <td>
                 Univ. of Missouri, 2014
             </td>
             <td>
                 SoCS: Collaborative Research: Social Media Enhanced Organizational Sensemaking in Emergency Response
             </td>
             <td>
                 NSF/NIH
             </td>
         </tr>
    </table>
</div>