## VSCode settings  
By doing the following settings, you will not have to install anything like Apache, php binary, and etc.  We use a built-in web server of VSCode and run a script you open now.  

To debug, first select a debug button and "Launch built-in web server".  
Click a gear icon to open "launch.json".
Scroll down to  
            "name": "Launch Built-in web server",
Replace
            "program": "",
with  
            "program": "${file}",
.  
