<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
