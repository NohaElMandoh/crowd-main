
    
    <div class="footer_New">
        
        <div class="elementor-shape elementor-shape-top" data-negative="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path></svg></div>
        <div class="container">
            <div class="Footer_Contetnt">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="Img_Logo">
                            <div class="image">
                                <img src="{{asset('front/images/img/Asset-1-1.png')}}">
                            </div>
                            <div class="dis">
                                <p>A hub giving global investors access to a personalized and vetted pipeline of #ConsciousTech deals in emerging markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Footer_Item">
                            <h2>CONTACT</h2>
                           <p>hello@skaleupventures.com<br>649 Mission St, 5th Floor,<br>San Francisco, CA 94105</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="Footer_Item">
                            <h2>POWERED BY</h2>
                           <p>Democratizing capital to fuel global sustainable change by making it accessible for anyone, anywhere to invest in #ConsciousTech startups.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


</div>

<script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('front/styles/bootstrap4/bootstrap.min.js')}}"></script>




<script src="{{asset('front/js/easing.js')}}"></script>
<!-- here stars scrolling icon -->
	<script type="text/javascript" src="{{asset('front/js/move-top.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
    <script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
    	<script src="{{asset('front/js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
    
<script src="{{asset('front/js/SmoothScroll.min.js')}}"></script>
        <script src="{{asset('front/js/wow.min.js')}}"></script>
        <script>new WOW().init();</script>