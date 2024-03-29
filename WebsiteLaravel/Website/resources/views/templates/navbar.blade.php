<html>
    <head>
        <meta charset="UTF-8">

        <!-- Tailwind CSS Framework link -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- jQuery Framework Link-->

    </head>
    <body class="bg-slate-200 dark:bg-neutral-800 font-mono">
        
        <!-- Page layout -->
        <div class="grid grid-cols-9 h-full">

            <!-- NavBar -->
            <div class="col-span-2 bg-neutral-950 flex flex-col ">
                
                <!-- Logo -->
                <div class='h-[20%] w-full bg-neutral-900 flex items-center px-5'>
                    
                    <!-- Circle -->
                    <div class=' rounded-full'>
                        <img src='{{ asset('imgs/pngegg.png') }}' alt='Logo'>
                    </div>
                    
                    <div class='p-5 text-lime-500 text-xl font-bold text-center '>
                        Curso de Ciberseguranca
                    </div>

                </div>
                <!-- Logo -->

                <!-- Nav Bar Links -->
                <div class="flex-grow"> 
                    <ul id='navbar' class=" font-bold text-slate-200 px-5">
                        <a href="{{ '/' }}" class="p-5" > 

                            <li class="text-lg hover:bg-neutral-900 rounded p-5 text-right grid grid-cols-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                    <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                </svg>

                                Main Page
                            </li>

                        </a>

                        <a href="{{ 'home' }}" class="" > 

                            <li class="text-lg hover:bg-neutral-900 rounded p-5 text-right grid grid-cols-2 items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                                </svg>

                                About the Event 

                            </li>

                        </a>
                        @guest
                        <a href="{{ 'register' }}" class="" >

                            <li class="text-lg hover:bg-neutral-900 rounded p-5 text-right grid grid-cols-2 items-center">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>

                                Register for the Event

                        </li>

                        </a>
                        @endguest

                        @auth
                        <li class="text-lg hover:bg-neutral-900 rounded p-5 text-right grid grid-cols-2 items-center">
                            <a href="{{ 'courses' }}" class="" > My Courses </a>
                        </li>
                        @endauth
                    </ul>
                </div>
                <!-- Nav Bar Links-->

            </div>
            <!-- NavBar -->

            <!-- Rest of page -->
            <div class="col-span-7 text-slate-200 p-5">

            @yield('content')
            
            
