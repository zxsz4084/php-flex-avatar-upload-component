<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
    <head>
        <title>flash头像制作组件--<?=$file?></title>
        <meta name="google" value="notranslate" />         
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css" media="screen"> 
            html, body  { height:100%; }
            body { margin:0; padding:0; overflow:auto; text-align:center; 
                   background-color: #ffffff; }   
            object:focus { outline:none; }
            #flashContent { display:none; }
        </style>
        
        <script language="JavaScript" type="text/javascript">
			<!--
			function getParamsFromUrl() {
			    var url, pos, parastr, para;
			    url = window.location.href;
			    pos = url.indexOf("?");
			    if (pos > -1) {
			    	parastr = url.substring(pos + 1);
			    } else {
			    	parastr = "";
			    }
			    return parastr;
			}
			
			function reload() {
				window.location.reload();
			}
			
			function getUploadUrl() {
				return "<?=WEB_URI?>/upload_avatar.php";
			}
			
			function uploadSuccessHandler(callbackMsg) {				
				alert("上传成功，回调方法请写在这里");
				window.location.reload();
				//alert(callbackMsg);
			}
			
			function uploadFailHandler(callbackMsg) {				
				alert("上传失败，回调方法请写在这里");
				//alert(callbackMsg);
			}
			
			//大头像：宽
			function getBigAvatarWidth() {				
				return 110;
			}
			
			//大头像：高
			function getBigAvatarHeight() {				
				return 130;
			}
			
			//中头像：宽
			function getMiddleAvatarWidth() {				
				return 75;
			}
			
			//中头像：高
			function getMiddleAvatarHeight() {				
				return 89;
			}
			
			//小头像：宽
			function getLittleAvatarWidth() {				
				return 50;
			}
			
			//小头像：高
			function getLittleAvatarHeight() {				
				return 59;
			}
			
			//裁剪框：宽
			function getCutRectWidth() {				
				return 110;
			}
			
			//裁剪框：高
			function getCutRectHeight() {				
				return 130;
			}
			
			//截取框是否可缩放
			function getCutRectScalable() {				
				return "true";
			}
			
			//设置头像背景颜色
			function getAvatarBgColor() {				
				return "0xff0000";
			}

			//设置头像背景图片 会覆盖背景色
			function getAvatarBgImage() {				
				return "<?=WEB_URI?>/resource/images/avatar_bg_demo.jpg";
			}
			// -->
		</script>
        
        <!-- Enable Browser History by replacing useBrowserHistory tokens with two hyphens -->
        <!-- BEGIN Browser History required section -->
        <!-- link rel="stylesheet" type="text/css" href="history/history.css" /-->
        <!-- script type="text/javascript" src="history/history.js"></script-->
        <!-- END Browser History required section -->  
            
        <script type="text/javascript" src="/resource/js/swfobject.js"></script>
        <script type="text/javascript">
            // For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. 
            var swfVersionStr = "10.2.0";
            // To use express install, set to playerProductInstall.swf, otherwise the empty string. 
            var xiSwfUrlStr = "/resource/flash/playerProductInstall.swf";
            var flashvars = {};
            //跨域访问策略文件
            flashvars.policy_file_url="<?=WEB_URI?>/crossdomain.xml";
            //初始化图片
            flashvars.init_image_url="<?=WEB_URI?>/resource/images/<?=$init_file?>.jpg";
            //大头像名称
            flashvars.big_avatar_name="big_avatar";
            //中头像名称
            flashvars.middle_avatar_name="middle_avatar";
            //小头像名称
            flashvars.little_avatar_name="little_avatar";
            flashvars.url_params = getParamsFromUrl();
            var params = {};
            params.quality = "high";
            params.bgcolor = "#ffffff";
            params.allowscriptaccess = "sameDomain";
            params.allowfullscreen = "true";
            var attributes = {};
            attributes.id = "avatar";
            attributes.name = "avatar";
            attributes.align = "middle";
            swfobject.embedSWF(
                "<?=WEB_URI?>/resource/flash/<?=$file?>.swf", "flashContent", 
                "650", "500", 
                swfVersionStr, xiSwfUrlStr, 
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
            swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        </script>
    </head>
    <body>
        <!-- SWFObject's dynamic embed method replaces this alternative HTML content with Flash content when enough 
             JavaScript and Flash plug-in support is available. The div is initially hidden so that it doesn't show
             when JavaScript is disabled.
        -->
        <table width="100%" border="0" cellPadding="0" cellSpacing="0">
        	<tr height="30">
        		<td width="200" align="right"><font size="2">组件名称：</font></td>
        		<td align="left">
        			<font size="2">
		        	（一）.<a href="?">flash头像上传件</a>&nbsp;&nbsp;&nbsp;
		        	（二）.<a href="?style=mblog">仿微博头像上传</a>&nbsp;&nbsp;&nbsp;
		    		</font>
        		</td>
        	</tr>
        	
        	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        	<tr>
        		<td width="200" align="right"><font size="2">组件示例：</font></td>
        		<td align="left">
        			<div id="flashContent">
			            <p>
			                To view this page ensure that Adobe Flash Player version 
			                10.2.0 or greater is installed. 
			            </p>
			            <script type="text/javascript"> 
			                var pageHost = ((document.location.protocol == "https:") ? "https://" : "http://"); 
			                document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
			                                + pageHost + "wwwimages.adobe.com/www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
			            </script> 
			        </div>
        		</td>
        	</tr>
        </table>
        
        <div>
        	<img src="/upload/big_avatar.jpg" alt="" />
        	<img src="/upload/middle_avatar.jpg" alt="" />
        	<img src="/upload/little_avatar.jpg" alt="" />
        </div>
        
        <noscript>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="650" height="500" id="<?=$file?>">
                <param name="movie" value="<?=WEB_URI?>/resource/flash/<?=$file?>.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <param name="allowScriptAccess" value="sameDomain" />
                <param name="allowFullScreen" value="true" />
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="<?=WEB_URI?>/resource/flash/<?=$file?>.swf" width="600" height="360">
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <param name="allowScriptAccess" value="sameDomain" />
                    <param name="allowFullScreen" value="true" />
                <!--<![endif]-->
                <!--[if gte IE 6]>-->
                    <p> 
                        Either scripts and active content are not permitted to run or Adobe Flash Player version
                        10.2.0 or greater is not installed.
                    </p>
                <!--<![endif]-->
                    <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://wwwimages.adobe.com/www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
                    </a>
                <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </noscript>     
   </body>
</html>
