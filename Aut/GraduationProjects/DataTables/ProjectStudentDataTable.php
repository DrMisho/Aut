<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
