<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAMgDAABaq5EF4wuCzZipt01S2uXEfcuJEsqdW9Sa83Ln+Nxvy8L0flUVYQYxwwgh5wcy8Sq94cJPCTvNqCwqNlrTYcJ8n7s+sepSWn73R4dbB81lMj881cYbg7WUGmv2bfWC6b4cSHhXpVPOPcB8xE8pTzvd+nDnfEcQ3s1Xs/UxOoIiyT8/PEyM7xEtrgo0+HFtqfiCuepw5E/Nx8rCASodeSYm7w1Y25Y5F2CHVjQbUPm/f70wKQp8xqPxQ+0GhQ7yNSTLrX/jWE+VBFGUfGvEUr7YshQQfyW4m8m2M+C1bISzvpz/kI/yeuuN0X9SrkNw05u17QNbZeB8CIGAGL41y4XJ3O/P6Cl8c+N0haYI/zJkaLa7ycBuEnAdFXJI2nJlNJV+bvnlHoU578Ksvz4HAXltigYT9y6xWdhCHtS4a/qG8K9A+hZAVLtBNqBjjKqghnME9FAbBE55M4aGjjocYL50MPDj87NPAgvmK5DXCHrmUBaNI4Q1Ww6QdMkuw5OUBpBWAC2sJufIGq3vLrwCEvsFRv3Mo/9aw+SoTRmOz0aX2r132+jgDdhm0Zu6X0kmBciX4kg2Yqd7naLoww0CiXaHEo2a25rBxCSHZImsdwRWlytJpEI+hgJ1i+Joyjs3DWzLm0VmChjg+0XemMOMGYzsimL7ld5wl38jg0K2zjd1x1fJOM7hT6e1Tm1OFvRCPdiZ3pSGXXfl4vDcBQsU2jFrUqSm2xqhk6RGt33ZnwKLdHECs5KUfd05WsVYQaWD1CLzU2fpv9ascpX/0L4s6BsyLAjsEsaP6Yna7JZm0Jj7ynDagAzP/WSwnrn7noFe1KE41VZz9Ezl7kHR/e4HOnuFuV/DLqNuWnL7w4R5BTyrXyK/K3QYIuNPwbcl34hpX9LrKvaO3R2nzxdZIu+xX/zPCry7iMhjPH4qZe4t9I0ov9wVNi8e2kNOpHJvMcnKLxur92QoQyZCmYm05VP+TaQc6ZZTgMY06sC8XN02CFNMmmQeTB0Vpxokce8jRgscqW94YtIntR0thct3jgwZw+mqwj69KhlEGb/u28do7RwtbeDQj3anuRK74RxMQ+j7E6LSBB17m0OaOxh3nfPVhn+qoh28ngOkVcS103bNdn9ogop+VELiQOq2lYAu3zXhF1Zg1pNkn+5aGaCdRNQqTqPhKTo/wHSbhc07srdcLQZWeEz0BWljIcNUUa0swsM4/m9P8ctEdqISa/E/g3dVcLPCJfW/27Ood3NvLrHKdVD/VsZxlVgB+FNGZ75QxxBEGLOYlfXH2iywJQAAAAA=');