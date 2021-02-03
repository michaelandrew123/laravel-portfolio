<template>

    <div class="h-screen ">
        <div class="flex flex-col space-y-10"> 
            <!--Menu icons -->
            <div class="flex flex-row justify-between items-align bg-blue-600 p-1">

                <div class="flex flex-row space-x-1 text-white items-center ">
                   <div class="flex px-2 py-1.5 bg-blue-400 flex items-center rounded cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    </div> 
                   <div class="flex px-2 py-1.5 bg-blue-400 flex items-center rounded cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>   
                    </div>  
                    <div class="flex flex-row px-2 py-1.5 bg-blue-400 items-center cursor-pointer justify-between rounded space-x-2"> 
                        <svg class="w-5 h-5" role="presentation" focusable="false" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm2 1a1 1 0 011-1h4a1 1 0 011 1v10a1 1 0 01-1 1H6a1 1 0 01-1-1V6zm9-1a1 1 0 00-1 1v6a1 1 0 001 1h4a1 1 0 001-1V6a1 1 0 00-1-1h-4z" fill="currentColor"></path></svg>
                        <div class="text-sm font-bold flex items-center ">Boards</div>
                    </div> 
                    <div class="flex flex-row justify-center items-center relative rounded cursor-pointer">
                        <input type="text" name="" placeholder="" class="px-3 py-1 text-ms bg-blue-300 rounded outeline-none shadow-inner"> 
                        <svg class="w-5 h-5 absolute right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>   
                    </div> 
                </div>

                <div class="flex flex-row items-center"> 
                    <img class="h-8 opacity-50" src="https://a.trellocdn.com/prgb/dist/images/header-logo-2x.01ef898811a879595cea.png"/> 
                </div>
                
                <div class="flex flex-row space-x-2 text-white items-center">
                   <div class="flex px-2 py-1.5 bg-blue-400 flex items-center rounded cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>   
                     </div> 
                   <div class="flex px-2 py-1.5 bg-blue-400 flex items-center rounded cursor-pointer">
                        <svg class="w-5 h-5 transform rotate-180 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>   
                    </div> 
                   <div class="flex px-2 py-1.5 bg-blue-400 flex items-center rounded cursor-pointer">
                       <svg class="w-5 h-5" role="presentation" focusable="false" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2a1 1 0 00-1 1v.078a4.687 4.687 0 00-1.867.715 4.51 4.51 0 00-1.527 1.76 5.914 5.914 0 00-.53 1.658A5.908 5.908 0 007 7.972V8h1-1v3.723l-2.857 4.762A1 1 0 005 18h14a1 1 0 00.858-1.515L17 11.723V8h-1l1-.001v-.027a2.613 2.613 0 00-.01-.215 5.901 5.901 0 00-.066-.546 5.913 5.913 0 00-.53-1.658 4.51 4.51 0 00-1.527-1.76A4.687 4.687 0 0013 3.078V3a1 1 0 00-1-1zM9 7.988V12a1 1 0 01-.143.514L6.767 16h10.467l-2.092-3.486A1 1 0 0115 12V7.988l-.005-.089a3.903 3.903 0 00-.044-.36 3.92 3.92 0 00-.345-1.092 2.512 2.512 0 00-.848-.99C13.378 5.203 12.825 5 12 5s-1.377.203-1.758.457a2.512 2.512 0 00-.848.99A3.918 3.918 0 009.05 7.54a3.911 3.911 0 00-.05.45zM14 19a2 2 0 11-4 0h4z" fill="currentColor"></path></svg>
                    </div> 
                   <div class="flex p-0 h-8 w-8 bg-gray-100 flex items-center justify-center rounded-full text-black font-black font-xs cursor-pointer">
                       <div> MS</div>
                    </div> 
                </div> 
            </div>
            <!-- Content -->
            <div class="container flex flex-row space-x-10">
                <div class="flex flex-col w-64 space-y-5 flex-none">
                    <div class="flex flex-col gap-1 "> 
                        <div class="flex flex-row items-center justify-start gap-2 bg-blue-100 p-2 rounded text-xs cursor-cc">
                            <svg class="w-5 h-5" role="presentation" focusable="false" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm2 1a1 1 0 011-1h4a1 1 0 011 1v10a1 1 0 01-1 1H6a1 1 0 01-1-1V6zm9-1a1 1 0 00-1 1v6a1 1 0 001 1h4a1 1 0 001-1V6a1 1 0 00-1-1h-4z" fill="currentColor"></path></svg>
                            <div class="text-sm font-extrabold flex items-center">Boards</div>
                        </div> 
                        <div class="flex flex-row items-center justify-start gap-2 hover:bg-gray-100 p-2 rounded text-xs cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                            <div class="text-sm font-extrabold flex items-center">Templates</div>

                        </div> 
                        <div class="flex flex-row items-center justify-start gap-2 hover:bg-gray-100  p-2 rounded text-xs cursor-pointer">
                            <svg class="w-5 h-5 transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>    
                            <div class="text-sm font-extrabold flex items-center">Home</div>
                        </div> 
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="text-sm font-medium  opacity-80 gap-2 p-2 text-xs">TEAMS</div>
                        <div class="flex flex-row items-center justify-start gap-2 hover:bg-gray-100  p-2 rounded text-xs cursor-pointer">
                            <svg class="w-5 h-5 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>   
                            <div class="text-sm font-medium flex items-center opacity-80">Create a team</div>
                        </div>
                    </div>

                </div>

                <!--Main Content-->
                <div class="flex flex-col items-start flex-auto space-y-10 ?">


                    <!--Col 1 -->
                    <div class="flex flex-col space-y-3 w-full">

                        <div class="flex flex-row space-x-2"> 
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div class="font-extrabold">Recently Viewed</div> 
                        </div>
                        
                        <div class="flex flex-col space-y-2">  
                            <div class="flex flex-wrap gap-2"> 
    
                                <div class="h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-green-400 to-blue-500 hover:from-green-500 hover:to-blue-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Mike</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div> 

                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-purple-400 to-indigo-500 hover:from-purple-500 hover:to-indigo-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Team One Board</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
    
                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-red-400 to-yellow-500 hover:from-red-500 hover:to-yellow-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Team Two Board</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>
    
                            </div> 
                        </div> 
                    </div>   

                    
                    <!--Col 2 -->
                    <div class="flex flex-col space-y-3 w-full">
  
                        <div class="flex flex-row space-x-2"> 
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <div class="font-extrabold">Personal Boards</div> 
                        </div>

                        <div class="flex flex-col space-y-2">  
                            <div class="flex flex-wrap gap-2">  

                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 hover:from-purple-500 hover:via-pink-600 hover:to-red-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Personal Board</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div> 
                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-red-400 via-green-500 to-blue-500 hover:from-red-500 hover:via-green-600 hover:to-blue-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Personal Board</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div> 
                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-indigo-400 via-blue-500 to-purple-500 hover:from-indigo-500 hover:via-blue-600 hover:to-purple-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Personal Board</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div> 
                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gradient-to-r from-purple-400 to-indigo-500 hover:from-purple-500 hover:to-indigo-600 rounded cursor-pointer">
                                    <div class="fon-ultrabold text-white text-sm">Personal Board</div>
                                    <div class="absolute bottom-0 right-0 p-2"> 
                                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </div>
                                </div>   

                                <div class=" h-24 w-52 lg:w-52 md:w-full sm:w-full p-2 relative bg-gray-100 hover:bg-gray-300 rounded cursor-pointer flex items-center justify-center">
                                    <div class="fon-ultrabold text-black text-sm ">Create new board</div> 
                                </div> 
                            </div>  
                        </div> 


                    </div>  

                    <div class="flex flex-col space-x-2">
                        <div class="flex flex-row items-center justify-start gap-2 hover:bg-gray-200 bg-gray-100  p-2 rounded text-xs cursor-pointer">
                            <svg class="w-5 h-5 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>   
                            <div class="text-sm font-medium flex items-center opacity-80">View all close boards</div>
                        </div>
                    </div>   


                </div> 
            </div>
        </div>
    </div>
</template>