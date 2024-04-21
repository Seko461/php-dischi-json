<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="./assets/css/style.css">
    <title>Dischi json</title>
</head>
<body style="overflow-x:hidden">
    
<div id="app" style="overflow-x:hidden">

<header>
<nav class="navbar bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Albums</a>
  </div>
</nav>
</header>

<main>
    <div class="container my-3 p-3"></div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col" v-for="(disk, index) in disks">
                
                        
                <div class="card rounded m-3 ">
                    <img class="card-img-top" :src="disk.poster" alt="">
                        <div class="card-body">
                            <p class="card-text"> {{disk.title}}</p>
                      
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" :data-bs-target="`#exampleModal-${index}`">
                Info
                </button>

                <!-- Modal -->
                <div class="modal fade " :id="`exampleModal-${index}`" tabindex="-1" :aria-labelledby="`exampleModalLabel-${index}`" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" :id="`exampleModalLabel-${index}`"></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img class="card-img-top" :src="disk.poster" alt="">
                            <h4>{{disk.title}}</h4>
                            <h5>Author: {{disk.author}}</h5>
                            <h5>Genre: {{disk.genre}}</h5>
                            <h5>Year: {{disk.year}}</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                  </div>
                   
            </div>
        </div>
    </div>

</main>

<footer class="d-flex p-2 bg-dark text-white justify-content-around" >
    <ul class="list-unstyled my-3">
        <li>Lorem.</li>
        <li>Expedita!</li>
        <li>Suscipit.</li>
    </ul>
    <ul class="list-unstyled my-3">
        <li>Lorem.</li>
        <li>Expedita!</li>
        <li>Suscipit.</li>
    </ul>
    <ul class="list-unstyled my-3">
        <li>Lorem.</li>
        <li>Expedita!</li>
        <li>Suscipit.</li>
    </ul>
</footer>



</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./assets/js/app.js"></script>
</body>
</html>