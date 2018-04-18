<style>
.what_get_mc{width:1020px;margin:20px auto 0;}
.what_feature{width:310px;text-align:center;font-family:Muli-regular;font-size:14px;margin:0px 20px 20px;color:#5C5C5C;}
.what_feature h4{font-size:18px;color:#333;margin:15px 0;font-weight:bold}

</style>
<div>
	<div class="what_feature fl wt_fl_320">
	    <img  src="<?php echo HTTP_ROOT; ?>img/ftr_1.png?v=<?php echo RELEASE; ?>" alt="" width="66px" height="62px" /><br/>
	<h4>Easy Import &amp; Export</h4>
	Import your data from any other application.<br/>Leave whenever you want with just a simple click to download all your data.
	</div>
	
	<div class="what_feature fl wt_fl_320">
	<img  src="<?php echo HTTP_ROOT; ?>img/ftr_2.png?v=<?php echo RELEASE; ?>" alt="" width="68px" height="66px" /><br/>
	<h4>Fast &amp; Secure </h4>
	We believe in faster response time.<br/> With our Advanced SSL, we provide communication security over the Internet.
	</div>
	
	<div class="what_feature fl wt_fl_320">
	There will be no nasty surprises.<br/>In case of any ceased activity, COMPANY_NAME will be released as open-source for our customers.
	</div>
</div>
<div class="cb"></div>
<script>
function opensource_ga(){
		console.log('Opensource Warranty');
	  <?php if(stristr($_SERVER['SERVER_NAME'],"COMPANY_NAME.com")){?>
			
			_gaq.push(['_trackEvent', 'Opensource', 'Warranty', 'Opensource Warranty']);
	  <?php } ?>	
	return true;
}
</script>