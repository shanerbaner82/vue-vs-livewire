<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Form</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">

    {{--YUCK!--}}
    <link href="{{mix('css/app.css')}}" rel="stylesheet" />
    {{--ENDYUCK!--}}
</head>
<body>
    <div id="app" class="bg-gray-200 h-full w-full min-h-screen py-10 px-4">
        <div class="w-full lg:w-1/2 mx-auto">
            @yield('content')
        </div>
    </div>

    {{--YUCKJS!--}}
    <script src="{{mix('js/app.js')}}"></script>
    {{--ENDYUCKJS!--}}
</body>
</html>
