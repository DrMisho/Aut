<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/JctJ7xYCruFs9QFfbrXTbcjoAZ9Q99vpxmvFlninHQ2FSRbRAJ3Va0ylntb1wPVVvnKFtXCQGMnkFKqhs5Zy4AinbM9iQ7ubpbkNJLb4u8YE5MTLfiWsQ5YCcmg2HjtF0rbKmVRa6Rjml+wd6ViHDRS8jesBJYpWfTy2mDEVTFX4b4U1IuIj9td+cQiFfOs7SgAAAKAEAACVHLNf0oaghXrGmmdACqT/S1R2z8eHsmhf1zF5UrORsv4ydYzNVsdOHxOiQavV0tJ9zzevuXgPOgnAo78ZB+6qAfsoeH3WpqqgxaZ0LIGycMcJTM2tB35u6bD9EqDsrUZ+5S9XxRjgmxJAF+4QwlPkif5AVJDVsPvctCqckyt3UvbUNX8pT2BJ0O42nU06sNOUc2ih7ZW/ZA2mlcwK08JNIzec4nwcG+8+bc9OgkfOE6y/EA38CfJl07QQs2hbJvvlODwhAoNbi3M61uDkwm7sgDKaOtyqRFAcSzfONhHIxBgi/2FJ74qEFEQDix0RTpD7ySBA1UvkE2KMNZfqAjFmyuNJFth5SHZEsCmYoKvX1o5FfLcosUUXdELhImxB643bbELk7NxWk6mw8YR7nnd5o8VrtEJisMysuTnEvJcIVrZtF9OwPx+ImX9w+45aAbRHb857S9IfCwhklDN/QLWBwBhRLE29NiGObbn93xHafOxWvbaH1oPt13A8ryjObcx6YsSIukho8GRwpUy+j8vHt2BgPJ2YCIyltOHjGnQBod1e0Hn6IZeJ02SUbD2z44KDDcrzPeq/GU5235+O33x9NqoUsvvM3x6jNCCrZkQoZZnIKInvMMQ9jgGgSIYP7Nxg6IrMY1BkLnOqptqyZknYOnDlkJl8SQeeLwBbmDBXFeQMo0K6iTCcrQ7ODgfFj+MJ0DAK5fulLhFpQ/UTAhpLCg4z2TYHAarHpUtp6h6rBWFN1LINiPnxt2mUE+6Hlg26W2NK/9kb1QDs8+mxUC4dCXn84fDX4IUHvMVkb78FGod3kf+QPT+2z6CVNk9hoUpd5TBtlC5iPpv/Y9wFFXs7P9EaIt8lW2d14RROxl75PJIi1Qd/A4rpuVpBf69eGtv/F8UU5SObVPOzaEuGQNMcodmIiCvw1S9JATZEhXCtAnYWJ5xw5P/elqXrE951jlBl02JDj8joOmW1OnjgDbdH8LyIx54WC74uiuVcUkKRsP1/Qo3k1OCztUMhBy6vm6mzwAUv0cZ+xArU0fZk+Rnb7UsIYLV60krqhIAqX793AkuGXbceKgqm2aanSzOTzWa4GxJTJ3TEOuf5k3YomXCmclQZDh0ShxYpdnFUf4XBk6jpFkgRnuGpUhjAhItN6St/efpdKVXKCpO7KF/anxx9DTzsuOZyiMnaDHQOv+c8lSuQwnZAs/nQA8bRvLa8YMbI6o301dZVMetaONpbp6t9HvBp7xVzNrat6suVztywZAeSlhGfzi4HUOi2sjblUTklHOS+mlwpvHtDK8w/Q9za/soCtjv4W9S8Jn2x+lUyIGZtOFaRYGF5Uaiq/WYIPHlV9niIfYNG2jbinoTfv0pj6SsL+P1vt876Sje/KIuSUDkWnYiBohygy4fYknUn+WckOZxf3SfN84XGqTXyxrBAyMJstE0evKuaVx6AITKHvDgK9vr4y13oRj3qVv/tjsNquCh89/C0xocuqWxbTKIZW8jafpMKY3iib/OH3axpKVzhuu3X4UbwukCvBpG+oIdVKvo7AmJwqXS4MLeEYY8uD0Ncmn57MCwhGZuRarhj+AAAAAA=');
