<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/tRepKBBxaXK06s9UJx3tkQ20y0l1aUQmwEacT4/cAYM5XjLcKIY1RhHgB36wYRuykziPlPd8mx20AxwMiM/IaU5c1P6pG6nukyAijDa3C7O+NJGXb/3H+ThOeVsSbphSdKRh9x/MnCu3nMjD0lp2K+3b200dcJR2AOKPwyVCcAn4C28VljpaCCt9zF5j6F/iSgAAAOgEAABQ7l0FUddjHnnOJKAmIXW4gwurerZlo8RGlPpScWGcaaYEN10FEB10MXMqfBoDAdSbAwHHLx3vJXzr/b7FzGA2d9iRS6aY3Io0X5hw1/8bJpTjvHSs3qVePMbaNRmJrF+rKkmHENsXdbI2AMbeCRjgMXChRu7w3zFex/feIUb16HCrLPiLi5Gj2aug3OacKAjNbKjZDRH+84QYKvX4Kaf+OaaOmY7JESGO59weLuodtPc82rkt0EFZ9oMuiXbikrLIR+QBjxwTXjkipS0NLOheJD/zFFEMUHenD+6uObpjtOoorN5N66Wuj7Yuj4cn8ye2iS4ucBjNLmEezDBCVxSppNFzw9CtSONqTrMuHI4FEJCP2VEi7VZaqeCiGJGaQh9oDhfK9uDsjsOULWxEegpPHp+NEYL5v0EtGSqJQI2VDxRaKAr107K7ASH8DWOr4kWnUAqG0JzUTbnyCUFrIYNoadT9NljaNwkIWj4xZ/SRNqWU5AZKf9A0+YnYIxFrOqjlVzPS0CZxlCGPUed811x5qHVuczfm6+2TowWXo1xlJ4lrEsebNZ/CGj7ym6P1tpGOfLSi5GrI2QSm5K8PKGpetQsHtlGB6oPCPNd+L4HLz4B+g1jUBbSIkHqOIo9OoHqGIEoIRhge66ea4yZmpq7jCuUv9Fmt2VO5Zs3jpCWNtd9Xb7Yh2KDb2SrjtL3nKt8ATmSqBPwAmyRkyCp3DHIuODKdm6va+azeWPmW2k3oztGcHIFnLmsNggfeJIAujh+Y+IQjDUyiCClqhEbnEjruNgpWnwhoO1cgAUMn1M0PEze1bh8/RM7PBwdTDGCx0fiCiZjNbme/LAfosx1mo6kwuchsLviD6PlaykGafySX7hVEKtSS5S/PUjFvCJoJg1coVXTAPvOSIAxrSnmgiosmf67yN8ToVgn+pJNWSLloscC9pVq/uD3THXojBwtHtNqLYtR6jzA58M1hbj/n1RAfLbPHziMQQZw67bWZe8p253hTFfVn3ipszbGcbcgcsSKlVKliHnUSJ2JSlo1IoVSYDLD7TyxuEOB864q3ldHVpkx4MReV1xee0XBTIKUg16WnNBdOp9FIo+xTUtbprGDDnCK2TwvCDEMEO3zsrCA5DxAGIVUoxbWDXZaWQWmR5Q7R5Z7Q5hw+vdtcvXysTeelob06TimtfYwIGvQQtlkfJFCaQ0Yc4tCI6U4rkSTl/f+RK4F7SPRCGvuFRYgQSOivl3jYd6AM21Zi5KcGtOvZW6RxQxnOLpYhbeBdar38H9orTMROsNR4lk8W7d20IYXJAU8kZh/mk2ZajqxcyPuHPOiHOU0D2e4s2S8v/nmzRT6AAbY1mCKQzA/uhSxwEbqsMRdhhgFPzG+0yRKl16cOeIyEYqmy2eVu1nwvRXuHTZPAFtYMEMX2m8DSCHWoB6Y02gkCH0zQt7wkcfbcJ65tOs4WlRgnMUUmi049o/zaivujeaQEak+a5S9iF87mORqIs8VV13ZZy/n3am/PsPSowzYQb8PW6PsOz8X2buME1YSRWpdfZ4qHsVFo/U4To9UTbDFFaYsdYle8lVa0mxUI7soIzUDnoJhn5jXkdQSC+O0bAsP8S727XMvyPvTppTc2UhA5tJaC0np153rBWcXwQy3t0Ly7VPa9fLZuxBWs3P54rhvD7tSnowAAAAA=');
