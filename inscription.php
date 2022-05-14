<?php
    if(!empty($_POST['mail'])){
        $fichier = fopen("./csv/dbuser.csv","a+");
        $user[] = $_POST['nom'];
        $user[] = $_POST['prenom'];
        $user[] = $_POST['date'];
        $user[] = $_POST['adresse'];
        $user[] = $_POST['mail'];
        $user[] = $_POST['tele'];
        $user[] = $_POST['password'];
        $user[] = $_POST['Vpassword'];
        fputcsv($fichier,$user,";");
        fclose($fichier);
        header('location:login.php');
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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






	<title>inscription</title>
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

 

<!--formulair-->

<div class="container2">
   <form action="" method="POST">
        <div class="row">
            <div class="col-25">
                <label for="nom">Nom</label>
            </div>

            <div class="col-75">
                <input type="text" id="nom" name="nom" placeholder="Votre nom..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="prenom">Prenom</label>
            </div>

            <div class="col-75">
                <input type="text" id="prenom" name="prenom" placeholder="Votre prenom..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="date">Date de Naissance</label>
            </div>

            <div class="col-75">
                <input type="date"  name="date" placeholder="Votre date...">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="adressse">Adressse</label>
            </div>
            <div class="col-75">
                <input type="text" id="adressse" name="adresse" placeholder="Votre adresse...">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="mail">Mail</label>
            </div>
            <div class="col-75">
                <input  type="email"  id="mail" name="mail" placeholder="Votre mail..." ></input>
            </div>
        </div>
    
        <div class="row">
            <div class="col-25">
                <label for="tele">Nombre telephone</label>
            </div>
            <div class="col-75">
                <input  type="tel"  id="tele" name="tele"   placeholder="+212 6 13 45 67 89 "></input>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="mail">mot de passe</label>
            </div>
            <div class="col-75">
                <input  type="password"  id="password" name="password" placeholder="********  " ></input>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="mail">verrifier mot de passe</label>
            </div>
            <div class="col-75">
                <input  type="password"  id="password" name="Vpassword" placeholder="********* " ></input>
            </div>
        </div>


        <div class="row">
            <input type="submit" name= "inscrire" value="s'inscrire">
            <input type="reset" value="reset">
        </div>

    </form>
</div>
<!-- end formulair-->


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