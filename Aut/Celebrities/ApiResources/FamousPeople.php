<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAFADAADw8RHudDDmTik/bzplD3bTO5vab8vXF1J5MRSc67FomhGghl49UeDgchjjtV1+MSYDFbIRopj21JUyCpbo1nCTMVhOmoO6Nj4WGALi9hlxzygG1OYsQnT3RWnEYsz6zYf9xGn4uQFdF35F3hQ2Pf90ZpZQCiOgMNYUvhNiDUDwkN+KPgoVNddi1Hn8b54Uqvw582QeX2ZUQESswS1od/dRO0WfUCYoUTyHYa2XV4yxzO7rK8iKGAa0MHtdhcSD3zGbyq5L7O/VWaSNQbqZh2KAzLE33Cg9tFukkQwEXwlvR6iup+TI0OL0LoYWgOeVqxAZHPm+RpWoO0xOFC6HgIjhqhyerDKV6vtVCRsb3WuT8KHWjd15H4zfOQhhs+m75oDexLWEfAkTlPRTJCNJmpq/4KZC8XZfyXFElwUvHpU7eLb4b3mgN9oSDf3soA34TAEdRUdntN6gIlzj+tlgbgEAIxOQuPzHixXpK5ZGXo3w0zeTjRelTZOQIGwMxilP7thgnJFsJGBnnt6IJMuanowUl1M1VyGg+tejr3wFy41+cHFlnmC0d15PU+5Pv8ASkodRaeIqZMblv0wtMrkpRwXsT2nPlFSUdN0WUuhcWVGJmweiGHQp4racgtQzuRJ/x7rIrbP4xMXN5fwYynuUoQdni0dUJ/NojUhvwhQBgg3JmgfaOQFiO785RYeQ78XszXQ1bfzGJCT0FysBVf6Fwj1A6flz1V+0W4pFEE/tnHTBvfwsHgLv/7m8lWp7/wMCroWPRDZ8z0ATsqQCgE1OAQvhRCt3fSp6+T3WXnQQDbXdUcZNiOAg8BD4ezAkrCp2xtiKmSIOJOS9IZEJchRYORloec38YRqKoEahxx965WusOrx/SFYgJRAv6vfX0kvzwErSWj2oQqeA4ZFwxZPloDvJTuGUFtiurfzIMxgkH/2/zm9KwEfALkLGr5AGcbW/VniB8HL7B2bBZeUtyuQRL3niA+ki85bfjzhjY84fO7pgSuN9vF6wROnTtsnSEcAkBQwxhJewz2SGAOkxwirjr3wgkGV7kmv70zTJgPjqB526pw9PPc9K5tt/RDE93JLcz0dg2DQ2HSzUYP656G0xMnqye22lPGCCQjLk8Oy1otn+dgAAAAA=');
