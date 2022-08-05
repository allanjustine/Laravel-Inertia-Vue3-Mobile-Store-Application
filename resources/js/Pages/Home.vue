<template>
    <title>SIA FINAL | Home</title>
<section>
    <div class="rt-container">
    	<div class="col-rt-12">
  <!-- Slider -->
          <div id="slider">
            <div class="slides">
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>Tecno Camon 16 Premier</h2>
                    <p>Even in the night time or dark scenario, the portrait taken by CAMON 16 Premier would always be such exquisite and vivid, just like the Polaris in the starry night.</p>
                  </div>
                </div>
                <div class="image"> <img src="image/image.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>Huawei P40 Pro+</h2>
                    <p>Speak for yourself with the Ultra Vision Leica Penta Camera by capturing photos and videos anytime and anywhere you want. Explore now and future with HUAWEI P40 Pro+.</p>
                  </div>
                </div>
                <div class="image"> <img src="image/image1.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>Huawei Y5 2017</h2>
                    <p>We use cookies to improve our site and your experience. By continuing to browse our site you accept our cookie policy.</p>
                  </div>
                </div>
                <div class="image"> <img src="image/image2.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>iPHONE&apos;s</h2>
                    <p>The Fastest Phone You Can Ever Use. When ranking the top five fastest smartphones, I bet you’d see an iPhone occupying.</p>
                  </div>
                </div>
                <div class="image"> <img src="image/image4.jpg"> </div>
              </div>
            </div>
            <div class="switch">
              <ul>
                <li>
                  <div class="on"></div>
                </li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
         </div>
	 </div>
            <div class="pagee">
            <img class="bottom" src="image/allphones.jpg" alt="">
            <div class="bottom-left">
                <h3>Find the phone for you</h3>
                <h5>Right here, right now.</h5>
                <Link href="/mobile-devices"><button class="buttonn">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
            </div>
            <img class="bottom" src="image/iphone.jpg" alt="">
            <div class="bottom-right">
                <h3>The best Apple iPhone there is. Bigger, faster, stronger.</h3>
                <Link href="/mobile-devices"><button class="buttonn2">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
            </div>
            </div>
     <hr>
</section>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'


</script>


<script>
export default {
    layout: Layout
}

</script>

<style scoped>
.buttonn2 {
    width: 150px;
    height: 40px;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    cursor: pointer;
    color: rgb(0, 0, 0);
    font-weight: bold;
    border: 0px;
}
.buttonn {
    width: 150px;
    height: 40px;
    background-color: rgb(0, 0, 0);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    cursor: pointer;
    color: rgb(255, 255, 255);
    font-weight: bold;
    border: 0px;
}
.buttonn:hover {
    padding-bottom: 5px;
    transform: scale(1.01);
}
.buttonn2:hover {
    padding-bottom: 5px;
    transform: scale(1.01);
}
.pagee {
    position: relative;
    color: white;
}
.bottom {
    width: 50%;
    height: 300px;
}
.bottom-right {
    width: 200px;
    position: absolute;
    bottom: 60px;
    right: 420px;
}
.bottom-left h3, h5 {
    color: black;
}
.bottom-left h3 {
    font-weight: bold;
    font-size: 21px;

}
.bottom-right h3 {
    font-size: 17px;
}
.bottom-left h5 {
    font-size: 18px;
}
.bottom-left {
    width: 250px;
    position: absolute;
    bottom: 60px;
    left: 50px;
}
/* Slider */
#slider{
  width:100%;
  height:450px;
  position:relative;
  overflow:hidden;
}
@keyframes load{
  from{left:-100%;}
  to{left:0;}
}
.slides{
  width:400%;
  height:100%;
  position:relative;
  -webkit-animation:slide 200s infinite;
  -moz-animation:slide 20s infinite;
  animation:slide 20s infinite;
}
.slider{
  width:25%;
  height:100%;
  float:left;
  position:relative;
  z-index:1;
  overflow:hidden;
}
.slide img{
  width:100%;
  height:100%;
}
.slide img{
  width:100%;
  height:100%;
}
.image{
  width:100%;
  height:100%;
}
.image img{
  width:100%;
  height:100%;
}

/* Legend */
.legend{
  border:450px solid transparent;
  border-left:700px solid rgba(2, 0, 115, 0.439);
  border-bottom:0;
  position:absolute;
  bottom:0;
}

/* Contents */
.content{
  width:100%;
  height:100%;
  position:absolute;
  overflow:hidden;
}
.content-txt{
  width:350px;
  height:150px;
  float:left;
  position:relative;
  top:200px;
  -webkit-animation:content-s 5s infinite;
  -moz-animation:content-s 5s infinite;
  animation:content-s 5s infinite;
}
.content-txt h2{
  font-family:Arial;
  font-size:35px;
  color:rgb(252, 252, 252);
  text-align:left;
  margin-left:30px;
  padding-bottom:10px;
}
.content-txt p{
  font-family:arial;
  font-weight:normal;
  font-size:18px;
  font-weight: bold;
  color:rgb(255, 255, 255);
  text-align:left;
  margin-left:30px;
}

/* Switch */
.switch{
  width:120px;
  height:10px;
  position:absolute;
  bottom:50px;
  z-index:99;
  left:30px;
  margin-left: 45%;
  margin-bottom: -30px;
}
.switch > ul{
  list-style:none;
}
.switch > ul > li{
  width:10px;
  height:10px;
  border-radius:50%;
  background:rgb(13, 0, 128);
  float:left;
  margin-right:5px;
  cursor:pointer;
}
.switch ul{
  overflow:hidden;
}
.on{
  width:100%;
  height:100%;
  border-radius:50%;
  background:#3654ff;
  position:relative;
  -webkit-animation:on 30s infinite;
  -moz-animation:on 30s infinite;
  animation:on 20s infinite;
}

/* Animation */
@-webkit-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@-moz-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}

@-webkit-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@-moz-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@keyframes content-s{
  0%{left:-420px;}
  10%{left:20px;}
  15%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}

@-webkit-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@-moz-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

</style>
