<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
                $dataCategory = $this->getModel("tbl_category")->getCategory('id='.$_GET['id'])[0];
                $this->getViewAd("category_edit", [
                    "category" => $dataCategory
                ]);
            };
            break;
        }
    case "add": {
            $dataCategory = $this->getModel("tbl_category")->getCategory();
            $this->getViewAd("category_add", ["category" => $dataCategory]);
            break;
        }
    default:
        categoryDefault($this);
}

function categoryDefault($subClass)
{
    $dataCategory = $subClass->getModel("tbl_category")->GetCategory();
    $subClass->getViewAd("category", $dataCategory);
}
