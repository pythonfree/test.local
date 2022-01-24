<?php

$var = 'test';

function dumpp($var) {
    echo '<pre>' . var_dump($var) . '</pre><br>';
}

function dumph($var) {
    ?>
    <pre><? var_dump($var); ?></pre>
    <?php
}

dumpp($var);
//string(4) "test"
//<pre></pre>
dumph($var);
//<pre>string(4) "test"
//</pre>