<?php $root_path = ''; ?>
<!DOCTYPE html>
<html lang="en">

<?php
if (isset($_GET['q']))
    $board = $_GET['q'];
else
    $board = 'boha';
if (!($board == 'boha' || $board == 'bosa' || $board == 'bost' || $board == 'boca' || $board == 'bola' || $board == 'boaa'))
    $board = 'boha';
?>

<head>
    <title><?php echo strtoupper($board); ?> | SC IIT Ropar</title>

    <?php include($root_path . 'assets/include/header-files.php'); ?>

    <style>
        .board-head {
            font-family: 'Raleway';
            font-size: 26px;
            font-weight: 500;
            letter-spacing: 3px;
            margin-bottom: 20px;
            padding: 10px;
        }

        .board-desc p {
            font-family: 'Merriweather';
            font-size: 16px;
            margin-bottom: 20px;
            line-height: 30px;
            color: #444;
        }

        .board-side-head {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
            font-size: 18px;
            font-family: 'Raleway';
            font-weight: 700;
        }

        .board-side-desc {
            list-style: none;
            line-height: 28px;
            font-size: 16px;
            font-family: 'Raleway';
            font-weight: 600;
        }

        .board-side-desc a,
        .board-side-desc a:visited,
        .board-side-desc a:focus {
            text-decoration: none;
            transition: all 0.15s ease-in-out;
            color: #444;
        }

        .board-side-desc a:hover {
            color: #1ABC9C;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php
    $active = "BOARDS";
    $trans = 0;
    include($root_path . 'assets/include/navbar.php');
    ?>

    <!-- Main Content -->
    <div class="content">

        <?php if ($board == "boha") { ?>
            <div class="container">
                <div class="row">
                    <div class="board-head">
                        BOHA- Board of Hostel Affairs
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="board-desc">
                            <p>CLICK <a href="boha.php">HERE</a> FOR MORE INFO</p>

                            <div class="col-md-4 dp">
                                <div class="row">
                                    <img src="<?php echo $root_path; ?>assets/img/ppl/chief-warden.jpg">
                                </div>
                                <div class="row">
                                    <div class="name">
                                        Dr. Subash Chandra Martha
                                    </div>
                                    <br>
                                    <div class="desig">
                                        Chief Warden
                                    </div>
                                </div>
                            </div>

                            <p>In every IIT it is mandatory for each and every student to live in the campus premises itself in order to promote self-dependency and bonhomie. And to fulfil that, every IIT has hostels for students. For ensuring that the hostels are maintained properly and students are comfortable , a hostel secretary is elected. Under hostel secretary, there are hostel representatives for each hostel who are responsible for the maintainence of their hostel . Every year, there are competitions among hostel on different festivals like hostel decoration, samagam etc to promote unity,teamwork and competetive spirit among the hostelers.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else if ($board == "bosa") { ?>
            <div class="container">
                <div class="row">
                    <div class="board-head">
                        BOSA- Board of Sports Affairs
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="board-desc">
                            <p>CLICK <a href="bosa.php">HERE</a> FOR MORE INFO</p>

                            <div class="col-md-4 dp">
                                <div class="row">
                                    <img src="<?php echo $root_path; ?>assets/img/ppl/bosa-fac.jpg">
                                </div>
                                <div class="row">
                                    <div class="name">
                                        Dr. Sachin Kumar
                                    </div>
                                    <br>
                                    <div class="desig">
                                        BOSA Faculty Incharge
                                    </div>
                                </div>
                            </div>

                            <p>Presently, IIT Ropar has 2 cricket fields, 3 cricket practice pitches, 2 football fields, 1 hockey field, 2 basketball courts, 10 table tennis tables, 25 Chess boards, 7 tennis courts, 6 volleyball courts, total of 3 Gyms, 1 badminton court and a 400m Athletics track with Shotput and Discus circles and a Long jump pit.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board-side-head">
                            SPORTS CLUBS
                        </div>
                        <ul class="board-side-desc">
                            <li><a href="https://www.instagram.com/athletics_iit_ropar/" target="_blank" rel="noopener noreferrer">Athletics</a></li>
                            <li><a href="https://www.instagram.com/badminton_iitrpr/" target="_blank" rel="noopener noreferrer">Badminton</a></li>
                            <li><a href="https://www.instagram.com/basketball_iitrpr/" target="_blank" rel="noopener noreferrer">Basketball</a></li>
                            <li><a href="https://www.instagram.com/chess_club_iit_ropar/" target="_blank" rel="noopener noreferrer">Chess</a></li>
                            <li><a href="https://www.instagram.com/cricket_iitrpr/" target="_blank" rel="noopener noreferrer">Cricket</a></li>
                            <li><a href="https://www.instagram.com/football_club_iitrpr/" target="_blank" rel="noopener noreferrer">Football</a></li>
                            <li><a href="https://www.instagram.com/hockey__iit__rpr/" target="_blank" rel="noopener noreferrer">Hockey</a></li>
                            <li><a href="https://www.instagram.com/lawn.tennis_clubiitrpr/" target="_blank" rel="noopener noreferrer">Lawn Tennis</a></li>
                            <li><a href="">Table Tennis</a></li>
                            <li><a href="https://www.instagram.com/volley_iitrpr/" target="_blank" rel="noopener noreferrer">Volleyball</a></li>
                            <li><a href="https://www.instagram.com/weightliftingclub_iitrpr/" target="_blank" rel="noopener noreferrer">Weightlifting and Gym</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } else if ($board == "bost") { ?>
            <div class="container">
                <div class="row">
                    <div class="board-head">
                        BOST- Board of Science and Technology
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="board-desc">
                            <p>CLICK <a href="https://bost-iitropar.github.io/" target="_blank" rel="noopener noreferrer">HERE</a> FOR MORE INFO</p>

                            <div class="col-md-4 dp">
                                <div class="row">
                                    <img src="<?php echo $root_path; ?>assets/img/ppl/bost-fac.jpg">
                                </div>
                                <div class="row">
                                    <div class="name">
                                        Dr. Ashwani Sharma
                                    </div>
                                    <br>
                                    <div class="desig">
                                        BOST Faculty Advisor
                                    </div>
                                </div>
                            </div>

                            <p>Science and Technology Clubs are set up to kindle and nurture the love for technology, each club with its own specialization and guest lectures by prominent personalities in the world of technology and science.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board-side-head">
                            CLUBS
                        </div>
                        <ul class="board-side-desc">
                            <li><a href="https://www.facebook.com/Aeromodellingclubiitropar/" target="_blank" rel="noopener noreferrer">Aeromodelling Club</a></li>
                            <li><a href="https://www.facebook.com/automotiveiitrpr/" target="_blank" rel="noopener noreferrer">Automotive Club</a></li>
                            <li><a href="https://www.instagram.com/cim_club_iitrpr/" target="_blank" rel="noopener noreferrer">CIM Club</a></li>
                            <li><a href="https://bost-19.github.io/monochrome_club.html" target="_blank" rel="noopener noreferrer">Monochrome- Editing Club</a></li>
                            <li><a href="https://www.instagram.com/robotics_iitrpr/" target="_blank" rel="noopener noreferrer">Robotics</a></li>
                            <li><a href="https://www.facebook.com/groups/codingclub.iitrpr/" target="_blank" rel="noopener noreferrer">Coding Club</a></li>
                            <li><a href="https://www.instagram.com/fincom_iitrpr/" target="_blank" rel="noopener noreferrer">FINCOM- Finance & Consulting Club</a></li>
                            <li><a href="https://www.instagram.com/zenith_iit_ropar/" target="_blank" rel="noopener noreferrer">Zenith- Astronomy Club</a></li>
                            <li><a href="https://bost-19.github.io/softcom.html" target="_blank" rel="noopener noreferrer">SOFTCOM- Software Community</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } else if ($board == "boca") { ?>
            <div class="container">
                <div class="row">
                    <div class="board-head">
                        BOCA- Board of Cultural Activities
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="board-desc">
                            <p>CLICK <a href="boca.php">HERE</a> FOR MORE INFO</p>

                            <div class="col-md-4 dp">
                                <div class="row">
                                    <img src="<?php echo $root_path; ?>assets/img/ppl/boca-fac.jpg">
                                </div>
                                <div class="row">
                                    <div class="name">
                                        Dr. Neelkanth Nirmalkar
                                    </div>
                                    <br>
                                    <div class="desig">
                                        BOCA Faculty Advisor
                                    </div>
                                </div>
                            </div>

                            <p>Recreation is an activity of leisure, leisure being discretionary time. The "need to do something for recreation" is an essential element of human biology and psychology. Recreational activities are often done for enjoyment, amusement, or pleasure and are considered to be "fun". And thus is the need for cultural activities.</p>
                            <p>Each IIT has its own culture and BOCA celebrates the spirit and enthusiasm of the students in a very unique way of its own. As the name itself tells the purpose for creating this board is that it controls and supports all kind of cultural activities happening in the campus.Under this comes two things, 'SPIC MACAY' and 'Cultural Secretary'.</p>
                            <p>SPIC MACAY stands for 'Society for Promotion of Indian Classical Music and Culture Among Youth'. From last two years, students at IIT Ropar are organising cultural activities in collaboration with SPIC MACAY, and will be further continuing this to promote the rich cultural heritage of india and especially make them aware of the excitement and thrill of indian classical music. Cultural Secretary is the person who governs different cultural clubs in activity at IIT Ropar and is also responsible for conducting the annual cultural fest "Zeitgeist". Elections take place the same way as that of General Secretary.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board-side-head">
                            CLUBS
                        </div>
                        <ul class="board-side-desc">
                            <li><a href="https://www.instagram.com/arturo_iitrpr/" target="_blank" rel="noopener noreferrer">Arturo- Photogrphy Club</a></li>
                            <li><a href="https://www.instagram.com/danceclub_iitrpr/" target="_blank" rel="noopener noreferrer">Dance</a></li>
                            <li><a href="https://www.instagram.com/undekha_iitrpr/" target="_blank" rel="noopener noreferrer">Dramatics</a></li>
                            <li><a href="https://www.instagram.com/alankar_iitrpr/" target="_blank" rel="noopener noreferrer">Alankar- Music Club</a></li>
                            <li><a href="">Ek Bharat Shreshth Bharat(EBSB) Club</a></li>
                            <li><a href="https://www.instagram.com/vibgyor_iitrpr" target="_blank" rel="noopener noreferrer">Fine arts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } else if ($board == "bola") { ?>
            <div class="container">
                <div class="row">
                    <div class="board-head">
                        BOLA- Board of Literary Activities
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="board-desc">
                            <p>CLICK <a href="bola.php">HERE</a> FOR MORE INFO</p>

                            <div class="col-md-4 dp">
                                <div class="row">
                                    <img src="<?php echo $root_path; ?>assets/img/ppl/bola-fac.jpg">
                                </div>
                                <div class="row">
                                    <div class="name">
                                        Dr. Aparna N
                                    </div>
                                    <br>
                                    <div class="desig">
                                        BOLA Faculty Advisor
                                    </div>
                                </div>
                            </div>

                            <p>IITs are known for producing not only technial minded students but leaders who are top notch experts in every sphere of managerial and speaking arts too.The Board of Literary Activities (BOLA) promotes the art of speaking on various platforms. Providing an outlet for cultivating literary talent, various workshops are organised for debating, writing, quizzing and other literary fields.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="board-side-head">
                            CLUBS
                        </div>
                        <ul class="board-side-desc">
                            <li><a href="https://www.instagram.com/alpha_productions_iitrpr/" target="_blank" rel="noopener noreferrer">Alpha Productions- Movie Making Club</a></li>
                            <li><a href="https://www.instagram.com/debsoc_iitrpr/" target="_blank" rel="noopener noreferrer">DebSoc- Debating Society</a></li>
                            <li><a href="">Movie Screening Club</a></li>
                            <li><a href="">Oratory Club</a></li>
                            <li><a href="">Model United Nations(MUN)</a></li>
                            <li><a href="https://www.facebook.com/enigmaiitrpr" target="_blank" rel="noopener noreferrer">Enigma-Quizzing Club</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } else if ($board == "boaa") { ?>
            <div class="container">
                <div class="row">
                    <div class="board-head">
                        BOAA- Board of Academic Affairs
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="board-desc">
                            <p>CLICK <a href="boaa.php">HERE</a> FOR MORE INFO</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Footer -->
    <?php include($root_path . 'assets/include/footer.php'); ?>

    <?php include($root_path . 'assets/include/footer-files.php'); ?>

</body>

</html>