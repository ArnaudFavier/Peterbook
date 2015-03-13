<div class="center_div">
	<h2>Edit your profile</h2>
		<?php echo form_open_multipart('editprofile/');?>
		<table>
			<tr>
				<td><img class="picture" src="assets/img/upload/<?php echo $picture; ?>" alt="Profile picture"/></td>
				<td class="center free">
					Change your profile picture</br>
					<input type="file" name="userfile" src="assets/img/photo.jpg" size="20"></input>
				</td>
			</tr> 
			<tr>
				<td class="humor free" colspan="2">
					Edit your humor message: 
					<input type="text" class="subscribe_input" placeholder="<?php echo $description;?>" name="description">
				</td>	
			</tr>
		</table>
	
		<input type="submit" class="subscribe_button" value="Submit"/>
	
	</form>
</div>