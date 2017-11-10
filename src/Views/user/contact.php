<?php ?>
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Social WCS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?section=contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>



<div class="container">

    <h2 class="text-center">CONTACTEZ NOUS</h2>
    

    <!-- On spécifie vers quelle url la donnée du formulaire doit etre envoyé -->
    <form action="index.php?section=add" method="post">
    <!-- End -->
    
        <div class="form-group">
            <label for="nom">Nom</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Prenom">
        </div>
        
        <div class="form-group">
            <label for="adresseMail">Email</label>
            <input name="adresseMail" type="text" class="form-control" id="adresseMail" placeholder="Votre mail">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input name="message" type="textarea" class="form-control" id="message" placeholder="Votre message">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Envoyer</button>
        </div>
    </form>
</div>




   <table>
      <tr align="center">
        <td>
         
      <td>
        <a class="nav-link" href="#">Made by CheckeBom - BeaWhoCodes</a>
      </td>
       
    </tr>
  </table>



    
    
    


