<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAMgDAACxnXOKwVatQnlpamWZIVbJGLPHhsxmQJLdXZHoNYLohVj99YQypbuFPWYBQEkscZ34X0zKv/wRZKYBmuAFa+rb7cN5oLwrLhl9sBzGJkt+gypF6tjOhqd95QqlJ5odWYHsoTB/B1S+0cxIC04++smDPVQcsKKP3YW5l3/Uw+bWnlWu18ddm9KulQ47H8X+R8AyiEIutwx/FMQP2JQZaYs4eKCNDGOLNM0AM55urjJB7yUz1kSw4qM1TORYnR+b/4Jb7+8icjrLvljhXo1KXmQNOTjmh/xK0efimKqYxeuhl4yUQaAx+WBYC63+NzHqzw7iMW7VWl7S2rXLJzJ0BLTNPS766CZZQibmWYe+1oYJYKu3H7yn3rip2+y5X/ldK2PMGZQzhqcSDIdFVFXB37s4RdOtQYq3nD2HolaJF2smDS8hDgXbIRhbMt3rh3ecxdsUux2NTBU6tvWN81NcwWnqI4JrFvn4GEeNqYjzZO/nO4qNEPzNw/+6jrPaqcs9EfYEbXd/Vvdq2uA7By0Vmmd4DnkVWp3mQFxM+yQmmGbOb9zFOyDiYpTra43HyhSHv49CJaPi/+xg833H5ZnSXrQV61FFKQ/C4qjVHuXW5XJ9WOwR2xwBH0xSdlk0XFWUD0O+iBtXAK/ybvJhdDYSG6ba8weThRhNUm+o6nUWqN30XSAxvNTgxFGivbm5c30AvkdrEl1iEf48kTZHj5BkGc3JOwXkdn+ECizn5j2uwy7w8EtzpIzcJgOtEhF9/SphS8i5XryXzMl94/QbZsgaIwLkgtni39jYtj5o7ZUVnVEXiUuLyRLtCxYp5FLmGKJJNyEasAwP9fwijfFkuZBei/tCE1+moJzEo5+c1bjJZeE8C+HMt3w6wSscmA8D2D7Y7VSJekrT0EiltUscvbxuWRx49a5MFg+bcPx+YQ5bWbwwZO7OEvikV0KFprNxPJ+NMuTYN2eGcZ7QHS9/yGB3DRWvGGE50LGJRht1k1lH8owRxaIt3zwC4risAyVWQMWxLDgP01s+98Ip4ep2lva+XgqX8L6NScx58HrxeacuRmx/m2hvRP7epXZEw5mY4l4wbYP6Ta4t9PmsKc8CejV5/1Emq/fQnTeJFsH0kIIoieIkYdbgM1uOPXhMlUDY2Zm3YN8yePcHnaWJC4VaHeMdl+YYUkf8gqdNUsT9qrCUNqtH7vy5YxvOwSixyVFXSr176FrfukMugQbOMCkt2GwVqJuZtnjXllrRSo3kvro80mv+ryNQmRONlKavmc31RMc84/AHpYweig3iFAAAAAA=');