<style>
/* HOTLINE */
.phonering-alo-phone {position:fixed;visibility:hidden;background-color:transparent;width:200px;height:200px;
 cursor:pointer;z-index:200000!important;right:150px;bottom:-50px;left:-50px;display:block;
 -webkit-backface-visibility:hidden;
 -webkit-transform:translateZ(0);
 transition:visibility .5s;
}
.phonering-alo-phone.phonering-alo-show {visibility:visible}
.phonering-alo-phone.phonering-alo-static {opacity:.6}
.phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {opacity:1}
.phonering-alo-ph-circle {width:160px;height:160px;top:20px;left:20px;position:absolute;
 background-color:transparent;border-radius:100%;border:2px solid rgba(30,30,30,0.4);
 opacity:.1;
 -webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
 animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
 transition:all .5s;
 -webkit-transform-origin:50% 50%;
 -ms-transform-origin:50% 50%;
 transform-origin:50% 50%
}
.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {
    -webkit-animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important;
    animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important
}
.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
    -webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;
    animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important
}
.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {
    border-color:#00aff2;
    opacity:.5
}
.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
    border-color:#272d6b;
    opacity:.5
}
.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
    border-color:#00aff2;
    opacity:.5
}
.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
    border-color:#ccc;
    opacity:.5
}
.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
    border-color:#75eb50;
    opacity:.5
}
.phonering-alo-ph-circle-fill {width:100px;height:100px;top:50px;left:50px;position:absolute;background-color:#000;
 border-radius:100%;border:2px solid transparent;
 -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
 animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
 transition:all .5s;
 -webkit-transform-origin:50% 50%;
 -ms-transform-origin:50% 50%;
 transform-origin:50% 50%
}
.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {
    -webkit-animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important;
    animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important
}
.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {
    -webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
    animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
    opacity:0!important
}
.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
    background-color:rgba(39,45,107,0.5);
    opacity:.75!important
}
.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
    background-color:rgba(39,45,107,0.5);
    opacity:.75!important
}
.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {
    background-color:rgba(0,175,242,0.5);
}
.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {
    background-color:rgba(204,204,204,0.5);
    opacity:.75!important
}
.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {
    background-color:rgba(117,235,80,0.5);
    opacity:.75!important
}
.phonering-alo-ph-img-circle {
    width:60px;
    height:60px;
    top:70px;
    left:70px;
    position:absolute;
    background:rgba(30,30,30,0.1) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==) no-repeat center center;
    border-radius:100%;
    border:2px solid transparent;
    -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
    animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin:50% 50%;
    -ms-transform-origin:50% 50%;
    transform-origin:50% 50%
}

.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
    -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;
    animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important
}

.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
    -webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;
    animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important
}

.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone:hover .phonering-alo-ph-img-circle {
    background-color:#00aff2;
}

.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
    background-color:#272d6b;
}

.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
    background-color:#00aff2;
}

.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {
    background-color:#ccc;
}

.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
    background-color:#75eb50
}

@-webkit-keyframes phonering-alo-circle-anim {
    0% {
        -webkit-transform:rotate(0) scale(.5) skew(1deg);
        -webkit-opacity:.1
    }

    30% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
        -webkit-opacity:.5
    }

    100% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
        -webkit-opacity:.1
    }
}

@-webkit-keyframes phonering-alo-circle-fill-anim {
    0% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
        opacity:.2
    }

    50% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
        opacity:.2
    }

    100% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
        opacity:.2
    }
}

@-webkit-keyframes phonering-alo-circle-img-anim {
    0% {
        -webkit-transform:rotate(0) scale(1) skew(1deg)
    }

    10% {
        -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
    }

    20% {
        -webkit-transform:rotate(25deg) scale(1) skew(1deg)
    }

    30% {
        -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
    }

    40% {
        -webkit-transform:rotate(25deg) scale(1) skew(1deg)
    }

    50% {
        -webkit-transform:rotate(0) scale(1) skew(1deg)
    }

    100% {
        -webkit-transform:rotate(0) scale(1) skew(1deg)
    }
}

@-webkit-keyframes phonering-alo-circle-anim {
    0% {
        -webkit-transform:rotate(0) scale(.5) skew(1deg);
                transform:rotate(0) scale(.5) skew(1deg);
        opacity:.1
    }

    30% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
        opacity:.5
    }

    100% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
        opacity:.1
    }
}

@keyframes phonering-alo-circle-anim {
    0% {
        -webkit-transform:rotate(0) scale(.5) skew(1deg);
                transform:rotate(0) scale(.5) skew(1deg);
        opacity:.1
    }

    30% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
        opacity:.5
    }

    100% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
        opacity:.1
    }
}

@-webkit-keyframes phonering-alo-circle-fill-anim {
    0% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
        opacity:.2
    }

    50% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
        opacity:.2
    }

    100% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
        opacity:.2
    }
}

@keyframes phonering-alo-circle-fill-anim {
    0% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
        opacity:.2
    }

    50% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
        opacity:.2
    }

    100% {
        -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
        opacity:.2
    }
}

@-webkit-keyframes phonering-alo-circle-img-anim {
    0% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
    }

    10% {
        -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
    }

    20% {
        -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
    }

    30% {
        -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
    }

    40% {
        -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
    }

    50% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
    }

    100% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
    }
}

@keyframes phonering-alo-circle-img-anim {
    0% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
    }

    10% {
        -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
    }

    20% {
        -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
    }

    30% {
        -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
    }

    40% {
        -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
    }

    50% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
    }

    100% {
        -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
    }
}
</style>
<div class="hotline">
    <div id="phonering-alo-phoneIcon" class="phonering-alo-phone phonering-alo-green phonering-alo-show">
        <div class="phonering-alo-ph-circle"></div>
        <div class="phonering-alo-ph-circle-fill"></div>
        <div class="phonering-alo-ph-img-circle">
            <a class="pps-btn-img " title="Liên hệ" href="tel:0978175506" onclick='return getData()'> <img src="https://3.bp.blogspot.com/-jipOkVbgvtk/WPd_CdNwOoI/AAAAAAAAEn0/iYoBqhrSHWgSGDOiEvvEzTYa-khhJt9NACLcB/s1600/v8TniL3.png" alt="Liên hệ" width="50" class="img-responsive"/> </a>
        </div>
    </div>
</div>
		<div id="fb-root"></div>
		<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=292741454733749&autoLogAppEvents=1"></script>
			<footer id="footer" class="mt-0">
				<div class="container">
					<div class="footer-ribbon">
						<span>VinaSofts</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-lg-4 mb-5 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Vina Software Solutions</h5>
							<p class="text-4 mb-3">VietNam Software Solutions (VINASS) là công ty dịch vụ chuyên cung cấp các sản phẩm, dịch vụ công nghệ, đặc biệt đưa ra những định hướng và giải pháp tối ưu công nghệ, đưa công nghệ mới cho các đối tác.</p>
						</div>
						<div class="col-lg-3 mb-4 mb-md-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Pages</h5>
							<ul class="list list-icons list-icons-sm d-inline-flex flex-column">
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/" class="link-hover-style-1 ml-1 {{ request()->is('/') ? 'active-footer' : '' }}">Trang chủ</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/gioi-thieu" class="link-hover-style-1 ml-1 {{ request()->is('gioi-thieu') ? 'active-footer' : '' }}">Giới thiệu</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/thiet-ke-web" class="link-hover-style-1 ml-1 {{ request()->is('thiet-ke-web') ? 'active-footer' : '' }}">Thiết kế web</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/ung-dung" class="link-hover-style-1 ml-1 {{ request()->is('ung-dung') ? 'active-footer' : '' }}">Ứng dụng</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/lien-he" class="link-hover-style-1 ml-1 {{ request()->is('lien-he') ? 'active-footer' : '' }}">Liên hệ</a></li>
								<li class="text-4 mb-2"><i class="fas fa-angle-right"></i><a href="/blog" class="link-hover-style-1 ml-1 {{ request()->is('blog*') ? 'active-footer' : '' }}">Blog</a></li>
							</ul>
						</div>
						<div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-left pt-3">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Địa chỉ liên hệ:</h5>
							<p class="text-4 mb-2"><span class="text-color-light">Address:</span> Tầng 2, 121 Cù Chính Lan, phường Thanh Khê - TP Đà Nẵng</p>
							<p class="text-4 mb-2"><span class="text-color-light">Phone:</span> 0978.175506</p>
							<p class="text-4 mb-2"><span class="text-color-light">Email:</span> <a href="mailto:mail@example.com">taiembkdn@gmail.com</a></p>
						</div>
					</div>
					<div class="container container-lg">
						<div class="footer-copyright footer-copyright-style-2">
							<div class="py-2">
								<div class="row py-4">
									<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
										<p>Vinass © Copyright 2018. All Rights Reserved.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script type="text/javascript">
		    function getData(){
		        $.ajax({
		          url: "{{route('ajax.admin.call')}}",
		          type: 'GET',
		          cache: false,
		          success: function(data){
		              
		          }, 
		          error: function() {
		           alert("Có lỗi");
		         }
		       }); 
		        return false;
		      }
		</script>
		<!-- Vendor -->
		<script src="/templates/vinass/vendor/jquery/jquery.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/templates/vinass/vendor/popper/umd/popper.min.js"></script>
		<script src="/templates/vinass/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/templates/vinass/vendor/common/common.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/templates/vinass/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/templates/vinass/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/templates/vinass/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/templates/vinass/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/templates/vinass/vendor/vide/jquery.vide.min.js"></script>
		<script src="/templates/vinass/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/templates/vinass/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="/templates/vinass/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="/templates/vinass/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Theme Custom -->
		<script src="/templates/vinass/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/templates/vinass/js/theme.init.js"></script>

		<!-- Demo -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
