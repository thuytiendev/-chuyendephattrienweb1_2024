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
$less->compileFile('less/3101.less', 'css/3101.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Layout</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url_path . '/css/3101.css'; ?>">
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row g-4">
            <!-- Blog Card 1 -->
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="./images/service4.jpg" alt="Blog 1">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                           <img src="./css/calendar3.svg" alt="" > January 8, 2024
                        </div>
                        <h5 class="blog-title">How To Clean Your PC from Viruses 4 Ways to Get Clean</h5>
                        <p class="blog-excerpt">Lorem ipsum dolor sit amet, consec tetur eli nec ut viverra eros
                            euismod.</p>
                        <a href="#" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>

         
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="./images/blog4.jpg" alt="Blog 2">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                           <img src="./css/calendar3.svg" alt=""> January 5, 2024
                        </div>
                        <h5 class="blog-title">What To Beware Of When Fixing Your Device By Yourself</h5>
                        <p class="blog-excerpt">Lorem ipsum dolor sit amet, consec tetur eli nec ut viverra eros
                            euismod.</p>
                        <a href="#" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="./images/blog6.jpg" alt="Blog 3">
                    </div>
                    <div class="blog-content">
                        <div class="blog-date">
                           <img src="./css/calendar3.svg" alt=""> January 9, 2024
                        </div>
                        <h5 class="blog-title">What Could 5g Change About The Way We Use Technology?</h5>
                        <p class="blog-excerpt">Lorem ipsum dolor sit amet, consec tetur eli nec ut viverra eros
                            euismod.</p>
                        <a href="#" class="btn btn-link">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="mt-4 text-center">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true"><</span> 
            </a>
        </li>
        <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">></span> 
            </a>
        </li>
    </ul>
</nav>


    </div>

    <link rel="stylesheet" href="./css/bootstrap-icons.css">
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>