# CMTestPlugin
## About CMTestPlugin
Example plugin (base files generated by sw.phar)

Thanks to composer.json it's installable on an shopware installation that supports composer:
```
{
    "name": "cornerstones/testplugin",
    "keywords": [
        "shopware",
        "plugin"
    ],
    "description": "Testing composer for plugin system of shopware",
    "license": "MIT",
    "extra": {
        "installer-name": "CMTestPlugin"
    },
    "type": "shopware-plugin",
    "require": {
        "php": ">=5.6.4",
        "composer/installers": "~1.0"
    }
}
```
This repo can be added to packagist or any other composer repository.
Alternatively add it via VCS like so (in shopware's composer.json):
```
"repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:1338/shopware-composer-plugin.git"
        }
    ]
```

Then simply:
```
$ composer require cornerstones/testplugin
```

## License

Please see [License File](LICENSE) for more information.
