---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---

# Info

Welcome to the generated API reference.

# Available routes
#general
## Returns the authenticated user

> Example request:

```bash
curl "http://localhost//api/authenticated_user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/authenticated_user",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/authenticated_user`

`HEAD /api/authenticated_user`


## /api/fruits

> Example request:

```bash
curl "http://localhost//api/fruits" \
-H "Accept: application/json" \
    -d "name"="consequatur" \
    -d "color"="aperiam" \
    -d "weight"="4035499" \
    -d "delicious"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/fruits",
    "method": "POST",
    "data": {
        "name": "consequatur",
        "color": "aperiam",
        "weight": 4035499,
        "delicious": true
},
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST /api/fruits`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    color | string |  required  | Only alphabetic characters allowed
    weight | numeric |  required  | 
    delicious | boolean |  required  | 

## Remove the specified fruit.

> Example request:

```bash
curl "http://localhost//api/fruits/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/fruits/{id}",
    "method": "DELETE",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`DELETE /api/fruits/{id}`


## Refresh the token

> Example request:

```bash
curl "http://localhost//api/token" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/token",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET /api/token`

`HEAD /api/token`


## Log out
Invalidate the token, so user cannot use it anymore
They have to relogin to get a new token

> Example request:

```bash
curl "http://localhost//api/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/logout",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST /api/logout`


## /api/fruit/{id}

> Example request:

```bash
curl "http://localhost//api/fruit/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/fruit/{id}",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
{
    "id": 3,
    "name": "strawberries",
    "color": "red",
    "weight": "12",
    "delicious": "1",
    "created_at": "2016-06-18 08:50:59",
    "updated_at": "2016-06-18 08:50:59"
}
```

### HTTP Request
`GET /api/fruit/{id}`

`HEAD /api/fruit/{id}`


## API Login, on success return JWT Auth token

> Example request:

```bash
curl "http://localhost//api/authenticate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/authenticate",
    "method": "POST",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```


### HTTP Request
`POST /api/authenticate`


## /api/fruits

> Example request:

```bash
curl "http://localhost//api/fruits" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost//api/fruits",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "apple",
        "color": "green",
        "weight": "150",
        "delicious": "1",
        "created_at": "2016-06-18 08:50:59",
        "updated_at": "2016-06-18 08:50:59"
    },
    {
        "id": 2,
        "name": "banana",
        "color": "yellow",
        "weight": "116",
        "delicious": "1",
        "created_at": "2016-06-18 08:50:59",
        "updated_at": "2016-06-18 08:50:59"
    },
    {
        "id": 3,
        "name": "strawberries",
        "color": "red",
        "weight": "12",
        "delicious": "1",
        "created_at": "2016-06-18 08:50:59",
        "updated_at": "2016-06-18 08:50:59"
    }
]
```

### HTTP Request
`GET /api/fruits`

`HEAD /api/fruits`


