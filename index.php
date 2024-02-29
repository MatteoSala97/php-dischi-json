<!DOCTYPE html>
<html lang="en"  data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>

    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <!-- FontAwesome library import link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">

</head>
<body class="vh-100">
    <div id="app">
        <?php include_once __DIR__ . './header.php'?>
        <?php include_once __DIR__ . './main.php'?>

        <div 
        v-if="isShown"
        id="overlay" 
        class="position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center ">
            <div class="card">
                <img class="card-img-top" :src="selectedDisc.poster" :alt="selectedDisc.title"/>
                <div class="card-body">
                    <h4 class="card-title">{{selectedDisc.title}}</h4>
                    <p class="card-text">{{selectedDisc.author}}</p>
                    <p class="card-text">{{selectedDisc.year}}</p>
                </div>
            </div>
            
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js' integrity='sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==' crossorigin='anonymous'></script>

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- VUE3 CDN -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- My JS -->
    <script src="./main.js"></script>
</body>
</html>