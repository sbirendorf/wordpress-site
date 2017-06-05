
<?php
  /*


  */

  class PnowRestAPI{
   /**
   * @param $url: prospectnow application url
   */ 
   public function __construct($url){
    $this->url = $url;
    $this->error = "";
  }

  public function postToServer($endPoint, $dataArry){
    $handle = curl_init($this->url.'/'. $endPoint);
    curl_setopt($handle, CURLOPT_POST, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($handle, CURLOPT_POSTFIELDS, $dataArry);

    $response = curl_exec($handle);

    if(curl_error($handle)){
      $this->error = curl_error($handle);
      return false;
    } 

    return json_decode($response, true);
  }

}
?>


