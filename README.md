# Psychedex
* Version: a (_alpha_)
* Author: [sPJz](papaverjosepherum@gmail.com)

Please contact me if you would like to contribute in any way! :)

- [x] Database structure
- [x] MVC framework
- [ ] Public API
- [ ] Effect interface
- [ ] Substance interface
- [ ] Report interface
- [ ] Taxonomy interface
- [ ] User interface
- [ ] Graphic visualiser
- [ ] Social platform

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

```json
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
            "field": "value"
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
```sql
TABLE chemical_families
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    image VARCHAR(256)
);
UNIQUE INDEX chemical_families_id_uindex ON chemical_families (id);
UNIQUE INDEX chemical_families_name_uindex ON chemical_families (name);
```

* `GET /api/a/chemical/family/list` - List all
* `GET /api/a/chemical/family/search/{ref}` - Search by `id` or `name`
* `POST /api/a/chemical/family/create` - Insert row
* `PUT /api/a/chemical/family/update/{id}` - Update by `id`
* `DELETE /api/a/chemical/family/delete/{id}` - Delete by `id`

##### Moieties
```sql
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

* `GET /api/a/chemical/moiety/list` - List all
* `GET /api/a/chemical/moiety/search/{ref}` - Search by `id` or `name`
* `POST /api/a/chemical/moiety/create` - Insert row
* `PUT /api/a/chemical/moiety/update/{id}` - Update by `id`
* `DELETE /api/a/chemical/moiety/delete/{id}` - Delete by `id`

##### Properties
```sql
TABLE chemical_properties
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    unit VARCHAR(64) NOT NULL
);
UNIQUE INDEX chemical_properties_id_uindex ON chemical_properties (id);
UNIQUE INDEX chemical_properties_name_uindex ON chemical_properties (name);
```

* `GET /api/a/chemical/property/list` - List all
* `GET /api/a/chemical/property/search/{ref}` - Search by `id` or `name`
* `POST /api/a/chemical/property/create` - Insert row
* `PUT /api/a/chemical/property/update/{id}` - Update by `id`
* `DELETE /api/a/chemical/property/delete/{id}` - Delete by `id`

#### Effect
##### Articles
```sql
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

* `GET /api/a/effect/article/search/{effect_index_id}` - Search by `effect_index_id`
* `POST /api/a/effect/article/create` - Insert row
* `PUT /api/a/effect/article/update/{id}` - Update by `id`
* `DELETE /api/a/effect/article/delete/{id}` - Delete by `id`
