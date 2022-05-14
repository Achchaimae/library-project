<?php
session_start();
if((!isset($_SESSION['mail'])) AND (!isset($_SESSION['password']))){
    header("location:login.php");
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




<!-- getformulair-->
<SCRIPT LANGUAGE="JavaScript">



function popup() {
w=open("",'popup','width=1000,height=500,toolbar=no,scrollbars=no,resizable=yes');
w.document.write("<BODY>");
w.document.write("<center><i>balicharmen.com</i></center><BR><BR>");
w.document.write("<center><h3><font color=red>Reçue</font></h3></center><BR><BR>");
w.document.write("Nom: "+document.forms["recu"].elements["nom"].value+"<BR><BR>");
w.document.write("Prénom: "+document.forms["recu"].elements["prenom"].value+"<BR><BR>");
w.document.write("Courriel: "+document.forms["recu"].elements["date"].value+"<BR><BR>");
w.document.write("Message: "+document.forms["recu"].elements["titre"].value+"<BR><BR>");
w.document.write("</BODY>");
w.document.close();
w.print();
}
</SCRIPT>

<!-- end get formulair-->



<div class="container2">
  <h6>remplir cette formulaire et la telecharger en pdf puis la envoyer a notre mail ou l'imprimer a fin de la deposer a la reseption de notre bibliotheque </h6>
  <form  action="" method="POST" name="recu" >
         <div class="row">
             <div class="col-25">
                <label for="nom" >Nom</label>
            </div>

             <div class="col-75">
                <input type="text"  name="nom" placeholder="Votre nom" id="nom">
            </div>
        </div>

       <div class="row">
             <div class="col-25">
                 <label for="prenom">Prenom</label>
             </div>

             <div class="col-75">
                 <input type="text"  name="prenom" placeholder="Votre prenom.." id="prenom">
             </div>
       </div>

       <div class="row">
             <div class="col-25">
                 <label for="date">Date d'emprunte</label>
             </div>

             <div class="col-75">
                 <input type="Date"  name="date" placeholder="la date ..." id="date">
             </div>
       </div>

       <div class="row">
             <div class="col-25">
                 <label for="prenom">Titre de livre </label>
             </div>

             <div class="col-75 container" >
                 <input class="input" id="searchInput" type="text" name="titre" placeholder="Search ..."/>
                 <div id="suggestions"></div>
             </div>
       </div>
       <script language="JavaScript">
        const Titre=[
            {name:"sous les pins, la lumiere"},
            {name:"Street Art au-delà des murs - Les génies de l'art urbain"},
            {name:"Musée Yves Saint Laurent Marrakech"},
            {name:"Vide et Plein. Le langage pictural chinois"},
            {name:"Ils y viennent tous au cinéma !"},
            {name:"Suis-je hypersensible ? Le cahier pratique: 40 situations - 40 solutions"},
            {name:"Méditer pour les Nuls"},
            {name:"Stop ! J'arrête de me prendre la tête !"},
            {name:"sPrécis de Hatha Yoga - Stade fondamental"},
            {name:"La Guérison des 5 blessures"},
            {name:"Le procès de Nuremberg"},
            {name:"Les portes de l'enfer, la répression légale du citoyen sous Vichy"},
            {name:"J'étais soldat de Napoléon !: 200 ans 200 objets"},
            {name:"1453-1559: Les Renaissances"},
            {name:"Une histoire mondiale du communisme (Tome 3))"},
            {name:"100 idées pour foutre la merde au bureau"},
            {name:"100 idées pour foutre la merde à un diner de famille"},
            {name: "Je vais m'en farcir quelques-uns !"},
            {name:"Officiel de l'humour 2022 : + de 1 500 blagues 100 % fous rires"},
            {name:"Quelques amis"},
            {name:"Bien rédiger pour le Web, 5e édition: Stratégie de contenu pour améliorer son référencement"},
            {name:"Python pour les SHS : Introduction à la programmation pour le traitement de données"},
            {name:"Réseaux informatiques - Coffret de 2 livres : Notions fondamentales, maintenance et dépannage des PC (6e édition)"},
            {name:"Je crée mon site avec WordPress. Le guide complet, de l'hébergement à la promotion"},
            {name:"sS'initier � la gestion de projets informatiques"},

        ];

        const searchinput = document.getElementById('searchInput');
        searchinput.addEventListener('keyup',function(){
            const input = searchinput.value;

           const result = Titre.filter(item => item.name.toLocaleLowerCase().includes(input.toLocaleLowerCase()));


           let suggestion ='';

           result.forEach( resultItem =>
            suggestion +=`
            <div class="suggestion">${resultItem.name}</div>`

            )
           document.getElementById('suggestions').innerHTML = suggestion;
        })

       </script>


        <div class="row">


                 <input type="submit" value="telecharger"  onclick="popup()">

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
