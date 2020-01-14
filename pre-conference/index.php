<?php
require dirname(__DIR__) . '/_common.php';

$pageTitle = 'Pre-Conference Workshops';

require dirname(__DIR__) . '/_header.php';
?>

<body>
<div id="main" class="container my-5">
    <div class="row">
        <div class="col">
            <?php require dirname(__DIR__) . '/_nav.php'; ?>

            <h1 class="mt-5 mb-3"><?php echo $pageTitle; ?></h1>

            <h2 class="section-header mb-3 mt-5">Basic Human Tracking</h2>
            <p>Explore the ancient skill of visually tracking humans (aka man-tracking). "Tracking is the complex application of simplicities". This course teaches the basic sciences of tracking skills. Rob Speiden will teach you, through classroom presentations and hands-on field exercises, the principles of Detecting, Interpreting, Recording and Trailing sign of the passage of humans, be they lost, missing or evasive.</p>
            <a href="/pre-conference/basic-human-tracking/" class="btn btn-outline-danger btn-sm">Learn More</a>

            <h2 class="section-header mb-3 mt-5">Lost Person Behavior</h2>
            <p>Lost person behavior is the basis of search and rescue missions. This course will present the most recent advances in lost person behavior with Robert Koester’s latest research, and new behavior categories crucial to solving the mystery of where to look for a lost person.</p>
            <a href="/pre-conference/lost-person-behavior/" class="btn btn-outline-danger btn-sm">Learn More</a>
        </div>
    </div>
</div>

<?php require dirname(__DIR__) . '/_footer.php'; ?>
</body>
</html>