<html>
  <body>
    <?php 
         if(isset($_GET["bottone"]))
           $random=$_GET["random"];
         else{$random = rand(1,1);}
         if(isset($_GET["numero"]))
         {
            if($random==$_GET["numero"])
              echo "hai vinto";
         }
         echo ($_GET["numero"]+1)-1;
    ?>
    <h3>
      ciao
      Inserisci il Numero da Indovinare
    </h3>
    <form action="" method="get">
      <input type="hidden" name="count" value="0"/>
      <input type="hidden" name="random" value="<?php echo $random?>"/>
      <input type="text" name="numero" value=""/>
      <input type="submit" name="bottone" value="conferma"/> 
    </form>
  </body>
  
</html>