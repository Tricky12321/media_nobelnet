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
        return intval(exec("mediactl receiver get volume"));;
    }
    public function getLimit() {
        return intval(exec("mediactl receiver get limit"));;
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
            case 'volume':
                try {
                    $volume = intval(strtolower($_POST['volume']));
                    exec("mediactl receiver volume $volume");
                } catch ($exception) {
                    // Ignore
                }
                break;
        }
        $this->getPage();
    }
}
