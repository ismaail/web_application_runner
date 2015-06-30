
Why you need a web application runner
--------------------------------

as a web developer, you spend the day running web applications,
like demo's, tutorial's, testing a new idea in separate project,
reading offline documentation, maybe you wanna take a look on an 
old project, or just start a new one ... etc

and for that, you find yourself typing `php -S localhost:some_port` or
`python -m SimpleHTTPServer` or using node to run a local web
application or express, and the list goes on, and this process/habbit
slowly become annoying, and sometimes, you may not do it at all, because you
are too lazy, well runner came to the rescue.

and don't forget when you wanna switch between web application, you may forget the
port, so you use `netstat -np | grep 127.0.0.1` to remember the port number, or
just create a new resource, which is overkill specialy, if your computer is like mine
restarted 2 to 3 times per week.

let me ask you: if you can start web applications by a single click, without creating
a new resource, when all you have to do is copy the script into your project 
directory, create a reference to your desktop, and voilà, probleme solved.

in fact that is exactly what web application runner is all about, copy runner
into your current project directory, and run it.


How to use web application runner
---------------------------------

1. copy runner.php into your project directory
2. make it executable
3. run it

the chrome web browser will be opened pointing to your project.

Installation
------------

```
curl -O https://raw.githubusercontent.com/OussamaDEV/web_application_runner/master/runner.php
chmod +x runner.php
```

Problem to be resolve
---------------------
Well runner seems good for now, but i think we can do better, i mean it's good for offline
documentations, maybe long term projects, but what about tutorials, and testing new ideas
should you go to github, copy the script into your project directory, still overkill, shouldn't
be easy if you just run somthing like, from your command line:

`project_directory$ runme`

Challenge
---------
This is exactly what you need to do, rewrite the script in a way, so you can just type
runme from the command line, and the project will be started.

*remember* we still need that long save thing, and the single click behavior, so do not
broke it, and good luck ;)

How to submit solution
----------------------

 - Create a new branche, send me a pull request.
 - or the easy way, create a new repo and comment the link on our facebook group.

https://www.facebook.com/groups/830350307042515/

Condition
---------
i didn't include any test, neither use OOP, so everyone can take the challenge, but feel
free to use tests, and design your solution, or even create an interface for it.

the developer with a complete solution will be accepted to join our private group,
and contribute in serious projects, so good luck everyone.
