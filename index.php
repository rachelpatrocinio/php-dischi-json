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
        <ul>
            <li v-for="(disk,i) in disks">
                <h2>{{disk.title}}</h2>
                <h5>{{disk.author}}</h5>
                <h6>{{disk.year}}</h6>
            </li>
        </ul>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>