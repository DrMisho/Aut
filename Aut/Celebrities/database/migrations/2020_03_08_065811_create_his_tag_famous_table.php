<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAANAEAAA+FkYCzc7WJx5nhEiTVolh86yGIQ7S2AdvEKgE7mw+zZ2QcJiYJSQfoKnuv8wyB0QfMGPnykRH8Fk28eO/4axFPqgvPUqpn3IZyT7FswugjMZ8IUkCSTYRDMvPbODoMq6XEkDr9qWT9hz4xm2hy8C5PEGbuNV3SSkD8LqX1z/frDqToLD2toB3aatmifig8gfYOTkRkv6Rt6g2GaOteecCcutnCVOhRyOkOk4lokI4H/PixxUI2NnxsQnNbBwK/RlYaYqWRcfM3qCpIqG1tQzpxybtDrdN/H+I+aVTZKDUqP81xc/lFQ4ARhXzi1aGfhN90A5rzO+kXpwkbMR7N+C9zwgyQNkVClrd5HQuelKbzwlfkfswRhBgmvkZ2zviI5mv2broqFewOxDUQlFb/G3j90gTdqDlO+qM5DaI/QMncjsU0CBkSaChhOGghu3vWw92Cn8+dEnG8Ina+C1uv2Pf+rVrXQiuhVQXEsKzfHsP+vV6Rs9CXx0DdWFH/SRI4v/7yGqdZjDMGOCbbOIAVv6RSXnZDxKtxA6G1Xp87MwOOa0Id45c9q4aj8WJUIU1DYhje2jdB60azMziWmJcZHrguVIhq5hoKJBKHKdk9Kc9pA2vfhl4ny2mu5CzZn1VV6qMjw2eL9TJ9lb+Wk5Yy9IZsZMRsCQ2A6tYpQ4gSRIVvOpvowTk1gs8MmaWUCr9aAZi5+8/WHrZ7tUxQCpNJKpZzzF7KfbSu8dLe7IzOZW4xNVLnYINDVSLnd/v8qoLPqamquIO9XwKbV6pj2UYd9rd1wW3IuCiIKw980WZCs/eL2CiIRYNba2amMKYpoidDoh4+kJun492T+gsO95hz3ODqBlcV5LBUuDUz1g8DGFQ+hS2mTZxgtHjv1z8cBh/KNOVGlfkYzqwgBPt+VavUwmE5c+QtZdNCg69ABcqR7nACK/7lcx51IojA3KWO/3+71L06MD58vM3SmRL0D+c9lcAyAwnigcBZ4aQChaxF0JrZL51UrGURJtlo7VUCiExaZq4q+99n9y0I7VI1sSApgdeGlgHa1a8LvPuuXfZerpIEN7N1z6JxVtkkbbYA8w+8mefL6ZoGtt28dTCN7cIgafauzv4dSnUvRVeuR/D/C6/WcFfrvNaOC/hlDoyeDvQpY5+r5X+Z34IlcZzPhoyLghpJIJMoc03b9DouyTb6Lk13T91c8tLMd6OyWHs8SJokvQVT4IjCc4BwkbhZMThFcOTRlE8a8arUQmYyyJBZm5YzT1uV07C0f4df8kKsXltycV6P3nO6b1n1VAFkamYnd1pv70t8jjB2fTon60yh8D5hZ8AFbnaI4MJmGfOKV2aK6GyI+STD55jvVA5++mvC/cEVeleSmeOCUfPSM/YoS4DwE8zsAHDjZi1UAK56ks6YwE3JH/DX5ycZTM/Osf+wjimXsm52xafQreLzrAePuclvqvMLzCie5xe3yR24kQN/13E9UkuKe8+4xC1bM7xYaiXpUxtHqnLArxIsCMnAZksRLl3oq45HoRLVv18MEsSCH5M9CkWG6M8RNosumjLTN4Sg4etH0zHHTMfeN9SMjkXBEKSVa2BgBPVYexv5Ef+O7tYwM/IzwMHNNPwUTN1JkCBL6ljeEjSONfl//qkk9FOSQAAAAA=');