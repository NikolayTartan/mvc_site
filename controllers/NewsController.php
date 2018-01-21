<?php

include_once ROOT. '/models/News.php';

class NewsController {
    
    public function actionIndex(){
        
        $newsList = array();
        $newsList = News::getNewsList();
        
        require_once(ROOT.'/views/news/index.php');
        
        return true;
    }
    
    public function actionView($category, $id){
        
        if ($id){
            $newsItem = News::getNewsItemByid($id);
            
            echo '<pre>';
            prinr_r($newsItem);
            echo '</pre>';
            
            echo 'actionView';
        }
        
        return true;
    }
    
      
}
