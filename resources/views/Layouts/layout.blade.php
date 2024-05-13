<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="h-100">
    <main class="d-flex flex-row  justify-content-start align-items-stretch gap-2 h-100 ">
        <div class="sideBar pb-5  bg-dark text-white">
            <ul class="d-flex flex-column mb-3 gap-4 p-2">
                <li class="list-group-item list-group-item-action p-3">Dashboard</li>
                <li class="list-group-item list-group-item-action p-3">Warga</li>
                <li class="list-group-item list-group-item-action p-3">Projek</li>
                <li class="list-group-item list-group-item-action p-3">Layanan</li>
                <li class="list-group-item list-group-item-action p-3">Dokumen</li>
            </ul>
        </div>
        <div class="main h-100 p-4">
            @yield('main')
        </div>
    </main>
    <footer class="bg-dark text-white p-3">
        <p>copyright of ruralboard 2024</p>
    </footer>
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>