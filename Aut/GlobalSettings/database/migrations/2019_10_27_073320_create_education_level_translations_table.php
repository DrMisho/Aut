<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
