<?php
defined('_JEXEC') or die;

$width = 1680;
$height = 1100;

?>

<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">

<style>
  .page-masthead .container { width: 100% !important; }
</style>


<script>
  jQuery(document).ready(function ($) {
    // Navigation beim laden ausblenden
    $( ".navbar" ).hide();


    // Navigation ein- /ausblenden
    $(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height  > 10) {
        $('.navbar').fadeIn('slow');
      } else {
        $('.navbar').fadeOut('slow');
      }
    });
  });
</script>

<script type="text/javascript" src="<?php echo JURI::base().'/templates/'.$app->getTemplate().'/js/jssor.slider.min.js'; ?>"></script>
    <!-- #region Jssor Slider Begin -->

    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              //{$Duration:1200,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 5000,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 0
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, <?php echo $width; ?>);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 50);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
            
        });

/*
	jQuery(document).ready(function ($) {	

		$("[id^='sport-']").click( function() {
			alert( 'link zu: ' + $(this).attr('id') );
		});

		$("[id^='sport-']").mouseenter( function() {
			var top = <?php echo $height * 0.5; ?>;
			var height = <?php echo $height * 0.5; ?>;
			$(this).stop().animate({height: height, top: top}, 200);
		});
       		$("[id^='sport-']").mouseleave(function() {
			var top = <?php echo $height * 0.85; ?>;
			var height = <?php echo $height * 0.15; ?>;
			$(this).stop().animate({height: height, top: top}, 200);
		});
        });
*/

    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('<?php echo JURI::base().'/templates/'.$app->getTemplate().'/images/jssor/b21.png'; ?>') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('<?php echo JURI::base().'/templates/'.$app->getTemplate().'/images/jssor/a12.png'; ?>') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>

    <div id="jssor_1" class="hml-slider" style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; visibility: hidden;">
        
	<!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo JURI::base().'/templates/'.$app->getTemplate().'/images/jssor/loading.gif'; ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>


<?php
jimport( 'joomla.application.module.helper' );
if (count(JModuleHelper::getModules('headnews'))) {
?>
        <div id="headnews" style="background: rgba(0,0,0,0.4); border-radius: 20px; color: #ffffff; position: absolute; top: 500px; left: 10%; right: 10%; z-index: 100;">
		<div class="headnews-text" style="margin: 15px;">
	
			<div class="home-head-text">Holzkirchner Marktlauf</div>
			<div class="home-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>
			<div class="go-box">
				<div class="go-text">Los geht's</div>			
			</div>
	
		</div>
	</div>
<?php
}
?>

        <div id="social" style="border-radius: 5px; position: absolute; bottom: 10px; right: 10px; z-index: 100;">
		<div class="social-icons" style="margin: 5px;">
			<a href="https://www.facebook.com/RSLC-Holzkirchen-320555464552/?fref=ts"><i class="fa fa-facebook-square fa-2x social-fb" aria-hidden="true"></i></a>&nbsp;
			<a href="https://www.youtube.com/channel/UC1QGeJ32nlJg1CG7tXbl2PA"><i class="fa fa-youtube-square fa-2x social-yt" aria-hidden="true"></i></a>
		</div>
	</div>


        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="/cms/images/stories/marktlauf/HML_head_3.JPG" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <!-- <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1"> -->
            <!-- bullet navigator item prototype -->
            <!-- <div data-u="prototype" style="width:16px;height:16px;"></div> -->
        <!-- </div> -->
        <!-- Arrow Navigator -->
        <!-- <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>  -->
        <!-- <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>  -->
        <!-- <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>  -->
    </div>



<i class="fa fa-info-circle" aria-hidden="true"></i>
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
<i class="fa fa-file-text-o" aria-hidden="true"></i>




    <!-- #endregion Jssor Slider End -->
