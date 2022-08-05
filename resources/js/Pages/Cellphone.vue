<template>
    <title>SIA FINAL | Mobile Devices</title>
    <div class="containerr">
    <h1 style="color: whitesmoke"><span style="font-weight: bold;">All</span> Devices</h1>

    <div class="row" style="margin: 0 60px;">
        <div class="card mb-3" v-for="cellphone in cellphones" :key="cellphone.id" style="background-color: rgb(0, 0, 54);">
            <div class="card-header" style="color: rgb(255, 255, 255); border-bottom: 1px solid whitesmoke; border-radius: 10px; background-color: rgba(255, 255, 255, 0.041); margin-top: 20px;">
                <h4 style="font-size: 22px; text-align: center;">{{ cellphone.brand_name }} {{ cellphone.model }}</h4>
            </div>
            <div class="card-body" style="color: rgb(255, 255, 255);">
                <h6 style="font-weight: bold; font-size: 18px;">Specifications</h6>
                <ul v-for="specification in cellphone.specifications" :key="specification.id"><br>
                        <p><span style="font-weight: bold">Android version</span><span style="float: right">{{ specification.android_version }}</span></p>
                        <p><span style="font-weight: bold">RAM</span><span style="float: right">{{ specification.ram }}</span></p>
                        <p><span style="font-weight: bold">ROM</span><span style="float: right">{{ specification.rom }}</span></p>
                        <p><span style="font-weight: bold">Chipset</span><span style="float: right">{{ specification.chipset }}</span></p>
                        <p><span style="font-weight: bold">Camera</span><span style="float: right">{{ specification.camera }}</span></p>
                        <p><span style="font-weight: bold">Battery</span><span style="float: right">{{ specification.battery }}</span></p>
                        <p><span style="font-weight: bold">Price</span><span style="float: right">{{ specification.price }}</span></p>
                </ul>
                <button class="buttonn2"><i style="font-size: 20px" class="fa fa-cart-plus" aria-hidden="true"></i> &nbsp;Add to cart</button>
            </div>
        </div>
    </div>
</div>


</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        cellphones: Array
    }
}
</script>


<style scoped>
.card {
    width: 350px;
    height: auto;
    box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.264);
    transition: 0.3s;
    margin: 1%;
    border: 1px solid rgb(129, 128, 128);
    background-color: rgb(0, 0, 70);
    border-radius: 15px;
}
.buttonn2 {
    width: 150px;
    height: 40px;
    background-color: rgb(0, 0, 0);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    transition: 0.3s;
    cursor: pointer;
    color: rgb(255, 255, 255);
    font-weight: bold;
    margin-left: 20%;
    border: 0px;
}
.buttonn2:hover {
    transform: scale(1.09);
    background-color: rgba(0, 0, 0, 0.927);
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(255, 255, 255, 0.264);
    transform: scale(1.002);
    cursor: pointer;
}
div {
    color: black;
}
.containerr {
    margin-left: 55px;
}
.containerr .cardd {
    padding: 2px 14px;
}
ul p {
    border-bottom: 1px solid white;
    margin-left: -30px;
    font-size: 14px;
}

</style>
