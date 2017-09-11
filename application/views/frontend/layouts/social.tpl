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
    document.location.href = "mailto:?subject=Fanuc.EU&body="  + document.location;
}
</script>
<ul>
	<li>
		<a target="_blank" href="https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ffanuc-europe" onclick="eventTrackingSocialMenu('Share', 'LinkedIn');">
			<img height="48" alt="LinkedIn" width="48" src="http://www.fanuc.eu/~/media/social-icons/ico_in.png?la=en">
		</a>
	</li>
	<li>
		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.facebook.com/pages/FANUC-Europe/844403015605689" onclick="eventTrackingSocialMenu('Share', 'Facebook');">
			<img alt="Facebook Share" src="http://www.fanuc.eu/~/media/social-icons/ico_fb_share.png?h=48&amp;w=48&amp;la=en" style="height: 48px; width: 48px;">
		</a>
	</li>
	<li>
		<a target="_blank" href="https://www.youtube.com/user/FANUCEurope" onclick="eventTrackingSocialMenu('Follow', 'YouTube');">
			<img width="48" height="48" alt="YouTube" src="http://www.fanuc.eu/~/media/social-icons/ico_yt_share.png?la=en">
		</a>
	</li>
	<li>
		<a target="_self" href="#" onclick="mailShare();">
			<img height="48" alt="Mail" width="48" src="http://www.fanuc.eu/~/media/social-icons/ico_mail_share.png?la=en">
		</a>
	</li>
</ul>
</section>