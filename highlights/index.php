<?php
require dirname(__DIR__) . '/_common.php';

$pageTitle = 'Highlights';

require dirname(__DIR__) . '/_header.php';
?>

<body>
<div id="main" class="container my-5">
    <div class="row">
        <div class="col">
            <?php require dirname(__DIR__) . '/_nav.php'; ?>

            <h1 class="mt-5"><?php echo $pageTitle; ?></h1>

            <h2 class="section-header mb-3 mt-5">STAT MedEvac</h2>
            <div class="row">
                <div class="col-9">
                    <p>STAT MedEvac is a service of the Center for Emergency Medicine of Western Pennsylvania in Pittsburgh, Pennsylvania. The primary function of STAT MedEvac is to provide air medical transport and as of July 2017 2 ground ambulances for patients with an injury or critical illness. STAT MedEvac is directed by a consortium of hospitals of the University of Pittsburgh Medical Center (UPMC) that include UPMC Children's Hospital of Pittsburgh, UPMC Altoona, UPMC Hamot, UPMC Mercy and the UPMC Presbyterian Shadyside. STAT MedEvac's base of operations is in West Mifflin, Pennsylvania, at the Allegheny County Airport. With 17 helicopter base sites in Pennsylvania, Ohio and surrounding states, it is one of the largest single operated and dispatched air-medical transport system in the United States.</p>
                    <p>STAT MedEvac will have a helicopter on-scene for viewing by conference attendees.</p>
                    <a href="http://www.statmedevac.com/" class="btn btn-outline-danger btn-sm">statmedevac.com</a>
                </div>
                <div class="col-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Stat_MedEvac.jpg" class="img-fluid rounded shadow-sm">
                    <p class="text-muted small">&copy; <a href="https://www.flickr.com/people/59359901@N05" class="text-reset">Jennifer Cepek</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require dirname(__DIR__) . '/_footer.php'; ?>
</body>
</html>