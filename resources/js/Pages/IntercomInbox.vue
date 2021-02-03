<template>



    <div class="flex flex-row h-screen bg-gray-200">
        <div class="flex flex-col flex-none justify-between items-center bg-gray-200 w-16  ">

            <div class="flex flex-col space-y-2 w-full items-center pt-5">
                 <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a>
                <a class="block relative h-14 w-14 flex flex-row justify-center items-center">
                    <div class="relative">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                        <div class="absolute top-0 right-0 bg-red-500 w-4 h-4 text-xs text-white rounded-full text-center">
                            5
                        </div>
                    </div>

                </a>
               <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a> 
                <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a>
                <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a>
                <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a> 
            </div>
            <div class="flex flex-col space-y-2">
                <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a>
                <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a>
                <a><div class="bg-gray-400 rounded-full w-8 h-8"></div></a> 
            </div>

        </div>
        <div class="w-64 bg-gray-100 p-4 flex flex-col flex-none space-y-4">
            <!--heroicon.dev-->
            <div class="flex flex-row justify-between items-center mb-6 ">
                <h1 class="font-semibold text-2xl">Inbox</h1>
                <svg class="flex-none w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <div class="bg-red-200 h-64"></div>
            <div class="bg-red-200 h-64"></div>

        </div>
        <div class="flex flex-row flex-auto bg-white rounded-tl-xl border-l shadow-xl">
            <div class="flex flex-col w-1/5 border-l border-r rounded-tl-xl border-gray-400">
                <div class="flex-none h-24 bg-red-200">Top</div>


                <div class="flex-auto overflow-y-auto">  
                    <a class="block border-b cursor-pointer"> 
                        <div class="border-l-2 border-blue-500 p-3 space-y-4 hover:bg-gray-100"> 
                            <div class="flex flex-row items-center space-x-2"> 
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <strong class="flex-grow text-sm">Mike Suarez</strong>
                                <div class="text-sm text-grat-600">5hrs</div> 
                            </div>

                            <div class="flex flex-row aligns-center space-x-1"> 
                                <svg class="flex-none w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                
                                <div class="flex-grow text-xs truncate">Some message content here!!! asdasdasdasdasdasdasda asdasdasdasdasdasd asdasd</div>
                            </div>
                            
                        </div> 
                    </a>  
                </div> 
            
            </div>
            <div class="w-3/5   border-r border-gray-400 flex-none flex flex-col">
                <div class="h-20 bg-white  flex-none flex flex-row justify-between items-center p-4 border-b">
                    <div class="flex flex-col space-y-1">
                        <strong>Lovely Joy</strong>
                        <input type="text" placeholder="Some muted text" class=" text-sm outline-none  border-b border-dashed p-0 text-black placeholder-gray-600" /> 
                    </div>
                    <div class="flex flex-row items-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                    </div> 
                </div>


                <div class="overflow-y-auto flex-auto  p-3">

                    <div class="flex flex-row space-x-2 p-2"> 
                        <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        
                        <div class="flex flex-col">
                            <div class="bg-gray-200 rounded p-2">
                                some message text
                            </div>
                            <div class="text-sm text-gray-500">5hr ago</div>
                        </div>
                        
                    </div>


                    <div class="flex flex-row-reverse space-x-2 p-2"> 

                        <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        
                        <div class="flex flex-col pr-2">
                            <div class="bg-blue-100 rounded p-2">
                                some message text
                            </div>
                            <div class="text-sm text-gray-500">5hr ago</div>
                        </div>
                       
                    </div>



                </div>


                <div class="h-40 bg-white flex-none p-2">
                    <textarea class="w-full h-full autline-none border focus: border-blue-600 hover:border-blue-600 rounded  shadow-lg"></textarea>
                </div>
            </div>


            <div class="w-1/5 bg-gray-400 overflow-y-auto flex flex-col  ">

                <div class="h-64 flex-none border-b bg-gray-400 flex flex-col justify-center items-center">
                    Content here
                </div>

                <div class="flex flex-col space-y-4 p-2">
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>    
                    <div class="flex justify-center items-center flex-none h-64 bg-white border rounded p-2">card section</div>     
                </div> 
            </div>
        </div>
 
        <div class="absolute right-0 h-full"> 
            <slot name="intercominbox" > This is the default content if nothing gets specified to go here </slot> 
        </div> 
    </div>
</template>

<script>
  export default {
    props: {
      title: String,
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = title
        },
      },
    },



  }
</script>