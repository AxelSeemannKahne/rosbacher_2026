<?php
header("Access-Control-Allow-Origin: *");

switch ($_POST['function']) {

    case "dropper":

        $dropArray = [];
        require('../../../ReceiptClearing/inc/xss_dropper.php');
        parse_str($_POST['form'], $formArray);
        foreach ($formArray as $formKey => $formValue){
            if ($formValue and !dropXSSInput($formValue)){
                $dropArray[$formKey] = 1;
            }
        }
        echo json_encode($dropArray);
        break;
}


?>