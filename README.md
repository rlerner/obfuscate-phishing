# Command & Control: Malware Deobfuscation via Phishing

The files contained within this document contain malicious code that was discovered by a SAST scan and posted to Reddit. Any of the executable files (.php) contained herein should not be uploaded to a public facing web server or executed on a device you are concerned about data loss on. Download and use at your own peril.

Please Note: These files rely on the `create_function()` function within PHP, however that has been deprecated in PHP 7 and removed in PHP 8. You may need to download a legacy version of PHP to use these files as they exist here. Your server or host may also disable functions needed for these to execute. These are security decisions and should not be overrode or bypassed.


## Deobfuscation of the malware
 File | Description
 --- | ---
 js.php | Original, unchanged script
 deob-1.php | Low-hanging fruit: Back off the first layer of obfuscation by revealing simple function wrappers and beginning to comment out unnecessary code
 deob-2.php | Rolling the wrapped functions back into their parents as far as possible to use only bare PHP functions, as well as the income() function, and keep the $mv and $library intact (for now).
 deob-3.php | Backed off $mv to reveal the $_REQUEST["_wi"] auth mechanism, as well as the various values returned in $_code from function calls, like access and claster.
 deob-4.php | At this point, we still don't have the password (technically at least), but we have simplified the authentication mechanism quite a bit, which accepts a password via `$_REQUEST['wi']`, and stores it in a cookie that is keyed off a hashed hostname value. At this point, we can make an actual phishing site for the password.
 deob-5.php | Now, the `income()` method -- this one is a bit more confusing, but I commented it up, added a way to kick out a "binary" of the `$library` property, base64 decoded and EOL trimmed, but not gzinflated or had the password applied against it. I also counted how many cycles it runs to see if it matches the byte count of the binary -- it does. Now, to simplify program control.
 deob-6.php | Code flow is as deobfuscated as it can be at this point without breaking functionality or having the password. Got rid of the `Set()` object, re-created the constructor in global scope, which made it necessary to move the `$library` to the top. I could most likely remove all of the line feed string replacements at this point, but I just uploaded the code, it doesn't hurt, and I'm not trying to optimize the code as much as make it easy to understand. 
 
 
 ## Phishing Site
 File | Description
 --- | ---
 phishing.php | Simply emulates the 404/login form behavior of the above code, except this captures the date, IP, and superglobals like GET/POST and COOKIE to see who is attacking and capture the password
 request.log | Actual captured output from when we did this, which contains the password if you need it
 
 ## Post-Phished Site Breakdown
 File | Description
 --- | ---
 postphish-source.php | Spit out what is executed post-authentication above. Stripped all of the unncessary auth and deobfuscation code off of it here and threw a PHP start tag at the beginning.
 postphish-1.php | I was going to fix all the line endings and add tabs (yes, the keyboard's gift to whitespace) but I used a code beautifer instead for brevity.
 postphish-2.php | Got rid of MOST of the hex/octal encodings. Items like quotes and slashes were notably skipped. I'd rather do these by hand since they can easily break the flow of the app.
 
 

 
 
