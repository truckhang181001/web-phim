<form class="effect-and-categogy">

    <div class="effect">
        <h4 class="effect__text">HÌNH THỨC</h4>
        <div class="effect__items" >
            <input name='type[]' class="effect__items--checkbox" type="checkbox" value="2D" <?php if(isset($_GET['type']) && in_array('2D',$_GET['type'])) echo 'checked';?>>
            <label for="2d">2D</label>
        </div>
        <div class="effect__items">
            <input name='type[]' class="effect__items--checkbox" type="checkbox" value="3D" <?php if(isset($_GET['type']) && in_array('3D',$_GET['type'])) echo 'checked';?>>
            <label for="3d">3D</label>
        </div>
    </div>
    
    <div class="categogy">
        <h4 class="categogy__text">THỂ LOẠI</h4>
        <?php
            foreach($data['category'] as $item){
                $check='';
                if(isset($_GET['category']) && in_array($item->id,$_GET['category'])) $check='checked';
                echo "
                <div class='categogy__items' >
                    <input class='categogy__items--checkbox' type='checkbox' name='category[]' value='$item->id' $check>
                    <label for='chinhkich'>$item->name</label>
                </div>";
            }
        ?>
    </div>
    <button class='btnf btn-filter'>Lọc</button>
</form>