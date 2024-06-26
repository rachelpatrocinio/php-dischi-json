<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://kit.fontawesome.com/c473752e7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>php-dischi-json</title>
</head>
<body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <?php include __DIR__ .'/header.php'?>
        <main class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6" v-for="(disk,i) in disks" :key="i" @click="openModal(i)">
                        <div class="card p-5 mb-5">
                            <img :src="disk.poster" class="card-img-top" alt="...">
                            <div class="card-body text-center text-white">
                                <h6 class="card-title"><strong>{{disk.title}}</strong></h6>
                                <p class="card-text">{{disk.author}}</p>
                                <p class="card-text"><strong>{{disk.year}}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay d-flex justify-content-center align-items-center" :class="isOpen === false ? 'd-none' : 'd-block'">
                <div class="overlay-container text-white">
                    <span @click="closeModal"><i class="fa-regular fa-circle-xmark"></i></span>
                    <img :src="disks[currentDisk].poster" class="card-img-top mb-3" alt="...">
                    <h6 class="card-title"><strong>{{disks[currentDisk].title}}</strong></h6>
                    <p class="card-text">{{disks[currentDisk].author}}</p>
                    <p class="card-text"><strong>{{disks[currentDisk].year}}</strong></p>
                </div>
            </div>
        </main>
    </div>

    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>