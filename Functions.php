<?php
namespace MediaNobelnet;


class Functions {


    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handlePost();
        } else {
            $this->getPage();
        }
    }

    public function getVolume() {
        return intval(((string) exec("mediactl receiver get volume"))[0]);
    }

    public function getPage() {
        include "page.php";
    }

    public function handlePost() {
        switch (strtolower($_POST['action'])) {
            case 'on':
                exec("mediactl projector on");
                break;
            case 'off':
                exec("mediactl projector off");
                break;
            case 'chromecast':
                exec("mediactl receiver input chromecast");
                break;
            case 'hdmi':
                exec("mediactl receiver input wallhdmi");
                break;
        }
        $this->getPage();
    }
}
