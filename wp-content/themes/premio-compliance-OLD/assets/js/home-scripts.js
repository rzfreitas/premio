jQuery(document).ready(function(){
	var d = new Date();
	d.setTime(1537289700*1000); // from: 09/18/2018 01:55 pm -0300
	jQuery('.clock-builder-small-output').countdown(d, function(event) {
		jQuery(this).html(event.strftime('%D dias e %H :%M :%S'));
	});
});

jQuery(function(){
	FlipClock.Lang.Custom = { days:'Days', hours:'Hours', minutes:'Minutes', seconds:'Seconds' };
	var opts = {
		clockFace: 'DailyCounter',
		countdown: true,
		language: 'Custom'
	};  
	var countdown = 1510153200 - ((new Date().getTime())/1000); // from: 11/08/2017 12:00 pm -0300
	countdown = Math.max(1, countdown);
	jQuery('.clock-builder-output').FlipClock(countdown, opts);
});