<template>
  <v-container fluid class="pa-0 ma-0">
    <v-row  
        no-gutters>
      <v-parallax height="300" class="start-image" src="../assets/Title4 copy.png">
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            class="text-center"
            cols="12"
          >
            <h1 class="text-h2 font-weight-thin mb-4">
              KL4AD
            </h1>
            <h4 class="text-h4 subheading">
              Knowledge-Infused Learning for Autonomous Driving
            </h4>
            <h5 class="text-h5 subheading">
              ISWC'22 Tutorial
            </h5>
          </v-col>
        </v-row>
      </v-parallax>
    </v-row>
    <v-row no-gutters 
      class="pt-8"
      align="center"
      justify="center">
      <h1 class="text-h4 font-weight-thin mb-4">
              Abstract
      </h1>
    </v-row>
    <v-row no-gutters
      class="pa-8"
      align="center"
      justify="center">
      <p class="text-justify">
    <b>Autonomous Driving (AD)</b> is considered as a testbed for tackling many hard AI problems. Despite the recent advancements in the field, AD is still far from achieving full autonomy due to core technical problems inherent in AD. The emerging field of neuro-symbolic AI and the methods for <b>knowledge-infused learning</b> are showing exciting ways of leveraging external knowledge within machine/deep learning solutions, with the potential benefits for interpretability, explainability, robustness, and transferability. In this tutorial, we will examine the use of knowledge-infused learning for three core state-of-the-art technical achievements within the AD domain. With a collaborative team from both academia and industry, we will demonstrate recent innovations using real-world datasets.
  </p>
    </v-row>
  
  
  <v-row no-gutters 
      class="pt-8"
      align="center"
      justify="center">
      <h1 class="text-h4 font-weight-thin mb-4">
              Motivation
      </h1>
    </v-row>
      <v-row no-gutters
      class="pa-8"
      align="center"
      justify="center">
      <p class="text-justify">
To realize the vision of autonomous driving, the automotive industry is investing heavily into core AI technologies and deploying fleets of vehicles across the world to collect massive amounts of data, including – but not limited to – video, LIDAR, and RADAR. To manage these vast amounts of data, companies are beginning to experiment with the use of KGs, which are capable of representing meaningful relations between entities in the world while helping to enable the principles of FAIR data – i.e. findability, accessibility, interoperability, and re-use. Simultaneously, current research into the emerging topic of <b>knowledge-infused learning  [1] -- or more generally, neuro-symbolic AI </b>, which is often dubbed as the <b> 3rd wave of AI [2]</b> -- is showing new and exciting uses for KGs in AI applications.  Knowledge-infused learning proposes intuitive ways of leveraging knowledge graphs within machine/deep learning solutions. This infusion of knowledge has been shown to improve the predictive capabilities of ML/DL while providing great potential for improving interpretability, explainability, robustness, and transferability. For these reasons, knowledge-infused learning holds much promise for helping to meet the complex technical challenges of autonomous driving (AD). In this tutorial, we will focus on three distinct technical innovations that leverage knowledge-infused learning. 
  </p>
    </v-row>


 <v-row no-gutters 
      class="pt-8"
      align="center"
      justify="center">
      <h1 class="text-h4 font-weight-thin mb-4">
              Detailed Description
      </h1>
    </v-row>
      <v-row no-gutters
      class="pa-8"
      align="center"
      justify="center">
      <p class="text-justify">
         
 We seek to provide an overview of knowledge-infused learning, an examination of its use for autonomous driving, and three deep dives into current state-of-the-art technical achievements. Specifically, the tutorial will consist of 5 interconnected lecture modules; two 30 mins introductory modules followed by three 40 mins modules for each application. The audience is expected to have a basic understanding of deep/machine learning, semantic technologies (e.g., RDF, OWL, linked open data) and semantic embedding approaches. We aim to guide attendees through a high-level tour of the knowledge-infused learning methods, basic familiarity into open-domain autonomous driving datasets/challenges, and the process of solving domain problems using neuro-symbolic AI methods. We'll be covering the following modules in this tutorial.
 </p>
 <ul>
  <li><b>Knowledge-infused Learning (KL): </b>  KL a form of neuro-symbolic AI is a novel paradigm that seeks to incorporate a variety of explicit (symbolic) knowledge into a data-driven statistical AI framework that supports advancement in machine intelligence. Utilizing knowledge and data in deep learning models to enable learning from lower-level syntactic and lexical features from data through statistical (deep) learning as well as higher-level concepts from knowledge. Using knowledge also allows greater transparency in the decision-making, and enables explanations that users need for informed decision making. Recently, researchers have categorized the recent approaches into a continuum that comprises of three stages; namely, shallow, semi-deep, and deep infusion. We will provide a detailed overview for each stage of knowledge infusion with examples across several application domains. (<i>See relevant resources:</i> [1])</li><br>

  <li><b>Applications for Autonomous Driving: </b>  Despite recent advancements, AD is still far from ready to meet full level-5 autonomy requirements. The primary obstacle is the <i>open-world</i> environment in which the autonomous vehicle must operate. Navigating this environment requires making informed decisions and taking actions within novel and complex situations. While machine learning, in general, and autonomous driving, in particular, have had much success in <i>closed-world</i> environments with lots of experiential training data, the challenges posed by an open-world environment are yet to be resolved. Additionally, the full autonomy of self-driving and its widespread usage poses a new set of non-technical challenges, including user acceptance, accountability, explainability, and conformance to legal, ethical, and societal boundaries. We believe that knowledge-infused learning -- through an integration of domain knowledge and machine learning -- is a potent tool to overcome such challenges. (<i>See relevant resources:</i> [3])</li><br>
   
  <li><b>Knowledge-based Entity Prediction (KEP) for Improved Machine Perception: </b> <img src="../assets/kep.png" align="right" width="330" height="200" /> Machine perception is one of the key technical problems in AD where detecting and recognizing objects/events in a scene (i.e. environmental perception) is a critical task. This, however, is particularly challenging as there are several reasons why an entity could go unrecognized. This includes, but not limited to, sensor failure, occlusion, low resolution (e.g., from weather), or errors in computer vision models. For example, consider the case where an ego vehicle driving through a residential neighborhood and detects only a ball on the road (partial observation) and could contain unrecognized entities such as <i>Child</i> in the scene.  Knowledge-based entity prediction (KEP) is a novel task that aims to address this issue by leveraging relational knowledge from heterogeneous sources in predicting potentially unrecognized entities\cite{wickramarachchi2021knowledge}. We will show how an innovative knowledge-infused learning approach can be developed for KEP and demonstrate its usefulness considering two high-quality, large-scale real AD datasets. (<i>See relevant resources:</i> [4,5])</li><br>

  <li><b>Leveraging Commonsense for Explainable Scene Clustering: </b>  The task of scene clustering refers to clustering a given set of scenes and assigning descriptive label(s) to each cluster. For example, a cluster may be described as <i>accident</i> scenes with a crashed vehicle, a police car, and an ambulance. Using scenes represented in a knowledge graph, and enriched with commonsense knowledge, it may be possible to automatically generate explanations for semantic clusters. In this tutorial, we will demonstrate how an innovative approach can be developed for explainable scene clustering along with the process of leveraging relevant commonsense knowledge for this task. (<i>See relevant resources:</i> [6])</li><br>

  <li><b>Learning Visual Models for Road Sign Recognition using a Knowledge Graph as a Trainer: </b>  <img src="../assets/road_signs.png" align="right" width="370" height="150" /> The task of recognizing and understanding road signs is an important feature of autonomous driving. Current technology for road sign recognition (RSR) is mainly based on computer vision (CV) algorithms that solely depend on image data distribution of the training domain. Such models, however, tend to fail when applied to a target domain (e.g., road signs from China) that differs from their source domain (e.g. road signs from Germany) (see Fig. \ref{fig:roadsigns}). Knowledge graph neural network (KG-NN) is a novel neuro-symbolic approach to address the problem of transfer learning by using image-data-invariant auxiliary knowledge. We will show how this technology can be applied to enable transfer learning for the RSR task. (<i>See relevant resources:</i> [7])</li>
 </ul>
    </v-row>   

    <v-row no-gutters 
      class="pt-8"
      align="center"
      justify="center">
      <h1 class="text-h4 font-weight-thin mb-4">
              Speakers
      </h1>
    </v-row>
    <v-row 
      class="pb-8"
      align="center"
      justify="center"
      no-gutters>
      <template v-for="(author, idx) in authors">
        <biography-card :person="author" :key="idx"/>
      </template>
    </v-row>
    <v-row no-gutters 
      class="pt-8"
      align="center"
      justify="center">
      <h1 class="text-h4 font-weight-thin mb-4">
              Tutorial Program
      </h1>
    </v-row>
    <v-row 
      class="pb-8 pr-8 pl-8"
      align="center"
      justify="center"
      no-gutters>
      <v-timeline>
        <v-timeline-item
          v-for="(item, i) in programItems"
          :key="i"
          :color="item.color"
          small
        >
          <template v-slot:opposite>
            <span
              :class="`headline font-weight-bold ${item.color}--text`"
              v-text="item.time"
            ></span>
          </template>
          <div class="py-4">
            <h2 :class="`headline font-weight-light mb-4 ${item.color}--text`">
              {{item.title}}
            </h2>
            <div>
              {{item.description}}
            </div>
          </div>
        </v-timeline-item>
      </v-timeline>
    </v-row>
 
  <v-row no-gutters 
      class="pt-8"
      align="center"
      justify="center">
      <h1 class="text-h4 font-weight-thin mb-4">
              References
      </h1>
    </v-row>
<v-row no-gutters
      class="pa-8"
      align="center"
      justify="center">
      <p class="text-justify">
      <ol>
        <li> Sheth, A., Gaur, M., Kursuncu, U., Wickramarachchi, R.: Shades of knowledge- infused learning for enhancing deep learning. IEEE Internet Computing (2019)</li>
        <li>Garcez, A.d., Lamb, L.C.: Neurosymbolic ai: The 3rd wave. arXiv preprint arXiv:2012.05876 (2020)</li>
        <li>Henson, C., Wickramarachchi, R.: <a href="https://www.bosch.com/stories/knowledge-infused-learning-for-autonomous-driving/" target="_blank"> Introduction to knowledge-infused learning for autonomous driving </a> (June 2021)</li>
        <li> Wickramarachchi, R., Henson, C., Sheth, A.: Knowledge-infused Learning for Entity Prediction in Driving Scenes. Frontiers in Big Data 4, 759110 (2021)</li>
        <li> Wickramarachchi, R., Henson, C., Sheth, A. Knowledge-based Entity Prediction for Improved Machine Perception in Autonomous Systems. arXiv preprint arXiv:2203.16616 (2022) </li>
        <li>Chowdhury, S.N., Wickramarachchi, R., Gad-Elrab, M.H., Stepanova, D., Henson, C.: Towards leveraging commonsense knowledge for autonomous driving. In: ISWC (2021)</li>
        <li> Monka, S., Halilaj, L., Schmid, S., Rettinger, A.: Learning visual models using a knowledge graph as a trainer. In: ISWC (2021)</li>
  
</ol>  
  </p>
    </v-row>

 <v-row no-gutters
      class="pa-8"
      align="center"
      justify="center"> 

</v-row>
  </v-container>
</template>

<script>
import BiographyCard from './BiographyCard.vue'

  export default {
  components: { 
    BiographyCard
    },
    name: 'LandingPage',

    data: () => ({
      authors: [
        {
          name: 'Ruwan Wickramarachchi', 
          imagePath: 'Ruwan.jpeg',
          company: 'AI Institute - University of South Carolina', 
          logo_path: '', 
          biography: 'Ruwan Wickramarachchi is a Ph.D. student at the AI Institute, University of South Carolina. His dissertation research focuses on introducing expressive knowledge representation and knowledge-infused learning techniques to improve machine perception and context understanding in autonomous systems. He has co-organized several tutorials on Neurosymbolic-AI, particularly at U.S. Semantic Technologies Symposium (US2TS), and ACM Hypertext (HT). Contact him at: ruwan@email.sc.edu'
        },
        {
          name: 'Cory Henson', 
          imagePath: 'Cory.jpeg',
          company: 'Bosch Research', 
          logo_path: '', 
          biography: 'Cory Henson is a lead research scientist at the Bosch Research and Technology Center in Pittsburgh, PA. His research focuses on the application of knowledge representation and neuro-symbolic AI to enable autonomous driving. He also holds an Adjunct Faculty position at Wright State University. Cory has organized several workshops at ISWC on the topic of Semantic Sensor Networks. Contact him at: cory.henson@us.bosch.com'
        },
        {
          name: 'Sebastian Monka', 
          imagePath: 'Sebastian2.jpg',
          company: 'Bosch Research and Trier University', 
          logo_path: '', 
          biography: 'Sebastian Monka is a research scientist at Bosch Research in Renningen, Germany, and a Ph.D. candidate at Trier University. His dissertation research focuses on using neuro-symbolic AI and graph neural networks for transfer learning; i.e. the ability to apply ML models to different but related problems. Specifically, this technology has been applied to improving perception systems for autonomous driving. Contact him at: sebastian.monka@de.bosch.com'
        },
        {
          name: 'Daria Stepanova', 
          imagePath: 'Daria.jpeg',
          company: 'Bosch Center for Artificial Intelligence', 
          logo_path: '', 
          biography: 'Daria Stepanova is a research scientist at Bosch Center for Artificial Intelligence, Renningen, Germany. Her research interests include neuro-symbolic AI, logic programming, as well as reasoning over knowledge graphs. Previously Daria was a senior researcher at Max Plank Institute for Informatics (Germany), where she was heading a group on Semantic Data. She has delivered several talks at international events in the Semantic Web domain and has served as session chair for ESWC. Contact her at: daria.stepanova@de.bosch.com'
        },
        {
          name: 'Amit Sheth', 
          imagePath: 'Amit2.jpeg',
          company: 'AI Institute - University of South Carolina', 
          logo_path: '', 
          biography: 'Amit Sheth is the founding director of the AI Institute, University of South Carolina (AIISC). His current core research includes knowledge-infused learning and explanationability. He is a fellow of IEEE, AAAI, AAAS, and ACM. He has co-organized >100 international events and tutorials, and is among the top 50 computer scientists in the USA. He has founded three companies by licensing his university research outcomes, including the first Semantic Web company in 1999 that pioneered technology similar to what is found today in Google Semantic Search and KG. Contact him at: amit@sc.edu'
        }
      ],
      programItems: [
        {
          color: 'red',
          time: '9:00',
          title: 'Introduction',
          description: ''
        },
        {
          color: 'purple',
          time: '9:30',
          title: 'Programm will be announced',
          description: ''
        },
        {
          color: 'green',
          time: '16:00',
          title: 'Closure',
          description: ''
        },
      ],
    }),
  }
</script>


<style lang="scss">

  .full-width{
    width: 100%; 
  }
  .start-image{
    width: 100%;
    padding: 0px}

  h4, h5 {
       margin: 100;
    }

</style>