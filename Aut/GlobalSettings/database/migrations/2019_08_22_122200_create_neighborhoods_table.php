<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
