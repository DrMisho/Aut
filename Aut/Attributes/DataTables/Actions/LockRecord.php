<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAACAEAABfX/KH+VWawevd8TjXOvnQeQz29OA9oqZ4Z7kg3rP3aO5kHtBtVSO4Fs07KsyRd5oN4BseEzPA9fUqGyqtD3x1AeAEvYKWE/aHQKm9Dmv8786OFW0SVBEc08bi8ePb1GsIfKrJ7+4KbLSwLNJFptlJ0eFaGAdPZeunMzNkVrP0cz8ARZUdWdj4Q1zNj1vtBsT9uyQQ8r6KAM/IjjA40i30X4o8jmEbx580aMbiAM34z3WLAVTOdomhof+YRrF3gzyM50uQNDOyQ+kMdL0klvDcQmIywPYm6t58dPtPtT6Ls9JftPTZnyjLjgvJQvjsvpmo6/qlencFpHznMjPi6Iy/v5ohD28+Bc6xWBq5vHg/xJ3E2fzc3jYYvsKmQH/o6Y+vs/3cxApJdTEG3xsEOanw7g4uBIoWwEqWwYVqIGs0neXiyfk6kaqS5wQoJYuAUQql8ubiUixHFpcMDOVc3FnvAmQwtU25vPKdKoiYq5RZHEPASvHkPuY3KRpUHy1OKnLtY2FoaivZDSowiwtB9ulKIm9Xw34b1kUR4k90hJTN7TpiybFq0xIwND7spxigYgl0OGZy4bcAKvuj2AvhhNuLnrqy4FmCjcSW6uyrMNPaxIsUqa6LfAb10po7NMT7ZqhI/qy0oe7z1hfJm44MZrep/ccKyw1h8gZRPvd0yRi82+hfxb5GNoVti4W3zTPcGHrSV4FyW5jaY2ws3dadJf6migrkWs3OhIQ3DJsZTqPVoua1wXmfqxK8heOAgvZVsAWB7GE45u3Lvk2bSnJa6qsza1c/w9/5o0pUUhmEGqdvWV5MzdY6+MsLjdlGwyFdjCKqVNqNHY2oxLmfVKO1xwOnMJDMxI93i9jIGDJOkea0zAKCvhZsaKDfUvVxgmn5NtpXKvZUJ/RK691uRwkjeHssmXJ8Ecds75Tv3ZkbrKLPuM9fpjfpny7OlAUY2caPYcQRlIXMTzPBAckbAFkkRIPF3m8Iopew4My5+5/5Dohr/6ROE1wVcoxd6S2HE06CqlnNSHlA9jYSQwL4c7thmHYcg4p6dlz59pDkJsXMrNuDMFrprkbLK0S/sslrizh5TFbYoJdaNPwsq4sfoVWs95GAh7jmFRIniRidhu9jRSvYLAzYnapHLGkDmjypC3jiiYQ7NcVGTsSUdJ9nwGSGCiERsfQzUciBUq7a6+3ITIGZfoqI41HhNmSMlubGgtgQKAsMDh5Pi5eQsHttecS489dSogm8K1yQsi7B+RLg5mCHtXMEoLaMGza8Cft6LN6e/MsgsOTSecgdTEkMTLSkA58NsGeeV2665pBy4cbrg+8/NkTi4cbPD+pMFjRqcBYg7LXlYE3YL8X57FWS19iq0dWea0wfPSeXKBi1qqmAEKkhY6GZFF0B7cZL85kcfPHER44AAAAA');