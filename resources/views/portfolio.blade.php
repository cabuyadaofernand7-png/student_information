<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolio</title>

    <style>
        h1 {
            background-color: gray;
            background-size: cover;
            font-family: "Times New Roman", serif;
            font-size: 50px;
            color: black;
        }

        h3 {
            font-family: Verdana, sans-serif;
            font-size: 25px;
            text-align: center;
        }

        hr {
            height: 3px;
            background-color: black;
        }

        q {
            font-family: Georgia, serif;
            font-size: 25px;
        }

        body {
            background-color: lightgray;
        }

        p {
            font-size: 23px;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        .title {
            text-align: center;
            font-size: 33px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .A {
            display: none;
            background-color: white;
            padding: 20px;
        }

        .color1 {
            background: black;
            color: white;
            padding: 5px;
        }

        .color2 {
            background: white;
            color: black;
            padding: 5px;
        }

        .A:target {
            display: block;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <h1>
        <a href="#P" style="color:black; text-decoration:none;">
            <img src="{{ asset('image/logo.png') }}"
                 alt="My Logo"
                 width="150"
                 height="100"
                 style="vertical-align:middle">

            PORTFOLIO.ME
        </a>
    </h1>

    <hr>

    <!-- NAVIGATION -->
    <h2 class="title">
        <a href="#AM" class="color1">ABOUT ME</a> |
        <a href="#EB" class="color2">EDUCATIONAL BACKGROUND</a> |
        <a href="#S" class="color1">SKILLS</a> |
        <a href="#C" class="color2">CONTACT</a>
    </h2>


    <!-- HOME -->
    <div id="P" class="A">
        <p style="text-align:center; font-size:50px;">
            Welcome to my Portfolio!!
        </p>

        <p style="text-align:center;">
            Hello I am <b>John Fernand C. Cabuyadao</b>,
            Student of University of La Salette.
            <br>
            Currently taking the course of
            <b>Bachelor of Science in Information Technology</b>.
            <br>
            An irregular student who wants to learn and explore
            through the help of technology
            <br>
            while discovering new talents that I haven't discovered.
        </p>
    </div>


    <!-- ABOUT ME -->
    <div id="AM" class="A">

        <h3>ABOUT ME</h3>

        <div style="display:flex; gap:20px; align-items:flex-start;">

            <img src="{{ asset('image/me.jpg') }}"
                 alt="My Photo"
                 width="600"
                 height="250">

            <p>
                A dedicated and motivated student with a strong commitment
                to continuous learning and personal growth. I have experience
                in completing academic assignments, research projects, and
                presentations, while developing strong skills in problem-solving,
                critical thinking, and time management. I am highly attentive
                to detail and take pride in producing quality work that reflects
                both creativity and analytical understanding.
            </p>

        </div>

        <p>
            Through group projects and collaborative activities, I have
            strengthened my communication, teamwork, and leadership abilities.
            I enjoy exploring innovative ideas, applying creative solutions
            to challenges, and expanding my knowledge across different
            subjects and digital tools. As a quick learner who thrives in
            dynamic learning environments, I am eager to take on new challenges,
            contribute meaningful ideas, and further develop both my academic
            and professional skills to prepare for future opportunities.
        </p>

        <p>===============================================================</p>

        <h3>PERSONAL INFORMATION</h3>

        <p>===============================================================</p>

        <p>
            Age : 20 years old<br>
            Birthday : August 27, 2005<br>
            Birthplace : Rizal, Santiago City<br>
            Height : 5'7"<br>
            Weight : 64 kgs<br>
            Status : Single<br>
            Religion : Catholic<br>
        </p>

        <p>===============================================================</p>

        <q>
            <b>There's no success without sacrifice</b>
        </q>

        <p>
            <b>- Fernand (2021)</b>
        </p>

    </div>


    <!-- EDUCATIONAL BACKGROUND -->
    <div id="EB" class="A">

        <p>===============================================================</p>

        <h3>EDUCATIONAL BACKGROUND</h3>

        <p>===============================================================</p>

        <p>
            <b>S.Y - Current<br>
            University of La Salette</b>
            <br>
            Dubinan East, Santiago City
            <br>
            • Bachelor of Science in Information Technology
        </p>

        <hr>

        <p>
            <b>S.Y - 2023<br>
            Rizal National High School</b>
            <br>
            Rizal, Santiago City
            <br>
            • Technical-Vocational-Livelihood
            <br>
            - Specialize in Food Processing
        </p>

        <hr>

        <p>
            <b>S.Y - 2017<br>
            Santiago East Central School</b>
            <br>
            Rizal, Santiago City
        </p>

        <p>===============================================================</p>

        <h3>ACHIEVEMENTS</h3>

        <p>===============================================================</p>

        <p>
            <b>2023 - Current University of La Salette</b>
            <br><br>

            Bachelor of Science in Information Technology, successfully led
            the entire class during competitions, coordinating tasks and
            motivating peers to perform at their best. Demonstrated ability
            to inspire teamwork, manage responsibilities, and ensure group
            objectives were met efficiently.
        </p>

        <p>
            <b>2023 - 2023 Rizal National High School</b>
            <br><br>

            <b>Awarded:</b> Outstanding Immersion Student and with Honor,
            2021-2023
            <br><br>

            Successfully led the entire strand, coordinating activities,
            motivating peers, and fostering teamwork among classmates.
            Consistently acknowledged by teachers and peers for leadership,
            responsibility, and contribution to class and school activities.
        </p>

    </div>


    <!-- SKILLS -->
    <div id="S" class="A">

        <p>===============================================================</p>

        <h3>SKILLS</h3>

        <p>===============================================================</p>

        <p>
            • Graphic design (Adobe, Picsart, and Canva).<br>
            • Branding & Visual Identity<br>
            • Multimedia Skills<br>
            • Photography & Image Editing<br>
            • Video Editing (CapCut, Alight Motion)<br>
            • Time management<br>
            • Problem-solving and adaptability<br>
            • Teamwork and collaboration<br>
            • Creativity
        </p>

    </div>


    <!-- CONTACT -->
    <div id="C" class="A">

        <h3>CONTACT</h3>

        <p>
            Email: fernandcabuyadao27@gmail.com<br>
            Phone: +63 997-551-6787<br>
            Address: Purok #3 Rizal, Santiago City
        </p>

    </div>

</body>
</html>
