<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bundesliga</title>
    <link rel="stylesheet" href="../CSS/style.css">
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
          <li><a href="index2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="deutsche_meister.php"><i class="fa fa-trophy"></i> Deutsche Meister</a></li>
          <li><a href="EW_Tabelle.php" class="active"><i class="fa fa-calculator"></i> Statistik</a></li>
          <li><a href="#"><i class="fa fa-users"></i> Vereine</a></li>
          <li><a href="#"><i class="fa fa-trophy"></i> Siegestrophäe</a></li>
          <li><a href="login2.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a></li>

      </div>
      <div class="search-icon"><span class="fa fa-search"></span></div>
      <div class="cancel-icon"><span class="fa fa-times"></span></div>
      <form action="Suche2.php" method="get">
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
    </script><br>

<h2>Die ewige Tabelle der Fußballbundesliga</h2><br>
<table border="1" class="gridtable">
  <tr>
    <th>Platzierung</th>
    <th>Verein</th>
    <th>Spiele</th>
    <th>Siege</th>
    <th>Unentschieden</th>
    <th>Niederlagen</th>
    <th>Tore</th>
    <th>Tordifferenz</th>
    <th>Punkte</th>
  </tr>
  <tr>
    <td>1</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_Bayern_M%C3%BCnchen">Bayern München</a></td>
    <td>1899</td>
    <td>1138</td>
    <td>413</td>
    <td>348</td>
    <td>4207 : 2068</td>
    <td>2139</td>
    <td>3827</td>
   </tr>
   <tr>
    <td>2</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Borussia_Dortmund">Borussia Dortmund</a></td>
    <td>1823</td>
    <td>818</td>
    <td>463</td>
    <td>542</td>
    <td>3268 : 2562</td>
    <td>706</td>
    <td>2917</td>
   </tr>
   <tr>
    <td>3</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Werder_Bremen">Werder Bremen</a></td>
    <td>1925</td>
    <td>800</td>
    <td>485</td>
    <td>640</td>
    <td>3204 : 2814</td>
    <td>390</td>
    <td>2885</td>
   </tr>
   <tr>
    <td>4</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Hamburger_SV">Hamburger SV</a></td>
    <td>1866</td>
    <td>746</td>
    <td>495</td>
    <td>625</td>
    <td>2937 : 2662</td>
    <td>275</td>
    <td>2733</td>
   </tr>
   <tr>
    <td>5</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/VfB_Stuttgart">VfB Stuttgart</a></td>
    <td>1823</td>
    <td>749</td>
    <td>443</td>
    <td>631</td>
    <td>3016 : 2665</td>
    <td>351</td>
    <td>2690</td>
   </tr>
   <tr>
    <td>6</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Borussia_M%C3%B6nchengladbach">Bor. Mönchengladbach</a></td>
    <td>1797</td>
    <td>729</td>
    <td>471</td>
    <td>597</td>
    <td>3053 : 2601</td>
    <td>452</td>
    <td>2658</td>
   </tr>
   <tr>
    <td>7</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_Schalke_04">FC Schalke 04</a></td>
    <td>1789</td>
    <td>691</td>
    <td>453</td>
    <td>645</td>
    <td>2598 : 2587</td>
    <td>11</td>
    <td>2526</td>
   </tr>
   <tr>
    <td>8</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Eintracht_Frankfurt">Eintracht Frankfurt</a></td>
    <td>1755</td>
    <td>645</td>
    <td>447</td>
    <td>663</td>
    <td>2754 : 2714</td>
    <td>40</td>
    <td>2380</td>
   </tr>
   <tr>
    <td>9</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/1._FC_K%C3%B6ln">1. FC Köln</a></td>
    <td>1653</td>
    <td>644</td>
    <td>420</td>
    <td>589</td>
    <td>2691 : 2477</td>
    <td>214</td>
    <td>2352</td>
   </tr>
   <tr>
    <td>10</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Bayer_04_Leverkusen">Bayer 04 Leverkusen</a></td>
    <td>1423</td>
    <td>613</td>
    <td>386</td>
    <td>424</td>
    <td>2395 : 1900</td>
    <td>495</td>
    <td>2225</td>
   </tr>
   <tr>
    <td>11</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/1._FC_Kaiserslautern">1. FC Kaiserslautern</a></td>
    <td>1492</td>
    <td>575</td>
    <td>372</td>
    <td>545</td>
    <td>2348 : 2344</td>
    <td>4</td>
    <td>2094</td>
   </tr>
   <tr>
    <td>12</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Hertha_BSC">Hertha BSC</a></td>
    <td>1275</td>
    <td>458</td>
    <td>321</td>
    <td>496</td>
    <td>1795 : 1955</td>
    <td>-160</td>
    <td>1695</td>
   </tr>
   <tr>
    <td>13</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/VfL_Bochum">VfL Bochum</a></td>
    <td>1160</td>
    <td>356</td>
    <td>306</td>
    <td>498</td>
    <td>1602 : 1887</td>
    <td>-285</td>
    <td>1374</td>
   </tr>
   <tr>
    <td>14</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/1._FC_N%C3%BCrnberg">1. FC Nürnberg</a></td>
    <td>1118</td>
    <td>344</td>
    <td>286</td>
    <td>488</td>
    <td>1428 : 1794</td>
    <td>-366</td>
    <td>1318</td>
   </tr>
   <tr>
    <td>15</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Hannover_96">Hannover 96</a></td>
    <td>1016</td>
    <td>308</td>
    <td>250</td>
    <td>458</td>
    <td>1385 : 1734</td>
    <td>-349</td>
    <td>1174</td>
   </tr>
   <tr>
    <td>16</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/MSV_Duisburg">MSV Duisburg</a></td>
    <td>948</td>
    <td>296</td>
    <td>259</td>
    <td>393</td>
    <td>1291 : 1520</td>
    <td>-229</td>
    <td>1147</td>
   </tr>
   <tr>
    <td>17</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/VfL_Wolfsburg">VfL Wolfsburg</a></td>
    <td>807</td>
    <td>309</td>
    <td>210</td>
    <td>288 </td>
    <td>1218 : 1168</td>
    <td>50</td>
    <td>1137</td>
   </tr>
   <tr>
    <td>18</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Fortuna_D%C3%BCsseldorf">Fortuna Düsseldorf</a></td>
    <td>854</td>
    <td>264</td>
    <td>232</td>
    <td>358</td>
    <td>1245 : 1518</td>
    <td>-273</td>
    <td>1024</td>
   </tr>
   <tr>
    <td>19</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Karlsruher_SC">Karlsruher SC</a></td>
    <td>812</td>
    <td>241</td>
    <td>230</td>
    <td>341</td>
    <td>1093 : 1408</td>
    <td>-315</td>
    <td>953</td>
   </tr>
   <tr>
    <td>20</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Eintracht_Braunschweig">Eintracht Braunschweig</a></td>
    <td>706</td>
    <td>242</td>
    <td>177</td>
    <td>287</td>
    <td>937 : 1086</td>
    <td>-149</td>
    <td>903</td>
   </tr>
   <tr>
    <td>21</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/TSV_1860_M%C3%BCnchen">1860 München</a></td>
    <td>672</td>
    <td>238</td>
    <td>170</td>
    <td>264</td>
    <td>1022 : 1059</td>
    <td>-37</td>
    <td>884</td>
   </tr>
   <tr>
    <td>22</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SC_Freiburg">SC Freiburg</a></td>
    <td>705</td>
    <td>218</td>
    <td>183</td>
    <td>304</td>
    <td>887 : 1127</td>
    <td>-240</td>
    <td>837</td>
   </tr>
   <tr>
    <td>23</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Arminia_Bielefeld">Arminia Bielefeld</a></td>
    <td>569</td>
    <td>159</td>
    <td>143</td>
    <td>267</td>
    <td>665 : 927</td>
    <td>-262</td>
    <td>620</td>
   </tr>
   <tr>
    <td>24</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/1._FSV_Mainz_05">1. FSV Mainz 05</a></td>
    <td>501</td>
    <td>164</td>
    <td>126</td>
    <td>211</td>
    <td>646 : 751</td>
    <td>-105</td>
    <td>618</td>
   </tr>
   <tr>
    <td>25</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/TSG_1899_Hoffenheim">TSG Hoffenheim</a></td>
    <td>433</td>
    <td>154</td>
    <td>125</td>
    <td>154</td>
    <td>692 : 667</td>
    <td>25</td>
    <td>587</td>
   </tr>
   <tr>
    <td>26</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/KFC_Uerdingen_05">KFC Uerdingen 05</a></td>
    <td>476</td>
    <td>138</td>
    <td>129</td>
    <td>209</td>
    <td>644 : 844</td>
    <td>-200</td>
    <td>543</td>
   </tr>
   <tr>
    <td>27</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Hansa_Rostock">Hansa Rostock</a></td>
    <td>412</td>
    <td>124</td>
    <td>107</td>
    <td>181</td>
    <td>492 : 621</td>
    <td>-129</td>
    <td>479</td>
   </tr>
   <tr>
    <td>28</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_Augsburg">FC Augsburg</a></td>
    <td>331</td>
    <td>99</td>
    <td>89</td>
    <td>143</td>
    <td>402 : 511</td>
    <td>-109</td>
    <td>386</td>
   </tr>
   <tr>
    <td>29</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/RB_Leipzig">RB Leipzig</a></td>
    <td>161</td>
    <td>88</td>
    <td>42</td>
    <td>31</td>
    <td>314 : 179</td>
    <td>135</td>
    <td>306</td>
   </tr>
   <tr>
    <td>30</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SV_Waldhof_Mannheim">SV Waldhof Mannheim</a></td>
    <td>238</td>
    <td>71</td>
    <td>72</td>
    <td>95</td>
    <td>299 : 378</td>
    <td>-79</td>
    <td>285</td>
   </tr>
   <tr>
    <td>31</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Kickers_Offenbach">Kickers Offenbach</a></td>
    <td>238</td>
    <td>77</td>
    <td>51</td>
    <td>110</td>
    <td>368 : 486</td>
    <td>-118</td>
    <td>282</td>
   </tr>
   <tr>
    <td>32</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Rot-Weiss_Essen">Rot-Weiss Essen</a></td>
    <td>238</td>
    <td>61</td>
    <td>79</td>
    <td>98</td>
    <td>346 : 483</td>
    <td>-137</td>
    <td>262</td>
   </tr>
   <tr>
    <td>33</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_St._Pauli">FC St. Pauli</a></td>
    <td>272</td>
    <td>58</td>
    <td>80</td>
    <td>134</td>
    <td>296 : 485</td>
    <td>-189</td>
    <td>254</td>
   </tr>
   <tr>
    <td>34</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Energie_Cottbus">Energie Cottbus</a></td>
    <td>204</td>
    <td>56</td>
    <td>43</td>
    <td>105</td>
    <td>211 : 338</td>
    <td>-127</td>
    <td>211</td>
   </tr>
   <tr>
    <td>35</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Alemannia_Aachen">Alemannia Aachen</a></td>
    <td>136</td>
    <td>43</td>
    <td>28</td>
    <td>65</td>
    <td>186 : 270</td>
    <td>-84</td>
    <td>157</td>
   </tr>
   <tr>
    <td>36</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SG_Wattenscheid_09">SG Wattenscheid 09</a></td>
    <td>140</td>
    <td>34</td>
    <td>48</td>
    <td>58</td>
    <td>186 : 248</td>
    <td>-62</td>
    <td>150</td>
   </tr>
   <tr>
    <td>37</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/1._FC_Saarbr%C3%BCcken">1. FC Saarbrücken</a></td>
    <td>166</td>
    <td>32</td>
    <td>48</td>
    <td>86</td>
    <td>202 : 336</td>
    <td>-134</td>
    <td>144</td>
   </tr>
   <tr>
    <td>38</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Dynamo_Dresden">1. FC Dynamo Dresden</a></td>
    <td>140</td>
    <td>33</td>
    <td>45</td>
    <td>62</td>
    <td>132 : 211</td>
    <td>-79</td>
    <td>140</td>
   </tr>
   <tr>
    <td>39</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Rot-Wei%C3%9F_Oberhausen">Rot-Weiß Oberhausen</a></td>
    <td>136</td>
    <td>36</td>
    <td>31</td>
    <td>69</td>
    <td>182 : 281</td>
    <td>-99</td>
    <td>139</td>
   </tr>
   <tr>
    <td>40</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SV_Darmstadt_98">SV Darmstadt 98</a></td>
    <td>136</td>
    <td>28</td>
    <td>33</td>
    <td>75</td>
    <td>152 : 273</td>
    <td>-121</td>
    <td>117</td>
   </tr>
   <tr>
    <td>41</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Wuppertaler_SV">Wuppertaler SV</a></td>
    <td>102</td>
    <td>25</td>
    <td>27</td>
    <td>50</td>
    <td>136 : 200</td>
    <td>-64</td>
    <td>102</td>
   </tr>
   <tr>
    <td>42</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Borussia_Neunkirchen">Borussia Neunkirchen</a></td>
    <td>98</td>
    <td>25</td>
    <td>18</td>
    <td>55</td>
    <td>109 : 223</td>
    <td>-114</td>
    <td>93</td>
   </tr>
   <tr>
    <td>43</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_08_Homburg">FC 08 Homburg</a></td>
    <td>102</td>
    <td>21</td>
    <td>27</td>
    <td>54</td>
    <td>103 : 200</td>
    <td>-97</td>
    <td>90</td>
   </tr>
   <tr>
    <td>44</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/1._FC_Union_Berlin">1. FC Union Berlin</a></td>
    <td>60</td>
    <td>21</td>
    <td>16</td>
    <td>23</td>
    <td>81 : 90</td>
    <td>-9</td>
    <td>79</td>
   </tr>
   <tr>
    <td>45</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SpVgg_Unterhaching">SpVgg Unterhaching</a></td>
    <td>68</td>
    <td>20</td>
    <td>19</td>
    <td>29</td>
    <td>75 : 101</td>
    <td>-26</td>
    <td>79</td>
   </tr>
   <tr>
    <td>46</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Stuttgarter_Kickers">Stuttgarter Kickers</a></td>
    <td>72</td>
    <td>20</td>
    <td>17</td>
    <td>35</td>
    <td>94 : 132</td>
    <td>-38</td>
    <td>77</td>
   </tr>
   <tr>
    <td>47</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_Ingolstadt_04">FC Ingolstadt 04</a></td>
    <td>68</td>
    <td>18</td>
    <td>18</td>
    <td>32</td>
    <td>69 : 99</td>
    <td>-30</td>
    <td>72</td>
   </tr>
   <tr>
    <td>48</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/FC_Ingolstadt_04">SC Paderborn 07</a></td>
    <td>68</td>
    <td>11</td>
    <td>18</td>
    <td>39</td>
    <td>68 : 139</td>
    <td>-71</td>
    <td>51</td>
   </tr>
   <tr>
    <td>49</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Tennis_Borussia_Berlin">Tennis Borussia Berlin</a></td>
    <td>68</td>
    <td>11</td>
    <td>16</td>
    <td>41</td>
    <td>85 : 174</td>
    <td>-89</td>
    <td>49</td>
   </tr>
   <tr>
    <td>50</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SSV_Ulm_1846">SSV Ulm 1846</a></td>
    <td>34</td>
    <td>9</td>
    <td>8</td>
    <td>17</td>
    <td>36 : 62</td>
    <td>-26</td>
    <td>35</td>
   </tr>
   <tr>
    <td>51</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SC_Fortuna_K%C3%B6ln">SC Fortuna Köln</a></td>
    <td>34</td>
    <td>8</td>
    <td>9</td>
    <td>17</td>
    <td>46 : 79</td>
    <td>-33</td>
    <td>33</td>
   </tr>
   <tr>
    <td>52</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Preu%C3%9Fen_M%C3%BCnster">Preußen Münster</a></td>
    <td>30</td>
    <td>7</td>
    <td>9</td>
    <td>14</td>
    <td>34 : 52</td>
    <td>-18</td>
    <td>30</td>
   </tr>
   <tr>
    <td>53</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/SpVgg_Greuther_F%C3%BCrth">SpVgg Greuther Fürth</a></td>
    <td>34</td>
    <td>4</td>
    <td>9</td>
    <td>21</td>
    <td>26 : 60</td>
    <td>-34</td>
    <td>21</td>
   </tr>
   <tr>
    <td>54</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Blau-Wei%C3%9F_90_Berlin">SpVgg Blau-Weiß 90 Berlin</a></td>
    <td>34</td>
    <td>3</td>
    <td>12</td>
    <td>19</td>
    <td>36 : 76</td>
    <td>-40</td>
    <td>21</td>
   </tr>
   <tr>
    <td>55</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/VfB_Leipzig_(1991)">VfB Leipzig</a></td>
    <td>34</td>
    <td>3</td>
    <td>11</td>
    <td>20</td>
    <td>32 : 69</td>
    <td>-37</td>
    <td>20</td>
   </tr>
   <tr>
    <td>56</td>
    <td><a style="color: white; text-decoration: none" href="https://de.wikipedia.org/wiki/Tasmania_Berlin_(1900%E2%80%931973)">SC Tasmania 1900 Berlin</a></td>
    <td>34</td>
    <td>2</td>
    <td>4</td>
    <td>28</td>
    <td>15 : 108</td>
    <td>-93</td>
    <td>10</td>
   </tr>
</table>

</body>
</html>