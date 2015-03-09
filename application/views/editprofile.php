<div class="center_div">
	<h2 class ='subscribe'>Edit your profile</h2>
	
	<form class='editprofile' method='post' action='editprofile/'>
		<table>
			<tr>
				<td><img class='picture' src='assets/img/photo.jpg' alt='photo de profil'/></td>
				<td class='center free'>
					Change your profile picture</br>
					<input type='file' name='picture' src='assets/img/photo.jpg' accept='image/*'></input>
				</td>	
			</tr>
			<tr>
				<td class='humor free' colspan='2'>
					Edit your humor message : 
					<input type='text' class='subscribe_input' placeholder=<?php echo $description;?> name='description'>
				</td>	
			</tr>
		</table>
	
		<input type='submit' class='subscribe_button' value='Submit'/>
	
	</form>
</div>