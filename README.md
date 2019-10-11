# Kin29.TicketHunter

## Installation

    composer install
    composer setup

## Usage

### Run server

    composer serve

### QA

    composer test     // run unit test
    composer tests    // run test and quality checks
    composer coverage // test coverage
    composer cs-fix   // fix the coding standard

### Command Test

```
php bin/page.php get '/index?keyword=teto'
200 OK

{
    "greeting": "Hello BEAR.Sunday",
    "_links": {
        "self": {
            "href": "/index?keyword=teto"
        }
    }
}
```

```
// after run server
$ curl -i 'http://127.0.0.1:8080?keyword=teto'
HTTP/1.1 200 OK
Host: 127.0.0.1:8080
Date: Fri, 11 Oct 2019 15:24:55 +0900
Connection: close
X-Powered-By: PHP/7.1.30
Content-type: text/html; charset=UTF-8

{
    "greeting": "Hello BEAR.Sunday",
    "_links": {
        "self": {
            "href": "/index?keyword=teto"
        }
    }
}
```

    
