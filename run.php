<?php 

include "head.php"; 

$GLOBALS["page"] = 'run';

?>

<main class="mdl-layout mdl-cell">
    <div class="mdl-cell ">
    	
    	<div class="mdl-card mdl-shadow--2dp">
    	  <div class="mdl-card__title">
    	    <h2 class="mdl-card__title-text">Tu amigo es:</h2>
    	  </div>
    	  <div class="mdl-card__supporting-text">


    	    <script type="text/javascript">
    	    	
    	    	<?php 
    	    		echo $_POST['code'];
    	    	?>

    	    </script>


    	  </div>
    	</div>
    </div>
  </main>


<?php include "footer.php"; ?>