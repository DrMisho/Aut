<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAKACAADRdaYvBJ8wN7CTw3IK3sxBfw6RUzJgynyU7d9n5961kku06oLQrvvplDMNLXtMool6BzdEuG5X9aX5UpoDv6lt2Ii6pNGgeR62oC2bVG4fVPZzvmMBcV53ljc/RS480TfKbUlproEt0mB+otHrJ9xGnk5BZcpzH1FXoclqX4O+/MxKvWwUTdmleRcM53ep7mzllhJ6kBuXNmFfBd8rJsZerU1tv6bVyecrxaQQ88cpR30uKH42Vwqtgcf9j85DRl0n1zOUoBR3Mx2URpbcSzcLQ9aTnd3S6ItH5VBXmakXxsutjH7x/urCM1K7168pCmzLDIPCj7qFsHEWzu6+kDzsu3SDWiyy4sDsbsHbfcCyslUl/Pn4Ep8B6Ld+c2v7khCSHfyNEyepTh7pxCNg85cLdVRE0Cah98lCUz8pLXEfggRWa17V2m38YPeOCMXT8cIVkhQlFvxCMaQ6KIkNIXoWVNCJ+aaULRZuKNsMNg+f1GDehSygaRsQFskmnGDTYHKRsVR8RVCihYYNYClrlNv5wH7dK+tNHsXtQzd/I2eSNsw074fT6luyqwxIkxZCvbVqKsPigky0JpTxJH67FDKoDY+dDgyuehm2hO3yea2KvL9UItkpVerdW+0v1mrM1X5ixJCtnbHLk2DDp9+H0zzeTxl1HtyC464+J167MNy4KZa1OPWZn5TnM7hX0d9KxYm/WqSvVv+JvAQH73WgyhJGRIDiWYepE452gMxVvENw5Ku8/pLku4ckelq8iz8p7Vkyv9lu05XVj6hSEQob29a8B1CnfW/2yu5nAhtTuULDavtMmv4cKhINsaifU+8X0bV2kFoKg+hvPvJXuX/2r/A4I44JaqP1RsG1rRE8C2w+OHeqodOU1xgIgxRIdkVOELsAAAAA');