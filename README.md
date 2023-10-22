## Telecom RESTfull API

#### What i'm using: 
> Laravel 9, MySQL, Docker, Nginx, Postman, phpMyAdmin

#### How to run: 
```bash
docker-compose build
docker-compose up -d
php artisan serve
```
_After starting a project you may open [phpMyAdmin](http://127.0.0.1:8080) to create or view some db data._

### API endpoints

<hr>

#### GET equipment-list
_Get list of equipment with option q, which can find data by word or spell by letters_
>/api/equipment

For example: `http://127.0.0.1:8000/api/equipment/?q=123`
<details><summary>Usage in Postman</summary><img src="https://i.ibb.co/F0HfvSn/image.png"></details>

<hr>

#### GET equipment-by-id
_Get equipment by id._
>/api/equipment/{id}

For example: `http://127.0.0.1:8000/api/equipment/1`
<details><summary>Usage in Postman</summary><img src="https://i.ibb.co/GpDzjF6/image.png"></details>

#### POST create-equipment
_Create equipment. You can send multiple data and you will get array with success data and errors that could not be validated. Validator also check serial number with mask and return error if it fails._
>/api/equipment

For example: `http://127.0.0.1:8000/api/equipment/`
<details><summary>Usage in Postman</summary><img src="https://i.ibb.co/4Kr6y2b/image.png"></details>

#### PUT update-equipment-by-id
_Update equipment. you can set the id and specify new data for updating. Mask validator also works._
>/api/equipment/{id}

For example: `http://127.0.0.1:8000/api/equipment/1`
<details><summary>Usage in Postman</summary><img src="https://i.ibb.co/Wcr98hv/image.png"></details>

#### DELETE delete-equipment-by-id
_Delete equipment. Safe-Delete method (SoftDelete)._
>/api/equipment/{id}

For example: `http://127.0.0.1:8000/api/equipment/1`
<details><summary>Usage in Postman</summary><img src="https://i.ibb.co/sbPh3tS/image.png"></details>

#### GET equipment-type-list
_Get list of equipment types with option q, which can find data by word or spell by letters_
>/api/equipment

For example: `http://127.0.0.1:8000/api/equipment-type/?q=123`
<details><summary>Usage in Postman</summary><img src="https://i.ibb.co/JtLS2Dg/image.png"></details>
