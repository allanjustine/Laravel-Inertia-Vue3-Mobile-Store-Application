<template>

<nav class="navbar navbar-expand-lg navbar-dark" style="box-shadow: 20px 1px 50px 15px grey">
  <div class="container">
    <img src="image/logo.png" alt="logo" style="width: 50px; height: 50px;">
    <a class="navbar-brand" href="#" style="font-size: 25px">Cellphone Store</a>
    <button class="navbar-toggler" type=
    "button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item" style="margin-right: 15px">
            <Link class="nav-link" :class="{'selected': $page.component == 'Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item" style="margin-right: 15px">
            <Link class="nav-link" :class="{'selected': $page.component == 'Cellphone'}" href="/cellphone-devices">Cellphone Devices</Link>
        </li>
        <li class="nav-item" style="margin-right: 15px">
            <Link class="nav-link" :class="{'selected': $page.component == 'About'}" href="/about">About Cellphone Store</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'News'}" href="/news">Mobile News</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class=" rounded-3 shadow my-5" style="min-height: 750px;">
    <slot />
</section>
    <footer class="text-center">
        <section class="itemss">
        <span class="barrel"><a class="iconss" href="https://www.instagram.com" target="_blank"><i style="color: whitesmoke; margin-top: 100px" class="fa fa-instagram"></i></a></span>
        <span class="barrel"><a class="iconss" href="https://www.facebook.com/1down" target="_blank"><i style="color: whitesmoke; margin-top: 100px; padding: 4px;" class="fa fa-facebook"></i></a></span>
        <span class="barrel"><a class="iconss" href="https://www.gmail.com" target="_blank"><i style="color: whitesmoke; margin-top: 100px" class="fa fa-google"></i></a></span>
        <span class="barrel"><a class="iconss" href="https://www.twitter.com" target="_blank"><i style="color: whitesmoke; margin-top: 100px;" class="fa fa-twitter"></i></a></span>
        <hr class="new_1">
        <h5 style="margin-top: 10px">Contact Us</h5>
        <hr style="width: 80px; margin: auto; padding-top: 10px;">
        <p style="color: white; margin-top: 15px; font-size: 13xpx;"> Copyright &copy; 2022. All rights reserved.</p>
        </section>
    </footer>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: rgb(1, 0, 77);
    opacity: 0.95;
}
.selected {
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255, 0.475);
    border-radius: 10px;
    background-color: rgba(128, 128, 128, 0.056);

}
.nav-link:hover {
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255, 0.475);
    border-radius: 10px;
    background-color: rgba(128, 128, 128, 0.056);


}
.new_1 {
    width: 180px;
    border-radius: 50%;
    border: 3px solid #cccccc;
    border-bottom: none;
    margin: auto;
    margin-top: 10px;
}
.iconss {
    margin: auto;
    font-size: 20px;
}.iconss i:hover {
    transform: scale(1.09);
}
footer {
    background-color: rgb(0, 0, 54);
    height: 250px;
}
.barrel {
    border: 1px solid rgb(58, 58, 99);
    padding: 6px;
    background-color: rgb(60, 57, 107);
    border-radius: 12px;
    margin-bottom: 50px;
    margin-left: 13px;
    margin-right: 6px;
}
.itemss {
    background-color: rgb(0, 0, 54);
}
</style>
