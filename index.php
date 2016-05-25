<?php
$search_term = "";
if (isset($_GET["s"])) {
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		require_once('inc/beers.php');
		$beers = get_beers_search($search_term);
	}
}
include('inc/header.php'); 
?>

	<form method="GET" action="index.php">
		<input id="search" name="s" type="textarea" value="<?php echo htmlspecialchars($search_term); ?>" placeholder="Beer Style">
	</form>			

	<?php if ($search_term != "") {
		if (!empty($beers)) {
			echo '<div class="wrapper reply">';
			foreach ($beers as $beer) {
			echo get_description_view_html($beer);
			}
		}   
		else {
				echo '<p>No beers were found.</p>';
			}
			echo '</div>';
	}
	?>
		</div>
	</div>
</div>

<!-- <footer>
		<div class="foot-wrap">
			<p>&copy; <?php echo date('Y'); ?> <a target="_blank" href="http://mogck.co">Mogck Digital Partners</a> Created in South Minneapolis.</p>
		</div>
</footer> -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53725511-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>