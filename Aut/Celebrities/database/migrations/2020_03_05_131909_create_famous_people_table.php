<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
