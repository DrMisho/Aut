<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
