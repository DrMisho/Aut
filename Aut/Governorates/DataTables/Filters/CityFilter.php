<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFgEAADDgi9hr4sMv0l1I4Yx6rdyQQa120FrXUP5lXafBP4L5TpuwpZbh4bm2xL1BVkMD32JSFdL1P4lChHVRgc39YyVi7BaEDYTVuUxG3jCT0H+1J3gX31HO0MBPHYILvkPPMefo842aQ+p+vWBFY0QhJVeZ+LZlKTKoKfBiWbvH93MmqT69eihMHiQ6u8sIhAGW8rKPGGq76Tzrs8FpiAHQf6tBvv1h58nWdTjNJRT43ErGDH4X8qsnBnAlX+7Eyx7Qpt26OkfN73hZvIB9YxoJeORZTtW+OBIEDPPjD/oYUQR2mov7otNJknmNWyJlNXQ3nnAJgB0ULCK5DqYtHkQuGQErUjMA4rP3VNzq5zTM1d40PmvF0H9jaePDYBll7XyIF9ZrkGrMGpvNhZdW2eIT3Bkf8HUbeP08Xy/w2UxaSuZNdLyYPQS2l+uTOKw+Rcd/9pk/pa9LE/yItvPeyYwqjclIXPa6h0oq+krpt2Xf/SMty5BRDwNavKOkjLRFS/c2DMfBlJRuuLTw1ql/vLciGBEMocbDuSy/6871oTrSWxxNVydv8OJh/N6jRAhTQIaIfHFnM5d4Uqtwb1ncBlHmtLk7iSb70vPgeYYK07hKeJ7SHXF/PBGNvW1W8+dwUnA67ztJR+ETOdQeEwIcOnVTO9LgLRixOkEK+KsnMRsAYnOhkyoLsa7Nt+LpIjMSVmFEKooF2mpjczwRPngxLgsgkJDEX59cHKZzB6XorFtxQwuaobEnyBKsJ3bnDzrpm9/gWk2GpFqQ8F7myH7P8brC7POqu4mF8z4wAWlZv/8Vyu1ZYmsMrK8dLB9doh1TjKdoVnPs0ivEx5o9REAP6TzXDtB5tALCpcRHRt3Fr9RhxKK62N2IzSUGt15z9dCckYD4LtVij7d7tRTazyYc1ynwJc8CCIalgvhjW7BbCPobue1yWwgJFLHF0NjYA6D2svd+G+jqhS+bo/kTQvPYELCC6Z6m2MEZXEjw9Fh+D/u8hh28wSyzxsHJbdQ6H00t8+SxPa+iiv/CmQwlVO87bZ2trgZyst3kYaluRit0crZezWqSfpxyh7ziCruXo6U1GvXxMjZokRn8C0T8CnPQ7NV4zjNwzL0nK2ZmmjEpWC23jsQzZu2zDbRT9Lon/8dYQ6N2bqyBjpfvhXmn0tdD0JnEyNN5gIWivN11g0Dw5JldKz92U9HmDUnLP90BhfE5w94TX8nr0K6nUWNM4+gWgFkf+iQyNSmOw17iw5KMziRED9wHywMwb/i7MBDuXTHSk+umqL+NBDyvZvTLNrXo43h8tjzCfN2FwBgf6snhzQsG67DZMFOyME1OKtnRGg7l34W9dUDVfGhIx0wIkyk5DC0H/xTx/eTTSmsiBdcFI0m6pqu0GwAU1GC5hxvvMXxSv0QILUewUvXZV9hUy0abQgxvBK+j1J7L3DjV3d91oUWY5Z8a2ajFjsom1TI9yrpWMYifrE911p7QcjGggAAAAA=');
