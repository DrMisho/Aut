<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAKAEAAAeExbR2nOvvFRnNC5ynrXYlAoAVHVmnplCF2rPardtMvrKd/KZ3bO4Ihz9ekZEirwjyfG+pjQ4K9qDdcc2uhU04BV0wVwFbjRea3WZwaQY2zNVZNrZYFy/81hgzs0rrxwOONxiF7se56/f+4zRW5TQ5GrH062sKHru5LFXBJgTyzVK4tu3HSZkxDODUYxpnNJ/G2D03j9pK6vwV92dhOua1ZyTQ3gAH7Vzc3+VblQOgXQCYKYCVqALwsZzza2g1sUO3pSdo7DrkUgNUjS/Cwqt+cQrb/DYPSYnotlFQag3U2jBS69bXLrF5ntho+OpAH8nbXhOuvxfGWO2Ii4iTSsa5PkVMy1Im1/CupdfUkQ27TSHaA742kpKPw6RQtU4QwoF31bnDhwFFov4vUOuap+1GBeW5G6ZpYGMc1lpQcHdmUTIvrDjVgokumq6w4f0FbK7krT95asHH1ow0VgVcOTb0LNmpgSTkl5UxE4xMi6sGQmO/EtbQVVpO8sfWNwqCzzSWpXXWTQOgjVgxWmbB7vtboMjUE9i5YoY71eGcUKHBeNBzZy+814B372D7hSRjzU4HbGzmhy3brRfjbUhSrWF4CAKe7w3lYlx+LBE029SHkv4kmgNHSlVw8RpfkMZT4x36dw5336WQSIcO7XffUomhKUDWSMQa59sr/kIiQdbaZThuGsFsGIzOJ/lpXftRQk45Ilp7w95FShA4YgZ6ozoVw7J5+hFbhL+ic5HbahrEMGtYcp7T/58rIUjCzMt5kKhyQ8QYtGF6nb3ZDdStKqsz/8wFNEAWfr7jLXHuFKM1QiHrQX4Jn75Fvsz+oEkuw1ywwDkEOb4bL1zH7tDsLniNQhobwffUz8n5Z7z/4msNftKozcEYzryJsxo+Ao8N+bub2g5rsEPIyUEJBZo6oRepKoEAK1E+X2+UvniP3sDANVB+wecULhr/hgRoCnFuuHeDjjAyAM4Ic7QAAX7gtkjyOhn7IxeCAofMxKxoJ3kPuUKXAZQGT25whdacQAnkCusV+9COnUYGxDtvURjQzDFtSmSTCYml0EfPEohaEERr4rC5VUj+kO5fDAPgElSMM8SDG7IcLzmCGaBQ3Ku82Ry9IYMCFkAHPfnq+3o16r9menIsppSFN6lNC+DoRs11V1NFWEb+tW8PG61xwR0pcAmKotZ7vsXLKX3pr/BFHFjDRYED3uWZTIsQtnzvXv2KpK7srI8+TI84PLsUVNJAlvATsSNn7qX0V5hvfW+hMffmY3ZyqT1kShFbRj0U3kG3R6PXyaG0Kh5GGACrmTti1WOoupV+0WhAHUMM03TigCDEDKYeWs+tQ1WLHp2F8jhp0SMw200SjFAl8+LJjG30qXuOTs5ZbeKrcD5IBRPDLd0f+5RyjJXhz81/ju4ukgxQOiJnfYiANaF0iMd5wVxj08VCmcwQmHMFzGuW2kRdtuzkB6kqddXzwXmVFdkTsIrNOsUVytVKm8XRbLZg0R7Mv5zN0YUKuRfz6LpLzoEUECEUSQPS4oWXzj5j3U5qJY6rrQW+OhEFa03tpogpcGm8GvTx6vRqOps2hPxZAGXU/3shwAAAAA=');
