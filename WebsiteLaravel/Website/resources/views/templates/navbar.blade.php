<html>
    <head>
        <meta charset="UTF-8">

        <!-- Tailwind CSS Framework link -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- jQuery Framework Link-->

    </head>
    <body class="bg-slate-200 dark:bg-neutral-800">
        
        <!-- Page layout -->
        <div class="grid grid-cols-4 h-full">

            <!-- NavBar -->
            <div class="col-span-1 bg-neutral-950 flex flex-col ">
                
                <!-- Logo -->
                <div class='h-[20%] w-full bg-neutral-900 flex items-center px-5'>
                    
                    <!-- Circle -->
                    <div class='h-[50%] w-[30%] rounded-full bg-blue-600 '>

                    </div>
                    
                    <div class='p-5 text-slate-200 text-2xl font-bold text-center'>
                        Curso de Ciberseguranca
                    </div>

                </div>
                <!-- Logo -->

                <!-- Nav Bar Links -->
                <div class="flex-grow"> 
                    <ul id='navbar' class=" font-bold text-slate-200">
                        <li class="text-2xl hover:bg-neutral-900 rounded p-5 text-right">
                            <a href="{{ '/' }}" class="" > Main Page </a>
                        </li>
                        <li class="text-2xl hover:bg-neutral-900 rounded p-5 text-right">
                            <a href="{{ 'home' }}" class="" > About the Event </a>
                        </li>
                        @guest
                        <li class="text-2xl hover:bg-neutral-900 rounded p-5 text-right">
                            <a href="{{ 'register' }}" class="" > Register for the Event </a>
                        </li>
                        @endguest

                        @auth
                        <li class="text-2xl hover:bg-neutral-900 rounded p-5 text-right">
                            <a href="{{ 'courses' }}" class="" > Register for the Event </a>
                        </li>
                        @endauth
                    </ul>
                </div>
                <!-- Nav Bar Links-->

            </div>
            <!-- NavBar -->

            <!-- Rest of page -->
            <div class="col-span-3 text-slate-200">

            @yield('content')
            
            
