<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
