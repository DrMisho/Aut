<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
