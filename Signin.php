<?php 
$isUpdateValid = 1;
if ($stitching_target <= 200) {
    if ($stitching_output > 200) {
        @$errmsg .= "Sản lượng thực tế (Actual output) không được vượt quá 200.";
        $isUpdateValid = 0;
    }
}else{
    if ($stitching_output > 300) {
        @$errmsg .= "Sản lượng thực tế (Actual output) không được vượt quá 300.";
        $isUpdateValid = 0;
    }
}
if ($isUpdateValid == 1) {
    //Update PPH_Adjustment_report_s
    $sql_update_report_s = "UPDATE dbo.PPH_Adjustment_report_s SET stitching_output_target=$stitching_target, stitching_output=$stitching_output,assembly_output_target=$assembly_target,assembly_output=$assembly_output, userid='$userID', userdate=GETDATE() WHERE reportno='$reportno' AND cycle=$cycle";
    $isUpdateReport_s_Success = odbc_exec($conn_eip, $sql_update_report_s);
}
?>