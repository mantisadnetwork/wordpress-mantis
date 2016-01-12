<div id="mantis_player"></div>

<script type="text/javascript" data-cfasync="false">
	var MANTIS_VIDEO = {
		container: 'mantis_player',
		property: '<?php echo $property ?>',
		videoId: '<?php echo $id ?>'
	};
</script>

<script type="text/javascript" data-cfasync="false">
	var z = document.createElement("script");
	z.type = "text/javascript";
	z.async = true;
	z.src = "//assets.mantisadnetwork.com/video.min.js";
	var s = document.getElementsByTagName('head')[0];
	s.parentNode.insertBefore(z, s);
</script>