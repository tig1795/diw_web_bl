<!-- Code der Menüleiste -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hinzufügen eines neuen Deutschen Meisters</title>
    <link rel="stylesheet" href="../CSS/style2.css">
    <link rel="stylesheet" href="../CSS/new_entry.css">
    <link rel="stylesheet" href="../CSS/slide.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
    <nav>
      <div class="menu-icon"><span class="fa fa-bars"></span></div>
      <div class="logo">Bundesliga</div>
      <div class="nav-items">
          <li><a href="index2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="deutsche_meister2.php" class="active"><i class="fa fa-trophy"></i> Deutsche Meister</a></li>
          <li><a href="EW_Tabelle2.php"><i class="fa fa-calculator"></i> Statistik</a></li>
          <li><a href="Siegestropähe2.php"><i class="fa fa-trophy"></i> Siegestrophäe</a></li>
          <li><a href="About2.php"><i class="fa fa-info-circle"></i> About</a></li>
          <li><a href="logout.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Logout</a></li>

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

    <!-- Code für die Eingabeoberfläche -->
    <h2>Tragen Sie hier den neuen Deutschen Meister ein:</h2>
    </br>

    <form action="insert.php" method="post">

        Nummerierung: <input type="text" name="nummerierung">
                <br/>
        Saison: <input type="text" name="saison">
                <br/>
        Meister: <input type="text" name="meister">
                <br/>
        Tore: <input type="text" name="tore">  
                <br/> 
        Punkte: <input type="text" name="punkte">
                <br/>
                <input type="submit" value="Abschicken">
   </form>
        
    
    
    
</body>
</html>