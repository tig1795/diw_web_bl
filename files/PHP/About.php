<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bundesliga</title>
    <link rel="stylesheet" href="../CSS/style2.css">
    <link rel="stylesheet" href="../CSS/Fußzeile.css" type="text/css">
	  <link rel="stylesheet" href="../CSS/Lieblingsrezepte.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav>
      <div class="menu-icon"><span class="fa fa-bars"></span></div>
      <div class="logo">Bundesliga</div>
      <div class="nav-items">
          <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="deutsche_meister.php"><i class="fa fa-trophy"></i> Deutsche Meister</a></li>
          <li><a href="EW_Tabelle.php"><i class="fa fa-calculator"></i> Statistik</a></li>
          <li><a href="Siegestrophäe.php"><i class="fa fa-trophy"></i> Siegestrophäe</a></li>
          <li><a href="About.php" class="active"><i class="fa fa-info-circle"></i> About</a></li>
          <li><a href="login.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a></li>

      </div>
      <div class="search-icon"><span class="fa fa-search"></span></div>
      <div class="cancel-icon"><span class="fa fa-times"></span></div>
      <form action="Suche.php" method="get">
        <input type="search" class="search-data" placeholder="Search" name="search" required/>
        <button type="submit" class="fa fa-search"></button>
      </form>
    </nav>

    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = ()=>{
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = ()=>{
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";            
        }
        searchBtn.onclick = ()=>{
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>
    <br/>

    <div class="info">
<h2>Impressum</h2>
</br>
<p>Diese Website wurde von Timo Günther für das Seminar Datenbanken im Web an der Julius-Maximilians Universität Würzburg erstellt.</p>
    </br>
<p>Gegenstand dieser Website ist die Darlegung der deutschen Fußballmeister vor und nach Gründung der Bundesliga.</p>
    </br>
<p>Die dargestellten Informationen auf dieser Website stammen aus folgenden Quellen:</p>
    </br>
<li>https://www.dfb.de/bundesliga/statistik/bisherige-meister/</li>
<li>https://www.dfb.de/historie/trophaeen/die-viktoria/</li>
<li>https://www.dfb.de/historie/trophaeen/meisterschale/</li>
<li>https://www.kicker.de/bundesliga/ewige-tabelle</li>

</div>

</body>
</html>