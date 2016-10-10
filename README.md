# Psychedex
* Version: a (_alpha_)
* Author: [sPJz](io@spjz.uk)

---
## Installation
### .\public
* `npm install`
* `bower install`

### MySQL
* `mysql -u username -p < database.sql`


## API
The public REST API allows developers to interact with the database. It has been developed with the intention of allowing third parties to develop client applications for any platform, using HTTP GET, POST, PUT, and DELETE requests to retrieve and submit data.

Read and write permission can be obtained by signing up as a developer and requesting the necessary privileges.

### Response
All API responses are formatted as JSON object, comprising three arrays: `status`, `errors`, `data`.

```javascript
{
    "status": {
        "code":    200,
        "message": "OK"
    },
    "errors":
    [
        "Invalid: field",
        "Missing: field",
        "Conflict: field"
    ],
    "data":
    [
        {
            "id":   "0",
            "field: "value"
        },
        {
            "id":   "1",
            "field: "value"
        }
    ]
}
```



### Version
Current API version is `a` for alpha.

### Services
* Chemical
* Effect
* Experience
* Molecule
* Pharmacology
* Substance
* Taxonomy
* User

### Common actions
* list
* search
* create
* update
* delete

#### Create/Update
With write permission for a given route, create a `POST` or `PUT` request with the following body:

```javascript
{
    "field": "value",
    "field": "value"
    ..
}
```

### Status codes
The API will respond with various HTTP status codes, declaring the status of the request.

* `200 : OK` - Request handled without issues
* `201 : Created` - Data writen without issue
* `400 : Bad request`- Missing or invalid field in request body
* `404 : Not found` - Requested row not found
* `409 : Conflict` - Unique field conflict while writing data

### Errors
The API will respond with an array of error messages after validation of request body data.

### Routes

Routes follow a standardised format of /api/`version`/`service`/`repository`/`action`/`referent`

#### Chemical
##### Families
```mysql
TABLE chemical_families
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    image VARCHAR(256)
);
UNIQUE INDEX chemical_families_id_uindex ON chemical_families (id);
UNIQUE INDEX chemical_families_name_uindex ON chemical_families (name);
```

* `GET /api/chemical/family/list` - List all
* `GET /api/chemical/family/search/{ref}` - Search by id or name
* `POST /api/chemical/family/create` - Insert row
* `PUT /api/chemical/family/update/{id}` - Update by id
* `DELETE /api/chemical/family/delete/{id}` - Delete by id

##### Moieties
```mysql
TABLE chemical_moieties
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    formula VARCHAR(64) NOT NULL,
    image VARCHAR(256)
);
UNIQUE INDEX chemical_moieties_id_uindex ON chemical_moieties (id);
UNIQUE INDEX chemical_moieties_name_uindex ON chemical_moieties (name);
````

* `GET /api/chemical/moiety/list` - List all
* `GET /api/chemical/moiety/search/{ref}` - Search by id or name
* `POST /api/chemical/moiety/create` - Insert row
* `PUT /api/chemical/moiety/update/{id}` - Update by id
* `DELETE /api/chemical/moiety/delete/{id}` - Delete by id

##### Properties
```javascript
TABLE chemical_properties
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    unit VARCHAR(64) NOT NULL
);
UNIQUE INDEX chemical_properties_id_uindex ON chemical_properties (id);
UNIQUE INDEX chemical_properties_name_uindex ON chemical_properties (name);
```

* `GET /api/chemical/property/list` - List all
* `GET /api/chemical/property/search/{ref}` - Search by id or name
* `POST /api/chemical/property/create` - Insert row
* `PUT /api/chemical/property/update/{id}` - Update by id
* `DELETE /api/chemical/property/delete/{id}` - Delete by id

#### Effect
##### Articles
```javascript
TABLE effect_articles
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    effect_index_id INT(11) NOT NULL,
    body TEXT NOT NULL,
    timestamp_created DATETIME NOT NULL,
    timestamp_modified DATETIME NOT NULL,
    CONSTRAINT effect_articles_effect_index_id_fk FOREIGN KEY (effect_index_id) REFERENCES effect_index (id)
);
INDEX effect_articles_effect_index_id_fk ON effect_articles (effect_index_id);
UNIQUE INDEX effect_articles_id_uindex ON effect_articles (id);
```

* `GET /api/effect/article/search/{ref}` - Search by id
* `POST /api/effect/article/create` - Insert row
* `PUT /api/effect/article/update/{id}` - Update by id
* `DELETE /api/effect/article/delete/{id}` - Delete by id
