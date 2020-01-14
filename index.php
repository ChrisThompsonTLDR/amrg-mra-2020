<?php
require __DIR__ . '/_common.php';

$registered= false;
if (isset($_SESSION['registered'])) {
    $registered = true;

    unset($_SESSION['registered']);   
}

require __DIR__ . '/_header.php';
?>
<body>
<div class="parallax">
    <?php /*<img class="float-right" src="/img/amrg.png" alt="Allegheny Mountain Rescue Group"> */ ?>

    <div class="container h-100">
        <div class="row h-75">
            <div class="col my-auto">
                <div class="text-center d-sm-none py-4">
                    <img class="w-75 mb-5" src="/img/conference-300x300.png" alt="Spring 2020 Conference">

                    <h2 class="text-white">June 11-13</h2>

                    <?php /*<button type="button" class="btn btn-danger mt-5 mr-5" data-toggle="modal" data-target="#registerModal">Register Now</button>*/ ?>
                    <a href="https://www.eventbrite.com/e/2020-mountain-rescue-association-spring-conference-tickets-79268808139" class="btn btn-danger mt-5" target="_blank">Register Now</a><br>
                    <a href="#call-for-speakers" class="btn btn-danger mt-5">Call for Speakers</a><br>
                    <a href="/become-a-sponsor/" class="btn btn-danger mt-5">Become a Sponsor</a>
                </div>
                <div class="d-sm-block d-none">
                    <h1 class="mb-5 text-white d-none d-sm-block">Mountain Rescue Association<br>Spring Conference 2020</h1>

                    <h2 class="text-white">June 11-13</h2>

                    <?php /*<button type="button" class="btn btn-danger mt-5 mr-5" data-toggle="modal" data-target="#registerModal">Register Now</button>*/ ?>
                    <a href="https://www.eventbrite.com/e/2020-mountain-rescue-association-spring-conference-tickets-79268808139" class="btn btn-danger mt-5 mr-5" target="_blank">Register Now</a>
                    <a href="#call-for-speakers" class="btn btn-danger mt-5 mr-5">Call for Speakers</a>
                    <a href="/become-a-sponsor/" class="btn btn-danger mt-5">Become a Sponsor</a>
                </div>
            </div>
            <div class="col-sm-3 my-auto">
                <img class="img-fluid d-none d-sm-block" src="/img/conference-300x300.png" alt="Spring 2020 Conference">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="/register.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($registered) { ?>
                    <p>Thank you for registering.  We will let you know when registrations are open.</p>
                    <?php } else { ?>
                    <p>Registration has not opened yet.  Enter your email address to be notified when registration opens.</p>

                    <div class="form-group">
                        <label for="registerName">Name</label>
                        <input type="text" name="name" class="form-control" id="registerName" placeholder="name" required>
                    </div>
                    <div class="form-group">
                        <label for="emailAddress">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailAddress" placeholder="email" required>
                    </div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <?php if ($registered) { ?>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <?php } else { ?>                    
                    <button type="submit" class="btn btn-primary">Subscribe to Updates</button>
                    <?php } ?>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="main" class="container my-5">
    <div class="mb-5">
        <?php require __DIR__ . '/_nav.php'; ?>
    </div>
<?php /*
    <div class="row">
        <div class="col">
            <?php
                $schedule = [
                    'June 21' => [
                        '9:00' => [
                            'title' => 'Keynote Speaker',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit.',
                        ],
                        '10:00' => [
                            'title' => 'K9 Handling in Urban Environments',
                            'desc' => 'Integer id est nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit.',
                        ],
                        '11:00' => [
                            'title' => 'Rappelling in Adverse Conditions',
                            'desc' => 'Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. ',
                        ],
                        'noon' => [
                            'title' => 'Lunch',
                            'desc' => 'tiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        ],
                        '14:00' => [
                            'title' => 'Swiftwater Rescue 101',
                            'desc' => 'Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. ',
                        ],
                    ],
                    'June 22' => [
                        '9:00' => [
                            'title' => 'Chow for the Backcountry',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit.',
                        ],
                        '10:00' => [
                            'title' => 'Helicopter Operations 101',
                            'desc' => 'Integer id est nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit.',
                        ],
                        '11:00' => [
                            'title' => 'GPS and You',
                            'desc' => 'Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. ',
                        ],
                        'noon' => [
                            'title' => 'Lunch',
                            'desc' => 'tiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        ],
                        '14:00' => [
                            'title' => 'High Angle Rescue',
                            'desc' => 'Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. ',
                        ],
                    ],
                    'June 23' => [
                        '9:00' => [
                            'title' => 'Closing Speech',
                            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit.',
                        ],
                        '10:00' => [
                            'title' => 'How Not to Get Lost',
                            'desc' => 'Integer id est nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit.',
                        ],
                        '11:00' => [
                            'title' => 'Rappelling in Adverse Conditions',
                            'desc' => 'Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. ',
                        ],
                        'noon' => [
                            'title' => 'Lunch',
                            'desc' => 'tiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        ],
                        '14:00' => [
                            'title' => 'Swiftwater Rescue 101',
                            'desc' => 'Donec ut sagittis sapien. In consequat, dolor vitae elementum tempus, lorem leo porta metus, vel consectetur magna eros a dui. Praesent quam urna, laoreet a auctor nec, blandit eget turpis. Integer id est nulla. Nunc consectetur purus metus, at hendrerit nibh porttitor sit amet. Fusce id sagittis velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper, nisl a lobortis dignissim, sem mauris pellentesque neque, placerat molestie ligula massa et leo. ',
                        ],
                    ],
                ];
            ?>
            <ul class="nav nav-pills nav-justified mb-5" id="pills-tab" role="tablist">
                <?php foreach ($schedule as $day => $events) {$slug = strtolower(str_replace(' ', '', $day)); ?>
                <li class="nav-item">
                    <a class="nav-link border shadow-sm <?php echo (($day == array_keys($schedule)[0]) ? 'active' : ''); ?> py-3" id="pills-<?php echo $slug; ?>-tab" data-toggle="pill" href="#pills-<?php echo $slug; ?>" role="tab" aria-controls="pills-<?php echo $slug; ?>" aria-selected="true"><?php echo $day; ?></a>
                </li>
                <?php } ?>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <?php foreach ($schedule as $day => $events) {$slug = strtolower(str_replace(' ', '', $day)); ?>
                <div class="tab-pane fade show <?php echo (($day == array_keys($schedule)[0]) ? 'active' : ''); ?>" id="pills-<?php echo $slug; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $slug; ?>-tab">
                    <?php foreach ($events as $when => $event) { ?>
                    <div class="row mb-5">
                        <div class="col-4 col-sm-3 col-md-2">
                            <div class="bg-info text-white text-center py-5 h3 shadow-sm">
                                <?php echo $when; ?>
                            </div>
                        </div>
                        <div class="col">
                            <h3><?php echo htmlentities($event['title']); ?></h3>
                            
                            <?php echo htmlentities($event['desc']); ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>*/ ?>
    <div class="row">
        <div class="col">
            <h2 class="section-header mb-3">Conference</h2>

            <p>The MRA Spring Conference is coming to the Laurel Highlands of Pennsylvania in 2020. We welcome you to join us for North America's premier conference for search and rescue education, mountain rescue research, and the latest technology and rescue equipment.  As the only National conference focused on wilderness and volunteer search and rescue, this conference brings SAR technicians and government officials from across the country and the world. Join us for learning, field exercises, demonstrations, and camaraderie.</p>

            <p>There will be field and classroom tracks for Mountain and Rope Rescue, Canine Search, Cave Rescue, Water Rescue, Helicopter Rescue, Wilderness Search, Wilderness Medical, and Drones.   </p>

            <p>All members of the SAR community are welcome to attend. We welcome non-MRA members attending in the spirit of the past SARCON conventions to broaden the knowledge and experience base. </p>

            <p>We are looking for sponsors and vendors for this conference. You will have access to hundreds of search and rescue experts and decision-makers from SAR teams from across the country and around the world. If you are interested in becoming a sponsor or have other questions about the conference, please email: <a href="mailto:mrasarcon2020@amrg.info">mrasarcon2020@amrg.info</a></p>

            <p>This website will be updated frequently as the conference date approaches.</p>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="section-header mb-3 mt-5">Location</h2>
            
            <div class="row">
                <div class="col-sm-8 col-12">
                    <h4>Seven Springs Mountain Resort</h4>
                    <p><a href="https://www.google.com/maps/place/Seven+Springs+Mountain+Resort/@40.022977,-79.297703,3530m/data=!3m1!1e3!4m5!3m4!1s0x0:0xe64df0643e194e61!8m2!3d40.0229768!4d-79.2977032?hl=en-US">Champion, PA</a></p>
                    <p>Seven Springs is located approximately one hour's drive southeast of Pittsburgh, located within 200 miles of Washington, D.C., Baltimore, Cleveland and Columbus and it is easily accessible off exits 91 or 110 of the Pennsylvania Turnpike. Pittsburgh International Airport is the nearest metropolitan terminal.</p>
                    <a href="https://hotel.7springs.com/default.aspx?p=&arrival=06/06/2020&depart=06/14/2020&adults=2&children=0&rooms=1&group=8bt7yc&multiprop=H&bookingstep=1" target="_blank" class="btn btn-danger btn-sm">Book a Room</a>

                    <p class="mt-4">Group camping is available at nearby <a href="https://www.dcnr.pa.gov/StateParks/FindAPark/LaurelHillStatePark/Pages/default.aspx" target="_blank">Laurel Hill State Park</a> for $10 per night per tent or vehicle. This location is about a 10 minute drive from the conference. Camping is for tents only, no hook-up. RV sites with hookups can be  booked separately on the State Park website. Hotel rooms are available at Seven Springs, including dog friendly rooms.  Group camping spots can be purchased along with your conference tickets as part of the registration process.</p>
                </div>
                <div class="col">
                    <img class="img-fluid rounded shadow-sm" src="/img/seven-springs.jpg">
                </div>
            </div>
        </div>
    </div>
<?php /*
    <div class="row">
        <div class="col">
            <h2 class="section-header mb-3 mt-5">Sponsors</h2>

            <?php
                $sponsors = [
                    [
                        'logo' => 'logo-1.svg',
                    ],
                    [
                        'logo' => 'logo-2.svg',
                    ],
                    [
                        'logo' => 'logo-3.svg',
                    ],
                    [
                        'logo' => 'logo-4.svg',
                    ],
                    [
                        'logo' => 'logo-5.svg',
                    ],
                    [
                        'logo' => 'logo-6.svg',
                    ],
                    [
                        'logo' => 'logo-7.svg',
                    ],
                    [
                        'logo' => 'logo-8.svg',
                    ],
                ];
            ?>
            <div class="row">
                <?php foreach ($sponsors as $sponsor) { ?>
                <div class="col-md-3 col-sm-6 text-center"><img src="/img/sponsors/<?php echo $sponsor['logo']; ?>" class="img-fluid mb-5"></div>
                <?php } ?>
            </div>
        </div>
    </div>
*/ ?>
    <div class="row">
        <div class="col">
            <h2 class="section-header mb-3 mt-5">Hosts</h2>

            <div class="row">
                <div class="col-sm-6 mb-5">
                    <div class="text-center mb-4">
                        <a href="http://www.amrg.info/"><img class="img-fluid" src="/img/amrg.png" alt="Allegheny Mountain Rescue Group"></a>
                    </div>
                    <h3>Allegheny Mountain Rescue Group</h3>
                    <p><a href="http://www.amrg.info/">amrg.info</a></p>
                    <p>Allegheny Mountain Rescue Group (AMRG) is an all-volunteer, non-profit search and rescue (SAR) team based in Pittsburgh that has offered support to government agencies responsible for lost- and injured-person incidents since 1985.</p>
                </div>
                <div class="col-sm-6">
                    <div class="text-center mb-4">
                        <a href="http://www.mra.org/"><img class="img-fluid" src="/img/mra.png" alt="Mountain Rescue Association" style="max-height: 131px;"></a>
                    </div>
                    <h3>Mountain Rescue Association</h3>
                    <p><a href="http://www.mra.org/">mra.org</a></p>
                    <p>MRA is an organization of teams dedicated to saving lives through rescue and mountain safety education. We do so by improving the quality, availability, &amp; safety of mountain search &amp; rescue. With over 90 government authorized units, MRA has grown to become the critical mountain search &amp; rescue resource in North America.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="sponsors" class="row">
        <div class="col">
            <h2 class="section-header mt-5">Sponsors</h2>
            <div class="row vertical-align">
                <div class="col-sm-6 text-center my-4 my-sm-5"><a href="https://www.nalgene.com/"><img src="/img/sponsors/nalgene.png" alt="Nalgene" class="img-fluid mt-0 mt-sm-3 pt-4 px-5 px-sm-3"></a></div>
                <div class="col-sm-6 text-center my-4 my-sm-5"><a href="https://www.garmin.com/"><img src="/img/sponsors/garmin.png" alt="Garmin" class="img-fluid px-5 px-sm-3"></a></div>
                <div class="col-sm-6 text-center my-4 my-sm-5"><a href="http://www.alpineinstitute.com/"><img src="/img/sponsors/american-alpine-institute.png" alt="American Alpine Institute" class="img-fluid px-5 px-sm-3"></a></div>
                <div class="col-sm-6 text-center my-4 my-sm-5"><a href="https://www.teamwendy.com/search-rescue"><img src="/img/sponsors/team-wendy.png" alt="Team Wendy" class="img-fluid px-5 px-sm-3"></a></div>
                <div class="col-sm-6 text-center my-4 my-sm-5"><a href="https://smcgear.com/"><img src="/img/sponsors/smc-gear.png" alt="SMC Gear" class="img-fluid px-5 px-sm-3"></a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="text-center mb-3">
                <a href="/become-a-sponsor/" class="btn btn-danger btn-sm mt-5" target="_blank">Become a Sponsor</a>
            </div>
        </div>
    </div>

    <div id="call-for-speakers" class="row">
        <div class="col">
            <h2 class="section-header mb-3 mt-5">Call for Speakers</h2>
            <p>In June of 2020 our organization is hosting the Mountain Rescue Association’s (MRA) International Search and Rescue Conference at Seven Springs Mountain Resort.  The MRA Conference is invaluable for volunteer SAR organizations. It is the primary method for SAR organizations and First Responders to stay in compliance with the latest rescue equipment and techniques, networking with other organizations, and research on the most effective ways to rescue an individual with minimal risk.</p>
            <dl class="row">
                <dt class="col-sm-3">Submission Deadline:</dt>
                <dd class="col-sm-9">February 2020</dd>

                <dt class="col-sm-3">Speaker Selection:</dt>
                <dd class="col-sm-9">February 2020</dd>

                <dt class="col-sm-3">Conference tracks:</dt>
                <dd class="col-sm-9">
                    <ul class="list-unstyled mb-0">
                        <li>General SAR/Search Management</li>
                        <li>Rescue (Rope, Mountain, Cave, Water)</li>
                        <li>Wilderness Medicine</li>
                        <li>Technology (mapping, social media, drones, etc)</li>
                        <li>Case Studies/Panels</li>
                        <li>PreConference Workshops</li>
                        <li>Canine</li>
                    </ul>
                </dd>
            </dl>

            <div class="text-center mb-5">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScaTR55ZHH8-ZMYJ16OQqJXkc5rYpeazfzx-EJpi3FLKMjm0w/viewform" class="btn btn-danger btn-sm" target="_blank">Apply Now</a>
                <a href="https://docs.google.com/document/d/11n0F40GEU_rN_oJpuqAnd_R0wU00pdZovhPxTwzWAjk/edit?usp=sharing" class="btn btn-danger btn-sm ml-4" target="_blank">Speaker Guide</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/_footer.php'; ?>

<?php if ($registered) { ?>
<script>
$(function () {
   $('#registerModal').modal('show'); 
});
</script>
<?php } ?>
</body>
</html>