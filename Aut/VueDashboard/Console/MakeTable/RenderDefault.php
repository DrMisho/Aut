<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/r0mbHKdyxE0UpvC+1Z+xwBiOxsfOCh/V8N8Mh7yMuent9nD/VnPuJ5cVL2WAntZ+s8dKXfNXHP3Ml9WmW3yrsFQhfh7E67rvrjzM+TOxTwn2sgi+fF6oWO16TGAwfmr6dJOaAKST2YmyV6/yEcujQy9FnOGDuXfAQgjQPTYchY+06ZWTfI/uqLPubcJNP/vhSgAAAKgDAACTYmrWU6uemwtcE7Ma8/n1/lAkXHDdyiNK6iasDwgzJxCKC9YBvKXrXv7+n4aRsy4ld3UQ/046tvaSy/7wN344l+Jd5umUR1sPTwGhI633zZaCXlQ4ksSKQpStkwupgwwcqH1FBzMZsTsmu3tt+0nnC8Q3R2Dg9LIdYJcBZNwUFIC6m+UK4nDOxGeMauqMu7MfNdSrxTb9fokunrsKe1s/zgTU98ZtMfC/c3aDtbS8xD3VNHsUzJenZ7AgpnNTrACFD8RCGB3DZnQwsApDpGjCFZg8AAH2iqSqgXRBT7jm5ed2WXt6As1dqeUHJHRcrrgENOYEiPFvtVn7hQ7XK2jKiAiKA+UfJCFb2WMtg5XLeqG4bkiMTVKSKe9Cxax3nyR3kmtm+zhWwT9u/FknxRaJO8ICDzlDJmtEgkgUcuRwyJemw1NvZh/+Bx3Kk5phyJoGBG7n83AwEDi95albjE9bb1momygMfYtOgbXWQVm0cT6LaEYtvM+EtXbgCaEp7i7BOTDB3/EdRHnNdFm+GD+xMEZhzhJEl4cUI7c+TeG+ZDQSFhAXQep/0Urg68gIR3hhRFv1q7G8pWnjAaeGSjnEYOyRhunBMeXQrUJ4jRwhlypPagH0L1KGubUZH1JONGhel8BawWjauQ+Bw/aFJsOQYazy4h8VmRrCWSICZd3CA0lAGrnjzWY+UghLPjyDnzZ11G5jz8SXU/0uGNBAG6w7YnD4pEEHD7rIHJCJ/YCy3TeKysh8CYUo4TFqcPWquamhZPNInB0NdEF5yX08qM3eTIU07f2UmtfhAPdA8BFUfpEStN0p8IQ0Qc/6dbvVna6E4AxL80y+vX4Cb/jDM7L7WnUHa0EBCQGEQxM2SA4jQC7T5sodQOiGVyGhRjvB9DTNlRoOeT3mzPwPZaXLRTbgrrh6jC4ed9GJNI9S2J+plo6w/G5zOU9RWTVuBA1+wxRpGA1WlHUTqXU5D18aSuI0KKLydEoU8v/aojY0SNtQCMy3BmMItEDEVWqOiFqkDsrrBQ4ZVUb2ENUpx2qg08J5p8KGbucHFEVtZT19+0OdTyZEak9zDwk3CD7UEnFhG5bOx200oLtQJayZCLQUL+kCqmWWnZdGLAmlkdf1Z9OM1CTtZSK7FTFfMqjtvW0WHfYPCr95Q4jUsINwFr5huGS7WwHBo1/ERCT0IJAAO6e9zTxomLsAg3eXY9WkZEt02t3bdyQOnHGQ/U/MHrpFzDVlz+FcRMKhzukAAAAA');