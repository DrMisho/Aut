<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/8SJlbzlUuHYXBix+PhRiS/d/23LkwhpcOYyzS2euRg5taVq+c84+2NfZmijw97wRHtQwJcwx8+dpuXBraY9uwboB/jwL1V15a5qocE1XIWD1VHWMQQkkXqJOqr2O9FouY9KfWjJBOnH7/aq+oewmBsZXzwqVbTJQ1KqrJ2IJrqNfSCYGPD6V/UW6/jRwyMAPSgAAADgGAADQ0pH4CVCcBkQwwa78YECSmOepc5SizAEE6oTg8A1loJO4rAVXmNwM05MwvoA0LJtNtLncGXtlrW0vyhf+DeEpUslQivM2w8FnAQJiN4PwQCm5y3Olhl/l6y6V8FJu3/O/BApt3WhyxLz4ZQztKfTQdwSvjCOgX6n0mVclvaD8/9zer4KZwkjBRUPZqMcayaZq2exOgqlqBjbla6NF0b+HcdnIujVoF+whpOpjmGCtU4g++P7UvSN/Mu8g2HzI1+H2747brXb3Lz8WOILDXr94EOjoj5XYYFWvNppm/++0P4sJ+gz5Bu1lNiZEIBFAOf7e0fsnVBN1uiKjCM3H8yBJ36hlVnj6UyM7P9nkEfgNMRBZfycyhWTg0ZeC7xp4vbDXOO2CKpP7t1bFQ8FcpMOJ6uDO6DV6G5KJ6y23eELTHR7CE/cjfdIYNPo4k/LyUKxywbMXBmI9o9WiTTmTuxUcLzZbnVY8rjBv6yQ+6y3j9hrTpFaKgYJ8J4TZeDisl3UCZwkQRQI9hnIrETBvCH7gikpVGHVb07KMJnkmNeX9UWq3JOwAp2wWqBTA4ipTkdxFRqnrhX0v/xB+F9QEwS1cvLj8dyQjzlk2DaCTg0hqqIaEuBbg6bPuLPMFTZLIAP8X1AQlavj+9RpASvDJ5vkG3vOsaK8AP1F9EV5kppHX72wtM/peNGFr8UXphDw9kS3Qjh+lFE5U0yiv6h2/qW3vO3TjTILPjV/pPprI5PXpXTAWt9v0XnYuxROkgFRKsPyt5CRB5cfBpFa4/RShBA4cnfmF1oAgEAX9BwYWW7OnCK+e19+d3JA7DdSbtey1Wljy6mrx16GFb2DWSAamuWpaMp2pBc6Z48py65fkgUcXLcUNuIme1Wx+C49VUs6lulvbLRakJxSYBxjSYJcMqhPKwBstDLfVo2EPrxy80nuNHv9BHQt9RCDJ3q+u+Xe1qLrBuK7y8tCShR8++Clb1qgIlegFjLI0Nh93StQz7fJWyrU9Xfg+ddsW9hzVdI/1p8XzOuEkpkTKGbBpaFf7uEluGMYDIc0YWNyvQGB/V9e7JA31FxbvdZ4EnXXHkQ4pvkmc2UTHMRQ1tFET0aQPLqRmi8xrY4jUkkgVyHpGcuMEU4X+vwQvOtOmPnF0FX1xpb5+RV6uRAKj7s51Vr6Vk7Oc/4G2qIV0OZgHoVM3Kbc1G3/epVPY7Z7cNkjogH1G4WjrNdLFo0A5OOjgHFbMYeoltXsKsCC52IGyhTeI6tz1CShCizOz2gINDtbS5fnfipobmD0N1BhN7yElwRgHOEbf2mcSSeyXCamvrh//fxEtKRvBTrS/+6r9vuEOFvQAc6Auq/XcBcA9NnAHaqixFUWbacD0LUoPEMP32EY+Wj1A1yoBZk2dd5aZZUxo2ltOO6HouQP8B2PidtT+s1dFXCi/g/ukiNHiofkjOx1/PS5D0B2RC4G1F/8cmUpLP4kW4FPxsrO9/pm2xb+47W7avac/GJ/AwifbBm84/v+/8VZov3ss6TZpcRu6xNNvIcjqFMAHXrlu1GhGr9nQfk8OJaig+ZT50AO+LRCwhqyx19X7r61pwwedzB3r/Cr/Rr/RZM8BpTiXT0++AWrOpcyAhbhG181dRZExjZd3934Acty/Uiijk14m+vlA+5RY23FQ5K9HJq/oQhKnRLdxy5F98ajSlnWwbJw+uqHfZGzJO2MkQwQCKSlbSCBXfAw1pkyTaYAXEfr2CgFil4dCedL03w6RTMCTRsuaPCpR/kjD176ZsBGqwQeXEuxLU651CoejKZ4+/m0T2KFMqd4+3R3bjUt3rLiHWFYS4nu2BjphBATbvfK0E4+/GBERgfjHQK7f2FqHY+wvkd3P/pMS52Xn1y1TU8MAOMf7DA+XiddUHr7Uj4I8fSj2/ozEzlXjKXgEiTupINoxaTWjjpUWTpSX4bJkSGajUod6PXaw3/oayZpC8AhdA/oki2vwKJAOFuGlL9x8ihHGGmE/3+UYY6PC1/99saSOiaGYYQ8mzI52dtuKQ241T/VLpMTHmysZSxntJW0ziJoMG8J158KxBmDFdH7RF195osUcVNnSbDRWJdUtn2CsZT8o69NyVXcrZ/N+uAGu1B07G0lMAgAAAAA=');