<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/qbMriAwc9sYSHGJEq/Q61vXc9HRFUdLUXQphWStLlZitSZA7bTvcfbqwyfsQtOLKt7hQ092as4+91sWykVxgIeZOCiI1lHNtrddo1JxAA6VjhKAWtSOW8xFcU9es2CzFdA1h7ixqXob7b9G8YTo7fWRrhiheibK5bJUv/gb+FACU1FU9Q50G7BloQl/nZyZeSgAAAMgEAACcXHTSQeBKamYXm1VDRMmRZ1EHBVOwbeSBV7yCJtlCFp8wONPcTGHwJVYixpO0dVHtldWEwDuVfFjXdRGp+sw4MR1b6KZvv6KJ9pqmgT5lDvnzhaxQhftTvFUZsp7wbkq7a3L42SFH88hVwxGZjB7Qzi3G6CfqCmT9BPexBRzZ/ddLjn+ZH3HhQK8HdYmTbflQiqeZWb/o+od8+XQFRgedfUioB92rqcTkGHbaNllbiTNRKqObp+UIRw51HHG3afsOUkdFTq9EUU0jX1F+TMpGOBZzKxWn/lszzgUXliuHwK4lW5YYSthMfIP+RlX0gvtqCLC91T9SVG/umfYrY0ORrEzGu+En+ZgCwwCp9PiWHisjuUCbhS6DUSoZCmyOr/7HCz3u593RFMWLggLvqqx6OHWxIPUU/t9Wi7FsBLjY36etMpxw6wm7g5DQKZGRlHn8IAMKdHuto3iMbwtnhC2h8p6X7aPIgTDrnOvKCP6p44FChPItfn9wIoJzqdJV4oUPLiPcWXcSFKpoG3j8BXbuMFBWpjYLF95/IvcLGbmArVMm6hQhz04y7TXWDf9sBn0Y1u8rlGfQDkycjIPPpYJMdxBaL8eFXZEx6knJhCtRcNdFtSMHBZPKJoKSptBQ6DMudiUOe5DDg9LET8kIsh+ajwrrYIUs69ZVLbdqskZSBpikqQF+UDJFj9AnKHBWWZSg7KzBrjd6INJ6fjf6GBQgdOxuF0/Gipd61XcYE1fiIzlYfKuwYfrd3p5fYMbNIJ2uGqwMTh48vHJW8jQdJF+VCJd6LBOqqOWCnzmbL+AwbZLHhxp0Azs8twfY1VXCTp5zuMQgGNlGQLKnD/yE+1JA+CnK2nQxrRXn+E4iU5VLWpGIwxj31fzZ95vexKcCGSO8M4/NRvmuhsKdwMhnhXD8sP2NrvUetu+ufGbw7p2LBRCGZ1CTUJTuiPgCYa/AZWpSAnwpaAth90yGdvhhDgRuPo2HrT3b27CQBb9ilSCVWmX3fOcuz+nzv3rLCkvayfcR5oY5CQ48RNKd4T5AcS3VaoltGJlHtWo9dqI8+wjZNn98KzUmBse2rB88zBjQi2wqdMt3S0cW1gWqsMbwWW1GPQcu1a8K01vbcUqHzey5PmSC9n/v7IRfqxIRnrQjt3/B5k89h2Sbw2BOnugdi0OVDvIRmGnRtXqlBpfmjv/g7f/CkUmF4J0uurAFcJhuCQSFTh/SjjedP1T8aXJPVXG/08i33bW5f8B01mWO0Y8/odSlz6jeeY4RkJo9AHRDxZ5O1HaUbla+coQQYbbJ3SqL2Xbbn4Zhx2SQKrw0LUJPuBqRJ7LGVkRkc+99se1Z6UPZYaJQS4hxXD8NSZsKgyJtjgg7nLzqWrtWRAjK+nLofKGFIO4omINJ4UsPF/d/8PXBI0LIXtSYRJI2cSAIKHJHVNT1pkokrNBK+Y7mb72jpc9Dd1SRvNadeMAKebMIx0Oc2Rf7iea/VvocSaQmJ3NtxV5P84W6H0qIQXviraWSxJTUS9b8J+QNRKdUi2UuJd2eo9AY2rlYAeugvi5Vv4NtYUgN5DPk/hUeicY1cCNkaJR38xhPJc8VbGexxGRcvZqzU3Jp447Oj1WK4h5V+oryQlAgB5pn0hYAAAAA');