<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAALAGAACz16xctf9fEAUi6gjZZH1nljv4+GyCGk7lA4S3VD7SKOur3llYtOvtShVQuSH7kfXTOSjrc9okrSQP9AdASvqLvYMK/DoW0mZCeXs6hC58mCbRbSkadTh2NMeGSeYuM2PRKG6eZV8jzlBvEm1xp+9l6qG8g8fhvRQOlqUr3f5R/BqLW1bEyXmFFwmBcVemAuopK+qlrDLrN/5CQ4RfvXYsdD8BpESilI8NGLd8oGmAZNzlkPwVsDCAf6HKo9Bep1U6oSQww8JYupZUyXe0zi2+UbySB8IFodk94ibvqXfX01/j9cqzavo+L7nYf/4LeNErS8rz2/TqUziZYPQSa3LdnxSdGAwxDyS1zG0bctVgUbBdVjM6JxKDi3qv1Aa4Mt12UZT6p/VEkAeT8X+iiBJiNbXvcq/w3rEjU7sHpNa/4/6bl8Oy66RhPEoWNbL1CCI2+dz0kfcw3qRXlRglndXhD9/B2GeMPR3lVhYaU0QNrl51mWbIfmFLpCMGdRiJZ1VDJl5sY5GYVZjN8wnxYeKwRbv8pjWVSo3LdZEqvobC5fQnN2YSsUanQ7cWXDpjZQGSPZ4EXCIhVqvL3InHKfBkIMOWJt45XENDH6I9aNzNxSoAf8hyGU/eqsorcS77s1gdlQBjy0XVmBpETuD3XJFtH/c2BZsMX2zwU2shbCZpnu8H9kwvAIBHoEsa0mp8qlnHILaP6PmNPRG3G+ppVSbySIMZP5g2qYPdZM5ohynyeTT3Igc3kR79lwUjPdZcyp06sC1M4U7QND7FOzrp9y9tB8ZMKGottWQ8vCuvrOXNRd6q9H6ZQ28LBKNTnjH1SQEZpg5vAxgO6GuJZbTMkcVn8WO77iOefYiA4X1DN44gEuiHjnaZsafByp9OgC+eLdyqFkSh/8g8Q6ph5BNlF8YRLmgYQ3qDiB2295qLoQsrfO5JaVD9NYeJjTROw0OXnnFGAJTC40tdlxqtgkzYzrfm/tXX98BY5Krgq/0yvxXKICrElGceROr5mvupWilHAUub04g6zhnNjzjqkiAd+NFbi00lzPmqa24Y266t9YJhC9qXezou7ipm6nysX2AVzNOjI4nhWV6DyLr+jtNflRbYGPSOAYRhn+Cb/2FlEq3B8TrV8CQyDI6SWN/hv1n7dsjCxkAp//S2IQVpej7hOXtOuPiIqq2mdyCIVEbu7+4c1H4YFfDzjHImbUwfjQWqlrJC6tMVheUGcWzIuKsjWd9rgCBJK2aqrwIZcjWSAJTR4cukA7uJdZjTVTjmakeYq43MRsQEcmhZfeiZ62A7/lHlMXikNpoQdkzSiTnqnMv9RJQypY6CQpwGF+nIUog5WNKCsJ4ZckC+Rt21+nS40LjyYpyX4jC+Q3MSC4QQJCm69UjTG1V+XsqxIQ5XfMXO8C473759ErH/5d+M5lO0CpEgX6v8bPfmMRChdSMAdT55Tm5AetsZiIqk4qdA+chVnAvcf13B2DXX3AFueZ9C/WmwSvfSRjVGK9zDPxCeH5xBrTcjzCDhqX6KPQwTNq0LHaZ5/4RiSCl7vzj7/IiqiiSvfvHyuJXMuXO8kU6ZCELj6I04hattQVbks8MDuPS8Sbfb8jU3M+I26W9sRaxdDDS11+8XfsIkfQLkVaNWmqigKTDY5BpfXf5AC8ojWh3VFffxy0tm6f93UjNzYfZ558HCLj6dUanV+puWONYS+nhpG8+/J4lxqr71/ICRS6fWSTSD02lyQ/HVL0VZ68ov4J09psWFWBMd6DSDGqUK8cO9SZrnsxclFQIV4cjMYBp7mHPgwJu9eNt2PBe/vDd8zmdRZynu2+DDAbIdmhq50aewBiLwnphoERYaCqf03EYCFHvT22ly3nBOXnCUZ9yqVp7QWEA1+mfyEQws1F+TVrsX3PaA5qXUwtiKKBMLkpertLGwpri+mRgMMHlcZC1u9WAbEW7Zrdb7ZG5qNjHuFJF6BCESDORAQeR+8MFvpetau1+vrOP/aSkKOX4eSrL+0yBTt/xLZvda9av+DCJdaRmmzqlvwhP+xGpv23+RabY61CMZtmG+mDpT6O772IJTz6wL22nhdjoR/4DVy6ELtbNGaPrG28g+gok/wICxkrVrWsh6ClsjSwYQESIYjaZhccQEFem6BFjbrNwavvppMKgzQ4pLeFv2fI75tNZ5h7XAOyswC6EDGTW7orqgoezPkvg0ikd8tL3MVN6QKcbbAIwgM6km0RCBz/IvIBre/Q65yFziUYVJGvNxXQzvjgwFrhhatTsJJ/g9uVE7DcjXw3PpBwAAAAA=');