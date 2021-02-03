<template>
    <div> 
        <intercom-inbox title="Intercom Inbox UI"> 
            <template  #intercominbox> 
                <div class="flex flex-col flex-none h-full items-end">  
                    <div class="flex-1 bg-indigo-200 mr-4 mt-16 w-80 shadow-xl relative rounded-lg overflow-hidden " id="messenger" > 
                        <div class="absolute bg-blue-700 h-64 rounded-t-lg  w-full z-0"> 
                          
                        </div> 
                        <div class="flex flex-col overflow-y-auto h-full p-4 space-y-4">

                            <div class=" flex flex-col p-8 z-10 text-white">
                                
                                <svg class="w-10 h-10 mb-3 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                                <div class="text-1xl mb-2 ">Hi Michael Andrew</div>
                                <div class="text-xs w-62 text-gray-200 mb-1 ">We help your business grow by connection you to your customers.</div>
                                
                            </div>
                            <div class="border-t-4 border-blue-500 rounded z-10 hadow-md">
                                <div class="bg-white border border-top-0 rounded-t-none  flex flex-col z-10 space-y-2">
                                    <div class="px-4 py-2 flex flex-col flex-start gap-3 ">

                                        <div><div class="font-semibold text-sm">Start a conversation</div></div>
                                        <div class="flex flex-row gap-3">
                                            <div class="flex flex-row -space-x-10">

                                                <img class="w-12 h-12 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=facearea&w=256&h=256&facepad=2" />
                                                <img class="w-12 h-12 rounded-full border-2 border-white" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=facearea&w=256&h=256&facepad=2" />
                                                <img class="w-12 h-12 rounded-full border-2 border-white" src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=facearea&w=256&h=256&facepad=2" />

                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <div class="text-gray-500 text-sm">Our usual reply time</div>
                                                <div class="flex flex-row items-center gap-1">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    <div class="text-sm font-bold"> A few minutes </div> 
                                                </div>
                                            </div> 

                                        </div>
                                        <button type="button" class="flex flex-row p-2 text-sm bg-blue-700 text-white rounded-full justify-center items-center gap-2">
                                            <svg class="w-4 h-4 transform rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
                                                </path>
                                            </svg>
                                            <p class="m-0">Send us a message</p>
                                        </button>

                                    </div>
                                    <div class="border-t px-4 py-2">
                                        <a href="#" class="text-sm text-blue-500  hover:text-blue-300 hover:no-underline">See all your conversations</a>
                                    </div>
                                </div>
                            </div>
                            


                            <div class="border-t-4 border-blue-500 rounded z-10 hadow-md">
                                <div class="bg-white border border-top-0 rounded-t-none p-6 flex flex-col z-10 space-y-2">
                                    <div class="font-semibold text-sm">Find your answer</div>
                                    <div class="flex flex-row">
                                        <input type="text" class="border flex-1 p-0 rounded-l text-sm p-1 shadow-inner outline-none bg-gray-100 focus:bg-white " name="" placeholder="Search our article" id="">
                                        <button class="bg-blue-700 flex-none text-white rounded-r p-1" type="button"> 
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                        </button> 
                                    </div>
                                </div>
                            </div>





                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                            <div class="bg-white border rounded flex items-center justify-center p-8 z-10">This is a card</div>
                        
                        </div>
                    
                    </div>


                    <div class="flex items-center justify-center text-white bg-blue-600 rounded-full w-16 h-16 m-4 cursor-pointer shadow-xl " @click = "InterComMessenger()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
 
                </div> 
            </template> 
        </intercom-inbox>
    </div>
</template>

<script>
import Button from '../../Jetstream/Button.vue'
import IntercomInbox from '../IntercomInbox.vue' 
export default {
  
    components: { 
        IntercomInbox,
        Button
    },  
    methods: { 
        InterComMessenger(){
            $('#messenger').toggleClass('invisible');
        }
    }

    
} 

</script>