<?php 
/* Template Name: gamefind */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>accueil</title>
</head>
<body class="page-ajout">
  <div class="ajout">
<form action="traitement.php" method="POST">
  <h2>Félicitation !</h2>
  <hr>
  <p>Voici le(s) jeu(x) que vous Recherchez se trouve(nt) ici.</p>
  <label for="nom">Nom du jeu :</label>
  <input type="text" id="nom" name="nom" required>
  
  <label for="systeme"> Systeme de jeu:</label>
  <select id="email" name="email">
    <option value="option1">Système de jeu</option>
    <option value="option2">3DO</option>
    <option value="option3">Atari 2600</option>
    <option value="option4">Atari Jaguar</option>
    <option value="option5">Atari Lynx</option>
    <option value="option6">CD-I</option>
    <option value="option7">Dreamcast</option>
    <option value="option8">Game Boy</option>
    <option value="option9">Game Boy Advance</option>
    <option value="option10">Game Boy Color</option>
    <option value="option11">Game Gear</option>
    <option value="option12">Master System</option>
    <option value="option13">Mega-CD</option>
    <option value="option14">Mega Drive</option>
    <option value="option15">NEO-Geo </option>
    <option value="option16">NES</option>
    <option value="option17">N-Gage</option>
    <option value="option18">Nintendo 64</option>
    <option value="option19">Nintendo Gambecube</option>
    <option value="option20">Playstation 1</option>
    <option value="option21">Playstation 2</option>
    <option value="option22">Sega Saturn</option>
    <option value="option23">SNES</option>
    <option value="option24">Virtual Boy</option>
    <option value="option25">Wonderswan color</option>
    <option value="option26">Xbox</option>
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
    <option value="option16">Xbox One S</option>
    <option value="option17">Xbox One X</option>
    <option value="option18">Xbox Series S</option>
    <option value="option19">Xbox Series X</option>
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
    <option value="option2">2005</option>
    <option value="option3">2004</option>
    <option value="option4">2003</option>
    <option value="option5">2002</option>
    <option value="option6">2001</option>
    <option value="option7">2000</option>
    <option value="option8">1999</option>
    <option value="option9">1998</option>
    <option value="option10">1997</option>
    <option value="option11">1996</option>
    <option value="option12">1995</option>
    <option value="option13">1994</option>
    <option value="option14">1993</option>
    <option value="option15">1992</option>
    <option value="option16">1991</option>
    <option value="option17">1990</option>
    <option value="option18">1989</option>
    <option value="option19">1988</option>
    <option value="option20">1987</option>
    <option value="option21">1986</option>
    <option value="option22">1985</option>
    <option value="option23">1984</option>
    <option value="option24">1983</option>
    <option value="option25">1982</option>
    <option value="option26">1981</option>
    <option value="option27">1980</option>
  </select>

  <a href="Confirmation" class="button">Proposez l'échange</a>
</form>

</form>
</div>
<hr>
</body>
</html>
<?php get_footer(); ?>


