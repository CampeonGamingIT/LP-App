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
    <div class="d-flex justify-content-center mt-3">
        <h1 class="display-6 fw-bold text-decoration-underline">Landing Pages App</h1>
    </div>

    <div class="container-fluid">
        <form action="" method="POST" id="form" class="">
            @csrf
            <div class="row">
                <div class="col-12 mt-1">
                    <label for="url">Write here the url: </label>
                    <input type="text" name="url" id="url" class="border" required>
                </div>
            </div>


            <div class="row">
                <div class="col-12 mt-1">
                    <label for="favicon">Write here the favicon: </label>
                    <input type="text" name="favicon" id="favicon" class="border" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-1">
                    <label for="pageLogo">Write here the page logo: </label>
                    <input type="text" name="pageLogo" id="pageLogo" class="border" required>
                </div>

            </div>

            <div class="row">
                <div class="col-12 mt-1">
                    <label for="pageTitle">Write here the page title: </label>
                    <input type="text" name="pageTitle" id="pageTitle" class="border" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-1">
                    <label for="ctaLink">Write here the cta link: </label>
                    <input type="text" name="ctaLink" id="ctaLink" class="border" required>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-1">
                    <label for="bgImg">Write here the bg IMG: </label>
                    <input type="text" name="bgImg" id="bgImg" class="border" required>
                </div>
            </div>

            <div class="row mt-3 ms-1">
                <div class="col-2 d-flex justify-content-center">
                    <button class="bg-danger text-white border-danger">Submit</button>
                </div>
            </div>

        </form>
    </div>

    <script>
        const url = document.getElementById('url');
        document.getElementById("form").action = url.value;
    </script>




</body>
</html>
