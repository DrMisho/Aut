<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/tRepKBBxaXK06s9UJx3tkQ20y0l1aUQmwEacT4/cAYM5XjLcKIY1RhHgB36wYRuykziPlPd8mx20AxwMiM/IaU5c1P6pG6nukyAijDa3C7O+NJGXb/3H+ThOeVsSbphSdKRh9x/MnCu3nMjD0lp2K+3b200dcJR2AOKPwyVCcAn4C28VljpaCCt9zF5j6F/iSgAAADgDAADaE+fKzT9+H+yRb+2EkFkb1VSOBzTePqoMevTVOfcu8qi6t3TfG3A9HhesToSBn3GF9LfigtLiTqwDW5udrjkLBDbK+3NOqr21PQdClhgsBcgx/SQKFpv34kes+e5cDnUSduk6EtC0iNIJC1sROkFzPovAziohogLyK4Yjy5n7G3MMu+33L0fBHZ4AseOArmy89mXautbAa9xWkurwlEIP/K7PtkMTjq2ty+yJVpVvtXYMl2QCpOOVXjqvXbPusJAsUV9wP6RUu00Y9SQUWyCmoPoXBPJlwV8UvndD4POVC0KViT3bkBEuSrJNxnYA/il5JVifjqvdx7iyycO+l2Im2x+lUBW/uOwUKSm2t2nIHLDD0aZ4Oi3zt6qWJwrZxxZyL763lOzPoKkixXdIRcD0j3ZjQYkUlM/0uw0f0PWKhOpzxuPJMRWKUlNIfcPTdK4KQxZ/7y0f0fUh9L6v/jLaFMBlzyqgO9NxmjCRYWYi9jcDHJI/OKd316ugbbSH7vOiYvxJFqdEpZi25qiB6gjQJp4NvJXOV+hS0pzakhBWpatWnbZ8J0ri42WhFl7Rt+UHWJ7/SDDj5yyXeagNuHBDquVy16umwqEg3wvJ5m16aAD5truK6wmT6ib2ZRNIKPmC7VZp8hvj7K9yk+KHXCY4DG3KW6HwbO1UeShp32+fvLF7LH+B+qv03kog8ok81BMoQbqjhDe/tesBx/6CT2F05TR0O05/rqCFQKEp769Vzr6bMh6SSman5zr/MkkrdXKZnxIpR1Kc1WyH7d5imsPnGFjWQCgaepsvEUMWyF5pyz2hYRuUrHAiJeKBTAxEO8BGOLrshSoVcPZN97xJZfxDKF+8b7TvxO3+6vBVd44pbuMO4GIMrcaIoNk5LNmtycmatc7UqyHw5YZpR2+PoROTtNNuNSqnkSA7TqcspMYUkbmUFyzeLJyt8u7ATHkC5vy2KexXA+gTJqb1Afrx4LqXnPrQR11o5fjM9pHn+9JxAZywUQuZo8XstKCtgMu6KgxVb9OdJ3aloCXMdZ+SzWrMPihbqoLEr2zMKuIhOz/CO7drULCJejbhDI1L4bq9j26mYdkcYuW20gAAAAA=');