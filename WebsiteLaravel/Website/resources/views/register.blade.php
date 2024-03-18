@include('templates.navbar')

            <!-- Rest of page -->
            

                <h1 class="text-2xl p-5 "> Projeto de Prova Aptidão Profissional </h1>

                <div class="w-[80%] mx-auto mt-5 p-6 bg-slate-500 rounded-md shadow-md">
                    <h2 class="text-2xl font-semibold text-slate-200 mb-5">Registration Form</h2>
                    
                    <form class="md:grid md:grid-cols-2 md:gap-5 text-slate-200">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-semibold mb-2">Name</label>
                            <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded">
                        </div>
            
                        <div class="mb-4">
                            <label for="username" class="block  text-sm font-semibold mb-2">Username</label>
                            <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded">
                        </div>
            
                        <div class="mb-4">
                            <label for="email" class="block  text-sm font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded">
                        </div>
            
                        <div class="mb-4">
                            <label for="password" class="block  text-sm font-semibold mb-2">Password</label>
                            <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded">
                        </div>
            
                        <div class="mb-4 text-slate-200">
                            <label for="class" class="block  text-sm font-semibold mb-2">Class</label>
                            <select id="class" name="class" class="w-full p-2 border border-gray-300 rounded">
                                
                                <?php
                                $loop = 0;
                                for ($letter = 'A'; $loop <= 25; $letter++) {
                                    echo "<option value=\"$letter\">$letter</option>";
                                    $loop ++;   
                                }   
                                ?>
                                
                            </select>
                        </div>
            
                        <div class="mb-4">
                            <label for="schoolYear" class="block  text-sm font-semibold mb-2">School Year</label>
                            <select id="schoolYear" name="schoolYear" class="w-full p-2 border border-gray-300 rounded">
                                
                                <?php
                                for ($year = 1; $year <= 12; $year++) {
                                    echo "<option value=\"$year\">$year º</option>";
                                }
                                ?>
                                
                            </select>
                        </div>
            
                        <div class="mb-4 col-span-2">
                            <label for="school" class="block  text-sm font-semibold mb-2">School</label>
                            <input type="text" id="school" name="school" class="w-full p-2 border border-gray-300 rounded">
                        </div>
            
                        <div class="mb-6 col-span-2">
                            <button type="submit" class="bg-blue-500 text-white p-3 rounded-md w-full">Register</button>
                        </div>
                    </form>
                    <p class=" text-sm">Already have an account? <a href="{{ 'login' }}" class="text-blue-500">Login here.</a></p>
                </div>



            <!-- Rest of page -->

<!-- Because laravel is a piece of shit type bullshit -->
            </div>
        </div>
    </body>
</html> 
