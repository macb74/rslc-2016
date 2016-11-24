<?php

$width = 1120 * 1.5;
$height = 630 * 1.5;

?>
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

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; overflow: hidden; visibility: hidden;">
        
	<!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo JURI::base().'/templates/'.$app->getTemplate().'/images/jssor/loading.gif'; ?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>


<?php

	$sport[0]['image'] = "Running_100.png";
	$sport[0]['link'] = "Running_100.png";
	$sport[0]['name'] = "Laufen";

	$sport[1]['image'] = "Cycling_Mountain_Bike_100.png";
	$sport[1]['link'] = "Running_100.png";
	$sport[1]['name'] = "Radsport";

	$sport[2]['image'] = "Medal_First_Place_100.png";
	$sport[2]['link'] = "Running_100.png";
	$sport[2]['name'] = "Marktlauf";

	$sport[3]['image'] = "Running_100.png";
	$sport[3]['link'] = "Running_100.png";
	$sport[3]['name'] = "Fit in den Frühling";

	$sport[4]['image'] = "Advertising_100.png";
	$sport[4]['link'] = "Running_100.png";
	$sport[4]['name'] = "Neues";

	$sport[5]['image'] = "Tricycle_100.png";
	$sport[5]['link'] = "Running_100.png";
	$sport[5]['name'] = "Kinderradschule";


	$i = 0;
	while( $i < 6 ) {
?>
        <div id="sport-<?php echo $i; ?>" style="color: #ffffff; position: absolute; width: <?php echo $width / 5 ?>px; height: <?php echo $height * 0.20; ?>px; top: <?php echo $height * 0.80; ?>px; left: <?php echo ($width / 5) * $i; ?>px; border-radius: 0px; z-index: 100;">

		<div style="margin: 15px; text-align: center;">
			<img data-u="image" src="<?php echo JURI::base().'/templates/'.$app->getTemplate().'/images/'.$sport[$i]['image']; ?>" />
			<p class="slider-text" style="font-size: 30px; color: #ffffff; margin-top: 10px;"><?php echo $sport[$i]['name'] ?></p>
		</div>
	</div>
<?php
		$i++;
	}
?>


        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="/cms/images/stories/header-1.jpg" />
            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="/cms/images/stories/header-2.jpg" />

            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="/cms/images/stories/header-3.jpg" />
            </div>

            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="/cms/images/stories/header-4.jpg" />
            </div>

        </div>
        <!-- Bullet Navigator -->
        <!-- <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1"> -->
            <!-- bullet navigator item prototype -->
            <!-- <div data-u="prototype" style="width:16px;height:16px;"></div> -->
        <!-- </div> -->
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>



    <!-- #endregion Jssor Slider End -->
