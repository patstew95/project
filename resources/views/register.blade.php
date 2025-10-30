<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-serif, bg-gradient-to-r from-emerald-950 via-green-500 to-emerald-950 min-h-screen flex items-center justify-center">
    <div class="bg-white border border-gray-400 p-8 rounded-lg  max-w-md w-full text-black">
    <h1 class="text-3xl font-bold mb-6 text-center">Welcome To State Compare!</h1>
   
    
    <form action="" method="POST">
        @csrf
    <div>
    <label for="first">Username:</label>
    <input type="text" id="first" name="first" 
     placeholder="Enter your Username" required>
    </div>
    <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" 
     placeholder="Enter your Password" required>
    </div>
    <div>
       
     <select name="state_of_residence">
        @foreach(\App\Models\State::where('state_abbreviation', '!=', 'US')->orderBy('state_name')->get() as $state)
            <option value="{{ $state->state_abbreviation }}">{{ $state->state_name }}</option>
        @endforeach
    </select>

        </select>
    <div>
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary"
        placeholder="salary" required>
    </div>
    
    <button type="submit" class= "bg-emerald-500 text-white py-2 px-4 rounded "> Submit </button>
   
    </form>
    </div>
    <footer class="fixed bottom-0 left-0 p-1  text-black">copyright &copy; 2025 Patrick Stewart</footer>
</body>
</html>