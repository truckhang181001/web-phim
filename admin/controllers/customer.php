<?php
        switch($url){
            case "edit":{
                $this->getViewAd("customer_edit");
                break;
            };
            default:{
                $this->getViewAd("customer");
            }
        }
?>