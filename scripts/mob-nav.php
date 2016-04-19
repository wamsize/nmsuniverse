<div class="ham" style="width: 30px; height: 30px; position: absolute; top: 5vh; left: 5vh; z-index: 11;">
	<div id="ham">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<div class="mob-cover" style="width: 100%; height: 100%; position: absolute; z-index: 5; background-color: rgba(0,0,0,0.4); display: none;"></div>
<div class="sidebar" style="position: absolute; left: -50%; padding: 20px 0; width: 50%; z-index: 10; background: black; height: calc(100% - 40px); max-height: 100vh; overflow: none;">
	<a href=""><img src="img/nmsu_white.png" style="width: 30%; margin-left: 35%;"></a>
	<div class="tab">Uploads</div>
	<div class="tab">Translator</div>
	<div class="tab">Forums</div>
	<div class="mob-login" style="padding: 0; margin: 10px 10%; border: 1px solid white; width: 80%; text-align: center; color: white; background-color: rgba(0,0,0,0.2);">
		<form action="" method="POST">
			<h4 style="margin: 0; margin-top: 15px; text-align: center;">Log In</h4>
			<p class="login-status-mob" style="color: red; margin: 5px; padding: 0; text-align: center; font-size: 0.8em;"></p>
			<table cellpadding="2">
				<tr>
					<td style="width: 20px; max-width: 50%;">
						<input id="user-mob" type="text" id="user" name="username" style="width: 110px; max-width: 100%;" placeholder="Username" />
					</td>
				</tr>
				<tr>
					<td>
						<input id="pass-mob" type="password" name="password" style="width: 110px;" placeholder="Password" />
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input id="sub-mob" type="button" name="submit" value="Submit" style="margin-top: 5px; width: 40%;" /><br>
						<p style="font-size: 0.8em;">Or <a style="color: #c58550" href="/register">Register Here</a>.</p>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>