<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">
            Admin Login
        </h2>
         @error('user')
                    <div class="text-red-500">{{$message}}</div>
                    @enderror
                    

        <form action="/admin-login" method="POST" class="space-y-4">
            @csrf

            <!-- Admin Name -->
            <div>
                <label class="block text-gray-600 mb-1">Admin name</label>
                <input 
                    type="text" 
                    name="name"
                    placeholder="admin"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">

                    @error('name')
                    <div class="text-red-500">{{$message}}</div>
                    @enderror
                    
                
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-600 mb-1">Password</label>
                <input 
                    type="password" 
                    name="password"
                    placeholder="•••"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
                @error('password')
                <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>

            <!-- Login Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 transition text-white rounded-xl px-4 py-2 font-medium"
            >
                Login
            </button>

        </form>

    </div>

</body>
</html>
