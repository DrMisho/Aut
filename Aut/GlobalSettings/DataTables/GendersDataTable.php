<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
