<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/Jsg2ArzkKl8NCKdDtEmZhLqJhD+i8aDTQRm3tvhHj6o8cKExZUiSsOLWsQx71pyD+ntg2H20v9e2+eJ7e7v46vDpWfNpixyZVdHrP0KVCpguTmErJok/wsk3OrYyAaE+uu5kwfZMrDSQPpmf8G3h51Rf4ZwLkEOB8599NUlGBtRDB99cWuEfzNQZIoFfgq7wSgAAAIADAABBAtJvYhQrsfY/dkh1udmvILW/3rcMrRpGaj8JNEDmC7lpXgsyEm4Z9yXF83DpmwzuKCwkkbaFhpYSQADRTN6atmjE+K7FO4/libT8bg4PegGF1SOZau0ycHxDtIAiVkMQqmFVbSmX/XjDTMWmXVM8gXvDP67yNi2ySmmwKsqd8sMvbSEWiKyk8gF21WiJiuPyjoPvln7e8WBkc8SeQTlLfAi9VJfanwLhbxUv5HiTPwnvEtpM1qS+5uLr5X3aVmEneWlC2VstbWv5CLRs2rahMNlpdTpX3N8TeUHqdiS1nJQI/y+4eSk0VEtipeAeZYc58lx0CkxZGjp+Capvkpi2IK0I0jlcCYokVPa32jKol3TJ9/LvM9wdm9o1azN003OnzPswldSzWv83DM5w5ojNCssmvg2vYZJYPuXjGKWR/Hzzbp6hzuqNvHxvmK5iupTQuuisphwkjicZNKgFDVByBZnb//aOKYOATmXyXffKmrnSVnutqkBUTw7R0+07Idc1VpXiTigimZ8SJa5sE5drQf+MEteHN1mXzT8t5LwbrqWyWd9ptJjwZqWNgnghA0kEghKDXn6nJrV5kowjttzGwPgU31VBRnZbxjNOllERF58z8KQ2A7vkYpDSEoRj1gJkqjZdGTk5P9MVDuHpaTzPK+ku7p0YxMTfzxxFltxQH85g+eCpLcB2gmepYWAkqJDSIJZBAx8GGisTlktSAhzK9mxwgtHh+uH5mC2kkakN/wKdODB1BWAGaFyHMAenp+Z37xK7JeAI9nHFhGKzfqFKgiHNJ22a1dwcbRghg7NMk6aR3ncXjiW8qBjDzoHZwljtrf3drixe3VPnnFLx/yDt3Bk7PQoeFxV/s26gjuqsyD3VQgCdquDc1/NEYZtTfkRKnQ17LnKR0eHNQxkMvIPocMRMfwvr3cbG5vu5nlyGooQa+cxVuw/6h0unseiDnxasxU6qBzcF8VBk3BBUo0GCmcwk1rKC4n+8pNer8w1TfyzKkL+pHOsnq32E6oZ6t0xk8BhTZshToNZ8QSIbsKiMss6NOhIQeLJxalzI+sAorEtYozQwzOdxiUCBn6mCxyj6rukzBzb+sMy+E5pOobN1EJeY1JpPZHdtq8egSy7Rfml5xPXWp0EEgiY2mdSFA2yPilNK2pTJuS/adoxXnc6xflylHjcm8Au1u3f1IJpFuQAAAAA=');