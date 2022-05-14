<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--responsive-->
    <meta charset="utf-8"><!--**jeux de caractere (ajouter tous les formes de caractere avec tous les langues)-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--**controler la mise en page mobile-->
    <!-- end responsive-->

    <!--lien de font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">
    <!--end lien de font-->

    <!--lien de java -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--end lien de java -->


    <!--lien bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--end lien bootstrap css-->

    <!--lien bootstrap icon media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- endlien bootstrap icon media -->

    <!--lien bootstrap icon js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- end lien bootstrap icon js -->

    <!-- lien de notre css-->
    <link rel="stylesheet" type="text/css" href="style_project.css">
    <!--end  lien de notre css-->
<style type="text/css">

  img{
    margin-left: 5%;
    width: 90%;}

</style>

    <title></title>
  </head>
  <body>
    <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark" >  <!--navbar-dark: icon menu(toggler)--><!--lg:responsive-->
         <nav class="navbar" >
            <div class="container-fluid nav justify-content-center " >

                   <!--logo-->
                <a class="navbar-brand" href="#">
                    <img src="./images/logo2.png" alt="" width="150" height="80" class="d-inline-block align-text-top">
                </a>
                   <!-- end logo-->
            </div>
         </nav>
               

            <!-- menu mode telephone -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span><!--toggler: le mouvement de menu-->
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent"><!--regrouper et masquer le contenu de la barre--> 
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0"><!--spacing-->

                        <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="page1.php">Accueil</a>
                        </li>

                        <li class="nav-item">
                              <a class="nav-link active " aria-current="page" href="infos.php"> Venir à la Bibliothéque</a>
                        </li><!-- nav-link :lien cliq sans changer la couleur-->

                        <li class="nav-item">
                              <a class="nav-link active" href="services.php">Service</a>
                        </li>

                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="emprunter.php">Nos livres</a>
                        </li>

                        <li id="icon2" >
                             <a href="login.php"><ion-icon name="person-sharp"></ion-icon></a>    
                        </li>

                 </ul>     
          </div>
  </nav>
  
<!--end navbar-->

  <!--sommaire-->
  <div class="container2">
      <table class="table">
          <tr>
              <td ><h4>Sommaire</h4></td>
          </tr>
          <tr>
              <td> 
                  <ul>
                      <li><a class="nav-link active" href="#Horaire et affluence">Horaire et affluence</a></li>
                      <li><a class="nav-link active" href="#Locale">Locale</a></li>
                      <li><a class="nav-link active" href="#Régelement">Régelement</a></li>
                  </ul>
              </td>
          </tr> 
      </table>          
  </div>
        
      
    
  
  <!--fin sommaire-->


<div class="container2">
  <!--horaire-->
    <div class="infos">
        <h1 align="center" id="Horaire et affluence">Horaire et affluence</h1>
            <table  class="table" >
                <tr>
                    <th>Jour</th>
                    <th>Matin</th>
                    <th>Soir</th>
                </tr>

                <tr>
                    <td>Lundi</td>
                    <td>08:30-12:30</td>
                    <td>13:30-20:00</td>
                </tr>

                <tr>
                    <td>Mardi</td>
                    <td>08:30-12:30</td>
                    <td>13:30-20:00</td>
                </tr>

                <tr>
                    <td>Mecredi</td>
                    <td>08:30-12:30</td>
                    <td>13:30-20:00</td>
                </tr>

                <tr>
                    <td>Jeudi</td>
                    <td>08:30-12:30</td>
                    <td>13:30-20:00</td>
                </tr>

                <tr>
                    <td>Vendredi</td>
                    <td>08:30-11:30</td>
                    <td>15:00-20:00</td>
                </tr>

                <tr>
                    <td>Samedi</td>
                    <td>08:30-12:30</td>
                    <td>13:30-20:00</td>
                </tr>

                <tr>
                    <td>Dimanche</td>
                    <td>08:30-12:30</td>
                    <td>13:30-20:00</td>
                 </tr>
            </table>
<!--end horaire-->


<!--locale-->
      <hr>
      <h1 align="center" id="Locale">Locale</h1>
      <img src="./images/map.png" ><br><br>

        <div align="center">
            <b><i>balicharmen, La bibliothéque Générale de Safi .Av.Moulay Idriss 1 er . À coté de la société Générale Safi Driss 1 er.</i></b> 
        </div>
<!--end horaire-->

<!--Régelement-->
      <hr>
      <h1 align="center" id="Régelement">Régelement</h1>

          <ul id="reglement">
              <li> Les lecteurs sont tenus de respecter le calme à l’intérieur des locaux. Il est interdit
                   de fumer, manger et boire dans les locaux de la bibliothèque, sauf animation expressément
                   organisée par la bibliothécaire. L’accès des animaux est interdit dans la bibliothèque
              </li>

              <li>En cas de retard dans la restitution des documents empruntés, la bibliothèque pourra
                  prendre toutes dispositions utiles pour assurer le retour des documents (rappels, suspensions
                  du droit au prêt…).
              </li>

              <li>Les usagers peuvent obtenir la reprographie d’extraits de documents appartenant à
                  la bibliothèque. Ils sont tenus de réserver à leur usage strictement personnel la reprographie
                  des documents qui ne sont pas dans le domaine public. Les tarifs de reprographie sont fixés
                  par arrêté municipal.
              </li>

              <li> Le personnel de la bibliothèque est chargé, sous la responsabilité du bibliothécaire de
                   l’application du présent règlement dont un exemplaire est affiché en permanence dans les
                   locaux, à l’usage du public.
                   Le personnel de la bibliothèque est à la disposition des usagers pour aider à utiliser les
                   ressources de la bibliothèque.
              </li>

              <li>Pour s’inscrire à la bibliothèque, l’usager doit justifier de son identité et de son
                  domicile. Il reçoit alors une carte départementale de lecteur, valable un an. Tout changement
                  de domicile doit être immédiatement signalé.
              </li>

              <li> Les enfants et les jeunes de moins de quatorze ans doivent, pour s’inscrire, être munis
                   d’une autorisation écrite de leurs parents.
              </li>

              <li> Tout lecteur déjà titulaire d’une carte départementale de lecteur et souhaitant
                   emprunter des documents dans une autre bibliothèque qui délivre elle aussi la carte doit être
                   inscrit dans cette nouvelle bibliothèque gratuitement sur présentation de sa carte et de son
                   formulaire d’inscription, sous réserve qu’il soit à jour de ses cotisations dans sa bibliothèque
                   de rattachement.
              </li>
          </ul>
    </div>
  <!--end Régelement-->
</div>




<!--footer-->
    <div class="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <!--logo-->
                    <div class="col-sm-6 col-md-3 item">
                        <a class="navbar-brand" href="#">
                            <img src="./images/logo2.png" alt="" width="150" height="80" class="d-inline-block align-text-top">
                        </a>
                    </div>
                    <!-- end logo-->

                    <div class="col-sm-6 col-md-3 item">
                        <ul>
                            <li><a href="contact.php"><h3>Contacter-nous</h3></a></li>
                            <li><a href="plan.php"><h3>Plan de site</h3></a></li>
                            <li><a href=emploisstage.php><h3>Offres Emplois/Stage</h3></a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 item text">
                        <h3>Balicharmen</h3>
                        <p>les lettres de "RABAB" ,"LAILA" "ACHCHAIMAE" ,"HANANE" <br> composent le nom de notre bibliothéque : <p class="navbar-brand" id=site>balicharmen</p></p>
                    </div>

                    <div class="col item social">
                        <a href="https://fr-fr.facebook.com/">
                            <i class="icon ion-social-facebook"></i>
                        </a>

                        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZnIifQ%3D%3D%22%7D">
                            <i class="icon ion-social-twitter"></i>
                        </a>

                        <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome">
                            <i class="icon ion-social-snapchat"></i>
                        </a>

                        <a href="https://www.instagram.com/?hl=fr">
                            <i class="icon ion-social-instagram"></i>
                        </a>
                    </div>
                </div>

                <p class="copyright">balicharmen © 2022</p>
            </div>
        </footer>
    </div>
   

<!--end footer-->

  </body>
</html>
