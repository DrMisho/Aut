<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFAEAABsi5PC1z6DKkaj3bxI58EoroFLzSbHpXq25WJyL9Esy4jCLtn5JeHu3jmMjMh34dXvURx0UlzCXM02eAFSBbmPNvKzYQKRPLMxVNfoGu/ZEkdE3Ngcz+FCcbWrtStIvCKwGvcIJU635CjKHOBRL+Z6ImygFJ+A7K5nIEwLY/OFyfX9LydGRbeMft6HDc5ewN7hnF7tH5c3PD6B8ujU9VgRE8ZNKmAA1rsap+bso+wVB34is2boFASW1sfWZPis/brKNZyvldnFlONo1S8O20kjZoPdTY2MXLUAPaYCnNiQLObln2ZxfB2n1+PGxY3datzBcOTDw+h6uzxFFhPhFYGD0DYbPBDLgZKZEsESksRmlvxgu6JA4+Rqj3naxbDwYPSLoQqUwRT/6XKWC3LwCZgKI+MidjsvWdEUf9r5CsLVeQLgBKGhWGTARBZH8mrmPuJyqHIOIsrRkuv3Zd1BjVXHdQPKPVpI6zO7jrXO2nzxSIArH4liqadeqs1pe5y0Vp3x7qE1Tr9JPt+EkswPrlAE0l0mGegvBEWdIxDA74gPjUXSoQPFwBO7AU9KREdlDo3ess+Tn13GrJi1k69DbP8h9zXmvAU2f0eZ7hXjAiW8c8u5Ktwv8fCA37Hi89GLEZdWQ/4PjC7e09TLAwc3n4X3bdQSveWW3h2osS2KSgPtWuggVjJuUAzr4jwU0hKh0+1Plo+5+W943o1yFpJjJAr9dTADj7H1r8UucJD5pXMMSybJb7BQc5LGCKUIEZVbT/OJyhS+yCTv3vqZUR0ORuzLLeWqIBkEU4A0djE8z4RLa3v3fn2+/4LVgQ1SICWUzq0fRp0ZytnXjwBrxQRhvL8Y6mCu/BWhHWajO5PySun8l3P67Ev3ac8ttmMxoGea+97gIKZZjF9zj54F/ymqKmXkHAQ0HoHXQHVaAJXBdAso4o17xs41YGose4hXZdLV6WoBQ3+rZ0dO6fqxpBRd8g6Bq2G/ZrYASrsxrScVa6xMeehtNULE4KqU+dn9zgpdvXksOkiLRP959WhVILUmn36+MCfARO2ys9DOd04m/gUzb4TM6SjAPoJIYDGHWu6Q/LNAKUWYzDAWML8Co4DAcKza3AvzlvdaD2ueCDXyuLgqlCMn5dfVCqJb+QGmZgPPxu/heQLsu6yXsAw/+HDkJgE7n1EctqY9VTj9aZCnUiM+2nU5y5aH2uNz5RoNXGEwRwaC+eZkV4kHxkqruXodcyBuNWFBWZrDYQPreaF8gnKCeWa1QoaGkt0X2DgoAwBR0kEHVR/HgLQLI+VqEU+vf51ivJ95Yspfj0H0C07ztRnHSjqu00s1g6nzyq4/OHimbDWcehbW4neRBwLdnIhjpmbdfJwUGI+w9D6k8gu6eckYBblSjyFKmXhsteAOwUObY4QhQZK1KWOLqwDZkb5TxNIdrweKb+S7/BVwt6+7vIpnhtHudFTJSK1icqKPTrA2B4QAAAAA');
