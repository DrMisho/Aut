<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAOAFAAC7Bd9KDu6JXOBC64SSI46wPgwU0OsTaC5Hc6ArCdko0kblApnWMpyUv1YeFUVY4VwBEi+SrLNTUTammb5rvO614lepUtdWfHgbC/vMCdhNCawnGRd4y+QDaNnqhwDvigr3MwyvAG32uC5PxtlJ6FpFuKoXY0J/Wto5s+YGUPuNDlDTfFuchMVSss4kS1K3tx2vjN8o1dcCR07VPUP/Ce7Ayj/pcNEQSKBXvGXp5l+rJ2rQg2pCNsJULbvtcz1ZYvfcBS4TtwNp3z1xrmHQpoAx9ysnSHxOL7zIV/YXIoBVlZ5V8Amf/lPulrKARVRu3pl311tZbCPbTwsaYeqTF/L76ZPBTvfU/15ptEWL321SXF8wz4ekM+khIixX+Wa7mB9Pj0y1lmbGboSl6UGLmnGYX7YGCxNEwC7EFw8NSPrj4RUYdaSY9RAoz7SgbI4Qs8m4OPh6UcVae24ViRO5q0GTM66X1BsSRWycYFDorQnvf7qjnquHejWMtHGKChpt2MNaajCXOY9XRVx85IpLWkLIAVe5GgrwOltt46/4XFtvm40/51ItvDheXt1OaIOMdiZPg6C0ZCwWj5dI5GYe2nLShVTVCrM16bVbeTdrZKSmPd1Lf/++D70D9MVgkuH8I00qhCqgIC7jfDcoyoDXkmFHKeAV9wgqWikApWgBNZ2vEUO4hTlpHneGoA1jDuQsvwx2WNgVkABjSst5m0uoRphLozP1rr+3nz2KGg9Qx6szBkF2Wf7zNhLelUyDZvJQLF50uanrPy4jXu6azUl9iSiaWDLkFpFXDN8DA27BlLtTwR5tevrvMJr0UAvd6ANdSCx+QOOg9W13s5cHiMXR67LLqa3F6xJkjjN3gn8diQkhGFUbW5kpFH5uEzzrhxC9RQgsDvIr7WmjkEwlf/26K1UjJvifAqQsBu/9lQ+EmylzOwhfAbyxVHnK5bMhG1n6Rfxp+GaOQgJHUmlaiJLbQWL8Rf0snvGnz4zhnGNUs/71mAJYtUZpgPVRjQfYFoJN9oQxcPP7I1COcIr6tucWBeRV0h9wL199Nwc714Evejhws5vi1PA6F+C6wINcBFjK0VHtU+aMN0JYnopj+ln6hgYh/nK/pZGDtmXz6SibYUvHQAQwx6X10DRhpgwjvI7TkhLHW0ajhzHG3tt+brbfYctq27cqrVFIyMozl75ARaBtzXKG3sz0Odhdshph5TAhexF05bsKdZABqjhM5UvzhlEeROWxoJG6tArSrvuyFhUR88bC4v5yCTnNyfgISWUB5lrJoTRrn/OXWptwy4QC9zFwGIdaoaLxYl85oTDCkvLMrRzHnUl6XNoFqUGnmM652BES0mUKYDmQFQ9SG+escCYRpKEZ6dSdQbQ1zayOEw3Y/B4RgnMVJ3PzaV/gHbMrAqQVBEQWHUiR4a160Lngd0ROb8MsL1dqkAesoE1D5PbJK0ocaSXlf6eJOUaQ3BPNn8/xK8LPFzy05yo7j03wZ8NaL2jTfCkl9LwVa7b+Rgx9Ir/TmliJq7VSn5xvmCdcLSFNgKW7XeHWmA24oKBCktnp7FBfVHgYaV1xY/6RObDT5djNDn/3NWlkRDQDphYc7Oi19axjJEdVmD6mPtGHWwz8vRibTx9pH8uTLkVOlJSJO+CzQz64nXwEmcxTyHSakCe3lj+pspHnRnKYWSv3rSw28JS2Br2dwynNBohMRZWkjBcewP5aLb1m8TroAPU8WU6kRKOXx7KPpULOjWk9eb6oDzWKl+cgIGisbaKvhHAvJKQJ1kq7uVuPwoLrSO3ZHwmhTj4MIoC471iz24PWDjGtxZY6drOpeDDT5ulCOJ0ZU9LsDlc5d1pPk+OMvvPFXQTDL0f2vV4+GKIZLjuhoSt3Zxti3KHjs3hD8HqLoky5irbLZJhkeEuwh8mMiU5Za8xzP/s5ZcWxvz/URYLO26MXQJrPeF5VO+kLV/uLBDRYoY+NkQgkzBZOR/LTZZfxdXhN+q2dmuGGKVeiseIj1q+BAAAAAA==');