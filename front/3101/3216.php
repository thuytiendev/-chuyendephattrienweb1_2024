<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/3216.less', 'css/3216.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event UI</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url_path . '/css/3216.css'; ?>">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Events for October 20 - December 12</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="search-bar">
                    <div class="form-group">
                        <label for="event-date">Events From</label>
                        <input type="date" class="form-control" id="event-date" value="2024-10-14">
                    </div>
                    <div class="form-group">
                        <label for="keyword">Search</label>
                        <input type="text" class="form-control" id="keyword" placeholder="Keyword">
                    </div>
                    <button class="find-btn">
                        Find Events <img src="./icons/arrow-right.svg" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 view-options">
                <p><em>View As:</em></p>
                <ul class="list-inline">
                    <li class="list-inline-item"><em style="text-decoration: underline;">List</em></li>
                    <li class="list-inline-item"><em>Month</em></li>
                    <li class="list-inline-item"><em>Day</em></li>
                </ul>
            </div>
            <div class="thang">October 2024</div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="./images/events-img-02.jpg" class="event-image" alt="Event Image">
            </div>
            <div class="col-md-6 event-details">
                <p class="a"><em>Lectures</em></p>
                <h4>Ecosystem dynamics and conservation</h4>
                <div class="event-meta">
                    <span class="date"> <img src="./icons/calendar3.svg" alt=""> October 20, 2024</span>
                    <span class="time"> <img src="./icons/clock.svg" alt=""> 9:00 am - 5:00 pm</span>
                    <span class="location"> <img src="./icons/house.svg" alt=""> Svensson Open Library</span>
                    <span class="address"> <img src="./icons/geo-alt.svg" alt=""> 1028 Richison Drive, New York</span>
                </div>
                <p class="event-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="./css/bootstrap-icons.css">
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>