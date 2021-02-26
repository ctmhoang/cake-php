# Notes

* Define DSN in config/.env
* Configs all in app.php
* Naming Convention
    * Controller
        * lowercase pluralized name + Controller
        * function name is lower camel case
        * Callback
            * beforeRender
            * beforeFilter
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
