<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
.w3-black {opacity: 0.80}
.w3-btn-floating {opacity: 0.40}
.w3-large { font-size: 17px!important; }


/*  ---------------MODAL CSS START----------- */
/* Style the Image Used to Trigger the Modal */
.myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}


/*  ---------------MODAL CSS END----------- */

.gallery2
{
display:inline-block;
}
.gallery2 >img
{
width:300px;
/*max-width:168px */
}
</style>


<div class="w3-content" style="max-width:800px;position:relative">

<div class="w3-display-container mySlides"> <img src="amit-sheth-1.jpg" style="width:100%"> </div>
<div class="w3-display-container mySlides"> <img src="amit-sheth-2.jpg" style="width:100%"> </div>
<div class="w3-display-container mySlides"> <img src="amit-sheth-3.jpg" style="width:100%"> </div>
<div class="w3-display-container mySlides"> <img src="amit-sheth-4.jpg" style="width:100%"> </div>

<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Trigger the Modal -->
<!--
<img class="myImg" src="http://www.chinabuddhismencyclopedia.com/en/images/thumb/b/b8/Nature.jpg/240px-Nature.jpg" alt="Trolltunga, Norway" width="300" height="200">
<img class="myImg" src="http://www.worldlandtrust.org/sites/default/files/rainforest-reserve-regua-brazil.jpg" alt="Trolltunga, Norway" width="300" height="200">
-->
<div class="picdiv">
<div id="Container" class="gallery2"  > <img class="myImg" onclick="" src="./files/DSC00034.jpg"  alt="Gallery Image1"> </div> 
<div id="Container" class="gallery2" > <img class="myImg" onclick="" src="./files/DSC01308.jpg"  alt="Gallery Image2"> </div>
<div id="Container" class="gallery2" > <img class="myImg" onclick="" src="./files/DSC01404.jpg"  alt="Gallery Image3"> </div>
<div id="Container" class="gallery2" > <img class="myImg" onclick="" src="./files/20170601_120855.jpg"  alt="Gallery Image4"> </div>
</div>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
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
    setTimeout(carousel, 3500); // Change image every 8 seconds
    }
    /* END: Function to Advance Slides Automatically */


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}    
    
</script>


<!--
<img src="./amit-sheth-images.gif" width=
"754px">
-->

<br>
Additional images of Dr. Amit Sheth for use in media coverage can be found in the following <a href="https://photos.google.com/share/AF1QipP7n92oJAyHZyBI0VpGp0oZwhXHtbB-aafx-j1qOVE4SCdjWMX35gh2BUmCaeRMEw?key=Q0VYOGJ0dTM1di10N1lvTTY3d0w1YmE4YkpjQl9R" target="_blank">image gallery 1</a> and
<a href="https://photos.google.com/share/AF1QipPmhhfsxQJQ9q2U7emwyLYXVghupWxvpLukWuz6OI8jvrnhhmIWNi_N-mYQsDFemg?key=NVlmRXYwZjRyVGhFV2duSlBCUzUxUVRWbXVCZlpn" target="_blank">Image Gallery 2</a>
