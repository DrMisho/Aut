<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
