<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/hJPsvZq2BzwWdzLnOfNUnA/OfMdkzrTX6pKUuEkHpZbxIs6g7SNF5UNt3KvFIfCc7VvEn+vOh6KC3g65qL+Sasf2EoVZ98onbs7gBYZrji0QlsSuzx/ioOFbfGZGYbclSES1VEAxm3lFex1cP13HZPRo0+LvYnNTUv5qvt7AEzSsBLa9IeddUnw6o0KMQS9/SgAAAMAEAADzXLPn9DfrGlCc91n2XYV690PPWjTEuAzSQ/reQMgaJkrcdKVnbfJub8k4v59qXPf72cj7Xv764PxtJPhzDkYNMUZacJekJinEwT2BxC+bw57UfXzHE+JlsPtoBt/wSGTxkosLwIUiIvDdWe5OlbLL4OIiYm95GK8uHgdf7XN77PcTwEnu0hHpGdQf17Rg+vGJVpWr4udeMO6faPQQvJwYzF8pwj7heHrUs+y9757L5R7o8iYQEQI7t/KiPfoX4MqzfZPgv4NhpvbWd0vGNdJcdQ4jTF2sKaYnoykwMr99G6K9aRCGDdUz/XkI8YAUm1J8277DOCbBOMVfwSNqA6xqgXWkryEdmrU6iKJv05kVtuN1JivY9n/cWcqE2fhG6RonYBnAYNJNzIOq4txRfO2ttknT1RTN+iPBDLBux2HQM7qJS9XVw8KG2MvEBgF/JhjRQw8BSqafdJootAQFGMJMf5Pp7BDwwtvbzXjNHnZKPMRONkHYwQAn/OluBOz49DzZiuIPChBHL/UlhjhDvIZvA9zA9BPSl28eJX3eo5MSlOaDp1XZy2wOkryqSBlVAo03tgDEp0aE/7spDiRsXMM4WJzO4EoqztlNbZFHvjJ1vIzd1lhS8DdodRogkf3zXtI240VraYYDHtd9cO6xUSW2+YmdIjBrLiUc8mU5XXbnjEDhjc/AO894ihKHrkydi4YXH0yJP+cNx4gPE1hVuEFquQM/NIcIqaiGGYG/JwbAricepoLCfFxbhoXanpMGMBvNbvIt6F4thnJeRVIR6zWLW1iqxa7wIssE7QLt4yAJSL64fE8JDLzw48xA/5eLNSXiLFOQcE9N7qzEB8hueZpQedvSxNnM3LukFehGEAa9OKeT+PW4Dda4r1GQzj1twXcoVR+kaN/3ITr0b6Pky9xs8qRkyC+0KCIaHcuagXozG6Bja6hp9BGJQ9V5rCBfrM169ul1NV6IRTd99NNAbEnZiBWLlo0OoHX8Mebzbwp2FdvFM94tLrsFkKxfdVH/B+lzIwJA51xKfdTruvM/ppqQwsWCjppM9T0IkUOf60FdbIQvtARsWiV7shdJq1NUx4GodfK9XzYvoWD/8eWJyjZa+uDEGEfl/b772wMgtw4LQz92tibkcHPYrkSPsUkIm/iELhJzKF1R3Ww5zjM1zFNv5trE2rWY7TYBXotfarThzJ6Me3mrHCfuAkIlu1YY225YDT46zOqmQg8eACutbFC88jenqzIZUOCpuS2RMpiQI6Mhu+BEDag6qhQ5y3l7H3fR0qaDePu7zLTbcSd1bkTf1/2bOrQoWidBhG3uth/WWXklbYBoJyO+ANqnoqOxSpNclJQVs6Wq7EA8PMlU0ii4UAXk4d0fBqKcpFc9v8DhSS+a+7wQOjBuhFIFE4fU6nMQbYYyE0V5w/qh76MFUAMQJ6Pnobzidi+4dA/qBy4aInQ6vjnUWcE+xFL8e4zfyP6gIHR15RXui5Vdau2QSfdsTa07B44kSTg+0Xo761ixMDwtmuijkKEkRldHvsYBfBcqVFTwvxGL1udkKovON5ivQFvP9YLwbDBrIXKZdgyDEcRtb1VooPah70lYsS55eMGv0Xu4pmEoV3kHsuCLG1Z+AAAAAA==');
