<template>
    <layout>
        <!-- <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        
        
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Punny headline</h1>
                <p>
                    {{ message }}
                </p>
                <a class="btn btn-outline-secondary" href="/portfolio">Portfolio</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> 
        </div> -->

        <div class="glass-container">
            <section class="glass">
                    <div class="glass-dashboard">

                        <div class="glass-user">
                            <img :src="`storage/img/img1.jpg`"  class="rounded-circle" width="70px" />
                            <h3>Michael Andrew</h3>
                            <p>Master</p> 
                        </div>
                        <div class="glass-links">
                            <div class="glass-link">
                                <img :src="`storage/img/twitch.png`" alt=""/>
                                <h2>Streams</h2>
                            </div>
                            <div class="glass-link">
                                <img :src="`storage/img/steam.png`" alt=""/>
                                <h2>Games</h2>
                            </div>
                            <div class="glass-link">
                                <img :src="`storage/img/upcoming.png`" alt=""/>
                                <h2>New</h2>
                            </div>
                            <div class="glass-link">
                                <img :src="`storage/img/library.png`" alt=""/>
                                <h2>Library</h2>
                            </div>
                        </div>
                        <div class="glass-master">
                            <h2>Join master for free games. </h2>
                            <img :src="'storage/img/controller.png'" alt=""/>
                        </div> 
                    </div>

                    <div class="glass-games">
                        <div class="glass-status">
                            <h1>Active Games</h1>
                            <input type="text" />
                        </div> 
                        <div class="glass-cards">
                            
                            <div class="glass-card">
                                <img :src="'storage/img/assassins.pnh'" alt="" />
                                <div class="glass-card-info">
                                    <h2>Assassins Creed Valhalla</h2>
                                    <p>PS5 Version</p>
                                    <div class="glass-progress">
                                    </div>
                                </div>
                                <h2 class="glass-percentage">62%</h2>
                            </div>
                            <div class="glass-card">
                                <img :src="'storage/img/assassins.pnh'" alt="" />
                                <div class="glass-card-info">
                                    <h2>Assassins Creed Valhalla</h2>
                                    <p>PS5 Version</p>
                                    <div class="glass-progress">
                                    </div>
                                </div>
                                <h2 class="glass-percentage">62%</h2>
                            </div>
                            <div class="glass-card">
                                <img :src="'storage/img/assassins.pnh'" alt="" />
                                <div class="glass-card-info">
                                    <h2>Assassins Creed Valhalla</h2>
                                    <p>PS5 Version</p>
                                    <div class="glass-progress">
                                    </div>
                                </div>
                                <h2 class="glass-percentage">62%</h2>
                            </div>


                        </div>

                    </div>
            </section>
            <div class="circle1"></div>
            <div class="circle2"></div>
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

<style scoped>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    h1{
        color: white;
        font-weight: 600;
        font-size: 3rem;
        opacity: 0.8;
    }
     h2,
     p{
        color: 658ec6;
        font-weight: 500; 
        opacity: 0.8;
    }
     h3{
        color: white;
        font-weight: 600; 
        opacity: 0.8;
    }
    .glass-container{
        min-height: 100vh;
        background: linear-gradient(to right top, #65dfc9, #6cdbeb);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .glass{
        background: white;
        min-height: 80vh;
        width:60%;
        background: linear-gradient(to right bottom,
            rgba(255, 255, 255, 0.8),
            rgba(255, 255, 255, 0.2)
        );
        border-radius: 2rem;
        z-index: 2;
        backdrop-filter: (2rem);
        display: flex;
    }
    .circle1,
    .circle2{
        background: white;
        background:linear-gradient(to right bottom, 
            rgba(255, 255, 255, 1),
            rgba(255, 255, 255, 0.5)
        );
        height: 7rem;
        width: 7rem;
        position: absolute;
        border-radius: 50%;
        z-index: 1;
    }
    .circle1{
        top: 12%;
        right: 20%;
    }
    .circle2{
        bottom: 5%;
        left: 15%;
    }
    .glass-dashboard{
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        text-align: center;
        background: linear-gradient(to right bottom, 
        rgba(255, 255, 255, .7), 
        rgba(255, 255, 255, 0.3)
        );
        border-radius: 2rem;
    }
    .glass-link{
        display: flex;
        margin: 2rem 0;
        padding: 1rem 5rem;
        align-items: center;
    }

    .glass-link h2{
        padding: 0rem 2rem;
    }
    .glass-games{
        flex: 2;

    }
    .glass-master{ 
        background: linear-gradient(to right top, #65dfc9, #6cdbeb);
        border-radius: 2rem;
        color: white;
        padding: 1rem;
        position: relative;
    }
    .glass-master img{
        position: absolute;
        top: -6px;
        right: 10px;
    }
    .glass-master h2{
        width: 50%;
        color: white;
        font-weight: 600;
    }
</style>