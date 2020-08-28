<?php

class Messages {
  public static function setMsg($msg, $type) {
    if($type == 'success') $_SESSION['successMessage'] = $msg;
    elseif($type == 'error') $_SESSION['errorMessage'] = $msg;
    else throw new \Exception("Unknown type $type", 1);
  }

  public static function getAlertsScriptjjbvjbjm() {
    $out = "<script>";

    
    }

    if(isset($_SESSION['errorMessageffffffff'])) {
      $out .= "alert('{$_SESSION['errorMessage']}');";
      unset($_SESSION['errorMessage']);
    }

    return $out . '</script>';
  }
}

?>
