<?php 
/* Template Name: retro */
get_header(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>compte</title>
</head>
<body class="page-retro">
  <div class="retro">
    <form action="traitement.php" method="POST">
      <h2>Rechercher un jeu rétro</h2>
      <hr>
      <p>Ici retrouvez tous les jeux sortis avant 2005 que nous avons.</p>
      <label for="nom">Nom du jeu :</label>
      <input type="text" id="nom" name="nom" required>
      
      <label for="systeme">Système de jeu :</label>
      <select id="systeme" name="systeme">
        <!-- Options du système de jeu -->
        <option value="option1">Système de jeu</option>
        <option value="3DO">3DO</option>
        <option value="Atari 2600">Atari 2600</option>
        <option value="Atari Jaguar">Atari Jaguar</option>
        <option value="Atari Lynx">Atari Lynx</option>
        <option value="CD-I">CD-I</option>
        <option value="Dreamcast">Dreamcast</option>
        <option value="Game Boy">Game Boy</option>
        <option value="Game Boy Advance">Game Boy Advance</option>
        <option value="Game Boy Color">Game Boy Color</option>
        <option value="Game Gear">Game Gear</option>
        <option value="Master System">Master System</option>
        <option value="Mega-CD">Mega-CD</option>
        <option value="Mega Drive">Mega Drive</option>
        <option value="NEO-Geo">NEO-Geo</option>
        <option value="NES">NES</option>
        <option value="N-Gage">N-Gage</option>
        <option value="Nintendo 64">Nintendo 64</option>
        <option value="Nintendo Gamecube">Nintendo Gamecube</option>
        <option value="Playstation 1">Playstation 1</option>
        <option value="Playstation 2">Playstation 2</option>
        <option value="Sega Saturn">Sega Saturn</option>
        <option value="SNES">SNES</option>
        <option value="Virtual Boy">Virtual Boy</option>
        <option value="Wonderswan Color">Wonderswan Color</option>
        <option value="Xbox">Xbox</option>
        <option value="option16">PC</option>

      </select>
      
      <label for="genre">Genre de jeu :</label>
      <select id="genre" name="genre">
        <!-- Options du genre de jeu -->
        <option value="option1">Genre de jeu</option>
        <option value="Action">Action</option>
        <option value="Aventure">Aventure</option>
        <option value="Combat">Combat</option>
        <option value="FPS">FPS</option>
        <option value="Plateforme">Plateforme</option>
        <option value="RPG">RPG</option>
        <option value="RTS">RTS</option>
        <option value="Simulation">Simulation</option>
        <option value="Sport">Sport</option>
        <option value="TPS">TPS</option>
      </select>

      <label for="annee">Année :</label>
      <select id="annee" name="annee">
        <!-- Options de l'année -->
        <option value="option1">Année</option>
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

      <a href="#" class="button" onclick="redirectToGameFind()">Rechercher</a>

      <script>
        function redirectToGameFind() {
          var systemeValue = document.getElementById("systeme").value;
          if (systemeValue === "Playstation 2") {
            window.location.href = "gamefind";
          } else {
            window.location.href = "gamenofind";
          }
        }
      </script>
    </form>
    <hr>
  </div>
</body>

</html>
<?php get_footer(); ?>


