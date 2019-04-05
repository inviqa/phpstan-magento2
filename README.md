# phpstan-magento2 extension

Extension for [PHPStan](https://github.com/phpstan/phpstan) to allow analysis of Magento2 code.

This is fairly bare-bones at the moment, just bootstrapping Magento

## Usage

Add `phpstan.neon` to your Magento2 project.

Make sure it has

```neon
includes:
	- vendor/inviqa/phpstan-magento2/extension.neon
```

Whilst this extension depends on phpstan/phpstan, it can also depend on phpstan/phpstan-shim, which decouples its dependencies from Magento's own use of them. Some versions of Magento 2 will require the latter due to conflicting symfony/console version constraints.

With coupled dependencies:

```bash
composer require inviqa/phpstan-magento2 phpstan/phpstan
```

With uncoupled phar package:

```bash
composer require inviqa/phpstan-magento2 phpstan/phpstan-shim
```
