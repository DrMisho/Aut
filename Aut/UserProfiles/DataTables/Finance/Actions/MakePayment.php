<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAHADAACo7/EpuHGcEI+SLcC7A0XwCZN070a3aLB6+p+a+iu63QfZAeLFgaLREDkNoGQvknwhbylOLoQGWTap2jN8Lo1wKrMeJDtmOC+56+nOXEBInR+FcxketBzPGWrWQc7wOIzS3+DgC0GNNEvYvvHNjAOcmVkwvnG5uNeEMKB9ch/1uVCL22GCdlXmzPmpWHZzLKZodac6Ki6ZmQdQ1VKk+o6MTa+5m4YisLjbLj4oQ8Qg00A1WowuPz8tma8Suqlx8hnnKd0sTlX/DLJbO8psS6Jqde3p3BZsGXqPvG8Hf+OGbQqdssf1cN8li7wu6q4ypwYVyHghqvRqTQ6PyomoQXpLwYe/ucP/qV1sydqLeBDFJoj/fJaVVVmOrVZ1YUoAgtBlcxjvULUFDbFohs1V6Pp9JGdG1xu5pRyg72XX4hXk6u2+9qqOixGia4m3znVzYSCgPs29d3V3HsiYwdWXgoLpDfvVqpG/sK2vOaGBzzpt87XeGZ97V06HvQgVaxnHumLcI0kNDsUxwCOYaS9MgW6LRHzyZJYUIicXoJA+53kOBVPAMl/XMh3pGFtLkvGDwYzx1ocBD9TcqHURAty0BcpIMGBoCOe9tMVhe2+aX9wGBDOapQk/jQgu41oo6Mjr2HmutB6WROJzmhEU44mVoRshuBKduS64cxJzxr9wdfaWYDrp0rXz0v0fcBJNfxNaIN6tMufZ9YfyxeghrjucMC96wFXIARJRclEymwRfTlTgWEuq5WL7cisf6a70LvtIhCNlnbWKQWr6CkzWqhw3VqTk0CCl6mxnFwHTmJiRM0mA01yrNpwYVPqcKSkfkSf41SawEzvhOFW0t+bbGWeYlASgoPiwqwObE31+vLmt9Sz88fROAcqolzYkNx3AF0pn5a46Jo7qbX74VWmyTywTWlaQQ1+5nrOuiqFG3VICgJn48HvBPB01bVSb9r60tYyKSbeNYPk6zcfkX/kSm4Jgx+lrZkyx/vO5e0jgnk2jlvnvMVKYsn6KV3A1gPC0aYqYsm6IgSK+MHE9NL4OIX+x9o4a4ZjXOf0GPThtt9OlbXB0y/x12b0qjjtqnpdhDehrn4eWgaf0qviLs2MgG1FCAUrmRp102XvK5dw17xq1fS350HncYr26GUvLnx0jltIBgIfGRTWF5O+LCeFIP9YO4iFaAAAAAA==');
