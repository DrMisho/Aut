<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
