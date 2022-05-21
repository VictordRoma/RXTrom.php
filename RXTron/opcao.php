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


          <?php if($_GET['opcao'] == 1){ ?>
            <div class="container" style="color: aliceblue;">  
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
           
         
             <div class="row" >
               <div class="col-sm" >
               
                 <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: rgb(11, 27, 61);">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                   
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                           <a  style="color: aliceblue;" class="nav-link" href="index.html">Home</a>
                         </li>
     
                         <li class="nav-item dropdown">
                           <a  style="color: aliceblue;" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Mais
                           </a>
                           <div class="dropdown-menu" style="background-color: rgb(91, 133, 223);" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="#Sobre">Sobre</a>
                             <a class="dropdown-item" href="opcao.php?opcao=2">Genshin Impact</a>
                            <a class="dropdown-item" href="opcao.php?opcao=3">Fortnite</a>
                             <a class="dropdown-item" href="https://www.brawlhalla.com">Site Oficial</a>

                           </div>
                         </li>
                     </div>
                   </nav>
     
     
     
                     <div class="row">
                         <div class="col-sm">
                        &nbsp;
                         </div>
                     <div class="row">
                         <div class="col-sm">
                         &nbsp;
                         </div>
                     </div>
                     </div>

                     <div class="row">
                         <div class="col-sm">
                             <img src="Img/GroupPic5Year_1920x1080-1280x720.jpg" class="d-block w-100">
                             <br>
                             <h3 id="Sobre">Brawllhala</h3>
     
                             <h5>
                               Desenvolvido pela Blue Mammoth Games e publicado pela Ubisoft 
                                
                             
                             </h5>
     
                             <p style="text-align: justify">
                              Brawlhalla é um Jogo de Luta de Plataforma Gratuito, no qual os maiores guerreiros da história lutam para provar quem foi, é, ou será, o melhor guerreiro de todos os tempos agora, com o Cross-Play para PS4, Xbox One, PC, Nintendo Switch, iOS e Android.
     
                             <h3>Pré-requisitos:</h3>
                             <p style="text-align: justify;">
                              Você precisa de pelo menos 1 GB de RAM para rodar Brawlhalla no PC, mas 2 GB é o recomendado. No Mac, é necessário o mínimo de 1 GB, com 2 GB recomendado.
                             </p>
     
                         </div>
                     
                     <!--Acordion-->
                         <div class="col-sm" >
                             <div class="accordion" style="color: rgb(0, 0, 0);" id="accordionExample">
                                 <div class="col" >
                                   <div class="accordion-header" id="headingOne">
                                       <div class="card"style="background-color: rgb(15, 14, 14)">
                                        <div class="accordion-header" id="headingOne">                                                   
                                          <button class="accordion-button" type="button" data-toggle="collapse"
                                                       data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="Historia" style="background-color: rgb(7, 21, 51);">
                                                       Brawlhalla História
                                                   </button>
                                           </div>
                   
                                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                               data-parent="#accordionExample">
                                               <p class="card-body" style="text-align: justify; color: aliceblue;">
                                                 Brawlhalla busca inspiração na mitologia Nórdica para introduzir personagens originais. Um dos locais principais do game é Valhalla, um dos reinos em que os Deuses nórdicos vivem. Assim como no conto original, os guerreiros que chegam ao local são destemidos e escolhidos para participar em duelos por toda a vida após sua morte.

                                                Dentro de Valhalla, existem organizações com certos campeões que batalham com um ou mais objetivos em mente. Além disso, há alguns heróis que simplesmente decidiram ir para o local por razões próprias.
                                              </p>
    
                                           </div>
                                       </div>
                                       <div class="card" style="background-color: rgb(15, 14, 14)">
                                           <div class="accordion-header" id="headingOne">
                                               <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                               data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: rgb(11, 27, 61);">
                                                       Orion - O Estranho misterioso 
                                                   </button>
                                               
                                           </div>
                                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                           data-parent="#accordionExample">
                                           <p class="card-body" style="text-align: justify; color: aliceblue;">
                                                "Sir Roland jura que Orion é o Cavaleiro de Ouro que ele nunca matou. Bödvar insiste que ele é Thor disfarçado. Gnash acredita que ele é um monstro de rock mágico. Lucien é movido para raiva incoerente ao vê-lo. Eu não me importo quem ele é, eu só quero desmontá-lo e ver como ele trabalha.

                                                Escarlate
     
                                                Observando das portas de Valhalla, Bödvar, Cassidy e as outras lendas viram uma trilha de fumaça em chamas cortada através do céu asgardiano. Atrás do cometa ardente, uma Valquíria correu em perseguição, como se tentasse parar a bola de fogo enquanto ela mergulhava nos campos de Folkvangr em uma gota de terra e chama. As lendas então assistiram enquanto Valquírias e emissários de Odin se reuniam em torno da cratera fumegante.

                                                Semanas depois, os Filhos de Ivaldi, os mesmos ferreiros dwarven que haviam forjado a lança de Odin, apareceram silenciosamente em Asgard. Eles carregavam um terno de armadura dourada deslumbrante e apresentaram-no aos próprios deuses. Logo depois, o poderoso Orion se juntou aos salões de festa de Valhalla.
                                                
                                                "Aqui, eu sou chamado de Órior."

                                                Órion
                                                
                                                Provisório e distante no início, Orion logo se aqueceu ao grande salão e agora está entre seus maiores guerreiros e campeões mais populares. Ório-se não falando de seu passado, e outras lendas só podem especular. Mas Valquírias passam por seus aposentos para perguntar se ele quer, "você sabe, sair ou o que quer que seja, nada demais." Ele é o único herói visto a deixar Asgard de vez em quando.
                                           </p>
                                                
                                                
                                               </div>
                                           </div>
                                       </div>
                                       <div class="card" style="background-color: rgb(15, 14, 14);">
                                        <div class="accordion-header" id="headingOne">
                                          
                                          <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: rgb(11, 27, 61);">
                                                       Artemis - A Resposta
                                                   </button>
                                               
                                           </div>
                                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" 
                                      data-parent="#accordionExample">
                                          <p class="accordion-body" style="text-align: justify; color: aliceblue;">
                                                "Eles crescem tão rápido." – O Universo, provavelmente.
                                                "Eu não quero apenas destruir Orion. Mas sim, isso é o principal." – Artemis

                                                Filósofos às vezes falam sobre "A vontade do universo", uma consciência acima da dos deuses. Podemos nunca saber se o universo tem vontade, mas sabemos que tem uma resposta imune. Quando a matéria estrangeira se espalhava sobre os céus de Valhalla, a resposta era um anticorpo de proporções celestes. Como o nome Orion foi falado, Artemis surgiu, embora ela não se chamaria assim por muitos anos.
                                                
                                                Nascida Mary Washington em West Plaza Nova York, ela era uma leitora voraz com um amor por sorvete de morango. Enquanto Maria teve uma infância relativamente normal, seus pais às vezes se perguntavam por que ela leria histórias da deusa Artemis matando o caçador Orion várias vezes.
                                                
                                                Em Valhalla, Artemis ainda está sujeito às regras dos deuses locais e deve completar seu destino através das lutas do Torneio. Sentindo uma frustração comum, Nix a levou sob sua asa e deu ao jovem desafiante algumas dicas sobre o uso da foice. À medida que a reputação de Órion cresce na arena, Artemis se pergunta se todos os Asgard podem estar infectados demais para salvar.
                                          </p>
                                               </div>
                                           </div>
                                       </div>
                                      </div>

                              <!--Acordion-->

                            </div>
                           </div>
          
          
            <!--Fim da primeira condição-->




          <?php }elseif($_GET['opcao'] == 2){ ?>

            <div class="container" style="color: aliceblue;">

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




  
  
    <div class="row">
      <div class="col-sm">

        <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: rgb(11, 27, 61);">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a  style="color: aliceblue;" class="nav-link" href="index.html">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a  style="color: aliceblue;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mais
                  </a>
                  <ul class="dropdown-menu" style="background-color: rgb(91, 133, 223);" aria-labelledby="navbarDropdown">
                   
                    <a class="dropdown-item" href="#Sobre">Sobre</a>
                    <a class="dropdown-item" href="opcao.php?opcao=1">Brawllhala</a>
                    <a class="dropdown-item" href="opcao.php?opcao=3">Fortnite</a>
                    <a class="dropdown-item" href="https://genshin.hoyoverse.com/pt/home">Site Oficial</a>
                  </ul>
                </li>
              </ul>
            </div>
        </nav>
      


        
        <div class="row">
          <div class="col-sm">
         &nbsp;
          </div>
        </div>

      <div class="row">
          <div class="col-sm">
          &nbsp;
          </div>
      </div>

      <div class="row">

          <div class="col-sm">
            
              <img src="Img/Genshin-Impact.jpg" class="d-block w-100">
              <br>
              <h3 id="Sobre">Genshin Impact</h3>

              <h5>
                Desenvolvido pela miHoYo
              </h5>

              <p style="text-align: justify">
               Genshin Impact foi anunciado em junho de 2019, com previsão de lançamento para o primeiro trimestre de 2020, para Windows e iOS. O trailer de lançamento mostrou um estilo de mundo aberto com inspiração no jogo eletrônico The Legend of Zelda: Breath of the Wild, principalmente no estilo de jogabilidade. Em um passado distante, os Arcontes davam aos mortais habilidades elementais únicas. Com a ajuda de tais poderes, as pessoas formaram uma pátria abundante em regiões selvagens. Entretanto, há 500 anos atrás, o colapso de uma civilização antiga virou o universo de cabeça pra baixo… Apesar da calamidade que o mundo sofreu ter cessado, a paz ainda precisa ser restaurada.

              <h3>Pré-requisitos:</h3>
              <p style="text-align: justify;">
                Sistema operacional: Windows 7, 8 ou 10 de 64 bits
                Processador: Intel Core i5 ou similar (mínimo), Intel Core i7 ou similar (recomendado)
                Memória: 30 GB de espaço em disco, 8 GB de RAM (mínimo) ou 16 GB de RAM (recomendado)
                Placa de vídeo: Nvidia GeForce GT 1030 (mínimo), GeForce GTX 1060 6GB ou superior (recomendado) 
              </p>

            </div>
      
      <!--Acordion-->

      <div class="col-sm" >
        <div class="accordion" style="color: rgb(0, 0, 0);" id="accordionExample">
            <div class="col" >
              
            
                 <div class="card" style="background-color: rgb(15, 14, 14)">                                      
                    <div class="accordion-header" id="headingOne" >
                           <button class="accordion-button" type="button" data-toggle="collapse"
                                  data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="Historia" style="background-color: rgb(7, 21, 51);">
                                        Teyvat
                                    </button>
                                 </div>
    
                                 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                 <p class="card-body" style="text-align: justify; color: aliceblue;" >
                                  Este é o mundo de fantasia de Teyvat, onde dominam os Sete Elementos.

                                  Há muito tempo, as pessoas, através de suas crenças nos Deuses, aprenderam a controlar o poder desses elementos, e transformaram este lugar inóspito em suas moradias.
                                  
                                  O colapso desse império, há 500 anos, abalou os céus e a terra.
                                  
                                  Contudo, apesar da devastação ter acabado, a paz ainda não estava à vista.
                               </p>
                            </div>
                        </div>

                        <div class="card" style="background-color: rgb(15, 14, 14)">
                          <div class="accordion-header" id="headingOne">                      
                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"  style="background-color: rgb(11, 27, 61);">
                                      Mondstadt
                                  </button>
                              </div>
  
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                  data-parent="#accordionExample">
                                  <p class="card-body" style="text-align: justify; color: aliceblue;">
                                A capital da liberdade, ao nordeste de Teyvat. Entre cadeias de montanhas e as vastas planícies, o vento da liberdade traz consigo o aroma de Dandelion e acaricia o lago de Cidra, trazendo à cidade, no meio do lago, a bênção de Barbatos.
                             </p>
                          </div>
                      </div>
                      <div class="card" style="background-color: rgb(15, 14, 14)">
                        <div class="accordion-header" id="headingOne">                      
                          <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                      data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"  style="background-color: rgb(11, 27, 61);">
                                    Liyue
                                </button>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                  data-parent="#accordionExample">
                                  <p class="card-body" style="text-align: justify; color: aliceblue;">
                              Um porto próspero localizado ao leste de Teyvat. Liyue está localizada entre o sopé da Floresta de Pedra, das planícies grossas e um litoral cheio de vida, com mudanças sazonais claramente definidas e coloridas. Quantos presentes do Deus da Pedra estão escondidas entre suas montanhas?
                            </p>
                        </div>
                    </div>


                    <div class="card" style="background-color: rgb(15, 14, 14)">
                      <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"  style="background-color: rgb(11, 27, 61);">
                                        Jogabilidade
                                    </button>
                               
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" 
                            data-parent="#accordionExample">
                                <p class="accordion-body" style="text-align: justify; color: aliceblue;">
                                  O jogo se desenvolve em um mundo aberto com diversos tipos de cenários, onde o jogador pode explorá-lo a pé, escalando, nadando ou até mesmo planando de acordo com o contexto. O mapa é repleto de itens e desafios em que o jogador é instigado a explorá-lo no decorrer da história. O jogador pode controlar até 4 personagens simultaneamente. Completando as missões para avançar na história, um total de 30 personagens jogáveis poderão ser desbloqueados.

                                  É possível controlar mais de um personagem e cada um possui habilidades específicas: uma básica e uma especial. A habilidade básica pode ser usada em qualquer circunstância, exceto no período de cooldown, que ocorre imediatamente após o uso enquanto a habilidade especial consome energia, o que requer um gerenciamento de tal energia.
                                  
                                  Outro aspecto importante da jogabilidade de Genshin Impact é a habilidade de cozinhar. O jogador tem a possibilidade de colher diversos alimentos durante o gameplay e alguns deles podem ser preparados para a obtenção de novas refeições. Algumas receitas podem regenerar a saúde do personagem, enquanto outras melhoram as habilidades de ataque ou defesa.
                                </div>
                            </div>
                        </div>
                        <div class="card" style="background-color: rgb(15, 14, 14)">
                          <div class="accordion-header" id="headingOne">                      
                          <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                      data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"  style="background-color: rgb(11, 27, 61);">
                                        Desenvolvimento
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <p class="card-body" style="text-align: justify; color: aliceblue;">
                                  A miHoYo fez o anúncio de que estava trabalhando em um novo projeto utilizando a plataforma de desenvolvimento Unity no final de janeiro de 2017, três meses após o lançamento de Honkai Impact 3rd. A empresa declarou que sua intenção em um novo projeto era fortalecê-la para que o grupo fosse capaz de produzir jogos com mais qualidade. O projeto em questão era justamente o Genshin Impact.

                                  A desenvolvedora do jogo citou The Legend of Zelda: Breath of the Wild e a série Grand Theft Auto como suas principais influências. Eles buscaram criar um jogo diferenciado em relação a Honkai Impact 3rd em termos de quests e sistema de combate, assim como seus eventos randômicos e modo de exploração.
                                  
                                  A versão chinesa do jogo apresenta diálogos na língua chinesa, enquanto a versão japonesa possui diálogos em japonês interpretadas por dubladores famosos no Japão, incluindo Rie Tanaka.
                                  
                                  Músicos e funcionários da HOYO-MiX e da London Philharmonic Orchestra criaram a música para o Genshin Impact.

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
             </div>
    </div>
        
    <!--Fim da segunda condição-->

          <?php }else{ ?>
              
            
<div class="container" style="color: aliceblue;">  


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
      
    
        <div class="row" >
          <div class="col-sm" >
          
            <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: rgb(11, 27, 61);">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a  style="color: aliceblue;" class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a  style="color: aliceblue;" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mais
                      </a>
                      <ul class="dropdown-menu" style="background-color: rgb(91, 133, 223);" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#Sobre">Sobre</a>
                         <a class="dropdown-item" href="opcao.php?opcao=1">Brawllhala</a>
                        <a class="dropdown-item" href="opcao.php?opcao=2">Genshin Impact</a>
                        <a class="dropdown-item" href="https://www.Fortnite.com/">Site Oficial</a>
                        
                  </ul>
                    </li>
                  </ul>
                </div>
                
              </nav>



                <div class="row">
                    <div class="col-sm">
                   &nbsp;
                    </div>
                <div class="row">
                    <div class="col-sm">
                    &nbsp;
                    </div>
                </div>
                </div>
                <div class="row">

                    <div class="col-sm">
                        <img src="Img/FORTT.jpg" class="d-block w-100">
                        <br>
                        <h3 id="Sobre">Fortnite</h3>

                        <h5>
                          Desenvolvido pela Epic Games
                           
                        
                        </h5>

                        <p style="text-align: justify">
                          Fortnite é um jogo eletrônico multijogador online revelado originalmente em 2011 e lançado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gráfico de jogo. Caso tenha jogado qualquer partida de Fortnite, você deve estar minimamente familiarizado em como as batalhas funcionam. Você escolhe uma skin para o seu personagem, salta de um ônibus especial, enfrenta dezenas de inimigos até a morte e, quando termina, repete tudo de novo.
                        </p>

                        <h3>Pré-requisitos:</h3>
                        <p style="text-align: justify;">
                          Requisitos mínimos de sistema para rodar Fortnite no PC Placa de vídeo: Intel HD 4000; Intel Iris Pro 5200 ou GPU AMD equivalente no Mac Processador: Core i3-3225 3.3 GHz.
                        </p>

                    </div>
                
                <!--Acordion-->
                    <div class="col-sm" >
                        <div class="accordion" style="color: rgb(0, 0, 0);" id="accordionExample">
                            <div class="col" >
                                  <div class="card" style="background-color: rgb(15, 14, 14);">                                      
                                    <div class="accordion-header" id="headingOne">
                                           <button class="accordion-button" type="button" data-toggle="collapse"
                                                  data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="Historia" style="background-color: rgb(7, 21, 51);">
                                                  Capítulo 1 – A Saga do Cubo Kevin
                                              </button>
                                        </div>
              
                                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                          data-parent="#accordionExample">
                                          <p class="card-body" style="text-align: justify; color: aliceblue;">
                                            Tudo começou com um meteoro que trazia de outra dimensão O Visitante, o primeiro membro dos Sete a aparecer no jogo no Capítulo 1: Temporada 4. Preso no loop, não demorou para ele tentar escapar. Em junho de 2018, ele fugiu em um foguete, rompendo a barreira da realidade e espalhando Fendas pelo céu da ilha.

                                            Depois disso, vários objetos passaram a desaparecer do loop e cair no mundo real. O mais famoso foi uma estátua de hambúrguer que apareceu em um deserto na Califórnia. Seria o mundo real a existência fora do loop, afinal? Isso ainda não sabemos, mas houve outra consequência das ações do Visitante.
                                            
                                            Quando a fenda se fechou, em agosto de 2018, ela deixou para trás um enorme cubo arroxeado de matéria escura, carinhosamente apelidado pelos jogadores de Kevin. Ele percorreu o mapa de maneira enigmática, aparentemente sem rumo, mas algo o atraiu para o Lago do Saque.  

                                            A energia contida naquele lugar acabou desestabilizando O Cubo, que explodiu em setembro de 2018, levando todos os jogadores nas proximidades para outra dimensão.

                                            Essa foi a primeira vez que entramos no Nexus, uma dimensão entre as realidades que se mostraria bem importante mais para frente. Lá surgiu uma nova Fenda, mas dessa vez tomou a forma de uma borboleta, guiando todos de volta para a ilha.
                                            
                                            O que quer que tenha atraído o Kevin para aquele Lago, parecia ter poderes interdimensionais poderosos o suficientes para transportar centenas de jogadores de uma só vez. Isso chamou a atenção de cientistas que resolveram escavar o local procurando entender a origem daquelas ocorrências paranormais.

                                            Eles encontraram um grande cofre, aberto em maio de 2019 durante o Capítulo 1: Temporada 8, dando início a um dos eventos mais misteriosos.
                                            
                                          </p>
                                      </div>
                                  </div>
                                  <div class="card" style="background-color: rgb(15, 14, 14);">
                                    <div class="accordion-header" id="headingOne">                      
                                      <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: rgb(11, 27, 61);">
                                                  Capítulo 1 – A Fuga dos Sete
                                              </button>
                                      </div>

                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                          data-parent="#accordionExample">
                                          <p class="card-body" style="text-align: justify; color: aliceblue;">
                                            O Cofre era um grande portal para o Nexus, a dimensão do meio. Dessa vez, os jogadores foram transportados para uma sala completamente branca. Haviam apenas três elementos nesse lugar: pilares com armas perdidas na realidade, uma mesa com os pertences de alguma agente interdimensional e o Ponto Zero.

                                            Uma das armas escolhida pelos jogadores voltou a fazer parte da realidade, comprovando que a agente que trabalhava no cofre tinha algum nível de controle sobre a realidade da ilha. Ao retornar para o loop, os jogadores foram surpreendidos por uma erupção vulcânica. O jeito foi se proteger em um bunker, esperar a poeira baixar e despertar em uma nova era.

                                            Ao sair do bunker, Jonesy e os jogadores se deparam com o futuro. A sociedade evoluiu bastante após a descoberta de uma fonte de energia ilimitada dentro do Cofre. Mas em algum momento, algo despertou do Pico Gelado, um monstro determinado a roubar aquela energia para si.

                                            Felizmente, os cientistas haviam construído um robô gigante para defendê-la. A batalha foi intensa, destruindo parte da cidade. O único jeito que o robô encontrou para vencer foi desestabilizar o Ponto Zero, selando a criatura com sua energia. Isso deu certo, mas as consequências foram gravíssimas.
                                            
                                            Prestes a explodir, o Ponto Zero começa a liberar ondas de energia interdimensional que trazem elementos de outras realidades e linhas temporais. Prevendo o colapso do Ponto Zero, a Ordem Imaginada congela o tempo enquanto pensam em uma forma de estabilizá-lo. Mas os Sete tinham outros planos.

                                            Outras realidades começaram a colidir, trazendo partes de Gotham City, um meteoro com O Cientista (uma outra versão do Visitante) e novas anomalias. Querendo destruir o Ponto Zero para acabar de vez com o loop, o Cientista convoca foguetes com os outros membros dos Sete, que bombardeiam o meteoro criando mais uma Fenda.
                                            
                                            Dessa vez, eles teleportam o meteoro diretamente para o Ponto Zero e geram seu colapso. A concentração imensa de energia criou um grande buraco negro que sugou toda a realidade e temos então o fim.
                                            
                                            No dia 13 de outubro de 2019, durante a participação do game na Brasil Game Show, os servidores ficaram fora do ar. Tudo que podia ser visto era o Buraco Negro. Era o final do Capítulo 1. Ao que tudo indicava, os Sete conseguiram escapar do loop.

                                            Dois dias se passaram e o buraco negro continuava lá, deixando a comunidade de jogadores curiosa para saber o que estava rolando. Esse foi o tempo necessário para a Ordem Imaginada recalcular uma nova forma estável para o loop. Assim, eles conseguiram usar a energia dimensional do Ponto Zero para dar origem a uma nova realidade — começava o Capítulo 2.
                                          </p>

                                          </div>
                                      </div>
                                  
                                  <div class="card" style="background-color: rgb(15, 14, 14);">
                                    <div class="accordion-header" id="headingOne">
                                          
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: rgb(11, 27, 61);">
                                                  Capítulo 2: O Recomeço
                                              </button>
                                          
                                      </div>
                                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" 
                                      data-parent="#accordionExample">
                                          <p class="accordion-body" style="text-align: justify; color: aliceblue;">
                                            Quando a realidade foi recriada, algumas pessoas conseguiram manter suas memórias através do loop temporal, uma delas foi o Midas. Tivemos duas pequenas sagas no Capítulo 2 antes da Crise Zero. Na Temporada 2, o gênio do crime organizado Midas bolou um plano diferente para escapar do loop: dissipar a Tempestade.
                                            
                                            Quando ele ativou o Dispositivo, em junho de 2020, raios alimentados pelo Ponto Zero desestabilizaram a Tempestade por algum tempo. As coisas pareciam ter funcionado. A Tempestade sumiu e tudo estava em paz. Mas então o efeito climático se vingou.

                                            Uma enorme parede de água apareceu, alagando o mapa, antes da Tempestade reformar. Não vimos mais o Midas, mas aprendemos que há outras maneiras de escapar do loop e, mais do que isso, que a tentativa de fuga não era algo protagonizado apenas pela Ordem Imaginada e os Sete.
                                            
                                            A outra saga aconteceu durante a Temporada 4, uma invasão do Universo Marvel. A energia interdimensional do Ponto Zero chamou a atenção do Galactus que invadiu a realidade da ilha com a intenção de devorá-la. Foram necessários os maiores heróis e vilões do mundo Marvel para detê-lo, no que ficou conhecido como a Guerra do Nexus.
                                            
                                            Essa ataque foi o estopim para que o Ponto Zero se desestabilizasse de vez, mas agora ele ameaçava destruir todas as realidades, incluindo onde a Ordem Imaginada estava. Foi assim que começou a Crise Zero na Temporada 5, que só foi ter um fim no início da Temporada 6.
                                            </p>
                                          </div>
                                      </div>
                                  
                                  <div class="card" style="background-color: rgb(15, 14, 14);">
                                    <div class="accordion-header" id="headingFour">
                                          
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                  data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background-color: rgb(11, 27, 61);">
                                                  Temporada 6: Primal
                                              </button>
                                         
                                      </div>
                                      <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                                          data-parent="#accordionExample">
                                          <p class="card-body" style="text-align: justify; color: aliceblue;">
                                            Recrutar os maiores caçadores do multiverso ajudou a combater as diversas ameaças que invadiam de todas as realidades, mas não solucionou o problema. O Ponto Zero estava ruindo o véu da existência. A Ordem Imaginada não poderia resolver isso sozinha, mas ninguém teria coragem de aceitar ajuda dos Sete.

                                            Ninguém exceto o Agente Jones. Contrariando o seu bom-senso, Jonesy arremessou um fragmento do Ponto Zero original no Ponto Zero instável, o que chamou a atenção dos Sete. Um meteoro surgiu quase que instantaneamente com O Fundação, um dos Sete mais poderosos.
                                            
                                            O Fundação não deu tempo para Jonesy se explicar e partiu para briga, mas o agente soltou o nome Genō e isso foi o suficiente para o misterioso Fundação parar e ouvir o que o agente tinha a dizer. Após prometer ajudar Fundação a encontrar Geno após lidar com a Crise Zero, eles trabalharam juntos.
                                            
                                            Após sobreviver a diversas ondas de realidade, O Agente Jones é transformado em uma Borboleta de Fenda, teleportando o jogador — chamado de Looper por estar preso no loop — pelo mapa para selar fendas para outras realidades.
                                            
                                            Porém o Ponto Zero está instável demais e não pode mais ser parado. O Fundação percebe que a única coisa a se fazer é conter a explosão. Assim, ele se sacrifica usando toda sua força para juntar os pedaços do Ponto Zero. Enquanto o Agente Jones sobrecarrega seu dispositivo de distorção dimensional, Looper sela a energia. Agora, Jonesy está preso no loop e o universo é reiniciado a seu estado mais primitivo.

                                            E é nesse ponto que começa o Capítulo 2: Temporada 6, Primal. Elementos jurássicos invadiram a ilha de Fortnite e o arco e flecha se tornou uma das armas mais versáteis, graças ao novo sistema de aprimoramento. Caçando animais selvagens, você pode criar as armas que quiser. Tudo isso enquanto enfrenta outros jogadores que também estão presos neste ciclo sem fim.
                                            
                                            Agora que você já sabe tudo que rolou em Fortnite, fique atento para os próximos eventos. Estamos cada vez mais próximos de entender quem são os Sete e descobrir os verdadeiros vilões dessa história. Será que algum dia escaparemos de vez do loop? Só jogando para saber.
                                       
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
       
          <?php } ?>

         <!--Fim da Terceira condição-->


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