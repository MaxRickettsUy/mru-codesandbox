<?php session_start(); ?>
<?php if(!isset($active)){ $active = null; }; ?>
<header id="main-header">
    <div class="container">
      <a class="logo" href="index.php"><img src="assets/img/logo.png" alt="Exerceo" data-rjs="2" /></a>

      <!-- Mobile Menu -->
      <div class="menu-wrap mobile-menu">
        <a class="mobile-menu-toggle" href=""><span></span><span></span><span></span></a>
        <nav id="dl-menu" class="dl-menuwrapper">
          <button class="dl-trigger"><span></span><span></span><span></span><span></span></button>
          <ul class="dl-menu">
            <li><a <?php if ($active == "home") {echo " class=\"active\"";}?> href="index.php">Home</a></li>
            <li class="has-sub"><a href="#">Learning</a>
              <ul class="dl-submenu">
                <li class="dl-parent"><a href="initiative-program">Learning Opportunities</a></li>
                  <li class="has-sub"><a href="#">Challenge Series</a>
                    <ul class="dl-submenu">
                      <li class="dl-parent"><a href="challenge-series">Challenge Series</a></li>
                      <li><a href="rising-professional-challenge-series">Rising Professional</a></li>
                      <li><a href="rising-leaders-challenge-series">Rising Leaders</a></li>
		      <li><a href="rising-entrepreneurs-challenge-series">Rising Entrepreneurs</a></li></ul></li>
                  <li class="has-sub"><a href="#">Information Technology</a>
                    <ul class="dl-submenu">
                      <li class="dl-parent"><a href="it-program">Information Technology</a></li>
                      <li><a href="devops">DevOps</a></li>
                      <li><a href="software-development">Software Development</a></li>
                      <li><a href="cybersecurity">Cybersecurity</a></li>
                    </ul></li>
                  <li><a href="learning-nodes">Learning Nodes</a></li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">Cultivation</a>
              <ul class="dl-submenu">
                <li class="dl-parent"><a href="cultivation">Cultivation</a></li>
                <li><a href="resources">Resources</a></li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">Happenings</a>
              <ul class="dl-submenu">
                <li class="dl-parent"><a href="happenings">Happenings</a></li>
                <li><a href="success-stories">Success Stories</a></li>
                <li><a href="news">News</a></li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">Our Team</a>
              <ul class="dl-submenu">
                <li class="dl-parent"><a href="our-staff">Our Team</a></li>
                <li><a href="our-staff">Our Staff</a></li>
                <li><a href="our-board">Our Board</a></li>
                <li><a href="our-partner">Our Partners</a></li>
		<li><a href="volunteer">Volunteer</a></li>
              </ul>
            </li>
            <li class="has-sub"><a href="#">About Us</a>
              <ul class="dl-submenu">
                <li class="dl-parent"><a href="about">About Us</a></li>
                <li><a href="mission">Mission</a></li>
                <li><a href="history">History</a></li>
                <li><a href="statistics">Statistics</a></li>
              </ul>
            </li>
	 </ul>
        </nav>
      </div>

      <!-- Desktop Menu -->
      <div class="menu-wrap desktop-menu">
        <nav class="main-menu">
          <ul>
	    <li><a <?php if ($active == "home") {echo " class=\"active\"";}?> href="index.php">Home</a>
            </li>
            <li class="has-sub"><a <?php if ($active == "initiatives") {echo " class=\"active\"";}?> href="initiative-program">Learning</a>
              <ul class="submenu">
                <li class="has-sub"><a href="challenge-series">Challenge Series</a>
                  <ul class="submenu">
                    <li><a href="rising-professional-challenge-series">Rising Professional</a></li>
                    <li><a href="rising-leaders-challenge-series">Rising Leaders</a></li>
		    <li><a href="rising-entrepreneurs-challenge-series">Rising Entrepreneurs</a></li></ul></li>
                <li class="has-sub"><a href="it-program">Information Technology</a>
                  <ul class="submenu">
                    <li><a href="devops">DevOps</a></li>
                    <li><a href="software-development">Software Development</a></li>
                    <li><a href="cybersecurity">Cybersecurity</a></li>
                   </ul></li>
                <li><a href="learning-nodes">Learning Nodes</a></li>
	      </ul>
            </li>
            <li class="has-sub"><a <?php if ($active == "cultivation") {echo " class=\"active\"";}?> href="cultivation">Cultivation</a>
              <ul class="submenu">
                <li><a href="resources">Resources</a></li>
              </ul>
            </li>
            <li class="has-sub"><a <?php if ($active == "news") {echo " class=\"active\"";}?> href="happenings">Happenings</a>
              <ul class="submenu">
                <li><a href="success-stories">Success Stories</a></li>
                <li><a href="news">News</a></li>
              </ul>
            </li>
            <li class="has-sub"><a <?php if ($active == "team") {echo " class=\"active\"";}?> href="our-staff">Our Team</a>
              <ul class="submenu">
                <li><a href="our-staff">Our Staff</a></li>
                <li><a href="our-board">Our Board</a></li>
                <li><a href="our-partner">Our Partners</a></li>
		<li><a href="volunteer">Volunteer</a></li>
              </ul>
	    </li>
            <li class="has-sub"><a <?php if ($active == "about") {echo " class=\"active\"";}?> href="about">About Us</a>
              <ul class="submenu">
		<li><a href="mission">Mission</a></li>
                <li><a href="history">History</a></li>
                <li><a href="statistics">Statistics</a></li>
              </ul>
            </li>
          </ul>
	</nav>
      </div>
    </div>
  </header><!-- Main Header -->
