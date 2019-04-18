<?php
function displayKey($key){
    global  $task;
    if('key'==$task){
        printf("value = '%s' ",$key);
    }
}
