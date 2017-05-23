<?php
class JsonView{
    function __construct()
    {

    }

    public function show($evenement){

       if (isset($evenement)){
            http_response_code(200);
           echo json_encode($evenement);
       }else{
           http_response_code(404);
       }

    }
}