<?php 
/* Template Name: recent */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>compte</title>
</head>
<body class="page-recent">
  <div class="recent">
<form action="traitement.php" method="POST">
  <h2>Rechercher un jeux récent</h2>
  <hr>
  <p>Ici retrouvez tous les jeux sortis après 2005 que nous avons.</p>
  <label for="nom">Nom du jeu :</label>
  <input type="text" id="nom" name="nom" required>
  
  <label for="systeme"> Systeme de jeu:</label>
  <select id="email" name="email">
    <option value="option1">Système de jeu</option>
    <option value="option2">Nintendo DS</option>
    <option value="option3">Nintendo DSi</option>
    <option value="option4">Nintendo 2DS</option>
    <option value="option5">Nintendo 3DS</option>
    <option value="option6">Nintendo Switch</option>
    <option value="option7">PlayStation 3</option>
    <option value="option8">PlayStation 4</option>
    <option value="option9">PlayStation 5</option>
    <option value="option10">PSP</option>
    <option value="option11">PlayStation Vita</option>
    <option value="option12">Wii</option>
    <option value="option13">Wii U</option>
    <option value="option14">Xbox 360</option>
    <option value="option15">Xbox One</option>
    <option value="option16">PC</option>
  </select>
  
  <label for="genre"> genre de jeu:</label>
  <select id="message" name="message">
    <option value="option1">Genre de jeu</option>
    <option value="option2">Action</option>
    <option value="option3">Aventure</option>
    <option value="option4">Combat</option>
    <option value="option5">FPS</option>
    <option value="option6">Plateforme</option>
    <option value="option7">RPG</option>
    <option value="option8">RTS</option>
    <option value="option9">Simulation</option>
    <option value="option10">Sport</option>
    <option value="option11">TPS</option>
  </select>

  <label for="annee">année :</label>
  <select id="message" name="message">
    <option value="option1">Année</option>
    <option value="option2">2023</option>
    <option value="option3">2022</option>
    <option value="option4">2021</option>
    <option value="option5">2020</option>
    <option value="option6">2019</option>
    <option value="option7">2018</option>
    <option value="option8">2017</option>
    <option value="option9">2016</option>
    <option value="option10">2015</option>
    <option value="option11">2014</option>
    <option value="option12">2013</option>
    <option value="option13">2012</option>
    <option value="option14">2011</option>
    <option value="option15">2010</option>
    <option value="option16">2009</option>
    <option value="option17">2008</option>
    <option value="option18">2007</option>
    <option value="option19">2006</option>
  </select>

  <a href="gamefind" class="button" onclick="redirectToGameFind()">Rechercher</a>

<script>
  function redirectToGameFind() {
    var systemeValue = document.getElementById("systeme").value;
    if (systemeValue === "PC") {
      window.location.href = "gamefind";
    } else {
      window.location.href = "gamenofind";
    }
  }
</script>

</form>
</div>
<hr>
</body>
</html>
<?php get_footer(); ?>


