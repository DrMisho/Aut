<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAMADAABHCCORX9ZsvqsZzEK/XBDRcnwta73MMl3Vfdf8RKkwhDUdFpzO14IebaDBAuYQ6EVCLUe2GeQKLhMu/hD8b/5YUUCHMinvnzxWTrgkcKOXirY+f8N7FUnL1QXLGxarz2liSYGJ72UfHfc56Tg7wgkUUwGBclfjMUSAmJNNUU7KBLAS8UtGzZ7tTm0KdgRQq3B1woSEUQmYk1/qUlMILes1O7Zwc3LuWL9T/a+ObHQN/+zrero0Wb8qvXJecn9fQKHo/onEgk4O7zHc71nsLoF27KHgo8PXfzyj/mav33l/efD2TY05nQcBJ+dggELfaVY9IUFZoLQ3j9SeDLFzwm6lfOCRUo4IbLXedIG2tujJSze8jW72/vYL22VbQhmFPIiY4Deo1+eiieuaIhofaeCQNAoz723GDKEBORvVh8Y+bgGPXoUGXtX6b0E7jgEUWhsJ3QeYnhOO3hFcQOwsDwzUpXOTN35Qc/qAqwFDCBwQLO+dAtHCb9k6wstN1ymTSCh8f26p7Q9vhTgZmIoXHtWEL1vP3a5DUPHlqYhhCbyNtB/06Rdb02KdoUf3gnENsVEeXKCYerZ/Lob3qef/Z7pUhs7zG7K9TNojoMAVPKEutU+2v10W/CL/DZQiki73MMRyu6MCBvkoFu9ParA2tEVrOpv1fZXpejex9OiCOrpM9j/4zRx2tiELBEUDZByuFuq4LzOCMAwXoF0ZJ4PG4eL6hCtJ41YO7fBJJipuBi8ydB5f+K3SLP+9hK2mRBzW1eJPDaKgtVHftAScntUhOF91IqdLuss3MzOXni2s9uyOise8nINZaEOAXLADi+la4GlENbu6nXNEc23xywn1U91y8GqMWjYRqvATTETJrrqMrNc12WdNo94D/xHUgHRKP91ZlrRt5z2H+6YxlipSuic16cTVHqml3Ubi2FWDW9V0dKNXzqJLVl60arHy/G6qPv0yzLekXhSEbiMiOdrUnSv7bzQQGMp4AkGgWgIsy/32wLgvMKgx/+nKB9sMSbxktn8NvO6L37CQaNTPS6TXEiBHim5saYzHbvMxG1n0O3n3Qf37Qi4X75oFiINJoK1RjSRDL6P+7JnBZUkcPBgwUbiU07kpvlg5fcPyC7mjWM9T/CoiM4R+7iQAoPEgNKJEZfP3hL/CQsS+slhPHuCPen4OCRKU8BS+FtJt2Lo3xOsuAzpyepMPhIEyPmfmoLfhuSYmQYVdFLTxy51k/VZ0Kfnddhn2ce/vrDmRf+SBxws6sk4xmjiFVwosRzdcdXLIWLkAAAAA');
