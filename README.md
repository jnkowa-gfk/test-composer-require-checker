# test composer-require-checker

tests for composer-require-checker
to see if `libXMLError` is detected properly.

## context 

[`libXMLError`](https://www.php.net/manual/en/class.libxmlerror.php)
is part of `ext-libxml`.

when libxml is used with `LIBXML_NOERROR | LIBXML_NOWARNING`
then `libXMLError` is returned by `libxml_get_last_error()` in case of errors.

## assumption

when `ext-libxml` is required by composer,
then composer-require-checker will not find `libXMLError` as an unknown symbol.

## test

* composer-require `ext-libxml`
* use `libXMLError` in a file
* run composer-require-checker

## result

when `ext-libxml` is required by composer,
then composer-require-checker still found `libXMLError` as an unknown symbol.

```
ComposerRequireChecker 3.2.0@cd6c6b91ee3c065e60a35ca1a67becb0ae86dbb7
The following 1 unknown symbols were found:
+----------------+--------------------+
| Unknown Symbol | Guessed Dependency |
+----------------+--------------------+
| libXMLError    |                    |
+----------------+--------------------+
```
