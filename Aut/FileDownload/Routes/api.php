<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
