<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
