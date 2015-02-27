<h1>Welcome <?php echo $username; ?></h1>
<form method="post" action="post/addPost">

		<table class='post'>
			<tr>
				<td class='top_post'>
					zdazdazdaz
				</td>
			</tr>
			<tr >
				<td class='bottom_post'>
				azdazdzdazda
				</td>
			</tr>
		</table>

	<p>
		<label for="content">What's new?</label><br />
		<textarea name="content" id="content"></textarea><br />
		<input class ="button" type="submit" value="Post" />
	</p>
</form>
<hr>
<p>All posts from <span id="peterbookTitle">Peterbook</span>:</p>
<?php foreach($allPosts as $numPost => $post) {
	echo $post->USERNAMEPOST . " said: " . $post->CONTENT . "<br />";
} ?>