<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
