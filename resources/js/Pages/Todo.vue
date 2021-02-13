<template>

    <!-- 
        https://to-do.live.com/tasks/
        https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3HTxG?ver=0d5b&q=90&m=2&h=768&w=1024&b=%23FFFFFFFF&aim=true 
    -->
    <div class="h-screen flex flex-col overflow-hidden" >

        <!--Header navbar-->
        <div class="flex flex-row bg-blue-500 text-white flex-none items-center justify-between"> 
            <div class="flex flex-row items-center flex-1 justify-start">
                <div class="flex items-center py-3 px-3  hover:bg-blue-600 cursor-pointer">
                    <svg class="w-4 h-4 bi bi-grid-3x3-gap" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
                    </svg>
                </div>  
                <div class="text-base font-black py-2 px-2 flex-none cursor-pointer">
                    To Do
                </div> 
            </div> 
            <div class="flex flex-row items-center relative justify-center flex-1 ">
                <svg class="w-4 h-4 transform rotate-90 absolute left-1 text-black " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" class="p-1 pl-4 py-1 outline-none flex-none text-black opacity-75 w-full rounded hover:opacity-100 focus:opacity-100">
            </div> 
            <div class="flex flex-row flex-1 items-center justify-end "> 
                <div class="flex items-center py-3 px-3   hover:bg-blue-600 cursor-pointer">  
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-4 h-4  bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg> 
                </div>  
                <div class="flex items-center py-2.5 px-2.5   hover:bg-blue-600 cursor-pointer"> 
                    <svg class="w-7 h-7 bi bi-question" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                    </svg>
                </div>  
                <div class="flex items-center py-3 px-3   hover:bg-blue-600 cursor-pointer"> 
                    <div class="relative"> 
                        <div class="bg-blue-800 rounded-full absolute -right-2 -top-2 text-xs h-4 w-4 flex justify-center items-center z-10">3</div>
                        <svg class="w-4 h-4 transform -rotate-90 z-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                    </div>
                </div>   
                <div class="flex items-center p-2.5 hover:bg-blue-600 cursor-pointer"> 
                    <div class=" w-7 h-7 rounded-full border p-1 text-sm flex justify-center items-center">
                        MS
                    </div> 
                </div>  
            </div>
        </div> 
        <!--End header navbar-->

        <!--Content -->
        <div class="flex flex-row flex-auto ">

            <!--Sidebar-->
            <div class=" sidebar md:w-1/5 md:w-10 w-6/12 flex flex-col h-auto justify-between h-full bg-gray-100 border border-l border-gray-500 ">
                <div class=" flex-auto border-b space-y-6 py-7"> 
                    <div class="flex flex-row p-1">
                        <div class="hover:bg-white p-1.5 cursor-pointer " @click="slideBtn">
                            <svg class="w-4 h-4 text-gray-400  " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </div>
                    </div> 
                    <div class="flex flex-col">
                        <div class="flex flex-row gap-3 hover:bg-white p-2 cursor-pointer">
                            <svg class="w-5 h-5 text-gray-400 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            <div class="flex-none">My Day</div>
                        </div>
                        <div class="flex flex-row  gap-3 hover:bg-white p-2 cursor-pointer">
                            <svg class="w-5 h-5 text-gray-400 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                            <div class="flex-none">Important</div>
                        </div>
                        <div class="flex flex-row  gap-3 hover:bg-white p-2 cursor-pointer">
                            <svg class="w-5 h-5 text-gray-400 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <div class="flex-none">Planned</div>
                        </div>
                        <div class="flex flex-row  gap-3 hover:bg-white p-2 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 flex-none text-gray-400 bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            <div class="flex-none">Assigned to you</div>
                        </div>
                        <div class="flex flex-row  gap-3 hover:bg-white p-2 cursor-pointer">
                            <svg class="w-5 h-5 text-gray-400 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <div class="flex-none">Tasks</div>
                        </div> 
                    </div>  

                    <div class="flex flex-col">
                        <div class="flex flex-row  cursor-pointer">
                            <div class="flex-1 gap-2 hover:bg-white p-2 flex flex-row">
                                <svg class="w-6 h-6 text-gray-400 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                <div class="flex-none">New list</div> 
                            </div>
                           
                            <div class="flex-none  hover:bg-white p-2">
                                <svg class="w-6 h-6 text-gray-400 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                        </div> 
                    </div> 
                </div>
 
                <div class="flex flex-row flex-col-reverse flex-none justify-between bottom-sidebar">
 
                    <div class="text-gray-400 hover:bg-gray-200 hover:text-gray-500  p-2.5 px-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="h-4 w-4 bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                    </div> 
                    <div class="text-gray-400 hover:bg-gray-200 hover:text-gray-500  p-2.5 px-3 cursor-pointer">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-4 w-4 bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </div> 
                    <div class="text-gray-400 hover:bg-gray-200 hover:text-gray-500  p-2.5 px-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-4 w-4 bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                    </div>

                    <div class="text-gray-400 hover:bg-gray-200 hover:text-gray-500   p-2.5 px-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-4 w-4 bi bi-file-break" viewBox="0 0 16 16">
                            <path d="M0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM12 0H4a2 2 0 0 0-2 2v7h1V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v7h1V2a2 2 0 0 0-2-2zm2 12h-1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-2H2v2a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-2z"/>
                        </svg>
                    </div> 
                    <div class="text-gray-400 hover:bg-gray-200 hover:text-gray-500 p-2.5 px-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-4 w-4 bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                        </svg>
                    </div> 

                </div>
            </div>  
            <!-- end sidebar -->




            <!--Start Main Content md:w-9/12 w-6/12-->
            <div class=" flex-auto p-4 space-y-7">
                <div class="flex flex-col space-y-1">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row justify-start space-x-3 items-center">
                            <div class="font-semibold text-xl">My Day</div>
                            <div class="cursor-pointer">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                            </div>
                        </div>
                        <!-- <div class="flex flex-row justify-end ">
                            <div>Sord</div>
                            <div>Suggestions</div>
                        </div>  -->
                    </div>
                    <div class="flex flex-row text-xs">
                        Date today!
                    </div>
                </div>
            
                <div class="flex">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col w-full">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="  overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class=" text-left p-1  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                 <div class="flex flex-row items-center " >
                                                    <svg class="w-6 h-6 flex-none cursor-pointer " @click="addToDo()" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                    <input type="text" ref="addTodoInput" class="addTodoInput p-0 flex-auto px-1 py-2 border-0 border-b border-gray-200  focus:outline-none "> 
                                                </div>
                                            
                                            </th>  
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            
                                            <td class="px-2 py-2 whitespace-nowrap flex items-center"> 
                                                <div class="text-sm text-gray-900">I will do the kitchen</div> 
                                                
                                            </td> 
                                        </tr>

                                        <!-- More items... -->
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            
            
            </div> 
            <!--End Main Content -->
        </div> 


    </div>
</template>

<script>
export default {  
    methods:{
        addToDo(){
             
             console.log("Start")
            //document.querySelector('.addTodoInput').keyup(); 
             console.log("end")
            // //  $("#addTodoInput").trigger("click");
            //this.$refs.addTodoInput.click();
        },
        slideBtn(){
            $('.sidebar').toggleClass('md:w-1/5');
            $('.bottom-sidebar').toggleClass('flex-row');
             $('.bottom-sidebar > div').toggleClass('px-3');
        }
// py-2.5 px-3
// py-2.5 px-3
// py-2.5 px-3
// py-2.5 px-3
// py-2.5 px-3
        
    }
} 
</script>




<style scoped>
    .slide-btn{
        
    }
    .sidebar,
    .bottom-sidebar{
        transition: 0.8s all;
        overflow: hidden; 
    }
</style>