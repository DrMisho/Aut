<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/Alfs2ochFFWEY97jg1eOzGx62gOKVvfdRSIhVZQbdRu8dixBNOGTG9FrL23fwtqUvwlycZIB5yaM7+hiNUuWL5Eb7s9mJfsK7K7d+2GCnWCp9vEA+Jh+JdtkMzz1MzB1JZ8UsqNQd1YMTbaVvg+RoD9QHBfOmf5/AkGqQapntN6+S5GIi9iY2zk0WhEej79USgAAACgDAAAR1cXYcHFBnK+DITuYEIKdgIX/gF7xJgnWulRTxbrBN4whUPKC76IiJlDApvi/jauxWb3A2e6ipu8+bqWfovjsuaV/mpIzc8zfjEVtnho2eUt82VyBGdUalVu1LzYJIgfSkPDlolTmzYCg60l85XplAGOZA6W2A5ITHrbXAmx90T3Klsjmj7yTbU4rjnwrIwwM+Rt5UejLJZTmkoB5OBoV14CaXKTaecOnlKl4Rb5B5vZzvyXytlCBJdRrq+lypMymuEiDwOQek3IJSLmnyqrHroLfW9Gi3BqLrXHX75zzb0dkJ7lXQE9rtHUAbtHkCrGCWJSrIMlVYLRprO0yRQ6dNcdMHSa6j4/h5tbSN8X1rG1m+FbadfIwlDOItk4+Fs8nYoSIzlp1rI4AonREjr4biJn9F4NbLUTXTtO7TRvVh5kloI39clI1ZwQ6+hUfC2tKz1tyOBjDewRel3Z3MAXqMDAIcnZND0H0U9xcpnWCRXFCPsLulthAIrrsmKlhIAcaJGtd/HP8nSt61XQoMOJBH3y7tH1Vb8qNB/0GkLD6EV8LvKGjWXNSfb1Pi0aFIXZHsKYKyVNWQmETDZdD2/9wJYoRa0C8JCJCDVCZyuJ9G16pXsmeEzsM2/xLaHAQX9wN2z8e4vM7KNvb/k5ST11xOkCjtERt22/NIKhQ9r1Gttc1Q94F6/P43+CUHKzEoFOZdzmbPRt92Fc/AMmnDE3AZF9tXGnWv0aS1Sie+Z9z1gn2JzYEjfXb8ZcSkS+CHMReo7eDYjPqacQBkFRm/062wyccZxh2mlPung55fUhjHlEkJRQSjcC5hPz9IhWIsxWAx0CRsbTEySpsbybx/ko/9o1OXr7Fw44HeOwE/3JCju4ghF6eo7SsZY/rr8+Y7kyOod36OH0kLpYmoALuRQrLgKmvMsHQl3tHeEaEyaPp4hQqJx63NYsIA/p22Uv53ejuVWeaac8H/ydyp2MxtX8uNXs6mTvVV5vIOhF8chaLu50lLlanbX5FELKNLt5oAMyCiEQL/dp5Bk/BqQxoMmDBHFrxCRaTrBhWGQomhWiMc3zSrwj79N79AAAAAA==');
