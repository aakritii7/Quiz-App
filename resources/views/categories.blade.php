<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>
    @if (session('category'))
    <div class="bg-green-800 text-white pl-5">{{ session('category') }}</div>
        
    @endif
    <div class="bg-gray-100 flex flex-col items-center pt-5 min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
    <h2 class="text-2xl text-center text-gray-700 mb-6 font-semibold">Add Category</h2>
        <form action="/add-category" method="post" class="space-y-4">
            @csrf
            <div>
                <input type="text" name="category" placeholder="Enter Category Name" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            </div>
           
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Add</button>
        </form>
    </div>
    <div class="mt-10 w-200">
        <h1 class="text-2xl text-blue-500 text-center font-semibold">Category List</h1>
        <ul class="border border-gray-200">
            <li class="p-2">
                <ul class="flex justify-around font-semibold">
                    <li class="w-30">SN</li>
                    <li class="w-70">Name</li>
                    <li class="w-70">Creator</li>
                    <li class="w-30">Action</li>

                </ul>
            </li>
            
            @foreach ($categories as $category)
            <li class="even:bg-gray-200 p-2">
                <ul class="flex justify-around">
                    <li class="w-30">{{ $loop->iteration }}</li>
                    <li class="w-70">{{ $category->name }}</li>
                    <li class="w-70">{{ $category->creator }}</li>
                    <li class="w-30">Delete</li>

                </ul>
            </li>
            
            @endforeach
        </ul>
    </div>

    </div>
    
</body>
</html>