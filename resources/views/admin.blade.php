<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-white shadow-md px-4 py-3">
        <div class="flex justify-between item-center">
            <div class="text-2xl font-bold text-gray-700 hover:text-blue-500 cursor-pointer transition-all duration-500">
            <h1>Quiz System</h1>
        </div>
        <div class="space-x-5">
            <a class="text-gray-700 hover:text-blue-500 transition-all duration-500" href="">Categories</a>
            <a class="text-gray-700 hover:text-blue-500 transition-all duration-500" href="">Quiz</a>
            <a class="text-gray-700 hover:text-blue-500 transition-all duration-500" href="">Welcome {{ $name }}</a>
            <a class="text-gray-700 hover:text-blue-500 transition-all duration-500" href="">Log Out</a>
        </div>
        </div>
    </nav>
</body>
</html>