<img src="/img/logo.gif" class="logo" alt="Thin Crust Square"/>
<img src="/img/vertical_divider.gif" class="vertical_divider" />
<img src="/img/tcs.gif" class="tcs" alt="Thin Crust Square is featured at Emma's Brick Oven Pizza on Thursday nights."/>
<img src="/img/horizontal_divider.gif" class="horizontal_divider" />

<div id="home_text">
	<span class="bold">Thin Crust Square</span> <br/>
	The perfect pairing of high quality ingredients, an authentic brick oven and the skill of a master pizza chef.
</div>

<?php
    $userid = "459528680";
    $accessToken = "459528680.9030d7e.c04eba0b160f431c9a59fce254fc52c9";
    $count = 4;

    function fetchData($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch); 

        return $result;
    }

    $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count={$count}");
    $result = json_decode($result);
?>

<div id="inst_cont">
	<div id="instagram">
		<p><span class="bold">Instagram</span> <span class="small margin_left">@thincrustsquare</span></p>
		<?php foreach ($result->data as $post): ?>
			<a class="lightbox" href="<?= $post->images->standard_resolution->url ?>"><img class="instagram" src="<?= $post->images->thumbnail->url ?>"></a>
		<?php endforeach ?>
	</div>

	<div id="contact_us">
		<p><span class="bold">Contact Us</span> <span class="small margin_left">info@thincrustsquare.com</span></p>
		<form class="form-horizontal" method="post" action="page/contact.php" id="contact_form">
			<fieldset>

			<!-- Text input-->
			<div class="control-group">
				<label class="control-label">Name</label>
				<div class="controls">
					<input id="name" name="name" type="text" placeholder="John Smith" class="input-xlarge" required="">
				</div>
			</div>

			<!-- Text input-->
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
					<input id="email" name="email" type="text" placeholder="john.smith@email.com" class="input-xlarge" required="">
				</div>
			</div>

			<!-- Textarea -->
			<div class="control-group">
				<label class="control-label">Comments</label>
				<div class="controls">                     
					<textarea id="comments" name="comments" placeholder="We'd love to hear what you think!" required=""></textarea>
				</div>
			</div>

			<label style="display:block;position:absolute;left:-9999px">
				Please leave this checkbox blank
				<input type=checkbox name=honeypot value=1>
			</label>

			<!-- Button -->
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<button id="submit" name="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>

			</fieldset>
		</form>
	</div>
	<div style="clear:both"></div>
</div>

<div id="social_media_footer">
    Follow us on:
    <a href="https://www.facebook.com/emmasbrickovenpizza"><img src="/img/facebook_icon.gif" class="social_media_icon" alt="Facebook"/></a>
    <a href="https://twitter.com/EmmasBrickOven"><img src="/img/twitter_icon.gif" class="social_media_icon" alt="Twitter"/></a>
    <a href="http://instagram.com/thincrustsquare"><img src="/img/instagram_icon.gif" class="social_media_icon" alt="Instagram"/></a>
</div>