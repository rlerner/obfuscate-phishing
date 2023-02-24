# Command & Control: Malware Deobfuscation via Phishing

The files contained within this document contain malicious code that was discovered by a SAST scan and posted to Reddit. Any of the executable files (.php) contained herein should not be uploaded to a public facing web server or executed on a device you are concerned about data loss on. Download and use at your own peril.

Please Note: These files rely on the `create_function()` function within PHP, however that has been deprecated in PHP 7 and removed in PHP 8. You may need to download a legacy version of PHP to use these files as they exist here. Your server or host may also disable functions needed for these to execute. These are security decisions and should not be overrode or bypassed.


 File | Description
 --- | ---
 jscarvU7.php | Original, unchanged script
 deob-1.php | Low-hanging fruit: Back off the first layer of obfuscation by revealing simple function wrappers and beginning to comment out unnecessary code
 deob-2.php | Rolling the wrapped functions back into their parents as far as possible to use only bare PHP functions, as well as the income() function, and keep the $mv and $library intact (for now).
 deob-3.php | Backed off $mv to reveal the $_REQUEST["_wi"] auth mechanism, as well as the various values returned in $_code from function calls, like access and claster.
 
 