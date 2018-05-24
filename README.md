# Installation

## Step 1: Download the Bundle
### Method 1
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require timu57/test-bundle
```
This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Method 2

```json
# your composer.json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Timu57/TestBundle.git"
        }
    ],
    "require": {
        "timu57/test-bundle": "dev-master"
    }
```

## Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            // new <vendor>\<bundle-name>\<bundle-long-name>(),
            new Timu57\TestBundle\Timu57TestBundle(),
        );

        // ...
    }

    // ...
}
```

# Usage

```yml
# config.yml
timu57_test:
    message1: "%message1%"
    message2: "%message2%"
```
