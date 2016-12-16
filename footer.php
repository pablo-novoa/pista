<?php  
global $page;

switch ($page) {
	case 'home':
		$iconButton = 'navigate_next';
		$linkButton = 'editor.php';
		break;
	
	case 'editor':
		$iconButton = 'play_arrow';
		$linkButton = 'run.php';
		break;
	
	case 'run':
		$iconButton = 'navigate_before';
		$linkButton = 'editor.php';
		break;

	default:
		$iconButton = 'navigate_next';
		$linkButton = 'editor.php';
		break;
}

?>


	<footer class="mdl-mega-footer mdl-layout__header--transparent" style="text-align: right;">
		<a href="<?= $linkButton;  ?>" class="buttonNav_<?= $page; ?>">
			<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
			  <i class="material-icons"><?= $iconButton; ?></i>
			</button>
		</a>
	</footer>

</div>


<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js"></script>
<script src="scripts.js" type="text/javascript"></script>

</body>
</html>