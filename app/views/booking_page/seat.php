<?php
for($i=0; $i < $data["room"]->seat_row; $i++){
    echo "<div class='seat-row'>";
    for($j=0; $j < $data["room"]->seat_col; $j++){
        $type ='';
        $status ='';
        $index =$i*$data["room"]->seat_col+$j;
        //Check type của ghế
        if($data['seat'][$index]->type){
            $type = '--seat-vip';
        }
        //Check available
        if(in_array($data['seat'][$index]->id,$data['receipt'])){
            $status='disabled';
        }
        // In ghế
        echo "
        <div class='seat-item'>
            <label class='seat seat-$status'>
                <input $status type='checkbox' name='seat[]' value='".$data['seat'][$index]->id."'>
                <span class='checkmark $type check-$status'></span>
                <span class='seat-name'>".$data['seat'][$index]->name."</span>
            </label>
        </div>";
    }
    echo "</div>";
}