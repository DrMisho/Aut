<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/tRepKBBxaXK06s9UJx3tkQ20y0l1aUQmwEacT4/cAYM5XjLcKIY1RhHgB36wYRuykziPlPd8mx20AxwMiM/IaU5c1P6pG6nukyAijDa3C7O+NJGXb/3H+ThOeVsSbphSdKRh9x/MnCu3nMjD0lp2K+3b200dcJR2AOKPwyVCcAn4C28VljpaCCt9zF5j6F/iSgAAABADAABuvTx/zZd1l9RqnOdQICyuiLCVsxEciE2Bk4pnnXamS8mzwun8fWg2UNVGTLaAvhNAieegTGJicKwouRymC0zSi3NmpVM8KMsGr+S+XGkvD+mir01KyFXKw/izSvakkmK/ko9mQopzJpRSsr7KqRXuiobKevoEHI5o74OUXeZTPsShE9XqyEl8QWgZz+zdONezWeVXsduVfjDOhPyaufzjlNJWwcZGXw+DGy0RVcPawMtHWY5YlxM/B5Wa47u2hg6jLj1b+HrED5dTnFRQeeFTapT0PD09OMS5BiLt9q5XaY/Q2PkJFZj/6maoY7ciffyIy1xuHefdjQHIw3rA7qFePExbR/i9xiM6PlQs7kOQLwCtpMQc8qJlbUZzKI/1kZm31AJfTypM8Z4WtRgFxB9WZT8IzcoKR+XKsLPup57pf9u9oCzOAsJwWCHPLyExd3d2XTavfiGIDk8J/0qt86lpU1/tynslk/zFuyYZmkQ43TzDZdh8J2DFeoYxoeWKn6v6ipfrq1rujPDaxTrhVS0N9H5JXBMxymuBX4kMVkPgECUVXuSv0Gl9yNK69yAlCJg3KKCv5KBIdA3ceDFoGZbYCC5VT4NZrCQJvo9hg/ZzNpS28CBlGbwALYqgcp5PlkFST8ChGdsOjAehZwZ4PhZ+CyMSktuGcOVX6xre4Iar1dTd+kdquYFbEuflRKkzJ21XzlSitJjJbQqjex8SjgHchgg+PPckQCfSawcqxJls2/etuOjyY+Dwspp8QHFHjDP3IVvRuQR9GAM4j4mwVsW1a+gEAdSrx8wU3XJ8fB+ByiCsew8QREh3F7039JbwkM5BRcvym3Idx2/ZdKEpg7WWyp7qUYmaUJc9alM0Kp5PCXURab4bqtcxT/v0jlIJAxibhGLoKTw0Nbqw06HB8Afgo5khM6h9p+cE7epALapgb8e157ho36g2W5Y0bic91ddDAtZDcNmN0NHFzTt6S8SZnrGDgXLyDVXeHYrfNlpdfgJELghuDJM4x9AW+sSKWyFfnCOZrqkdeOaUNiRJT0KSAAAAAA==');