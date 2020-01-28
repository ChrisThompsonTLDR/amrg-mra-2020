<nav class="navbar navbar-expand-lg navbar-light bg-light py-1 px-2 shadow-sm">
    <a class="navbar-brand" href="/">
        <img src="/img/conference-300x300.png" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item<?php echo ((strpos($_SERVER['REQUEST_URI'], '/speakers/') === 0) ? ' active' : ''); ?>">
                <a class="nav-link" href="/speakers/">Speakers<?php echo ((strpos($_SERVER['REQUEST_URI'], '/speakers/') === 0) ? ' <span class="sr-only">(current)</span>' : ''); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/#sponsors">Sponsors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/files/mra-2020-conference.pdf">Schedule</a>
            </li>
            <li class="nav-item<?php echo ((strpos($_SERVER['REQUEST_URI'], '/exhibitors/') === 0) ? ' active' : ''); ?>">
                <a class="nav-link" href="/exhibitors/">Exhibitors<?php echo ((strpos($_SERVER['REQUEST_URI'], '/exhibitors/') === 0) ? ' <span class="sr-only">(current)</span>' : ''); ?></a>
            </li>
            <li class="nav-item<?php echo ((strpos($_SERVER['REQUEST_URI'], '/pre-conference/') === 0) ? ' active' : ''); ?>">
                <a class="nav-link" href="/pre-conference/">Pre-Conference<?php echo ((strpos($_SERVER['REQUEST_URI'], '/pre-conference/') === 0) ? ' <span class="sr-only">(current)</span>' : ''); ?></a>
            </li>
            <li class="nav-item<?php echo ((strpos($_SERVER['REQUEST_URI'], '/highlights/') === 0) ? ' active' : ''); ?>">
                <a class="nav-link" href="/highlights/">Highlights<?php echo ((strpos($_SERVER['REQUEST_URI'], '/highlights/') === 0) ? ' <span class="sr-only">(current)</span>' : ''); ?></a>
            </li>
        </ul>

        <a href="https://www.eventbrite.com/e/2020-mountain-rescue-association-spring-conference-tickets-79268808139" class="btn btn-danger btn-sm" target="_blank">Register Now</a>
    </div>
</nav>