<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/JShncRHanup+DXGMXxXzgeuRg7ntQn7Y1CRAK0jsW+pcc1RLNXmPGG6IRbA+uE6kArhsdv/uURFssV6O6ao/h/FfdtVnXXbP6Geqn08bs3+9eROu1m96pALwF2IuuaQ8oNQ1yeQBBkeBKhHsQA384mHMPfzRUEI7wKlppPyQMmuiIy6z25iuCYzNDX9lRVL2SgAAACAEAABo1Q6QsFMCTxXD/ZObv87pl+JOEv7Kg1GOXpoG7t84PaMoCbz4CCY9LNzPm7ROvoC0PQQ0qO01DgMNnF9Wof98CFh0bZj1ARl2rXdv1LvFlGyi1/vC2CIGm+kjUXP76SbKQHLF09JsIfzBKGO8MFTmL+c4PoqWCw5R1NH8jf4XoinW6XYlhSKry0k9+h08YNkMCWckz8MZQRrKn0GO6G9eO6gQAlK39f3zTWWctXhiqMzzjwZFWyFdSNt7yUr7OhU28XULL9RPbyMhZANxIbaeOzN37h4DOnBq7AQtWaXHhTr+tZkOhmesVeRKYMP++W/UTRfVEuIxDYlNGvz7rgdzjB6Hl7zuD1Zs6xMHezhGc6Q4ufZPMk+olksD9rz0vw3oTxJz38LSllWwTOdXl5En79QnUflKsTL3SzbiQAipdaaMkGVz/XbFv9MG7URQl3UZOn1AC92dSl/N/bYLBsM3Ky9yW+nmyb8oVrAB7YdJc3/CZknmpL6H+EYxbql1DR+3WgpV2RmZzzyKzh5HIT4eT/d+e6WPc3YYkXVuyXZ9s6dUNOJ5hue9Tv1Slo3m8rhNa201a1mXu0ahXbMTiKLKEvLDqVxBifAKE6anMgfI75QHZFLFVmkqPpY3yOKhzsVEFVb4PrzRhI4tC3hL+p+Scx9Qh78ufK4WZoExG7QnNZFzgwzUq2i/JvJplH+ecg5U6B625CoGiLi53RYcm1i+INdxWl3Fo+cXzvocUzLgp4cCUJM1/hxprwv+zDy9DYle30xvkJAh9yKkr9cKqHds39IcogVhF+QcKbn3moeO6/Kl23RQ1cKXC9MLZGF+pYsfrs3nS2p5h8HJBFNZR9rBRUXsYnmTze5B2aXzbPx+py8QtPYc0zrPgNx33mkhRHRZqHHBTvS1KLM0zalCPRLKRVL9rEl/I895Yrj7eWMphJeo0WV5CXteqYw3CysrolS0JaKIaH9wbSvSOeR+ISVpg0dGLFYzDj2nOlyI2QmGofChWjRwyrJEEzPDnGkVzfWRcS0EfWaaPy2KGDDo+1yeOdEQs6vI3rFLxWuyLuyxhGcAW9YR9jiTi2WsvMsEmS6x8gs7RGDS2hMHZYsAQZ7SxgFMy7il7IHhzxeZAAag4kY+DF1ZThynjHINK/HT2SE6ZMwmW1fyPVD7bNd2YxxJcQ2tID3/Iircx6EcPm0JYivzBsuTAlr+L65yQwcr4LPi4/5gJKgYVZlLcfIobfnVorxPn0p3jY6NlYIfsPGgVWtiOYAu1lGr+BSfZ/64wUrIRiA38YBCs65nEHmXD0C0hVJv2AmlYxb6JWQGAQlr5K/S3NWNaPleyGYMKtTtuC1dTas7mNm4/0tyrh9drMFpevVGjjI+tUv9Sbdi5lbsZkIB5qi5UgvTCGo8qXNbxhIAAAAA');
