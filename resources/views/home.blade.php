<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>
<body>
    <div class="flex justify-center mt-3">
        <h1 class="text-3xl font-bold underline">Landing Pages App</h1>

    </div>

    <div class="grid grid-rows-8">
        <form action="" method="POST" id="form">
            @csrf
            <div>
                <label for="url" class="ms-2">Write here the url: </label>
                <input type="text" name="url" id="url" class="border border-gray-400 ms-1.5 mt-0.5" required>
            </div>

            <div>
                <label for="favicon" class="ms-2">Write here the favicon: </label>
                <input type="text" name="favicon" id="favicon" class="border border-gray-400 ms-1.5 mt-0.5" required>
            </div>

            <div>
                <label for="pageLogo" class="ms-2">Write here the page logo: </label>
                <input type="text" name="pageLogo" id="pageLogo" class="border border-gray-400 ms-1.5 mt-0.5" required>
            </div>

            <div>
                <label for="pageTitle" class="ms-2">Write here the page title: </label>
                <input type="text" name="pageTitle" id="pageTitle" class="border border-gray-400 ms-1.5 mt-0.5" required>
            </div>

            <div>
                <label for="ctaLink" class="ms-2">Write here the cta link: </label>
                <input type="text" name="ctaLink" id="ctaLink" class="border border-gray-400 ms-1.5 mt-0.5" required>
            </div>

            <div>
                <label for="bgImg" class="ms-2">Write here the bg IMG: </label>
                <input type="text" name="bgImg" id="bgImg" class="border border-gray-400 ms-1.5 mt-0.5" required>
            </div>

            <x-primary-button class="mt-3 bg-danger">Submit</x-primary-button>
        </form>
    </div>

    <script>
        const url = document.getElementById('url');
        document.getElementById("form").action = url.value;
    </script>




</body>
</html>
