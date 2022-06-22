<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="bg-indigo-400  w-full h-screen">
        <div class="pt-32">
            <form action="/" method="POST" enctype="multipart/form-data">
                @csrf
    <div class="py-5  rounded-md  w-1/2 mx-auto  bg-indigo-200 px-10 ">
    <h1 class="font-semibold text-5xl">Import Excel File</h1>
    @if (Session::has('success')){
        <div class="w-full my-3 bg-indigo-300">
            <p class="text-xl font-semibold text-indigo-500 my-2 py-1 px-3">Imported</p>
        </div>
    } 
    @endif
    <input type="file" name="file" id="" class="py-5 "><br>
    <button type="submit" @disabled($errors->isNotEmpty()) class="font-semibold py-1 px-3 rounded-full text-white bg-indigo-600 hover:bg-indigo-900 transion duration-150">Import</button>
</div>
</form>
</div>
{{-- @foreach ((array)$msg as $msg)
    {{$msg->msg}}
@endforeach --}}
</div>
    <script src="https://cdn.tailwindcss.com"></script>   
</body>
</html>