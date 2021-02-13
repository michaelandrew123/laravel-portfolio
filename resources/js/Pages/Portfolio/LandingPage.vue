<template>  
  <layout title="Porfolio">
    <div>
      <main>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Punny headline</h1>
            <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
            <a class="btn btn-outline-secondary" href="/portfolio">Portfolio</a>
          </div>
          <div class="product-device shadow-sm d-none d-md-block"></div>
          <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
      </main>
      
      <section>
        <div class="container">
 


          <div class="row" data-masonry='{"percentPosition": true }'>

            <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto">  
                    <inertia-link :href="route('students')" :active="route().current('students')" >
                      <img :src="'../storage/portfolio/student.png'" class="card-img-top" alt="...">
                    </inertia-link> 
                    <div class="card-body">
                      <h4 class="card-title">College Student</h4>
                      <p class="card-text">College Student Record</p>
                    </div>
                    <!-- <div class="card-footer"></div>  -->
                    
                      <div class="card-footer">December 16, 2020</div> 
                  </div>
              </div>

              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto">  
                    <inertia-link href="/portfolio" >
                      <img :src="'../storage/portfolio/chat_glass_css.png'" class="card-img-top" alt="..."> 
                    </inertia-link> 
                    <div class="card-body">
                      <h4 class="card-title">Chat Glass Css</h4>
                      <p class="card-text">Build in pure css</p>
                    </div>
                      <div class="card-footer">December 28, 2020</div> 
                  </div>
              </div>


              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto"> 
                    <inertia-link :href="route('todo')" :active="route().current('todo')" > 
                      <img :src="'../storage/portfolio/todo.png'" class="card-img-top" alt="...">
                    </inertia-link> 
                    <div class="card-body">
                      <h4 class="card-title">Todo App</h4>
                      <p class="card-text">Description</p>

                    </div>
                     <div class="card-footer">February 05, 2021</div> 
                  </div>
              </div>
 
              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto"> 
                    <inertia-link :href="route('social-media')" :active="route().current('social-media')" > 
                      <img :src="'../storage/portfolio/social-media.png'" class="card-img-top" alt="...">
                    </inertia-link> 
                    <div class="card-body">
                      <h4 class="card-title">Social Media</h4>
                      <p class="card-text">Small Social Media for fun</p>

                    </div>
                    <div class="card-footer">February 06, 2021</div> 
                  </div>
              </div>


              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto"> 
                    <inertia-link :href="route('students')" :active="route().current('students')" > 
                      <img src="https://ceblog.s3.amazonaws.com/wp-content/uploads/2018/09/10131158/live-chat-4.jpg" class="card-img-top" alt="...">
                    </inertia-link> 
                    
                    <div class="card-body">
                      <h4 class="card-title">Chatting</h4>
                      <p class="card-text">Build a real time chat using laravel vue and inertia with socket</p>

                    </div> 
                  </div>
              </div>

              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto"> 
                    <inertia-link :href="route('students')" :active="route().current('students')" > 
                      <img src="https://assets.pcmag.com/media/images/574604-video-conferencing.jpg" class="card-img-top" alt="...">
                    </inertia-link>  
                    <div class="card-body">
                      <h4 class="card-title">Video conferencing</h4>
                      <p class="card-text">Description</p>

                    </div> 
                  </div>
              </div>  


              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto"> 
                    <inertia-link :href="route('intercom_inbox')" :active="route().current('intercom_inbox')" > 
                      <img :src="'../storage/portfolio/intercom_inbox.png'" class="card-img-top" alt="...">
                    </inertia-link> 
                    
                    <div class="card-body">
                      <h4 class="card-title">Intercom's Inbox UI with Tailwind CSS</h4>
                      <p class="card-text">Building Inercom's Inbox UI from scratch using Tailwind Css</p>

                    </div> 
                  </div>
              </div>  


              <div class="col-sm-6 col-lg-4 mb-4">
                  <div class="card auto"> 
                    <inertia-link :href="route('trello')" :active="route().current('trello')" > 
                      <img :src="'../storage/portfolio/trello.png'" class="card-img-top" alt="...">
                    </inertia-link>  
                    <div class="card-body">
                      <h4 class="card-title">Trello</h4>
                      <p class="card-text">Building trello board using tailwindcss</p>
                    </div>
                    <div class="card-footer">February 03, 2021</div> 
                  </div>
              </div>  




            </div>

        </div>
      </section>


    </div>
  </layout>
</template>
 
<script>

import Layout from '../Shared/Layout'  
export default {
  components: {
      Layout 
    },
}
</script>

 

 <style scoped>
  
  .container {
    max-width: 960px;
  }

  /*
  * Custom translucent site header
  */

  .site-header {
    background-color: rgba(0, 0, 0, .85);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    backdrop-filter: saturate(180%) blur(20px);

  }
  .site-header a {
    color: #8e8e8e;
    transition: color .15s ease-in-out;
  }
  .site-header a:hover {
    color: #fff;
    text-decoration: none;
  }
  
/*
 * Dummy devices (replace them with your own or something else entirely!)
 */
main > div{
  
    min-height: 100vh;
    height: 100%;
}
.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}


 </style>