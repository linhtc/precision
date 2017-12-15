<section class="socialBtns">
        <script>
function eventTrackingSocialMenu(action, label) {
    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        'event' : 'Social Interaction',
        'eventCategory' : 'Social Interaction',
        'eventAction' : action,
        'eventLabel': label,
        'eventValue': 0
    });
}

function mailShare()
{
    eventTrackingSocialMenu('Share', 'Mail');
    document.location.href = "mailto:info@toanthangprecision.com?subject=Fanuc.EU&body="  + document.location;
}
</script>
<ul class="ul-social">
	<li>
		<a target="_blank" href="https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ffanuc-europe">
			<img height="48" alt="LinkedIn" width="48" src="{base_url()}media/uploads/images/ico_in.png">
		</a>
	</li>
	<!--<li>
		<a target="_blank" href="https://www.facebook.com/toanthangprecision/" onclick="eventTrackingSocialMenu('Share', 'Facebook');">
			<img width="48" height="48" alt="Facebook Share" src="{base_url()}media/uploads/images/ico_FB_share.png">
		</a>
	</li>-->
	<li>
		<a target="_blank" href="https://www.facebook.com/toanthangprecision/">
			<img width="48" height="48" alt="Facebook Share" src="{base_url()}media/uploads/images/ico_FB_share.png">
		</a>
	</li>
	<li>
		<a target="_blank" href="https://www.youtube.com/watch?v=bCym01myYow">
			<img width="48" height="48" alt="YouTube" src="{base_url()}media/uploads/images/ico_yt_share.png">
		</a>
	</li>
	<li>
		<a target="_self" href="#" onclick="mailShare();">
			<img height="48" alt="Mail" width="48" src="{base_url()}media/uploads/images/ico_mail_share.png">
		</a>
	</li>
</ul>
</section>