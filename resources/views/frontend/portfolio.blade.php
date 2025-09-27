@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <header class="shadow-lg">
        <div class="row mt-3 ms-2">
            <div class="col-4">
                <div class="brand">
                    <h3 class="text-white">SM Shahariar</h3>
                </div>
            </div>
            <div class="col-8">
                <ul class="navbar me-5">
                    <li><a href="#home" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#about" class="text-white text-decoration-none">About</a></li>
                    <li><a href="#education" class="text-white text-decoration-none">Education</a></li>
                    <li><a href="#skill" class="text-white text-decoration-none">Skill</a></li>
                    <li><a href="#service" class="text-white text-decoration-none">Service</a></li>
                    <li><a href="#project" class="text-white text-decoration-none">Project</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="hero" id="home">
        <h2 class="text-white text-center mb-3" id="hero">Hi, I'm SM Shahariar Rahman</h2>
        <h4 class="text-white text-center mb-3">Jr. PHP & Laravel Developer</h4>
        <h4 class="title text-center">Passionate about building clean and efficient web applications</h4>

        {{-- 1. Add a development something small picture.
        2. This picture round circule and dropping a small circule above this picture. --}}

    </div>

    <div class="about" id="about">
        <h4 class="text-white text-center" id="about-me">
            <img src="" alt="">
            About Me
        </h4>
        <div class="row topic">
            <div class="col-6 ms-5">
                <div class="card shadow" id="card-about">
                    <div class="card-body">
                        <p>
                            Hi, I’m <strong>SM Shahariar Rahman</strong>. I have <strong>1+ years of experience</strong>
                            in <strong>web development and software engineering</strong>.
                        </p>
                        <p>
                            I specialize in building <strong>scalable, user-friendly web applications</strong> with a
                            focus on <strong>PHP and Laravel</strong>. Over the past year, I’ve worked on various
                            projects that strengthened my skills in both <strong>frontend and backend development</strong>.
                        </p>
                        <p>
                            I’m passionate about writing <strong>clean, efficient code</strong> and continuously
                            learning new technologies to improve my craft. My goal is to grow as a developer,
                            contribute to impactful projects, and deliver solutions that make a difference.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <div class="profile-wrapper">
                    <img src="{{ asset('images/profile.jpg') }}"
                        alt="Profile"
                        class="profile-img">
                    <div class="dot top"></div>
                    <div class="dot bottom"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="education">
        <h2 class="text-white text-center education">
            <img class="edu-pic" src="{{ asset('images/education.svg') }}" alt="" height="50px" width="50px">
            Education</h2>
        <div class="row mt-5">
            <div class="col-6">
                <div class="card shadow edu">
                    <div class="card-body">
                        <h5 class="card-title" id="bsc">Bachelor of Science in Computer Science</h5>
                        <p class="card-text">Bangladesh University Of Business & Technology</p>
                        <p class="card-text">2025-Present</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow edu">
                    <div class="card-body">
                        <h5 class="card-title" id="diploma">Diploma In Engineering</h5>
                        <p class="card-text">Rangpur Polytechinc Institute</p>
                        <p class="card-text">2019 - 2024</p>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-4">
                <div class="card shadow edu">
                    <div class="card-body">
                        <h5 class="card-title" id="ssc">Secondary High School Certificate</h5>
                        <p class="card-text">Gajaghanta High School & College</p>
                        <p class="card-text">2017 - 2019</p>
                    </div>
                </div>
            </div>
            <div class="col-6 mt-4">
                <div class="card shadow edu">
                    <div class="card-body">
                        <h5 class="card-title" id="jsc">Junior School Certificate</h5>
                        <p class="card-text">Gajaghanta High School & College</p>
                        <p class="card-text">2019 - 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skill" id="skill">
        <h2 class="text-center text-white">
            <img class="skill-pic" src="{{ asset('images/employee-skills.svg') }}" alt="" height="50px" width="50px">
            Skills</h2>
        <div class="row" id="skills">
            <div class="col-3">
                <div class="card shadow" id="frame">
                    <div class="card-body">
                        <h5 class="ms-2">Framework</h5>
                        <ul>
                            <li>Laravel</li>
                            <li>React</li>
                            <li>Bootstrap</li>
                            <li>Tailwind Css</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow" id="program">
                    <div class="card-body">
                        <h5 class="ms-2">Programming Language</h5>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>C</li>
                            <li>PHP</li>
                            <li>Ajax</li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="col-3">
                <div class="card shadow" id="database">
                    <div class="card-body">
                        <h5 class="ms-2">Database</h5>
                        <ul>
                            <li>MySql</li>
                            <li>Sql Lite</li>
                            <li>MongoDB</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow" id="tool">
                    <div class="card-body">
                        <h5 class="ms-2">Tools</h5>
                        <ul>
                            <li>Git Hub</li>
                            <li>Git</li>
                            <li>Laragon</li>
                            <li>PostMan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
