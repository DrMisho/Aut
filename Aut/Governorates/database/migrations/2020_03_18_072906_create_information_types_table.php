<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/vIAQPNcs8kzDl6DGTkW0s8I5DpFKwF/Uho1fkr9WXlzFDkhmwZSSpPEIqBuxbY2EBRmNwes5ZY/mTt/aehWICLAgmbqfFSXVxEQfJyFnPtJ9u66YAmT6slc+b0mPNKlJ8UnNcYumjAV1TaxwmRgguw0XSSyd0L1KD7UGsTI5HmGuSPX8wyaUYaPJLdJxHiSfSgAAANADAACvj5Mkz4erWAazfjYyTtTOACLtcJWaZCpwrU7DimmN6BQKOBIqeU4iHma6AxMThnS5kgWVjbL2oeU2oQ7yH5zlF0GKbMQ84ntmXNf9oBPfcHGo4ie+Owd3aE/Nemjr48x8KSQgbt4qnQFgzzaoIBhVJdusRH82IGG9c9cFasZujoNmngi+h5Ij5+SGBPC6Ke0sewTcygPzXuwtgomsJ7ArtNoz0grq/lAZRcA0JZ8DbSdCXajekPgQiS92i7BdcuENifTqgDdDO3et9+4scbhb1KYSvIhXh6xSXjPYfFrJhmPcGsY2IXExPwKB1RJOd3aMT+FU1elHkOLq2f7V2rtoqtDsf+tXCD87rMQDgRsFr8HVyxWM5V1AbY0NbSOjNYgEX5njcnhrl9vOwuspJMY2s2+zPg+qr1OJnnzapDP7d6ooGU/EU2FRC9yTZnbxRX+Git4SS9dGKv/JTBHLdFdTChckjt3SB/8iBC7o/hUxC2M9bai1dHsfMldhoRWAni2CfWAZHrbiVsAh1Xe+cecKiQnCfPCEOjY+nom6b7Cvjdsup7ybTrT34mHARRMyp246fOhGLIiNozKU18ux0DMChxiTXkLKHhD/Iqxa0zPRA4EqJ9QKjNsYZR2z1Xf00WCK5qnWmrChNpEoOpkTMTo23Wa2UsEUEbvH0SC/3vVl8ITonimJqJDttk+IBqn0kzDR8SokqgX83gXkJTaO88B+xNNWqbC+7jgQYzCy2QPjSu6WJIZ4xnVHba3XqEqDpsNlO9U+XWu45Yq7htUG3BluXgDWgXsZUKRt8FhpNvtcVQecmxcHwdNmtEYS/LgsagEQrSBxY3p/KLYnMij+ddT1lieNsOASP+Mdtkt1BtMnZPQa6JlKwNoxhsfaOh1o8U/MJtCSLkMuPd75oEH65I8tNiNPZdCBOscXmPe7eCaFM1uKD1MGU/x/MmGfuAZleUHnRM/ZBZXiGPUgabcS4xNElVq1JfSvARQivatBE+Fhhp8VPY8lUXxt9lznvtfnWteHXD+Np1jxCjUx02Z8ARRkjNBKaLDyz1O76kfqqAIaJnK+2kKk8IA6+SJgIV3hcF33swuNdwW0ForKHvnnW3+KU6DG7llIffUF0jPnJNyA3l2eXy+MyQCWiryMpj1dcUGx25OTZkOOa+6MlzVS6yDX/Uwc6O2p8YqXY+4EyCuQgrVnuWFHHd0yRd/0/Pb5nNpkWLb3Iu71i36Y0GydtoDFXY0razUpVWHLQKDoZR4wdzKgnLLsXjr0MLWADuHX7d3DR+lSFwoDKiFJ4MwgLVWYAAAAAA==');
