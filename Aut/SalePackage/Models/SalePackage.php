<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
