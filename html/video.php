<div id="mantis_player"></div>

<script type="text/javascript">
	var mantis = mantis || [];
	mantis.push(['video', 'load', {
		container: 'mantis_player',
		property: '<?php echo $property ?>',
		videoId: '<?php echo $id ?>'
	}]);
</script>

<script type="text/javascript" src="https://assets.mantisadnetwork.com/video/video.min.js" async></script>