<html>
    <head>
        <meta charset="UTF-8">

        <!-- Tailwind CSS Framework link -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- jQuery Framework Link-->

    </head>
    <body class="bg-slate-200 dark:bg-slate-800">
        
        <!-- Page layout -->
        <div class="grid grid-cols-4 h-full">

            <!-- NavBar -->
            <div class="col-span-1 bg-slate-500 flex flex-col p-5">
                
                <!-- Logo -->
                <div class='h-[20%] w-full bg-blue-200 py-5'>
                    
                </div>
                <!-- Logo -->

                <!-- Nav Bar Links -->
                <div class="flex-grow py-5"> 
                    <ul id='navbar' class="space-y-4 font-bold text-slate-200">
                        <li class="bg-slate-600 hover:bg-slate-700 rounded p-5">
                            <a href="{{ '/' }}" class="" > Main Page </a>
                        </li>
                        <li class="bg-slate-600 hover:bg-slate-700 rounded p-5">
                            <a href="{{ 'home' }}" class="" > About the Event </a>
                        </li>
                        @guest
                        <li class="bg-slate-600 hover:bg-slate-700 rounded p-5">
                            <a href="{{ 'register' }}" class="" > Register for the Event </a>
                        </li>
                        @endguest

                        @auth
                        <li class="bg-slate-600 hover:bg-slate-700 rounded p-5">
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
            
            
