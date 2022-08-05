<template>
    <title>SIA FINAL | About Mobile Store</title>
<div class="about">
  <section>
    <div class = "image"></div>
      <div class = "content">
          <h2>About Us</h2>
          <div style="margin-top: -30px; padding: 5px; width: 200px; "><hr></div>
            <p id="textt">We are an authorised online reseller for Vodacom, Telkom and MTN, to bring you the latest mobile deals across various networks. Whether you are looking for a newline or upgrade, call us and we will get it to you, quickly and efficiently. All offers are available for a limited period only as we like to keep our specials as current as possible. The world at your fingertips! Our unique service offering means no paperwork or queues. You will have your new device delivered right to your door without ever having to leave your office or home. No bank statements. No payslips. Zero risk!</p>
            <div style="width: 200px"><hr></div>
            <p id="textt">Mobile Store is safe and secure so you can shop for the absolute best buys conveniently and with complete peace of mind. Simply tell our friendly and professional support team which mobile deal you’re interested in and they will make sure the product gets to you in no time. Get connected the smart way, today!</p>
            <button class="get-in-touch">GET IN TOUCH</button>
      </div>
  </section>
</div>
</template>

<style scoped>
.about{
  font-family: 'Playfair Display', serif;
  display: grid;
  align-content: center;
  min-height: 100vh;
  margin-left: 150px;
}
section{
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 90vh;
  width: 85vw;
  margin: auto;
  margin-left: 45px;
  margin-top: 40px;
}
.image{
  background: url("./image/about.jpg") center/cover no-repeat;
  width: 400px;
}
.content{
	background-color: rgba(0, 0, 0, 0.35);
  display: flex;
  border-radius: 1px;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.539), 0 6px 20px 0 rgba(0, 0, 0, 0.424);
  width: 600px;
  margin-right: 530px;
}
.content h2{
  text-transform: uppercase;
  font-size: 46px;
  letter-spacing: 6px;
  color: rgb(255, 255, 255);
}
.content #textt{
  padding-bottom: 15px;
  font-weight: 400;
  width: 80%;
  text-align: center;
  font-family: sans-serif;
  margin: 0 auto;
  line-height: 1.7;
  color: rgb(255, 255, 255);
  font-size: 13px;
}
hr {
  height: 20px;
}
.get-in-touch {
  width: 130px;
  height: 45px;
  background-color: rgb(0, 0, 0);
  border-radius: 3px;
  margin-top: 15px;
  cursor: pointer;
  color: rgb(251, 247, 247);
  border: 0px;
}
.get-in-touch:hover {
  background-color: rgb(12, 12, 12);
  transform: scale(1.05);
}
</style>


<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

</script>


<script>
export default {
    layout: Layout
}
</script>
