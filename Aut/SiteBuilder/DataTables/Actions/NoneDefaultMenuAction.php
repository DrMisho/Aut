<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/tRepKBBxaXK06s9UJx3tkQ20y0l1aUQmwEacT4/cAYM5XjLcKIY1RhHgB36wYRuykziPlPd8mx20AxwMiM/IaU5c1P6pG6nukyAijDa3C7O+NJGXb/3H+ThOeVsSbphSdKRh9x/MnCu3nMjD0lp2K+3b200dcJR2AOKPwyVCcAn4C28VljpaCCt9zF5j6F/iSgAAAMgDAADGW4kxEx5q0Wk2FQlum9DVGCyaLrzqhKWtHhCEjnmrbnt3rzneFpUGNiBaiQva3TSwYZZDIDx3WtxKINZFIyaO+Hh9mNTi60RMv3BwwW/HMHkkQQHy1lFdZAoS6nPdqNMy2Y28zDOzuqo0XnOf1dTgHsE6Ws959IJbqstZHoG0JLB5LsQoo8GjSuhghYE3JBrZap0yEYJSIHw8aYhO1v3O+qf05f7bHcBFUWqBAyZcBQrZFQxRL8BeAwrgYUTnTQGRcmJI4J9mMPFto1W5e2UnzGt6A3Z2n3u2mPQpxtVfTZ1NtM11Yxu5Rf1PaA1ZDj8CAkptxOYgqj722b5i7mqynqpEKqUXgVSDJbZLVhp7jsadhpdfAs48YOjpDrMsNkBw/+cp17vigSY2XJdOzu8WmTU63fifUM1mOfNgHp1yeoP6Dy0KRUBKGgVni7qFP+4U0ZoG6mLpJ7itYQMFBdT+rkMJ5rlCXzz/CGooDkRXpcqhbbTe1q02W2FnFV/vrvmV/7d0NCv0LPkJUUtXmNNfPEv8iYlZoYDv20fQ1NyJMt2QkPXAo9gjm5kBpNip5O5e/INiBwKfZffUg7+dtNCWeoilHaX2uwCvT2GUaD90bmbvOvYZa3ppouPjq9qB0QmK8UsmHiEY2Bz4MTu6J3VWCQxOgZFhIVseT/p/11xY23ZMDZBWR3m3w95nsZ0qDkjhtmavz3gcRbYUSauBlXOtekuc6JkAOr/4JRJHLFWrCA5g2RFFo1vws5rP0dQweBUXS+woyD0wrnruC8l1edU9cqc70W5CfSCL6bo8Ylflspz0qtCl7H44H4hx/duxQbrvV3YWIEsSQAb2klGjQ16ysCnlMvW7FeD+t7WBeH7B1sTIdGnPDuBF5CKrEBHZof5sekW4tcGLE7QMyAWSYqB3JvUzCx/DSduwEvbUcWGvDg8QfqK9h4DumfN1bY+s7k2L3auZjGHUv6jIP83HTDJD0NC0dpk1lMb983hZbeLyYjouzt0WmN+Po0SMXHLDrZ0yz76ly2sEclTKQtXeg8Pf6OpBT+AZjJGKAsY7z2m/oPt+lkoSNit8k53JWI86poaES4Nn/LPHzJvswAhBcB5zLIkcPXwrBezaSPKiL41/SkxIPWl7vPQbfPKYAldqwBBUvxYVcT127XAJixJD0dlT096ld530BmMLekzOOF9rxf95+sLW9HnGPNqgP57h58LelJFu9R35e6EucnQfnzawCIjgerS9L1vWFe9ShMrScDSwh3k2kguDWXMfk4S27ghap70wcEYw8QAAAAA=');
