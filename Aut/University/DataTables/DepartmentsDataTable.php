<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
