 <!-- ok  -->
<form method="get" class="searchbox d-flex justify-content-center">
    <input class="searchbox__input" type="text" name="search" placeholder="Nhập thông tin cần tìm">
    <div class="searchbox__icon d-flex align-items-center">
        <i onclick="ClearSearchBox()" class="fas fa-times"></i>
        <button type="submit" style="border:none; outline:none; background-color: transparent"><i class="fas fa-search" style="color: white"></i></button>
    </div>
</form>

<script>
    function ClearSearchBox(){
        document.querySelector(".searchbox__input").value="";
    }
</script>