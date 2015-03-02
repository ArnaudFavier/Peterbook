<div class="inscription_page">
	<?php echo form_error('username') ?><?php echo form_error('password') ?>
	<table>
		<tr>
			<td>
				<div class="inscription_main_text">
					Peterbook allows you to keep in touch with your friends even if you're as sick as Florian Le Brech.
				</div>
				<img src="assets/img/world.png" alt="world image">
			</td>
			<td>
				<form class="subscribe" method="post" action="subscription/">
				<table>
					<tr>
						<td colspan="2" class='subscribe'>Subscribe</td>
					</tr>
					<tr>
						<td colspan="2" class='free'>It's free (except for Corentin Marechal)</td>
					</tr>
					<tr>					
						<td width='199'><input type='text' class='subscribe_input_name' placeholder='First name' name='firstname'></input></td>
						<td><input type='text' class='subscribe_input_name' placeholder='Last name' name='lastname'></input></td>
					</tr>
					<tr>
						<td colspan="2"><input type='text' class='subscribe_input' placeholder='Email' name='email'></input></td>
					</tr>
					<tr>
						<td colspan="2"><input type='text' class='subscribe_input' placeholder='Confirm your email' name='email2'></input></td>
					</tr>
					<tr>
						<td colspan="2"><input type='password' class='subscribe_input' placeholder='Password' name='password'></input></td>
					</tr>
					<tr class='prevention'>
						<td colspan="2" class='prevention'>By clicking on Subscribe, you accept our cookie's utilisation, to give your soul to Satan, and many other condition.</td>
					</tr>
					<tr>
						<td colspan="2"><input type='submit' class='subscribe_button'></input></td>
					</tr>
				</table>
				</form>
			</td>
		</tr>
	</table>
</div>