<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-white shadow-md px-4 py-3">
        <div class="flex justify-between item-center">
        <div class="text-2xl text-gray-700 hover:text-blue-500 cursor-pointer">
            Quiz System
        </div>
        <div class=" space-x-6">
            <a class="text-gray-700 hover:text-blue-500">Categories</a>
            <a class="text-gray-700 hover:text-blue-500"href="">Quiz</a>
            <a class="text-gray-700 hover:text-blue-500"href="">Welcome{{$name}}</a>
            <a class="text-gray-700 hover:text-blue-500"href="">Login</a>
            </div>
        </div>
    </nav>
    
</body>
</html>