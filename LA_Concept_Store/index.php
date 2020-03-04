<!Doctype html>
<html>
    <style>
       #nom1{
           margin-left: 1.35cm;
       }
       #prenom{
           margin-left: 0.9cm;
       }
       #adresse{
           margin-left: 0.87cm;
       }
       #ville{
           margin-left: 1.41cm;
       }
       #email{
           margin-left: 1.22cm;
       }
       #tele{
           margin-left: 0.48cm;
       }
       #code{
           margin-left: 0.2cm;
       }
       #b1{
           margin-left: 2.5cm;
       }
       #f1,h1{
           
           margin-left:38%;
       }
       
    </style>
  <body>
    <h1>Inscription :</h1><br>
    <form id="f1" action="log.php" method="get">
       Nom : <input type="text" name="nom" placeholder="Entrez votre nom.." id="nom1" /><br><br>
       Prenom : <input type="text" name="prenom" placeholder="Entrez votre prenom.." id="prenom" /><br><br>
       Adresse : <input type="text" name="adresse" placeholder="Entrez votre adresse.." id="adresse" /><br><br>
       Ville : <input type="text" name="ville" placeholder="Entrez votre ville.." id="ville" /><br><br>
       Code Postal : <input type="text" name="code" size="4" placeholder="000000" id="code" /><br><br>
       Telephone : <input type="text" name="tele"  placeholder="Entrez votre num tele.." id="tele" /><br><br>
       Email : <input type="email" name="mail" placeholder="Entrez votre e-mail.." id="email" /><br><br>
       Mot de passe : <input type="password" name="mdp" /><br><br>
       <input type="submit" value="S'inscrire" id="b1"/><br><br>
    </form>
  </body>
</html>