<?php
$value = "";
echo $dif = empty($_POST["submit"])?"":$_POST["dif"];
?>
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.radioOption').hide();
    $('#produk1').show();
    $('#selectField').change(function () {
        $('.radioOption').hide();
        $('#'+$(this).val()).show();
    });
});
function dataToText(obj)
{
    var difference = obj.value;
    document.getElementById("price").value = difference;
}
</script>

<div align="left" style="border: 2px #f0f0f0 solid;height: auto; width: 200px;padding:20px;">
    <select id="selectField">
        <option value="produk1">produk1</option>
        <option value="produk2">produk2</option>
        <option value="produk3">produk3</option>
        <option value="produk4">produk4</option>
    </select>
    <br/>
    <br/>
    <label>Harga</label>
    <div id="produk1" class="radioOption">
        <input type="radio" onclick="dataToText(this)" value="harga 1 produk 1"> Harga 1
        <br/>
        <input type="radio" onclick="dataToText(this)" value="harga 2 produk 1"> Harga 2
    </div>
    <div id="produk2" class="radioOption">
        <input type="radio" onclick="dataToText(this)" value="harga 1 produk 2"> Harga 1
        <br/>
        <input type="radio" onclick="dataToText(this)" value="harga 2 produk 2"> Harga 2
    </div>
    <div id="produk3" class="radioOption">
        <input type="radio" onclick="dataToText(this)" value="harga 1 produk 3"> Harga 1
        <br/>
        <input type="radio" onclick="dataToText(this)" value="harga 2 produk 3"> Harga 2
    </div>
    <div id="produk4" class="radioOption">
        <input type="radio" onclick="dataToText(this)" value="harga 1 produk 4"> Harga 1
        <br/>
        <input type="radio" onclick="dataToText(this)" value="harga 2 produk 4"> Harga 2
    </div>
    <br/>
    <br/>
    <input type="text" id="price" value="<?php echo $value; ?>" name="dif">
</div>