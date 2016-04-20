<div class="nav" style="position: absolute; top: 5vh; right: 20px; z-index: 3; width: 100%; text-align: right;">
	<div class="nav-item">
		<a href="/uploads">Uploads</a>
	</div>
	<div class="nav-item">
		<a href="/translator">Translator</a>
	</div>
	<div class="nav-item">
		<a href="/forums">Forums</a>
	</div>
	<div class="btn-log nav-item" style="text-decoration: underline;">
		Log In
	</div>
	<div class="login" style="position: absolute; right: 15px; top: 5vh; padding: 0 15px; border: 1px solid white; width: 200px; text-align: left; color: white; display: none; background-color: rgba(0,0,0,0.7);">
		<form action="" method="POST">
			<h4 style="margin: 0; margin-top: 15px; text-align: center;">Log In</h4>
			<p class="login-status" style="color: red; margin: 5px; padding: 0; text-align: center; font-size: 0.8em;"></p>
			<table cellpadding="2">
				<tr>
					<td style="width: 20px; vertical-align: bottom;">
						Username: 
					</td>
					<td style="width: 30px;">
						<input id="user" type="text" name="username" style="width: 110px;" />
					</td>
				</tr>
				<tr>
					<td style="width: 20px; vertical-align: bottom;">
						Password: 
					</td>
					<td>
						<input id="pass" type="password" name="password" style="width: 110px;" />
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input id="sub" type="button" name="submit" value="Submit" style="margin-top: 5px; width: 40%;" /><br>
						<p style="font-size: 0.8em;">Or <a style="color: #c58550" href="/register">Register Here</a>.</p>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>