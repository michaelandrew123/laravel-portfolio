<template>
    <layout  title="Glass">
    

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
                                <img :src="'storage/img/assassins.png'" alt="" />
                                <div class="glass-card-info">
                                    <h2>Assassins Creed Valhalla</h2>
                                    <p>PS5 Version</p>
                                    <div class="glass-progress">
                                    </div>
                                </div>
                                <h2 class="glass-percentage">62%</h2>
                            </div>
                            <div class="glass-card">
                                <img :src="'storage/img/sackboy.png'" alt="" />
                                <div class="glass-card-info">
                                    <h2>Sackyboy A Great Adventure</h2>
                                    <p>PS5 Version</p>
                                    <div class="glass-progress">
                                    </div>
                                </div>
                                <h2 class="glass-percentage">62%</h2>
                            </div>
                            <div class="glass-card">
                                <img :src="`storage/img/spiderman.png`" alt="" />
                                <div class="glass-card-info">
                                    <h2>Spiderman Miles Mora</h2>
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
        height: 80vh;
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
        rgba(255, 255, 255, 0.7), 
        rgba(255, 255, 255, 0.3)
        );
        border-radius: 2rem;
    }
    .glass-user > h3{
        color: black;
        font-size: 18px;
    }
    
    p{
        font-size: 14px;
    }
    h2{
        font-size: 18px;
    }
    .glass-links{
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .glass-link{
        display: flex;  
        align-items: center;
        gap: 5px;
    }
    .glass-link > img{
        width: 30px;
    }
    .glass-link h2{
        /* padding: 0rem 2rem; */
    }
    .glass-games{
        flex: 2;

    }
    .glass-master{ 
        background: linear-gradient(to right top, #65dfc9, #6cdbeb);
        /* border-radius: 2rem; */
        color: white;
        /* padding: 1rem; */
        padding: 10px 20px;
        text-align: left;
        position: relative;
    }
    .glass-master img{
        position: absolute;
        top: -15px;
        right: 22px;
        width: 35%;
    }
    .glass-master h2{
        width: 60%;
        color: white;
        font-weight: 600;
        font-size: 18px;
    }
    .glass-status{
        /* margin-bottom: 3rem; */
    }
    .glass-status h1{
        font-size: 20px;
        color:black;
        opacity: 0.8;
    }
    .glass-status input{
        background: linear-gradient(to right bottom,
            rgba(255, 255, 255, 0.7),
            rgba(255, 255, 255, 0.3)
        );

        border: none;
        width: 50%;
        padding: 5px 10px;
        border-radius: 2rem;
        font-size: 14px;
    }
    .glass-games{
        margin: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }
    .glass-cards{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .glass-card{
        display: flex; 
        background: linear-gradient(to left top, 
            rgba(255, 255, 255, 0.2), 
            rgba(255, 255, 255, 0.5)
        );
        border-radius: 1rem;
        /* margin: 2rem 0rem;
        padding: 2rem; */
        box-shadow: 6px 6px 20px rgba(122,122,122,0.2);
        justify-content: space-between;
        padding: 10px; 
    }
    .glass-card img{
        width: 15%;
    }
    .glass-progress{
        background: linear-gradient(to right top, #65dfc9, #6cdbeb);
        width: 100%;
        height: 25%;
        border-radius: 1rem;
        position: relative;
        overflow: hidden;
    }
    .glass-progress::after{
        content: "";
        width: 100%;
        height: 100%;
        background: rgba(236, 236, 236);
        position: absolute;
        left: 60%; 
    }
    .glass-card-info{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .glass-card-info h2{
        font-size: 18px;
    } 
    .glass-percentage{
        font-weight: bold;
        background: linear-gradient(to right top, #65dfc9, #6cdbeb);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }
</style>