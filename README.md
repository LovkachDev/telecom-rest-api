## Telecom RESTfull API

#### What i'm using: 
> Laravel 9, MySQL, Docker, Nginx, Postman, phpMyAdmin

#### How to run: 
```bash
docker-compose build
docker-compose up -d
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

_After starting a project you may open [phpMyAdmin](http://127.0.0.1:8080) to create or view some db data. db:root:root_

### API endpoints

<hr>

#### GET equipment-list
_Get list of equipment with option q, which can find data by word or spell by letters_
>/api/equipment

For example: `http://127.0.0.1:8000/api/equipment/?serial_number=AAA`

Or: `http://127.0.0.1:8000/api/equipment/?desc=desc`

<hr>

#### GET equipment-by-id
_Get equipment by id._
>/api/equipment/{id}

For example: `http://127.0.0.1:8000/api/equipment/1`

<hr>

#### POST create-equipment
_Create equipment. You can send multiple data and you will get array with success data and errors that could not be validated. Validator also check serial number with mask and return error if it fails._
>/api/equipment

For example: `http://127.0.0.1:8000/api/equipment/`
Body: 
```json
[
    {
        "equipment_type_id" : 1,
        "serial_number": "00BEADD8AA"
    },
    {
        "equipment_type_id" : 1,
        "serial_number": "testValidation"
    }
]
```

<hr>

#### PUT update-equipment-by-id
_Update equipment. you can set the id and specify new data for updating. Mask validator also works._
>/api/equipment/{id}

For example: `http://127.0.0.1:8000/api/equipment/1`

Body:
```json
{
    "equipment_type_id" : 1,
    "serial_number" : "00BEADA8AA",
    "desc" : "dsdfssss"
}
```

<hr>

#### DELETE delete-equipment-by-id
_Delete equipment. Safe-Delete method (SoftDelete)._
>/api/equipment/{id}

For example: `http://127.0.0.1:8000/api/equipment/1`

<hr>

#### GET equipment-type-list
_Get list of equipment types with option q, which can find data by word or spell by letters_
>/api/equipment

For example: `http://127.0.0.1:8000/api/equipment-type?name=TP-Link TL-WR74`

Or: `http://127.0.0.1:8000/api/equipment-type?mask=XXAAAAAXAA`
