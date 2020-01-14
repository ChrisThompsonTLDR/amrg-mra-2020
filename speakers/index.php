<?php
require dirname(__DIR__) . '/_common.php';

$pageTitle = 'Speakers';

require dirname(__DIR__) . '/_header.php';
?>

<body>
<div id="main" class="container my-5">
    <div class="row">
        <div class="col">
            <?php require dirname(__DIR__) . '/_nav.php'; ?>

            <h1 class="mt-5"><?php echo $pageTitle; ?></h1>

            <?php
            $speakers = [
                [
                    'name'  => 'Special Agent Aaron Smith',
                    'topic' => '',
                    'img'   => '/img/speakers/aaron-smith.jpg',
                    'org'   => 'National Park Service, Investigative Services Branch',
                ],
                [
                    'name'  => 'Dr. Alison Sheets',
                    'topic' => 'Medical Decision making',
                    'img'   => '/img/speakers/alison-sheets.jpg',
                    'org'   => 'Rocky Mountain Rescue Group',
                ],
                [
                    'name'  => 'Dr. Seth Hawkins',
                    'topic' => 'Spinal Cord injuries',
                    'img'   => '/img/speakers/seth-hawkins.jpg',
                    'org'   => 'Appalachian Mountain Rescue Team',
                ],
                [
                    'name'  => 'Robert Koester',
                    'topic' => 'Lost Person Behavior',
                    'img'   => '/img/speakers/bob-koester.jpg',
                    'org'   => 'Blue Ridge Mountain Rescue Group',
                ],
                [
                    'name'  => 'Rob Speiden',
                    'topic' => 'Human Tracking',
                    'img'   => '/img/speakers/rob-speiden.jpg',
                    'org'   => 'Blacksburg Rescue Squad - SAR Team',
                ],
                [
                    'name'  => 'R. Bryan Simon',
                    'topic' => 'Accidents in North American Climbing',
                    'img'   => '/img/speakers/bryan-simon.jpg',
                    'org'   => 'American Alpine Club/Appalachian Mountain Rescue Team',
                ],
                [
                    'name'  => 'Andy Graham',
                    'topic' => 'Small Aircraft Rescue and Extraction',
                    'img'   => '/img/speakers/andy-graham.jpg',
                    'org'   => 'Olympic Mountain Rescue',
                ],
                [
                    'name'  => 'Michael St. John',
                    'topic' => 'Camp Fire case study',
                    'img'   => '/img/speakers/michael-st-john.jpg',
                    'org'   => 'Marin County Sheriff\'s SAR Unit',
                ],
                [
                    'name'  => 'Kathryn Bamford',
                    'topic' => 'K9 Odor detection in SAR',
                    'img'   => '/img/speakers/kathryn-bamford.jpg',
                    'org'   => 'Massasauga Search & Rescue Team',
                ],
                [
                    'name'  => 'Andrew McIntyre',
                    'topic' => 'Urban Water Rescue',
                    'img'   => '/img/speakers/andrew-mcintyre.jpg',
                    'org'   => 'Montgomery County Urban Search & Rescue',
                ],
                [
                    'name'  => 'Steve Petty',
                    'topic' => 'Leadership in SAR',
                    'img'   => '/img/speakers/steve-petty.jpg',
                    'org'   => 'Davis County SAR',
                ],
                [
                    'name'  => 'Dale Wang',
                    'topic' => 'Near Miss panel',
                    'img'   => '/img/speakers/dale-wang.jpg',
                    'org'   => 'Rocky Mountain Rescue Group',
                ],
                [
                    'name'  => 'Rob Peladeau',
                    'topic' => 'Canine behavior ',
                    'img'   => '/img/speakers/rob-peladeau.jpg',
                    'org'   => 'NexGen K9 Training',
                ]/*,
                [
                    'name'  => '',
                    'topic' => '',
                    'img'   => '/img/speakers/.jpg',
                    'org'   => '',
                ],*/
            ];
            ?>

            <div class="row">
                <?php foreach ($speakers as $speaker) { ?>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="media">
                        <img src="<?php echo $speaker['img']; ?>" class="mr-3 rounded shadow-sm" style="max-width: 100px;" alt="<?php echo htmlentities($speaker['name']); ?>">
                        <div class="media-body">
                            <h5 class="mt-0"><?php echo htmlentities($speaker['name']); ?></h5>
                            <small class="text-muted"><?php echo htmlentities($speaker['org']); ?><?php if (!empty($speaker['topic'])) { ?><br>Topic: <?php echo htmlentities($speaker['topic']); } ?></small>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php require dirname(__DIR__) . '/_footer.php'; ?>
</body>
</html>