<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
