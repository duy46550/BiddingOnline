<?php
include('../../../conn_erp.php');
$category = $_POST['category'];
$sql  =  "select  distinct b.cldh,b.ywpm,b.cllb from 
(select b.CLBH from
(select * from CGZL where GSBH = 'LHG' AND YEAR(CONVERT(date,USERDate)) = '2022') a
left join( select * from CGZLS) b on a.CGNO = b.CGNO) a
left join (select * from CLZL) b on a.CLBH = b.cldh where cllb = '".$category."'";
$rs = odbc_exec($conn_erp, $sql);
?>
<select class="form-control" id="material-id" <?php if (odbc_num_rows($rs) == 0) { echo "disabled";} ?> style="font-size: 15px;">
    <option></option>
    <?php 
        while(odbc_fetch_row($rs)){
            echo "<option value=" . odbc_result($rs, 'cldh') . ">" . odbc_result($rs, 'cldh') . " </option>";
        }
    ?>
</select>