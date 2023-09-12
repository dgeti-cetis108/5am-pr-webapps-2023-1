<?php

spl_autoload_register(function ($classname) {
    echo $classname;
    exit();
});
