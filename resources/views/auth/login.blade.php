<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Minimarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>

        <form action="/login" method="post" class="w-50 mx-auto">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>

                <input type="text" class="form-control" id="email" placeholder="Masukkan email..." name="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>

                <input type="password" class="form-control" id="password" placeholder="Masukkan password..." name="password"
                    min="1">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success px-3">Login</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
