<?php

return array (
     // регулярное выражение для новостной ленты 
    
    'news/([0-9]+)' => 'news/view/$1', //actionView NewsController
    'news' => 'news/index', // actionIndex NewsController
    
    
    //'products' => 'product/list', // actionList ProductController
    //'news/archive' => 'news/archive',
);
