<template>
    <layout>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Punny headline</h1>
            <p>
                {{ message }}
            </p>
            <a class="btn btn-outline-secondary" href="/portfolio">Portfolio</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        
    </layout>
</template>

<script>

import Layout from '../Shared/Layout' 
export default {
    components: {
      Layout 
    },
    props: ['message']
}
</script>