<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAFgDAAASDpolaAQjTKO36nP1JLGxXevcKI/eKp8FRLT5skYEw3AB2tpoubqsrRVpCGDOfPAyQ72xPYGgIYpya+Kr3VLP/Om5cSpran8AjHrt86rSx41jpMUc1FK4I8tjcbdgYiQZxLPOLxjbsucQLHcju+4kHW1qATF9MCcPGVLUSp/2Y/HS0SB1cFlGRVZZ76wXUBapFvXj3wXTUI0zZh+D0ifV+gh+y67GcVZRo9tVhmBkaNU6MMqazrEJ1syjhVe54QAmPbCYvqD8RCWRp41hPo4L1zhTyVr4Mo2xr8gDCJsKxsLdNQNHEJX0senM45KRdDas3IHRj/HaezN2mbTqNandk0ScAAY9RWYDdWyt62J/Hlgooik7L7BdMnrKvAy2+3BY6y1d+eYlkUH5klBwgHnRcShJi7oKMDU0HTs0KICIPXoKuLrT71jrUDvqYeBMjum4xG8P773dkQPJqSV94+c1JeOSZoCW5bt2FguEFUa4WwPUK62NysM3rYGiBY1Cp3VWDFKWgWu9C0ZSipdIAeswrJNARKgfwsoJoklOch5XBg7O9+SyCdA+I2w3tH9wQnxJoP7ri9vNEkfEw9LyU4xUMC100ahrGtRDNVMQozd0cKYQbT+/B9Vn/Ertyj1IAI5ZgJ3MK6nhLgdKKuHJp08P1DVoXco+E8tg2g6H1av8Qdvpsna8tVG1cMxYo+7omZJmvqxqgiMKNESTZg1Hzc8jxGb52+tHIobHGS7ksx/ySaojTSvDum0z2lOHsj+5OzLIWHGnwxPPVSZz5HfIQ/7yGRJUuk2XUFHdO1DiAG/SdXMBN2MHKmOXvW941UiivpK6PzsmYdsf57n2nnm00+9v7ZXpwlZxe4yugOH4e0GO1OQmkQ2d+1SNokgo/n0FRiqphoelM7G7x8U2/3msn4W3E3AZ1xw13ogqSspiK83/CxqWrPhLP3MXslcwTgbR21VxYHabq0aY+ir4vlQxxCbpIUEg3D7XzED9ICOBGCVCoS1WKcniPF4AXHwo/0s6xOoQ4dSAhsynPvhAzBvcyw3MAYXlwr+h6asExiVZMar3l0xtXG94oUvIvML1HLXMjGGYy6im0QbvK7Y7HmfCGgOADnsMY/XOAHn3ANzAEGjUM7rVMlbIdqn3AAAAAA==');
