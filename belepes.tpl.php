<center>  

  <h3>Regisztrálja magát, ha még nem felhasználója az oldalnak!</h3>
  <br>
    <form class="login-box" action = "?oldal=regisztral" method = "post">
      
        <h1>Registration</h1>
        <div class="textbox">
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required>
        </div>
        <div class="textbox">
        <input type="text" name="utonev" placeholder="utónév" required>
        </div>
        <div class="textbox">
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required>
         </div>
        <div class="textbox">
        <input type="password" name="jelszo" placeholder="jelszó" required>
         </div>
        
        <input class="btn" type="submit" name="regisztracio" value="Regisztráció">
        <br>&nbsp;
        
        
    </form>    
	<br>
	<form class="login-box" action = "?oldal=belep" method = "post">

      
         <h1>Sign in</h1>
        <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="felhasznalo" placeholder="felhasználó" required>
        </div>
        
        <div class="textbox">
        <i class="fas fa-lock" ></i>
        <input type="password" name="jelszo" placeholder="jelszó" required>
        </div>

        <input class="btn" type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
        
    </form>
	<br>
</center>
