<?php require 'header.php' ?>


<!doctype html>
<html lang="en">
    <head>
       <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">
        <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
        <link rel="stylesheet" href="home.css">
        
        
    </head>
    
    <body>
        <div class="container" style="margin-top:30px;">
            <div class="pic1" style="text-align:center">
                <img src="filmsforsite/oscars.jpg" style="max-width:100%;border-radius:5px;"> 
                   
            </div>
           
            <div class="glide" style="margin-top:50px">
              <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/casino.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/training.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/carlito.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/heat.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/city.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/leon.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/snatch.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/snatch.jpg" width="200px;" style="border-radius:10px;"></li>
                <li class="glide__slide" style="text-align:center"><img src="filmsforsite/snatch.jpg" width="200px;" style="border-radius:10px;"></li>
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fas fa-arrow-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
        
        
        
        
        
        
        
        
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script>
        
        const myVar =  {
            
            type: 'carousel',
            perView: 4,
            breakpoints: {
                1200: {
                perView: 3
              },
                1000: {
                perView: 3
              },
                900: {
                perView: 3
              },
                800: {
                perView: 2
              },
                600: {
                perView: 1
              }
            }
        }
        new Glide('.glide',myVar).mount()
        
    </script>
       
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>
   
</html>