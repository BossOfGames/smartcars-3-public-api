<?php
if(!defined('API'))
    exit;

echo(json_encode($database->fetch('SELECT id,fullname as name,cruise as serviceceiling,maxpax,maxcargo,minrank FROM ' . dbPrefix . 'aircraft WHERE enabled = 1')));
?>