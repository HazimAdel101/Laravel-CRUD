<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Products</title>
</head>

<body>
    <h1 class="bg-yellow-500 text-center py-7 font-bold text-5xl">Create a product </h1>
    <form class="flex flex-col items-center justify-center bg-slate-800 text-white py-10" method="POST" action="{{route('product.store')}}">
        @csrf
        @method('post')
        @if ($errors-> any())
            <ul>
                @foreach ($errors-> all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <div class="">
            <div class="my-4">
                <label class="inline-block w-[5rem]" for="name">Name</label>
                <input class="rounded-md px-3 py-1  bg-slate-400" id="name" type="text" name="name" placeholder="name" required>
            </div>
            <div class="my-4">
                <label class="inline-block w-[5rem]" for="quantity">Quantity</label>
                <input class="rounded-md px-3 py-1  bg-slate-400" id="quantity" type="number" name="quantity" placeholder="Quantity" min="0" required>
            </div>
            <div class="my-4">
                <label class="inline-block w-[5rem]" for="price">Price</label>
                <input class="rounded-md px-3 py-1  bg-slate-400" id="price" type="number" name="price" placeholder="Price" min="0" step="0.0001" required>
            </div>
            <div class="my-4">
                <label class="inline-block w-[5rem]" for="description">Description</label>
                <input class="rounded-md px-3 py-1  bg-slate-400" id="description" type="text" name="description" placeholder="Description" required>
            </div>
            <div class="my-4 flex justify-center">
                <input class="bg-slate-300 font-bold hover:bg-slate-200 ease-in text-slate-900 px-7 py-2 rounded-md -translate-x-2" type="submit" name="submit"
                    value="Submit">
            </div>
        </div>
    </form>
</body>
</html>
