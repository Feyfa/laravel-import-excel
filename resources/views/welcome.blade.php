<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import Excel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-[90%] mx-auto px-4 py-8">
        <form action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" id="file">
            <button type="submit" class="border border-neutral-400 rounded py-1 px-2 bg-indigo-500 text-white">Import Excel</button>
        </form>
        
        <table class="w-full mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>