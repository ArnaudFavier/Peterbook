<table class='post'>
	<tr>
		<td class='top_post'>
			<h2>Welcome <?php echo $username; ?></h2>
		</td>
	</tr>
	<tr >
		<td class='bottom_post'>
			<form method="post" action="post/addPost">
				<label for="content">What's new?</label><br />
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
				<?php echo $post->USERNAMEPOST . " said: "; ?>
			</td>
		</tr>
		<tr >
			<td class='bottom_post'>
				<?php  echo $post->CONTENT; ?>
			</td>
		</tr>
	</table>
	<br />
<?php } ?>
<hr>