  <body>
    <?php
      session_start();
      $_SESSION['bhs']=$a;
    ?>
    <script language="JavaScript" type="text/javascript">
      <!--
      function MM_jumpMenu(targ,selObj,restore){//v3.0
        eval(targ+".location="'+selObj.option[selObj.selectedIndex].value+'"");
        if (restore) selObj.selectedIndex=0;
      }
      //-->
    </script>
    <form name="form" method="post" action="?bhs=">
      Pilih Bahasa :
      <select name="menu" onChange="MM_jumpMenu('parent',this,0)">
        <?php
          if (($_GET['bhs']=="indonesia") || (empty($_GET['bhs']))) {
        ?>
        <option value="?bhs=indonesia" selected>Indonesia</option>
        <option value="?bhs-djawa">Djawa</option>
        <?php
          } else {
        ?>
              <option value="?bhs=indonesia">Indonesia</option>
              <option value="?bhs-djawa" selected>Djawa</option>
      <?php
        } // end else
      ?>
      </select>
    </form>
    <p>
    <?php
      if ($_GET['bhs']=="djawa"){
        $a = include "language/djawa.php";
      }else if ($_GET['bhs']=="indonesian"){
        $a = include "language/indonesian.php";
      }else {
        $a = include "language/indonesian.php";
      }
      echo "$language $welcome <br>$question<br>$home";
    ?>
  </body>
</html>
