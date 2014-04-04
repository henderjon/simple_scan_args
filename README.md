# simple_scan_args

simple_scan_args is a CLI function that will parse an array for -flags and
-key=value pairs. It supports the following syntax: "-f" "-flag" "-key=value"
"-key value". Using one or more dashes has no effect.

# Usage

$args = simple_scan_args($_SERVER["argv"], array $keys, array $flags);

# Installation

Install the [Packagist archive](https://packagist.org/packages/henderjon/simple_scan_args)
using [Composer](http://getcomposer.org/). I will *generally* respect
[Semantic Versioning](http://semver.org/). Learn about how Composer
does [versions](https://getcomposer.org/doc/01-basic-usage.md#package-versions).

*Note the absense of v1.0*

```
{
	"require" : {
		"henderjon/simple_scan_args": "0.1.*"
	}
}
```

# License

See LICENSE.md for the [BSD-3-Clause](http://opensource.org/licenses/BSD-3-Clause) license.





