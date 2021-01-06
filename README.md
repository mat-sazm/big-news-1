# Big News

```txt


                                                                                                                                            src/views/layout/header.php       src/views/layout/footer.php
                                                                                                                                                               \                 /
                                                                                                                                                                \               /
                                                                                                                                src/models/<PAGE>.php       src/views/<PAGE>/<SECTION>.php
            config/routes.php                                                                                                               |                       |
                    |                                                                                                                       |                       |
config/database.php |                                                                                                                       src/controllers/<PAGE>.php
           \        |                                                                                                                                 |
            \       |                                                                                                                                 |
            config/config.php  >>>  app/environnement.php    >>>    app/err_reporting.php   >>>   app/dbconnect.php  >>>  app/routing.php  >>> app/compile.php
                    \                        \                              |                           /                       /                   /
                     -------------------------------------------------------|-----------------------------------------------------------------------
                                                                            |
                                                                        app/app.php
                                                                            |
----------------------------------------------------------------------------|-----------------------------------------------------------------------
                                                                            |
                                                                     public/index.php

```
