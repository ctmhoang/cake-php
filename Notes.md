# Notes

* Define DSN in config/.env
* Configs all in app.php
* Naming Convention
    * Controller
        * lowercase pluralized name + Controller
        * function name is lower camel case
        * Callback
            * beforeRender Logic
            * beforeFilter Controller Method
        * Redirect keys
            * controller
            * action
    * Model
        * Table
            * lowercase pluralized name + Table
        * Entity
            * lowercase singularized name (nothing after)
    * Database Tables
        * lowercase like entity only pluralized
    * Table
        * Primary Key : `id`
        * Foreign Key: name of foreign obj singular + `_id`
        * Other column not have any particular pattern beyond lower case and using underscores to separate words

## Cycle

1. request
2. index.php root => request? response => dispatcher
3. App Controller
    * load helper
    * snippet of codes
    * callback
4. Concreted Controller
    * call method
5. View Action

## Controller

* Extends AppController
* Object
    * ORM Objects
        * newEntity() \ newEmptyEntity
            * patchEntity (request->data)
            * save() : boolean
        * find (or use Dynamic)
        * where(args) conditions in array kvp
        * contain(args) like where
            * Can modified with anon func
        * get($id, optional args []) ( find method by a primary key) => throw excep
            * if not existed throw http error code 404
            * contains => ['ModelName',...]
        * limit
    * Flash (FlashMessage)
        * success | error
    * RequestHandler
    * request
        * is('post')
        * getData() [POST]
* Methods
    * para method
        * tacked on into url
    * index (dir root of controller)
    * redirect(['action' => methodName, 'controller' => pluralizedEntityName])
    * __() i18n method
    * set () => AppView
    * set(para) => varName
* Pagination
    * init
        * paginate(DS) set to view
        * loop over
    * in view call Paginator->sort from Appview
    * Methods
        * prev(string)
        * numbers
        * next(String)
        * counter
    * default config paginate
        * overwrite `$paginate` array
            * order => ['nameOfAttribute' => ASC|DESC]

## Model

* Association
    * Optional Props
        * If ClassName != Asso Name => className props
        * foreignKey
        * dependent (cascading del/up)
    * hasOne ('Assoc Name')
    * belongTo
    * hasMany
    * belongToMany
        * joined table alpha_name_spec_by_uc
        * `targetForeignKey`
        * `joinTable`

## Entity

* Methods
  *has()

## View

* this->Form->create($bookmark)
    * form helper class
* print input field
    * input('field_name', [args])
        * options _tables
        * empty
* associated attribute tables._attribute name
* button(submit)
* end()
* Update need to check
    * request->is(['patch', 'post', 'put'])
    * or use allowMethod

## Validation

* Stateless (PATH|NEW)
    * ValidationDefault
        * integer('field') / email / notEmpty /scala
        * allowEmpty('field','proc') / requirePresence , maxLength/min, setStopOnFailure
        * add(field,name,[rules])
            * last
            * provider (table)
            * message
* Stateful(SAVE)
    * buildRules
        * add($rules -> isUnique(['field'']))

## Entity

* lazy loading???
* call entity method need to set first in a controller via paginate array
* magic getset (protected)
    * _set|getPropertyName use multi bytes string
* hidend field = $_hidden=[]
* accessible [] bool

## View

* View Class
    * AppView
* Rendering Class

* Cycle
    * Return
        * Cake Network res class (redirect)
        * Cake Network Exc class
    * If not render call view class
    * AppView Init and Helper load
    * Layout call and render
    * Send to user

### Element

* Simple snippets of code can reused not involved with complx logic
    * Add to element and a folder
    * call in view by `this->element('folder/snipName',[required args]')`

### Block

* Placeholder to fill-in
* Use layout = `this->layout =fileName`
* Create view block `this->fetch('varName'`
* Fill in
    * Append
    * Prepend
    * Assign
