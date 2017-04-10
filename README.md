# MdsBundle
MDS Symfony Client Library

## How to install

**Install PHP and PECL on Ubuntu/Debian:**

For PHP5:

```sh
$ sudo apt-get install php5 php5-dev php-pear
```

For PHP7:

```sh
$ sudo apt-get install php7.0 php7.0-dev php-pear
```

**Install the gRPC PHP extension**

```sh
sudo pecl install grpc
```

**Update php.ini**

Add this line to your `php.ini` file

```sh
extension=grpc.so
```

**Add gRPC & MdsBundle PHP library as a Composer dependency**

You need to add this to your project's `composer.json` file.

```json
{
    "require": {
        "practo/grpc": "dev-master",
        "practo/mds-bundle": "dev-master"
    },
    "repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/practo/MdsBundle.git"
        }
    ]
}
```
**Update Vendors using composer**

```sh
composer update
```


**Configure MDS Client via parameters.yml***
To set connection parameters you can add following properties in your application's parameter.yml

```yml
mds:
  source: 'source name provided for your app by mds'
  secret: 'secret key provided for your app by mds'
  base_uri: 'mds host name and port, usually this is http://localhost:50051'
```