<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAANgDAABpQ8QImYQC/5P0CXwaIJGq9tqik2U6n7TsxDLp822tWKC/dVgiVM83CDCFN63epPIZEwruS1yIQcYHy+ipSkvqr9xSyV2Z1eF1lsChdQqyEud4a5MRYgQb0WVFyWI/6gxxI0sKGbnrUjOd8aEdJCrTw9G/GvxRNWatPz4Dq9XySnAmfWXini9gJtcOI+0Ti21IuKdMBY0L465tlQi6Rg3V89GS5im/cgmqgaWAUIEYGzYSrHYEb7i8hU+qy5Yo+S6znmCgGTe1R0RznfFj6YSiid6l1cpaYBlA/AhKbTHtRXxkG0pNuJ4JuONTGqfbLevfsqAO+OY50nDsISnME1nGsuY756cIbtJHsuW2g9agal+ns4r0ECru6A/rNIPrtpGQKU+A8EPjFX2nBCBXlqIzfS2AcEgTRXSYJJ75OXafLbLxIAKx24TqpGLFmA7kafEjnlCp6DkG0AIOHTCDhstohtUFsLI5WETNNGpT3XUhfnd2kGmCGrPcq2o2uLhDdWtDZwksYvYh5zVQ2QDHJQAwARXMYifwigOVS0m855LGr/8ZZFWTAiPeXvOaHJJoPXuxQQvBA5tajjYatlE6eXUOjw3NCxdWdCdRIHT3V2kaxCcE3DAyLE04LCHw/Ey4h9KVaudHvkxd04cKgdz0/hp6Ky0v+qqTskhsz55ZCJoYn7N753+omSQRAgcq1bxHn2lRUltbrAuC1r0L50jfn5kUsAE0RTbuyLT+zRTXK1Jx5/pBL3iPln8TQQ7W1O7IN/SYrdno7XEO1Z2FPZ042pyhejs7q28umD8X+yF4sxSfn/k4h9ZNKpzqqT6MehnpG5aPGp5bHur9+lNxGqyxn4Rtn7R+5HDX0LGt+Qw1H9MmHBOk1gDg9XIksTmmG5Gul7Y404PfZZ3kVWBe1QRRVNL52UMSbqhQIfm2CvUwOuNiPSHQR6/5Hv+TEiuVddBNQJj+8cEOjFgnTaLPTj28hQwXDgs96rV1/hzJviOCWr2S7dYMPFhtNeJwiB+Juh8nQnUnqvWhzq+854LQDVW0MA4gle7i57SGtuoK2WSyFQVeYQxBfGRo5E+82GwYLS+EQvdgNiLHKsBougqT9bDV3HXM9en9QaW6CZUEXmyZJmFFaGqRolMseFYD5ko4PfP+Y8AruKcOpcs+3457Zzdn7AnC8rsnAGqLjYIMhi7FSsyeSYOKINgWQzwpdm+dQY1blZVbTU9oL67qLPZZqlfNWQOunN5Zy3+7isH4KX/HWP5p3diG5/vqarjuiHjuZ+UJTg8HACOpDJhvBB5QcItBfj/0FYokE2hUO9wAAAAA');