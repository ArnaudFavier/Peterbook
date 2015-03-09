<p class="form_error"><?php echo $errors; ?></p>
<table class='post'>
	<tr>
		<td class='top_post'>
			<h2>What's new, <?php echo $firstname . " " . $lastname; ?>?</h2>
		</td>
	</tr>
	<tr >
		<td class='bottom_post'>
			<form method="post" action="post/addPost">
				<textarea name="content" id="content"></textarea><br />
				<input class ="button" type="submit" value="Post" />
			</form>	
		</td>
	</tr>
</table>
<br />
<?php foreach($allPosts as $numPost => $post) { ?>
	<table class='post'>
		<tr>
			<td class='top_post'>
				<?php if(!empty($post->picture))
					{
						echo '<img src="assets/img/upload/' . $post->picture . '" height="50" width="50">';
					}
					else
					{
					 	echo '<img src="assets/img/photo.jpg" height="50" width="50">';
					} ?>
				<?php echo $post->firstname . ' ' . $post->lastname . " said: (" . date("j F Y H:i",$post->date) . ")"; ?>
			</td>
		</tr>
		<tr >
			<td class='bottom_post'>
				<?php  
					$message = $post->content;
					
					$smiley = array("O:)",">:O",":D","☺","o.O",":'(",":3","3:)",":(",">:(","<3","^_^",":*",":v",":)","-_-",":O",":P",":/",";)",":sick:",":work:");
					$image = array(
						"<img src=\"assets/img/smiley/angel.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/angry.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/bigsmile.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/blush.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/confused.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/cry.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/curlylips.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/devil.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/frown.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/grumpy.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/heart.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/kiki.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/kiss.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/pacman.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/smile.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/squinting.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/surprised.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/tongue.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/unsure.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/wink.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/lebrech.png\" alt=\"smiley\"/>",
						"<img src=\"assets/img/smiley/work.png\" alt=\"smiley\"/>",
					);
					
					$message = str_replace($smiley,$image,$message);
					echo $message;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php if(!empty($post->description)){echo "<hr>- " . $post->description;} ?>
			</td>
		</tr>
	</table>
	<br />
<?php } ?>