<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAANgDAADBq6yQLCcunEng68+PtdfcxqmoUUR6mRJlVL30i46Y9lIFtkk40dINSgFJkWkKB2b312eUz3JcJlNYI9xAh2qYFCoOh9/nKM7as4PeGw78fuET1uHfJ9nAQRuNIwwcLpRkcZJ0dCWiFLWTQH4G6G4kKwDVxQKdm1K83RZMAqNnthpno97s+TdZQeUkUGQO4zJyMu79bwuF2KrkFNl1eeBiINzxc1srfLtTSRRv+0KypJO8zAQkvjN+FW2EbKcvChO1IjwXgnwPWhRdqjaIuK7EXGYO7kPJ7+QGhKPCWxPzMuIb3KrgZNXytDuT0oG3t5qtYX5B19HM+Ft8FIg0rs77cPvEISK3eyiFve0lU/IFq2iKIBmGoMTU4JOT24w4KnvZ389Wg9whVvbmryhV3nf5EG6EOZ+KfEroYMQOLNcJ0km7i0JIwVp6fH8I+7R/FxdbMXGxs7Zhladm6HO93PZM8gHIGCmTRqNs4q178GPwZYvFZNvMr0kv7048p7oH33A5L4k6UyI4/iULpEky0I9R6U6xXJiwGCmPq2jRlp6EpC0CnbSkQbDR2hpF+059dMXPFUrNd87hWl/HOou7+KW14iNtfvL8QgBzNSUB3MMd13g94SLzZBIIVblong/Fq33kVJufvznd9mpbFgmSeW7S4ibdbdEwmLIjZhg0uZ9lRdfh0C3PGsL3EjDfYLG0tHi0SRMoTQ1yjSCBgAYs62ReQzMkwxwbUMn0ZLm8K3MH4BJfEsKtqNg6i8zTegijeKSB4SoFAPGoIQgkxhb5CHihlAX88iVNI+gegG8xZlYKfc8N7qCkIWr3gARqqzeUIaJn3kJ3VXngMGaieNFbWADxC9Pl1LdHGb8zJLTMBRvh2Bfc0fk+dynVeAd7Ph/a/ByFxH/ar2GlogDIljXGQd0sYrnWgMPQXp9K4QbUj7aQDOUswc0AoCj8vZ6s83b7q3N5OJxq2OwtCNNokgj/eM//sGQdkfWnh3U+o/7ahokcGf+VZ3qL8o3rBr0XdkqQXjB/xv+U4KYXW/dkO5E+sFJKSZ7s40ryKTyFLbAWML0sm+UroU1mQgf3E2wQ+1ISD+X0AjN/siycykpipQOQkPMK95pzS/bv4b3NRmyZRUGspmdDA9Q0qw2Xf2cU/Sry/myIEgPntzPKf9hBQQmzU5Tph/c/FI0+ywAusWG+YAIM4L7j8ncHCmOGAYFUyGq1K3F8YCs/xqhrelXe0ZmvOyR7/m6tcSDd6tnFSZlZyezT8XN0yabDj+N/PZkyO3VrVHAHC8O0rhiz2sV33D5bqVxTZIEd1LpNUwwAAAAA');