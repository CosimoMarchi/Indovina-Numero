<html>
  <body>
    <h3>
      Minigame in cui devi indovinare il numero (1-20)
    </h3>
    <?php 
            
         if(isset($_POST["bottone"]))
         {
           $random=$_POST["random"];
           $count=$_POST["count"]+1;
           if(isset($_POST["numero"]))
           {
            if($random==$_POST["numero"])
            {
              ?>
              <h3>
                 Hai Vintissimo!
              </h3>
              <?php
            }
            else if($count ==7)
            {
               ?>
              <h3>
                 Hai Persissim789o78!
              </h3>
              <?php       
            }
            else
           {
              if($random>$_POST["numero"])
              {
                ?>
                <h5>
                  Il numero e' piu' grande
                 <h5>
                  <?php
              }
              else
              {
                ?>
                <h5>
                  Il numero e' piu' piccolo
                 <h5>
                  <?php
              }
           ?>
             <form action="" method="post">
             <input type="hidden" name="count" value="<?php echo $count?>"/>
             <input type="hidden" name="random" value="<?php echo $random?>"/>
             <input type="text" name="numero" value=""/>
             <input type="submit" name="bottone" value="conferma"/>
             </form>
          <?php
           }
           }
           
         }
         else
         {
           $random = rand(1,20);
           $count=0;
          ?>
             <form action="" method="post">
             <input type="hidden" name="count" value="<?php echo $count?>"/>
             <input type="hidden" name="random" value="<?php echo $random?>"/>
             <input type="text" name="numero" value=""/>
             <input type="submit" name="bottone" value="conferma"/>
             </form>
          <?php
         }
         
         
    ?>
    
    
  </body>
</html>