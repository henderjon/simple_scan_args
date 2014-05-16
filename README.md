# simple_scan_args

simple_scan_args is a CLI function that will parse an array for -flags and
-key=value pairs. It supports the following syntax: "-f" "-flag" "-key=value"
"-key value". Using one or more dashes has no effect.

# usage

$args = simple_scan_args($_SERVER["argv"], array $keys, array $flags);

# installation

Using [composer](http://getcomposer.org/) `"require" : { "henderjon/simple_scan_args": "1.*" }`

# license

See LICENSE.md for the [BSD-3-Clause](http://opensource.org/licenses/BSD-3-Clause) license.

## links

  - The [Packagist archive](https://packagist.org/packages/henderjon/simple_scan_args)
  - Reading on [Semantic Versioning](http://semver.org/)
  - Reading on[Composer Versioning](https://getcomposer.org/doc/01-basic-usage.md#package-versions)





