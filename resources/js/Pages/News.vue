<template>
    <title>SIA FINAL | Mobile News</title>
<section>
<div class="containerr">
    <h1>Mobile News</h1>
      <div class="container">

    <div class="gallery-container w-3 h-2">
        <div class="gallery-item">
            <div class="image">
            <img src="images/image1.jpg" alt="image">
                <div class="bottom-left">
                    <h4>Realme UI 3.0 Release Date For India Announced, See Top Features</h4>
                    <p style="font-size: 16px">Likewise, the early access to Realme UI 3.0 will come to Realme X7 Pro 5G and other devices in February. Also, several Realme devices will get the update by the Q2 of 2022 in India.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-container w-3 h-3">
        <div class="gallery-item">
            <div class="image">
            <img src="images/image2.jpg" alt="image">
                <div class="bottom-left">
                    <h2>OPPO Reno 8 Z 5G: Snapdragon 695 CPU, OLED display, 33W charging</h2>
                    <p style="font-size: 21px">The features, price, and availability details for the new OPPO Reno 8 Z 5G have been revealed by the tech giant.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-container h-2">
        <div class="gallery-item">
            <div class="image">
            <img src="images/image4.jpg" alt="image">
                <div class="bottom-left">
                    <h5>Iphone SE</h5>
                    <p style="font-size: 16px">Love the power. Love the price. Starting at $429</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-container w-2">
        <div class="gallery-item">
            <div class="image">
            <img src="images/image3.jpg" alt="image">
                <div class="bottoam-left">
                    <h6>Best for you</h6>
                    <p style="font-size: 13px;">Samsung is one of the most popular smartphone & consumer electronic brands in world.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-container w-4 h-1">
        <div class="gallery-item">
            <div class="image">
            <img src="images/image5.jpg" alt="image">
                <div class="bottom-left">
                    <h2>Latest Xiaomi phone reviews</h2>
                    <p style="font-size: 21px">Be wary of buyers asking to use 'Gumtree delivery' or 'Payments on Gumtree' for anything other than private cars" "Gumtree does not offer delivery or payments for anything other than private cars.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-container">
        <div class="gallery-item">
            <div class="image">
            <img src="images/image6.jpg" alt="image" style="width: 220px">
                <div class="bottom-left">
                    <p style="font-size: 16px">Go boldly to the battle in game, 7000mAh battery provides powerful backup for your continuous battles.</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</section>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

</script>


<script>
export default {
    layout: Layout
}
</script>


<style scoped>
.containerr {
    margin-left: 50px;
    height: auto;
    overflow: hidden;
}
.container{
    display:grid;
    grid-template-columns: repeat(6,1fr);
    grid-auto-rows:100px 300px;
    grid-gap:10px;
    grid-auto-flow: dense;
    margin-top: 50px;
}

.gallery-item{
    width:100%;
    height:100%;
    position:relative;
}

.gallery-item .image{
    width:100%;
    height:100%;
    overflow:hidden;
    border-radius: 20px;
}

.gallery-item .image img{
    width:100%;
    height:100%;
    object-fit: cover;
    object-position:50% 50%;
    cursor:pointer;
    transition:.5s ease-in-out;
    border-radius: 20px;
}
.gallery-item:hover .image img{
    transform:scale(1.03);
}
.w-2{
    grid-column: span 2;
}
.w-3{
    grid-column: span 3;
}
.w-4{
    grid-column: span 4;
}

.h-1{
    grid-row: span 1;
}
.h-2{
    grid-row: span 2;
}
.h-3{
    grid-row: span 3;
}
.bottom-left {
    position: absolute;
    bottom: 5px;
    position:absolute;
    color:#fff;
    font-size:20px;
    backdrop-filter: blur(5px) saturate(1.8);
    -webkit-backdrop-filter: blur(5px) saturate(1.8);
    padding: 15px;
}
.bottoam-left {
    position: absolute;
    bottom: -30px;
    position:absolute;
    color:#fff;
    font-size:20px;
    backdrop-filter: blur(5px) saturate(1.8);
    -webkit-backdrop-filter: blur(5px) saturate(1.8);
    padding: 15px;
}

</style>
