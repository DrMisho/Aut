<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
