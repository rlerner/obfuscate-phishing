# Command & Control: Malware Deobfuscation via Phishing

The files contained within this document contain malicious code that was discovered by a SAST scan and posted to Reddit. Any of the executable files (.php) contained herein should not be uploaded to a public facing web server or executed on a device you are concerned about data loss on. Download and use at your own peril.

Please Note: These files rely on the `create_function()` function within PHP, however that has been deprecated in PHP 7 and removed in PHP 8. You may need to download a legacy version of PHP to use these files as they exist here. Your server or host may also disable functions needed for these to execute. These are security decisions and should not be overrode or bypassed.


 File | Description
 --- | ---
 jscarvU7.php | Original, unchanged script
 deob-1.php | Low-hanging fruit: Back off the first layer of obfuscation by revealing simple function wrappers and beginning to comment out unnecessary code
 deob-2.php | Rolling the wrapped functions back into their parents as far as possible to use only bare PHP functions, as well as the income() function, and keep the $mv and $library intact (for now).
 deob-3.php | Backed off $mv to reveal the $_REQUEST["_wi"] auth mechanism, as well as the various values returned in $_code from function calls, like access and claster.
 deob-4.php | At this point, we still don't have the password (technically at least), but we have simplified the authentication mechanism quite a bit, which accepts a password via `$_REQUEST['wi']`, and stores it in a cookie that is keyed off a hashed hostname value. At this point, we can make an actual phishing site for the password.
 deob-5.php | Now, the `income()` method -- this one is a bit more confusing, but I commented it up, added a way to kick out a "binary" of the `$library` property, base64 decoded and EOL trimmed, but not gzinflated or had the password applied against it. I also counted how many cycles it runs to see if it matches the byte count of the binary -- it does. Now, to simplify program control.
 
 
