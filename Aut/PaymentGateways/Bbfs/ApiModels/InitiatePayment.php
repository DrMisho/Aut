<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
