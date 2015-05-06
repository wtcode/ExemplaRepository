 <!--Carrossel-->
        <script type="text/javascript" src="js/jcarousel/lib/jquery.jcarousel.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('img').each(function(){
                    $(this).attr('src', $(this).attr('delayedsrc'));
                });
                $('#mycarousel').jcarousel({
                    visible: 6,
                    auto: 2,
                    wrap: 'last',
                    initCallback: mycarousel_initCallback
                });
            });
            $(window).load(function () {
                //document.getElementById('ctl00_placeBanner').style.display='';
                //document.getElementById('ctl00_placeFornecedores').style.display='';
            });
        </script>
        <script type='text/javascript'>
            function mycarousel_initCallback(carousel) {
                // Disable autoscrolling if the user clicks the prev or next button.
                carousel.buttonNext.bind('click', function () {
                    carousel.startAuto(0);
                });

                carousel.buttonPrev.bind('click', function () {
                    carousel.startAuto(0);
                });

                // Pause autoscrolling if the user moves with the cursor over the clip.
                carousel.clip.hover(function () {
                    carousel.stopAuto();
                }, function () {
                    carousel.startAuto();
                });
            };
        </script>
        
        <link rel="stylesheet" type="text/css" href="js/jcarousel/skins/tango/skin.css" />
        <style type="text/css">
.mouse_5 {
	font-family: Arial;	
	font-size: 15px;
	color: #16A6C1;
}
.mouse_5:link {
	text-decoration: none;
}
.mouse_5:visited {
	text-decoration: none;	
	color: #16A6C1;
}
.mouse_5:hover {
	text-decoration: none;
	color: #006A34;
}
.mouse_5:active {
	text-decoration: none;	
	color: #16A6C1;
}

            .jcarousel-skin-tango .jcarousel-container-horizontal {
                width: 950px;
				margin-left:17px;
            }

            .jcarousel-skin-tango .jcarousel-clip-horizontal {
                width: 100%;
            }
            
        </style>

        <style type="text/css">
        .button
{
    
    text-decoration: none;
    font: bold 12px Arial ,Verdana,'Trebuchet MS', Helvetica; /*Change the em value to scale the button*/
    display: inline-block;
    text-align: center;
    color: #fff;
    
    border: 1px solid #9c9c9c; /* Fallback style */
    border: 1px solid rgba(0, 0, 0, 0.3);            
    
    text-shadow: 0 1px 0 rgba(0,0,0,0.4);
    
    box-shadow: 0 0 .05em rgba(0,0,0,0.4);
    -moz-box-shadow: 0 0 .05em rgba(0,0,0,0.4);
    -webkit-box-shadow: 0 0 .05em rgba(0,0,0,0.4);
    
}

.button, .button span
{
    -moz-border-radius: .3em;
    border-radius: .3em;
}

.button span
{
    border-top: 1px solid #fff; /* Fallback style */
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    display: block;
    padding: 3px 10px 4px;
    
    /* The background pattern */
    
    background-image: -webkit-gradient(linear, 0 0, 100% 100%, 100%, 100%, to(transparent)),
                      -webkit-gradient(linear, 0 100%, 100% 0, 100%, 100%, to(transparent)),
                      -webkit-gradient(linear, 0 0, 100% 100%, 100%, 100%),
                      -webkit-gradient(linear, 0 100%, 100% 0, 100%, 100%);
    background-image: -moz-linear-gradient(linear, rgba(0, 0, 0, 0.05) 25%, transparent 25%, transparent),
                      -moz-linear-gradient(-linear, rgba(0, 0, 0, 0.05) 25%, transparent 25%, transparent),
                      -moz-linear-gradient(linear, transparent 75%, rgba(0, 0, 0, 0.05) 75%),
                      -moz-linear-gradient(-linear, transparent 75%, rgba(0, 0, 0, 0.05) 75%);

    /* Pattern settings */
    
    -moz-background-size: 3px 3px;
    -webkit-background-size: 3px 3px;
    background-size: 3px 3px;            
}

.button:hover
{
    box-shadow: 0 0 .1em rgba(0,0,0,0.4);
    -moz-box-shadow: 0 0 .1em rgba(0,0,0,0.4);
    -webkit-box-shadow: 0 0 .1em rgba(0,0,0,0.4);
}

.button:active
{
    /* When pressed, move it down 1px */
    position: relative;
    top: 1px;
}


.button-padrao
{
    background: #16A6C1;
    padding:5px;
    background: -webkit-gradient(linear, left top, left bottom, from(#006A34), to(#16A6C1) );
    background: -moz-linear-gradient(-90deg, #006A34, #16A6C1);
    filter:  progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#006A34', endColorstr='#16A6C1');
}

.button-padrao:hover
{
    background: #006A34;
    background: -webkit-gradient(linear, left top, left bottom, from(#16A6C1), to(#006A34) );
    background: -moz-linear-gradient(-90deg, #16A6C1, #006A34);
    filter:  progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#16A6C1', endColorstr='#16A6C1');            
}

.button-padrao:active
{
    background: #006A34;
}
        
        </style>

<div class="divmain" style="width:1000px; font-family:Myriad Pro; font-size: 20px; color: #444444; padding-left:18px;">
        	Links
        </div>
        
        <div class="divmain" style="width:100%; background-image:url(imagens/fundoparceiros.png);">
        	
            <div class="divmain" style="width:1000px; border-top:2px solid #16A6C1; border-bottom:2px solid #16A6C1;">
            	<!--<table style="width:100%; height:87px;">
                	<tr>
                    	<td style="vertical-align:middle; text-align:center;">
                        	<img src="imagens/creaparceiro.png" />
                        </td>
                        <td style="vertical-align:middle; text-align:center;">
                        	<img src="imagens/parceiro2.png" />
                        </td>
                        <td style="vertical-align:middle; text-align:center;">
                        	<img src="imagens/parceiro3.png" />
                        </td>
                        <td style="vertical-align:middle; text-align:center;">
                        	<img src="imagens/creaparceiro.png" />
                        </td>
                        <td style="vertical-align:middle; text-align:center;">
                        	<img src="imagens/parceiro2.png" />
                        </td>
                        <td style="vertical-align:middle; text-align:center;">
                        	<img src="imagens/parceiro3.png" />
                        </td>
                    </tr>
                 </table>-->
                 
                             <!--COMEÇO CARROSEL-->
                             <div id="wrap" style="height:80px; margin-top:17px;">
                                    <ul id="mycarousel" class="jcarousel-skin-tango" style="height: 65px; line-height: 65px; vertical-align: middle;">
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/parceiro3.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/parceiro2.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/creaparceiro.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/parceiro3.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/parceiro2.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/creaparceiro.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/parceiro3.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/parceiro2.png"/></a>
                                        </li>
                                        <li style="display: block; height: 65px; line-height: 65px; vertical-align: middle;">
                                            <a href='index.php' target='_self'>
                                                <img border="0"  src="imagens/creaparceiro.png"/></a>
                                        </li>
                                    </ul>
                              </div>
                                <!--COMEÇO CARROSEL-->
            </div>
            
        </div>
