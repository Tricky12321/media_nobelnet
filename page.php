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
            <form action="http://media.nobelnet.dk/" method="post">
                <input class="hidden" type="text" value="on" name="action">
                <input type="submit" class="giant btn btn-success" value="Projector ON">
            </form>
        </div>
        <div class="col-6">
            <form action="http://media.nobelnet.dk/" method="post">
                <input class="hidden" type="text" value="off" name="action">
                <input type="submit" class="giant btn btn-danger" value="Projector OFF">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <form action="http://media.nobelnet.dk/" method="post">
                <input class="hidden" type="text" value="chromecast" name="action">
                <input type="submit" class="giant btn btn-primary" value="Chromecast">
            </form>
        </div>
        <div class="col-6">
            <form action="http://media.nobelnet.dk/" method="post">
                <input class="hidden" type="text" value="HDMI" name="action">
                <input type="submit" class="giant btn btn btn-primary" value="HDMI">
            </form>
        </div>
    </div>

    <div class="row">
        <form action="http://media.nobelnet.dk/" method="post">
            <div class="col-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Volume</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <input type="submit" class="giant btn btn btn-primary" value="Set volume">
            </div>
        </form>

    </div>

</body>
<footer>
    <script src="resources/jquery.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
</footer>
</html>
