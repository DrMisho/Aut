<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
