<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
