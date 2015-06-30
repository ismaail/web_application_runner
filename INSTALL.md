## Composer global installation



Update `~/.composer/composer.json` file by adding the following lines

```
{
    "repositories":[
        {
            "name": "ismaail/web_application_runner",
            "type": "git",
            "url": "https://github.com/ismaail/web_application_runner.git"
        }
    ],
    "require": {
        "ismaail/web_application_runner": "dev-master"
    }
}

```

And then run the command

```
composer global update
```

## Run

To run the runner server, inside the target folder run the command:


```
runner
```

Notice: the path of bin folder of the global composer must be in your $PATH
