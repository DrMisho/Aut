<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAPAEAABApaVCA10a+0anC40eZHbN1G6myL8tuz1prqgiAO40ndBv0/5/7Tkpk3Y1QjqSJn8/b9TkNion4vBqB6tz4p2e15lvt2fg3ng/OkBT2RwdF0oZIJ3bYdTlQy5k4cwILBgMNZI+ua0x+O/PbRCfKYRz7jaUiWGnYqRWUosMOO/dg7gXjBGOsRXElmj1g7M+b5vzd364ykJkRpkkRkg0JgcLvK/08WEwhSh5JyD0XeZviVcAGB8AskQh9iE84uxehrYrAqjxd1oJHhHAfHPlojVbeVJLtKUa0qRtReRD2NpVirgvuTAAl8Qr3bwNRgaU2tjpRvgeODY2DSXaNsOt8OkFZ/jvHvtQh9EV5WPL1F2yPt4uVccL4OFcZKCZraoILosd4m2DkUu+7T50C2CpFwe+KPAdJCc1eFZ3YapuJQVC3yRQvr9NmtLGnwMMoXcgTOn6mkyppRQ+BfEwda/Xb4x0DQwIDBfI5zTBCDa9Vrq2SZKb8ha1YED4CGqaUivapYZl7+neyQHYqEllzWeav0x6K5gM1kB+5AC6h1cXVXesYu5znv7a1rLPag/9flApc/MaBbUmuQ8bSVQKNLiCwYtDX2n5GM0NXKOriXwa/k/yjb+7YqUTtdOAZPlM5JtOHoZD2PRvKgivFVfLrS2Sj02IvqxSskVyPxSIafTr96HakeaspHOG0QTsi+SMwgMhzzz5krzvQUSvy6GoU3un92Kp0lCo8pslzgcypCGdYCAgfFzU5gA08hk4a9HFnoniDoz3XFf3Btp+E1YT2559DT24rJ0c6V+HuK4sbvqrkaDWr0GViwjV1QAZSw3KxdjC+1zWJ9aAB+PM2qdzaSh6VC+R9ZcuF19kgED2B4FDAr6cu9B9eLSKzIlyKNNqniiQ6Hmiy6N9RWlG2df+DCzm5I+rmkHXOOx5j6lxt03wFMUxBnYjcBYwFajxkKfokYz8BOW7OM2UwcOE5lU2GQ9OQZMor6YFcPn3bLqJSLPAMjCOHk0LD/0oUA0FflqVYMFFeFzlRArUFZS0hV1RWxC+KZei9WBBm33rd2VdOXimFntie1oQHuxaQ0j8SVrr7jjTB1dPvyAgDgeCSaNrhyP4ZLzWzoZpG+ZMsYiMcMBaid62b5mmRgy9i2gzVaPWZp0IdXSsakLEdEIXWwDafqqlP9u6q5zFUukdhbFsk3vqZ/Kn5K31LpqKoUUP0MlN9kKQl70SIRMggQ82Oer03wJ/3eEK3c9EjmwAqGxn8SNTDxkwAGuHgrdYFzEYtUM8yjVWIZI030qXRtPjqK173s5XGDCYmiYLwZNfQMmX8ZKjBnip5qj4SWnJczfnWkCONauhpNzNugut6vtDs6WmOFhcuZN7Vjz52popFIi/tysdcs5NPf//I+3B7oxgM7uyDTnd7qwiee5Sd71NI6D/K0L7OsX6RtWqlG4ksRhA2tOr0kHDcVGwibmZ7XUkzMWoooBU0DOTbs5shurq8dXvn4AMOCSbDVACUTM5u77n+9IMHjDK3RWQ7iiBjs4xGYOP/2xiBxwhKeSdS8hgbtscs5RfZYPZLGnPEpTyj/ydB3T2z2d5VCUzsUUydikOj9WGIU3ev0TK7rXehhE2M3DKbs6KgFd0fuqRV/uY5RtlMSu2AKi84orafBWg9COr9HbGMmE1wYafTEYYdbND3H4V1DsjCIA5AAAAAA==');