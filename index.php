<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>php-dischi-json</title>
</head>
<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <main>
            <div class="container">
                <div class="row d-flex flex-wrap">
                    <div class="card col-4 p-5" v-for="(disk,i) in disks" :key="i">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{disk.title}}</h5>
                            <p class="card-text">{{disk.author}}</p>
                            <p class="card-text">{{disk.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>