<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
