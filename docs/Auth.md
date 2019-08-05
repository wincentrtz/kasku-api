# Auth Controller API

## Login
- Endpoint: ```api/login```
- Method: ```POST```
- Request Body:
  - email: ```String```
  - password: ```String```
- Response Body:
```
{
  "code": 200,
  "data": {
    "token": "EXAMPLE TOKEN",
    "tokenPrefix": "BEARER",
    "expiredAt": "2019-08-12 18:17:07"
  }
}
```

## Register
- Endpoint: ```api/register```
- Method: ```POST```
- Request Body:
  - name:  ```string```
  - email: ```String```
  - password: ```String```
  - password_confirmation: ```String```
- Response Body:
```
{
  "code": 201,
  "data": {
    "name": "John Doe",
    "email": "johndoe@gmail.com"
  }
}
```