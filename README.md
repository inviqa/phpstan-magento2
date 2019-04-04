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
