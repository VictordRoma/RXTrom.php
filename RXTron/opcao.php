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
                              Brawlhalla ?? um Jogo de Luta de Plataforma Gratuito, no qual os maiores guerreiros da hist??ria lutam para provar quem foi, ??, ou ser??, o melhor guerreiro de todos os tempos agora, com o Cross-Play para PS4, Xbox One, PC, Nintendo Switch, iOS e Android.
     
                             <h3>Pr??-requisitos:</h3>
                             <p style="text-align: justify;">
                              Voc?? precisa de pelo menos 1 GB de RAM para rodar Brawlhalla no PC, mas 2 GB ?? o recomendado. No Mac, ?? necess??rio o m??nimo de 1 GB, com 2 GB recomendado.
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
                                                       Brawlhalla Hist??ria
                                                   </button>
                                           </div>
                   
                                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                               data-parent="#accordionExample">
                                               <p class="card-body" style="text-align: justify; color: aliceblue;">
                                                 Brawlhalla busca inspira????o na mitologia N??rdica para introduzir personagens originais. Um dos locais principais do game ?? Valhalla, um dos reinos em que os Deuses n??rdicos vivem. Assim como no conto original, os guerreiros que chegam ao local s??o destemidos e escolhidos para participar em duelos por toda a vida ap??s sua morte.

                                                Dentro de Valhalla, existem organiza????es com certos campe??es que batalham com um ou mais objetivos em mente. Al??m disso, h?? alguns her??is que simplesmente decidiram ir para o local por raz??es pr??prias.
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
                                                "Sir Roland jura que Orion ?? o Cavaleiro de Ouro que ele nunca matou. B??dvar insiste que ele ?? Thor disfar??ado. Gnash acredita que ele ?? um monstro de rock m??gico. Lucien ?? movido para raiva incoerente ao v??-lo. Eu n??o me importo quem ele ??, eu s?? quero desmont??-lo e ver como ele trabalha.

                                                Escarlate
     
                                                Observando das portas de Valhalla, B??dvar, Cassidy e as outras lendas viram uma trilha de fuma??a em chamas cortada atrav??s do c??u asgardiano. Atr??s do cometa ardente, uma Valqu??ria correu em persegui????o, como se tentasse parar a bola de fogo enquanto ela mergulhava nos campos de Folkvangr em uma gota de terra e chama. As lendas ent??o assistiram enquanto Valqu??rias e emiss??rios de Odin se reuniam em torno da cratera fumegante.

                                                Semanas depois, os Filhos de Ivaldi, os mesmos ferreiros dwarven que haviam forjado a lan??a de Odin, apareceram silenciosamente em Asgard. Eles carregavam um terno de armadura dourada deslumbrante e apresentaram-no aos pr??prios deuses. Logo depois, o poderoso Orion se juntou aos sal??es de festa de Valhalla.
                                                
                                                "Aqui, eu sou chamado de ??rior."

                                                ??rion
                                                
                                                Provis??rio e distante no in??cio, Orion logo se aqueceu ao grande sal??o e agora est?? entre seus maiores guerreiros e campe??es mais populares. ??rio-se n??o falando de seu passado, e outras lendas s?? podem especular. Mas Valqu??rias passam por seus aposentos para perguntar se ele quer, "voc?? sabe, sair ou o que quer que seja, nada demais." Ele ?? o ??nico her??i visto a deixar Asgard de vez em quando.
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
                                                "Eles crescem t??o r??pido." ??? O Universo, provavelmente.
                                                "Eu n??o quero apenas destruir Orion. Mas sim, isso ?? o principal." ??? Artemis

                                                Fil??sofos ??s vezes falam sobre "A vontade do universo", uma consci??ncia acima da dos deuses. Podemos nunca saber se o universo tem vontade, mas sabemos que tem uma resposta imune. Quando a mat??ria estrangeira se espalhava sobre os c??us de Valhalla, a resposta era um anticorpo de propor????es celestes. Como o nome Orion foi falado, Artemis surgiu, embora ela n??o se chamaria assim por muitos anos.
                                                
                                                Nascida Mary Washington em West Plaza Nova York, ela era uma leitora voraz com um amor por sorvete de morango. Enquanto Maria teve uma inf??ncia relativamente normal, seus pais ??s vezes se perguntavam por que ela leria hist??rias da deusa Artemis matando o ca??ador Orion v??rias vezes.
                                                
                                                Em Valhalla, Artemis ainda est?? sujeito ??s regras dos deuses locais e deve completar seu destino atrav??s das lutas do Torneio. Sentindo uma frustra????o comum, Nix a levou sob sua asa e deu ao jovem desafiante algumas dicas sobre o uso da foice. ?? medida que a reputa????o de ??rion cresce na arena, Artemis se pergunta se todos os Asgard podem estar infectados demais para salvar.
                                          </p>
                                               </div>
                                           </div>
                                       </div>
                                      </div>

                              <!--Acordion-->

                            </div>
                           </div>
          
          
            <!--Fim da primeira condi????o-->




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
               Genshin Impact foi anunciado em junho de 2019, com previs??o de lan??amento para o primeiro trimestre de 2020, para Windows e iOS. O trailer de lan??amento mostrou um estilo de mundo aberto com inspira????o no jogo eletr??nico The Legend of Zelda: Breath of the Wild, principalmente no estilo de jogabilidade. Em um passado distante, os Arcontes davam aos mortais habilidades elementais ??nicas. Com a ajuda de tais poderes, as pessoas formaram uma p??tria abundante em regi??es selvagens. Entretanto, h?? 500 anos atr??s, o colapso de uma civiliza????o antiga virou o universo de cabe??a pra baixo??? Apesar da calamidade que o mundo sofreu ter cessado, a paz ainda precisa ser restaurada.

              <h3>Pr??-requisitos:</h3>
              <p style="text-align: justify;">
                Sistema operacional: Windows 7, 8 ou 10 de 64 bits
                Processador: Intel Core i5 ou similar (m??nimo), Intel Core i7 ou similar (recomendado)
                Mem??ria: 30 GB de espa??o em disco, 8 GB de RAM (m??nimo) ou 16 GB de RAM (recomendado)
                Placa de v??deo: Nvidia GeForce GT 1030 (m??nimo), GeForce GTX 1060 6GB ou superior (recomendado) 
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
                                  Este ?? o mundo de fantasia de Teyvat, onde dominam os Sete Elementos.

                                  H?? muito tempo, as pessoas, atrav??s de suas cren??as nos Deuses, aprenderam a controlar o poder desses elementos, e transformaram este lugar in??spito em suas moradias.
                                  
                                  O colapso desse imp??rio, h?? 500 anos, abalou os c??us e a terra.
                                  
                                  Contudo, apesar da devasta????o ter acabado, a paz ainda n??o estava ?? vista.
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
                                A capital da liberdade, ao nordeste de Teyvat. Entre cadeias de montanhas e as vastas plan??cies, o vento da liberdade traz consigo o aroma de Dandelion e acaricia o lago de Cidra, trazendo ?? cidade, no meio do lago, a b??n????o de Barbatos.
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
                              Um porto pr??spero localizado ao leste de Teyvat. Liyue est?? localizada entre o sop?? da Floresta de Pedra, das plan??cies grossas e um litoral cheio de vida, com mudan??as sazonais claramente definidas e coloridas. Quantos presentes do Deus da Pedra est??o escondidas entre suas montanhas?
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
                                  O jogo se desenvolve em um mundo aberto com diversos tipos de cen??rios, onde o jogador pode explor??-lo a p??, escalando, nadando ou at?? mesmo planando de acordo com o contexto. O mapa ?? repleto de itens e desafios em que o jogador ?? instigado a explor??-lo no decorrer da hist??ria. O jogador pode controlar at?? 4 personagens simultaneamente. Completando as miss??es para avan??ar na hist??ria, um total de 30 personagens jog??veis poder??o ser desbloqueados.

                                  ?? poss??vel controlar mais de um personagem e cada um possui habilidades espec??ficas: uma b??sica e uma especial. A habilidade b??sica pode ser usada em qualquer circunst??ncia, exceto no per??odo de cooldown, que ocorre imediatamente ap??s o uso enquanto a habilidade especial consome energia, o que requer um gerenciamento de tal energia.
                                  
                                  Outro aspecto importante da jogabilidade de Genshin Impact ?? a habilidade de cozinhar. O jogador tem a possibilidade de colher diversos alimentos durante o gameplay e alguns deles podem ser preparados para a obten????o de novas refei????es. Algumas receitas podem regenerar a sa??de do personagem, enquanto outras melhoram as habilidades de ataque ou defesa.
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
                                  A miHoYo fez o an??ncio de que estava trabalhando em um novo projeto utilizando a plataforma de desenvolvimento Unity no final de janeiro de 2017, tr??s meses ap??s o lan??amento de Honkai Impact 3rd. A empresa declarou que sua inten????o em um novo projeto era fortalec??-la para que o grupo fosse capaz de produzir jogos com mais qualidade. O projeto em quest??o era justamente o Genshin Impact.

                                  A desenvolvedora do jogo citou The Legend of Zelda: Breath of the Wild e a s??rie Grand Theft Auto como suas principais influ??ncias. Eles buscaram criar um jogo diferenciado em rela????o a Honkai Impact 3rd em termos de quests e sistema de combate, assim como seus eventos rand??micos e modo de explora????o.
                                  
                                  A vers??o chinesa do jogo apresenta di??logos na l??ngua chinesa, enquanto a vers??o japonesa possui di??logos em japon??s interpretadas por dubladores famosos no Jap??o, incluindo Rie Tanaka.
                                  
                                  M??sicos e funcion??rios da HOYO-MiX e da London Philharmonic Orchestra criaram a m??sica para o Genshin Impact.

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
             </div>
    </div>
        
    <!--Fim da segunda condi????o-->

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
                          Fortnite ?? um jogo eletr??nico multijogador online revelado originalmente em 2011 e lan??ado como diferentes modos de jogo que compartilham a mesma jogabilidade e motor gr??fico de jogo. Caso tenha jogado qualquer partida de Fortnite, voc?? deve estar minimamente familiarizado em como as batalhas funcionam. Voc?? escolhe uma skin para o seu personagem, salta de um ??nibus especial, enfrenta dezenas de inimigos at?? a morte e, quando termina, repete tudo de novo.
                        </p>

                        <h3>Pr??-requisitos:</h3>
                        <p style="text-align: justify;">
                          Requisitos m??nimos de sistema para rodar Fortnite no PC Placa de v??deo: Intel HD 4000; Intel Iris Pro 5200 ou GPU AMD equivalente no Mac Processador: Core i3-3225 3.3 GHz.
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
                                                  Cap??tulo 1 ??? A Saga do Cubo Kevin
                                              </button>
                                        </div>
              
                                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                          data-parent="#accordionExample">
                                          <p class="card-body" style="text-align: justify; color: aliceblue;">
                                            Tudo come??ou com um meteoro que trazia de outra dimens??o O Visitante, o primeiro membro dos Sete a aparecer no jogo no Cap??tulo 1: Temporada 4. Preso no loop, n??o demorou para ele tentar escapar. Em junho de 2018, ele fugiu em um foguete, rompendo a barreira da realidade e espalhando Fendas pelo c??u da ilha.

                                            Depois disso, v??rios objetos passaram a desaparecer do loop e cair no mundo real. O mais famoso foi uma est??tua de hamb??rguer que apareceu em um deserto na Calif??rnia. Seria o mundo real a exist??ncia fora do loop, afinal? Isso ainda n??o sabemos, mas houve outra consequ??ncia das a????es do Visitante.
                                            
                                            Quando a fenda se fechou, em agosto de 2018, ela deixou para tr??s um enorme cubo arroxeado de mat??ria escura, carinhosamente apelidado pelos jogadores de Kevin. Ele percorreu o mapa de maneira enigm??tica, aparentemente sem rumo, mas algo o atraiu para o Lago do Saque.  

                                            A energia contida naquele lugar acabou desestabilizando O Cubo, que explodiu em setembro de 2018, levando todos os jogadores nas proximidades para outra dimens??o.

                                            Essa foi a primeira vez que entramos no Nexus, uma dimens??o entre as realidades que se mostraria bem importante mais para frente. L?? surgiu uma nova Fenda, mas dessa vez tomou a forma de uma borboleta, guiando todos de volta para a ilha.
                                            
                                            O que quer que tenha atra??do o Kevin para aquele Lago, parecia ter poderes interdimensionais poderosos o suficientes para transportar centenas de jogadores de uma s?? vez. Isso chamou a aten????o de cientistas que resolveram escavar o local procurando entender a origem daquelas ocorr??ncias paranormais.

                                            Eles encontraram um grande cofre, aberto em maio de 2019 durante o Cap??tulo 1: Temporada 8, dando in??cio a um dos eventos mais misteriosos.
                                            
                                          </p>
                                      </div>
                                  </div>
                                  <div class="card" style="background-color: rgb(15, 14, 14);">
                                    <div class="accordion-header" id="headingOne">                      
                                      <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: rgb(11, 27, 61);">
                                                  Cap??tulo 1 ??? A Fuga dos Sete
                                              </button>
                                      </div>

                                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                          data-parent="#accordionExample">
                                          <p class="card-body" style="text-align: justify; color: aliceblue;">
                                            O Cofre era um grande portal para o Nexus, a dimens??o do meio. Dessa vez, os jogadores foram transportados para uma sala completamente branca. Haviam apenas tr??s elementos nesse lugar: pilares com armas perdidas na realidade, uma mesa com os pertences de alguma agente interdimensional e o Ponto Zero.

                                            Uma das armas escolhida pelos jogadores voltou a fazer parte da realidade, comprovando que a agente que trabalhava no cofre tinha algum n??vel de controle sobre a realidade da ilha. Ao retornar para o loop, os jogadores foram surpreendidos por uma erup????o vulc??nica. O jeito foi se proteger em um bunker, esperar a poeira baixar e despertar em uma nova era.

                                            Ao sair do bunker, Jonesy e os jogadores se deparam com o futuro. A sociedade evoluiu bastante ap??s a descoberta de uma fonte de energia ilimitada dentro do Cofre. Mas em algum momento, algo despertou do Pico Gelado, um monstro determinado a roubar aquela energia para si.

                                            Felizmente, os cientistas haviam constru??do um rob?? gigante para defend??-la. A batalha foi intensa, destruindo parte da cidade. O ??nico jeito que o rob?? encontrou para vencer foi desestabilizar o Ponto Zero, selando a criatura com sua energia. Isso deu certo, mas as consequ??ncias foram grav??ssimas.
                                            
                                            Prestes a explodir, o Ponto Zero come??a a liberar ondas de energia interdimensional que trazem elementos de outras realidades e linhas temporais. Prevendo o colapso do Ponto Zero, a Ordem Imaginada congela o tempo enquanto pensam em uma forma de estabiliz??-lo. Mas os Sete tinham outros planos.

                                            Outras realidades come??aram a colidir, trazendo partes de Gotham City, um meteoro com O Cientista (uma outra vers??o do Visitante) e novas anomalias. Querendo destruir o Ponto Zero para acabar de vez com o loop, o Cientista convoca foguetes com os outros membros dos Sete, que bombardeiam o meteoro criando mais uma Fenda.
                                            
                                            Dessa vez, eles teleportam o meteoro diretamente para o Ponto Zero e geram seu colapso. A concentra????o imensa de energia criou um grande buraco negro que sugou toda a realidade e temos ent??o o fim.
                                            
                                            No dia 13 de outubro de 2019, durante a participa????o do game na Brasil Game Show, os servidores ficaram fora do ar. Tudo que podia ser visto era o Buraco Negro. Era o final do Cap??tulo 1. Ao que tudo indicava, os Sete conseguiram escapar do loop.

                                            Dois dias se passaram e o buraco negro continuava l??, deixando a comunidade de jogadores curiosa para saber o que estava rolando. Esse foi o tempo necess??rio para a Ordem Imaginada recalcular uma nova forma est??vel para o loop. Assim, eles conseguiram usar a energia dimensional do Ponto Zero para dar origem a uma nova realidade ??? come??ava o Cap??tulo 2.
                                          </p>

                                          </div>
                                      </div>
                                  
                                  <div class="card" style="background-color: rgb(15, 14, 14);">
                                    <div class="accordion-header" id="headingOne">
                                          
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: rgb(11, 27, 61);">
                                                  Cap??tulo 2: O Recome??o
                                              </button>
                                          
                                      </div>
                                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" 
                                      data-parent="#accordionExample">
                                          <p class="accordion-body" style="text-align: justify; color: aliceblue;">
                                            Quando a realidade foi recriada, algumas pessoas conseguiram manter suas mem??rias atrav??s do loop temporal, uma delas foi o Midas. Tivemos duas pequenas sagas no Cap??tulo 2 antes da Crise Zero. Na Temporada 2, o g??nio do crime organizado Midas bolou um plano diferente para escapar do loop: dissipar a Tempestade.
                                            
                                            Quando ele ativou o Dispositivo, em junho de 2020, raios alimentados pelo Ponto Zero desestabilizaram a Tempestade por algum tempo. As coisas pareciam ter funcionado. A Tempestade sumiu e tudo estava em paz. Mas ent??o o efeito clim??tico se vingou.

                                            Uma enorme parede de ??gua apareceu, alagando o mapa, antes da Tempestade reformar. N??o vimos mais o Midas, mas aprendemos que h?? outras maneiras de escapar do loop e, mais do que isso, que a tentativa de fuga n??o era algo protagonizado apenas pela Ordem Imaginada e os Sete.
                                            
                                            A outra saga aconteceu durante a Temporada 4, uma invas??o do Universo Marvel. A energia interdimensional do Ponto Zero chamou a aten????o do Galactus que invadiu a realidade da ilha com a inten????o de devor??-la. Foram necess??rios os maiores her??is e vil??es do mundo Marvel para det??-lo, no que ficou conhecido como a Guerra do Nexus.
                                            
                                            Essa ataque foi o estopim para que o Ponto Zero se desestabilizasse de vez, mas agora ele amea??ava destruir todas as realidades, incluindo onde a Ordem Imaginada estava. Foi assim que come??ou a Crise Zero na Temporada 5, que s?? foi ter um fim no in??cio da Temporada 6.
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
                                            Recrutar os maiores ca??adores do multiverso ajudou a combater as diversas amea??as que invadiam de todas as realidades, mas n??o solucionou o problema. O Ponto Zero estava ruindo o v??u da exist??ncia. A Ordem Imaginada n??o poderia resolver isso sozinha, mas ningu??m teria coragem de aceitar ajuda dos Sete.

                                            Ningu??m exceto o Agente Jones. Contrariando o seu bom-senso, Jonesy arremessou um fragmento do Ponto Zero original no Ponto Zero inst??vel, o que chamou a aten????o dos Sete. Um meteoro surgiu quase que instantaneamente com O Funda????o, um dos Sete mais poderosos.
                                            
                                            O Funda????o n??o deu tempo para Jonesy se explicar e partiu para briga, mas o agente soltou o nome Gen?? e isso foi o suficiente para o misterioso Funda????o parar e ouvir o que o agente tinha a dizer. Ap??s prometer ajudar Funda????o a encontrar Geno ap??s lidar com a Crise Zero, eles trabalharam juntos.
                                            
                                            Ap??s sobreviver a diversas ondas de realidade, O Agente Jones ?? transformado em uma Borboleta de Fenda, teleportando o jogador ??? chamado de Looper por estar preso no loop ??? pelo mapa para selar fendas para outras realidades.
                                            
                                            Por??m o Ponto Zero est?? inst??vel demais e n??o pode mais ser parado. O Funda????o percebe que a ??nica coisa a se fazer ?? conter a explos??o. Assim, ele se sacrifica usando toda sua for??a para juntar os peda??os do Ponto Zero. Enquanto o Agente Jones sobrecarrega seu dispositivo de distor????o dimensional, Looper sela a energia. Agora, Jonesy est?? preso no loop e o universo ?? reiniciado a seu estado mais primitivo.

                                            E ?? nesse ponto que come??a o Cap??tulo 2: Temporada 6, Primal. Elementos jur??ssicos invadiram a ilha de Fortnite e o arco e flecha se tornou uma das armas mais vers??teis, gra??as ao novo sistema de aprimoramento. Ca??ando animais selvagens, voc?? pode criar as armas que quiser. Tudo isso enquanto enfrenta outros jogadores que tamb??m est??o presos neste ciclo sem fim.
                                            
                                            Agora que voc?? j?? sabe tudo que rolou em Fortnite, fique atento para os pr??ximos eventos. Estamos cada vez mais pr??ximos de entender quem s??o os Sete e descobrir os verdadeiros vil??es dessa hist??ria. Ser?? que algum dia escaparemos de vez do loop? S?? jogando para saber.
                                       
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
       
          <?php } ?>

         <!--Fim da Terceira condi????o-->


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
             RXTron - Copyright 2022 ?? - Todos os direitos reservados
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