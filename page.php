<?php

use MediaNobelnet\Functions;
/** @var $this Functions */


?>
<html lang="dk">
<head>
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css"/>
    <style>
        .hidden {
            display: none;
        }

        .giant {
            width: 100%;
            height: 200px;
        }
        .wide {
            width: 100%;
        }

        .row {
            margin: 50px;
        }

        .col {
            padding: 50px;
        }

        .btn {
            font-size: 30pt;
        }
    </style>
    <title>Media Nobelnet</title>
</head>
<body>
<div class="container giant">
    <div class="row">
        <div class="col-6">
            <form action="/" method="post">
                <input class="hidden" type="text" value="on" name="action">
                <input type="submit" class="giant btn btn-success" value="Projector ON">
            </form>
        </div>
        <div class="col-6">
            <form action="/" method="post">
                <input class="hidden" type="text" value="off" name="action">
                <input type="submit" class="giant btn btn-danger" value="Projector OFF">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="/" method="post">
                <input class="hidden" type="text" value="chromecast" name="action">
                <input type="submit" class="giant btn btn-primary" value="Chromecast">
            </form>
        </div>
        <div class="col-6">
            <form action="/" method="post">
                <input class="hidden" type="text" value="HDMI" name="action">
                <input type="submit" class="giant btn btn-primary" value="HDMI">
            </form>
        </div>
    </div>
    <form action="/" method="post">
        <input class="hidden" type="text" value="volume" name="action">
        <div class="row">
            <div class="col-6">
                <select class="form-control" id="VolumeSelector" name="volume">
                    <?php
                    $volume = $this->getVolume();
                    for ($i = $this->getLimit(); $i >= -30; $i--) {
                        $selected = $volume == $i ? "selected" : '';
                        echo "<option " . $selected . ">$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-6">
                <input type="submit" class="btn wide btn-primary" value="Set volume">
            </div>
        </div>
    </form>

</body>
<footer>
    <script src="resources/jquery.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
</footer>
</html>
