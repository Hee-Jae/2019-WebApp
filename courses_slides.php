<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'COURSES'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- article_yc -->
        <div id="left_banner_yc">
            <!-- <span class="banner_head">HOME</span> -->
            <ul>
                <!-- <li><a href="#objectives">Objectives</a></li>
                <li><a href="#lecturer">Lecturer</a></li>
                <li><a href="#ta">TA</a></li>
                <li><a href="#places_dates">Places & Dates</a></li>
                <li><a href="#coursesforum">Courses Forum</a></li>
                <li><a href="#textbooks">Textbooks</a></li>
                <li><a href="#coursesschedule">Courses Schedule</a></li>
                <li><a href="#teamproject">Team Project</a></li>
                <li><a href="#assessment">Assessments</a></li> -->
                <li><a href="courses_home.php">Home</a></li>
            </ul>
            <hr id="banner_hr">
            <span class="banner_head">Lecture Slides</span>
            <ul>
                <li><a href="#"> slide 0 </a></li>
                <li><a href="#"> slide 1 </a></li>
                <li><a href="#"> slide 2 </a></li>
            </ul>
            <hr id="banner_hr">
            <span class="banner_head">Labs</span>
            <ul>
                <li><a href="#"> slide 0 </a></li>
                <li><a href="#"> slide 1 </a></li>
                <li><a href="#"> slide 2 </a></li>
            </ul>
        </div>
        <div class="article_yc">
            <p> lecture note </p>
            <p> courses lab api api api ... </p>
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
