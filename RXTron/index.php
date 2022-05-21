<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RXTron</title>
        <link rel="icon" type="Img" href="Img/LOGO2.png">  
        
        <!--Links-->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"crossorigin="anonymous"></script>
          
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
          <link rel="stylesheet" href="css/Icons.css">
          <link rel="stylesheet" href="css/Button.css">
        <!--Links--> 
        </head>


        <!--CSS-->
      <style>
        .dropdown-item:hover{
        background-color: rgb(147, 181, 255);
      }
      .dropdown:hover .dropdown-menu{
        display: block;
      }
      .btn {
      background-color: rgb(91, 133, 223);
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
      }
      .btn:hover {
        background-color: rgb(147, 181, 255);
        color: rgb(177, 177, 177);
      }

      </style>
      <!--CSS-->


        <body style="background-color: rgb(15, 14, 14);">
        

        <div class="container"> 
          
          
          <div class="row">
            <div class="col">
              <!-- Navbar 1 -->
                <nav class="navbar navbar-dark" style="background-color: rgb(7, 21, 51);" >
                  <a class="navbar-brand" style="color: rgb(150, 69, 226);">
                      <img src="Img/LOGO1.png" width="60" height="60" class="d-inline-block align-top" >
                      <img src="https://see.fontimg.com/api/renderfont4/axanm/eyJyIjoiZnMiLCJoIjo1MiwidyI6MTAwMCwiZnMiOjUyLCJmZ2MiOiIjOTY0M0I2IiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/UlhUUk9O/japanese-2020.png" alt="Asian fonts">
                  </a>
                  
                </nav>
            </div>
          </div>
            
          <!-- Navbar 1 -->  
  
  
          <!-- Navbar 2 -->
          
              <div class="row" style="color: rgb(7, 21, 51);">
                <div class="col">
                
                  <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: rgb(11, 27, 61);">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a style="color: aliceblue;" class="nav-link" href="#home">Home</a>
                          </li>
  
                          <li class="nav-item dropdown">
                            <a  style="color: aliceblue;" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Mais
                            </a>
                            <!--PHP links-->
                            <div class="dropdown-menu" style="background-color: rgb(91, 133, 223);" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#Sobre">Sobre</a>
                              <a class="dropdown-item" href="opcao.php?opcao=1">Brawllhala</a>
                              <a class="dropdown-item" href="opcao.php?opcao=2">Genshin Impact</a>
                              <a class="dropdown-item" href="opcao.php?opcao=3">Fortnite</a>
                            </div>
                          </li>
                      </div>
                    </nav>
  
                    <!-- Navbar 2 -->
  
                    <div class="row">
                      <div class="col-sm">
                     <br>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm">
                     <br>
                      </div>
                    </div>
  
                    <!-- Carrossel  -->
  
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="Img/fortnite-insight-with-sniper-rifle_3840x2160_xtrafondos.com.jpg"  alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="Img/genshin-impact-characters-uhdpaper.com-4K-2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="Img/Fountain_1920x1080-980x551.jpg" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                              </a>
                          </div>
  
                          <!-- Carrossel  -->
  
  
                          <!-- Espa -->
  
                            <div class="row">
                              <div class="col-sm">
                             &nbsp;
                              </div>
                            </div>
  
                            <div class="row">
                              <div class="col-sm">
                             <br>
                              </div>
                            </div>
  
                            <div class="row">
                              <div class="col-sm">
                                <h3 class="button" style="color: aliceblue; text-align: center;" id="Games">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
  
                                <!--https://www.fontspace.com/xenosphere-font-f30089 site da img / fonte -->
  
                                <img src="https://see.fontimg.com/api/renderfont4/WXgv/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTI1MCwiZnMiOjUyLCJmZ2MiOiIjRkNGQ0ZDIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/R2FtZXM/xenosphere.png"></img>
                                
                                </h3>
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="col-sm">
                             <br>
                              </div>
                            </div>
  
                            <div class="row">
                              <div class="col-sm">
                             <br>
                              </div>
                            </div>
                            
                          <!-- Espa -->
  
  
                          <!--Cards-->
                          <div class="row">
                                <div class="col-sm">
                                  <figure class="figure pulse" style="text-align: center;">
                                      <a href="opcao.php?opcao=1">
                                      <img src="Img/BWH_Battle_Pass_Season_5_Blog_News_BP5_Header.jpg" class="figure-img img-fluid rounded" alt="Brawllhala"></a>
                                      <figcaption class="figure-caption">Brawllhala</figcaption>
                                    </figure>
                                </div>
                                <div class="col-sm" style="text-align: center;">
                                  <figure class="figure pulse">
                                      <a href="opcao.php?opcao=2">
                                      <img src="Img/Genshin-Impact.jpg" class="figure-img img-fluid rounded" alt="Genshin Impact"></a>
                                      <figcaption class="figure-caption">Genshin Impact</figcaption>
                                    </figure>
  
                                </div>
                                <div class="col-sm" style="text-align: center;">
                                  <figure class="figure">
                                  <a href="opcao.php?opcao=3">
                                      <img src="Img/FOF.jfif" class="figure-img img-fluid rounded" alt="Fortnite"></a>
                                      <figcaption class="figure-caption">Fortnite</figcaption>
                                    </figure>
                                </div>
                                
                            </div>
  
                          <!--Cards-->
                              
                          <!--Espa-->
                              <div class="row">
                                <div class="col-sm">
                               &nbsp;
                                </div>
                              </div>
                          <!--Espa-->
  
                              <footer class=" text-center text-white" id="Sobre" style="background-color: rgb(11, 27, 61);" >
                                <!-- Grid container -->
                                <div class="container p-4 pb-0">
                                  <!-- Section: Social media -->
                                  <div class="smq">
  
                                    <a href="https://twitter.com/Vec_Foxtor?t=LErlF9MN4Kwr6xAGfRHRnQ&s=09"><i class="bi bi-twitter"></i></a>
                                    <a href="https://www.instagram.com/vik.roma/"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/victor-r-f-de-roma-9b5858211/"><i class="bi bi-linkedin"></i></a>
                                    <a href="https://github.com/VictorRFdRoma"><i class="bi bi-github"></i></a>
                                                                                         
                                  <!-- Section: Social media -->
                                  <br>
                                  <br>
                                  
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm">
                                    <nav class="navbar navbar-dark ml-auto" style="background-color: rgb(7, 21, 51);"> 
                                      <br>
                                        <a class="navbar-brand" style="text-align: center; width: 100%; font-size: 10pt; color: aqua;" href="https://github.com/VictorRFdRoma">
                                           RXTron - Copyright 2022 © - Todos os direitos reservados
                                        </a>
                                        
                                 </nav>
                              </div>
                          </div>
                        </footer>
                     </div>
                 </div>
             </div>
      </body>
  </html>