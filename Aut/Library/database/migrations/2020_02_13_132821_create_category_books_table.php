<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAALgDAADsUgxVS38Ra/q5hxE28XSgPAie54JuQtzAtf0Z10iRQWGVTlyDlf5cRhBEQ6831qHoqTozv5ctkdDkKYDy5MDDpRzIJ3qGAhHZck8XjYyd95K0w4TJixWSvJb11jdLaCYty0m3D2inWb5IbJAN1YhXLLDMpAx2UJ8/1/Tk65zn28AIc1h3Gy2Fy/qvwgq8x+vxEEalLXocNAgdcoJFYb3wYAuHdnVwvq7CxVJjcfaCphaDrdbmwdVPwIH/TwGvhYr6wpvGKmNB72aKbvUkXxwwIm03FAJtJyxrgENyq5YZCGU+0Q+9Lbiquw6AGtLhlYBwWEf8GaNE4e0U5I83EFkxl/G3BneDIrG9zOyhvOjWQDJnRgVoGxqH4UxjaLBVx9KKuB+pHB1SCi6708LI8v1zplrQOXPDocUOpXBUWci9PgLj3+eWpTPEvI/Lznbj1FhLmdwLbaW8PfRl7M6iZvBkz0knQe7lC8sYjgus/Refv0frppkxlJlXU77SwyqExOR15sy6+QGhEOK8rmCgZBA8Foe6VHn15tXMZctMBiiQFBvvUKAy9yhyYd1Y6Ba2hYST9HlyGZAwTQII+9aF6jA03zaC+4s1EoUPrB8d5xC0MWJ8/oqRVcb578VMYfK8d/M1d9MRVTUci5e122RkE+rKmkTLNpkkU+aZyyUEXKFrCrIcLyWXlHZ3XhNyCoRF813qwECFlN4LuE9U3Atjh1VOQ3UblbugXLt1KkNCQFAnn8CjR84FgrY9Kc2ZoHN10COwA+E4yC3oXyH2YOW1uA4Mf0giENf5pjiWn0cyhSrNM8Of9MfszlJQj9Wds9SzoRseryUFKWjiLSVjSOAaj7lhmJ7MbWmKuvQyzDsNouFC8oHoFYzJrEvnKPHKrNxcbxdEZNlLVcjyZ3JkCEvRbr6/zehM4LIvg//MvKCjrIHKq6yfZ/y1gvROnlW9uHJvrc8HlTc6Qa8+j97zHnaRdXkRVwLDCM8z+Q+eL3RM1378tUQ2gB0/yAfnwXKjzxZKTP5ItV/ftIRFZ+hZ7tJ/+MAIvLAlOvGme89arPxSe300ULIlGCtOszCmoWgUASnb0jNyiSa20y3J9Oy4vgS0VwiOnJpZeO94wrd3QgNotZTMxnvGQz0aY4hu8c6OnKqpdfZ10qtY2+vgKSqBq1wei55DjXizkh+dXbD3oVJtHmAqCe4RY6tejpNboDnSd2JqUgdp/kS27p0WxnktxYErWJoRR0FgNkewbr2FaN0SwVgRqL74jJ4cDf11AAAAAA==');
