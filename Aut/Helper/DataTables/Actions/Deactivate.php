<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
