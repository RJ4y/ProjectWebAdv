<?php

/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 14:48
 */
class JsonViewTest extends PHPUnit_Framework_TestCase
{
    public function testShow_responseCode_404IfFailed() {
        $view = new JsonView();
        $this->expectOutputString(http_response_code(404));
        $view->show("test");
    }

    public function testShow_responseCode_200IfSuccess() {
        $view = new JsonView();
        $this->expectOutputString(http_response_code(200));
        $view->show(new Evenement(1, "titel", '29/05/2017', "klant", "omschr", 50, "type", "Jan", '29/05/2017', '30/05/2017'));
    }
}
