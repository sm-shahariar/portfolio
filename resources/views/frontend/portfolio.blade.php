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
                    <li><a href="#contact" class="text-white text-decoration-none">Contact</a></li>

                </ul>
            </div>
        </div>
    </header>
    <div class="hero mb-5" id="home">
        <h2 class="text-white text-center mb-3" id="hero">Hi, I'm SM Shahariar Rahman</h2>
        <h4 class="text-white text-center mb-3">Jr. PHP & Laravel Developer</h4>
        <h4 class="title text-center">Passionate about building clean and efficient web applications</h4>

        {{-- 1. Add a development something small picture.
        2. This picture round circule and dropping a small circule above this picture. --}}

    </div>

    <div class="d-flex justify-content-center align-items-center text-center mt-5">
        <div class="d-flex justify-content-center align-items-center gap-4">
            <a class="btn btn-primary portfolio text-decoration-none" href="#about">
                <i class="bi bi-download"></i>
                View Portfolio</a>
            <a class="btn btn-secondary telephone text-decoration-none" href="#contact">
                <i class="bi bi-telephone"></i>
                Contact Me</a>
            <a class="btn btn-success cv text-decoration-none" href="#">
                <i class="bi bi-cloud-download"></i>
                Download CV</a>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center text-center mt-5 gap-5">
        {{-- <div class="col-12"> --}}
            <div class="card shadow experience text-center p-3">
                <div class="card-body">
                    <span style="font-size: 3rem; font-weight: bold; color: #39cbf0;">1+</span>
                    <span style="display: block; font-size: 1rem; color: #fff;">Years Experience</span>
                </div>
            </div>
            <div class="card shadow project_complete text-center p-3">
                <div class="card-body">
                    <span style="font-size: 3rem; font-weight: bold; color: #f039b0;">5+</span>
                    <span style="display: block; font-size: 1rem; color: #fff;">Project Complete</span>
                </div>
            </div>
            <div class="card shadow quality text-center p-3">
                <div class="card-body">
                    <span style="font-size: 3rem; font-weight: bold; color: #f36417;">100%</span>
                    <span style="display: block; font-size: 1rem; color: #fff;">Quality</span>
                </div>
            </div>
        {{-- </div> --}}
    </div>

    <div class="about hidden" id="about">
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

    <div class="hidden" id="education">
        <h2 class="text-white text-center education">
            <img class="edu-pic" src="{{ asset('images/education.svg') }}" alt="" height="50px" width="50px">
            Education</h2>
        <div class="row" id="educations">
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

    <div class="skill hidden" id="skill">
        <h2 class="text-center text-white">
            <img class="skill-pic" src="{{ asset('images/employee-skills.svg') }}" alt="" height="50px" width="50px">
            Skills</h2>
        <div class="row" id="skills">
            <div class="col-3">
                <div class="card shadow" id="frame">
                    <div class="card-body">
                        <h3 class="ms-2">
                            <img class="frame-img" src="{{ asset('images/Cloud Server.png') }}" alt="" height="40px" width="40px">
                            Framework</h3>
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
                        <h3 class="ms-2">
                            <img class="program-img" src="{{ asset('images/code.svg') }}" alt="" height="40px" width="40px">
                            Programming Language</h3>
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
                        <h2 class="ms-2">
                            <img class="database-img" src="{{ asset('images/database.svg') }}" alt="" height="40px" width="40px">
                            Database</h2>
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
                        <h5 class="ms-2">
                            <img class="tool-img" src="{{ asset('images/tool.svg') }}" alt="" height="40px" width="40px">
                            Tools</h5>
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
    <div class="service hidden" id="service">
        <h2 class="text-white text-center">
            <img class="service-img" src="{{ asset('images/service.svg') }}" alt="" height="50px" width="50px">
            Service
        </h2>
        <div class="text-center">
            <span style="color: #7c8086; font-size: 18px;">
                Delivering clean, efficient, and scalable solutions tailored to your needs
            </span>
        </div>

        <div class="row" id="services">
            <div class="col-3">
                <div class="card shadow" id="web">
                    <div class="card-body">
                        <h3>
                            <img class="web-img" src="{{ asset('images/web-development.svg') }}" alt="" height="50px" width="50px">
                            Web Development
                        </h3>
                        <p class="mt-3 web-des">
                            I build responsive, user-friendly, and scalable websites using PHP, Laravel, HTML, CSS, and JavaScript. From clean frontend designs to powerful backend systems, I deliver solutions that are fast, secure, and impactful.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow" id="frontend">
                    <div class="card-body">
                        <h4>
                            <img class="frontend-img" src="{{ asset('images/Male web developer working on website code.png') }}" alt="" height="50px" width="50px">
                            Frontend Development
                        </h4>
                        <p class="mt-3 web-des">
                            I create modern, responsive, and interactive user interfaces using HTML, CSS, JavaScript, and frameworks. My focus is on clean design, smooth user experience, and cross-device compatibility.                        </p>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow" id="api">
                    <div class="card-body">
                        <h3>
                            <img class="api-img" src="{{ asset('images/api-program.svg') }}" alt="" height="50px" width="50px">
                            API Development
                        </h3>
                        <p class="mt-3 web-des">
                            I design and build secure, scalable, and efficient RESTful APIs to connect applications seamlessly. With Laravel and PHP, I ensure smooth data exchange, third-party integrations, and performance optimization.
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-3">
                <div class="card shadow" id="bug">
                    <div class="card-body">
                        <h3>
                            <img class="bug-img" src="{{ asset('images/bug.svg') }}" alt="" height="55px" width="55px">
                            Bug Solving
                        </h3>
                        <p class="mt-3 web-des">
                            I identify and fix errors, bugs, and performance issues in web applications to ensure they run smoothly, securely, and efficiently. I also provide ongoing maintenance and optimization for long-term stability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-60 py-5">
        <div class="shadow text-center text-white d-flex flex-column justify-content-center align-items-center py-5" id="box">
            <h3>Ready to Take Your Software to the Next Level?</h3>
            <h6 class="mt-2">
                Building secure, responsive, and high-performance applications for your business.
            </h6>
            <a href="#contact" class="btn text-decoration-none text-white mt-4" id="contact_btn">Get Started</a>
        </div>
    </div>

    <div class="project hidden" id="project">
        <div class="text-white text-center">
            <h2>
                <img src="{{ asset('images/project.svg') }}" alt="" height="50px" width="50px">
                Projects
            </h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="card shadow text-white d-flex align-items-center justify-content-center project_card" id="auto-clinic">
                    <div class="card-body">
                            <h2 class="mt-3 ms-3">
                            <img class="auto_clinic" src="{{ asset('images/service (1).svg') }}" alt="" height="100" width="100">
                            <span class="ms-4">Fast Auto Clinic</span>
                            <span class="text border p-2">Inventory Management</span>
                            </h2>
                            <p class="key mt-3 ms-3">
                                Fast Auto Clinic is a web application for efficiently managing vehicle services, inventory, and payments for both owned and external vehicles.
                            </p>
                            <div>
                                <p class="key">Key Features:</p>
                                <span class="feature keys badge border border-primary rounded-pill p-2">Vehicle Service Management</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Parts Inventory Management</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Multiple Service Zones</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Payment Tracking</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="card project_card shadow text-white d-flex align-items-center justify-content-center" id="auto-clinic">
                    <div class="card-body">
                            <h2 class="mt-3 ms-3">
                            <img class="evaly" src="{{ asset('images/shopping-bag.svg') }}" alt="" height="100" width="100">
                            <span class="ms-4">Evaly</span>
                            <span class="text border p-2">eCommerce</span>
                            </h2>
                            <p class="key mt-3 ms-3">
                                An E-commerce web application that allows users to browse products, select variants, and place orders, while admins can manage categories, brands, and inventory with role-based access.                            </p>
                            <div>
                                <p class="key">Key Features:</p>
                                <span class="feature keys badge border border-primary rounded-pill p-2">Product & Variant Management</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Role-Based Access Control</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Order & Customer Management</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Category Organization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="card project_card shadow text-white d-flex align-items-center justify-content-center" id="auto-clinic">
                    <div class="card-body">
                            <h2 class="mt-3 ms-3">
                            <img class="zavisoft" src="{{ asset('images/bio.svg') }}" alt="" height="100" width="100">
                            <span class="ms-4">Zavisoft</span>
                            <span class="text border p-2">It Company Website</span>
                            </h2>
                            <p class="key mt-3 ms-3">
                                An IT company website designed to showcase services, expertise, and projects while building trust with clients through a professional online presence.                            <div>
                                <p class="key">Key Features:</p>
                                <span class="feature keys badge border border-primary rounded-pill p-2">Service Showcase</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Portfolio & Case Studies</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Contact & Inquiry Forms</span>
                                <span class="feature badge border border-primary rounded-pill p-2">Team & About Section</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-60 py-5" id="discuss">
        <div class="shadow text-center text-white d-flex flex-column justify-content-center align-items-center py-5" id="box">
            <h3>Looking for a Reliable Web Developer?</h3>
            <h6 class="mt-2 sub-title">
                I create responsive, secure, and efficient web solutions tailored to your needs.
            </h6>
            <a href="#contact" class="btn text-decoration-none text-white mt-4" id="discus_btn">Let's Discuss Your Project</a>
        </div>
    </div>

    <div class="contact hidden" id="contact">
        <div class="text-white text-center">
            <h2>
                <img src="{{ asset('images/contact.svg') }}" alt="" height="50px" width="50px" class="me-2">
                Contact Me</h2>
                <span style="font-size: 18px;color:#7c8086;">Let’s collaborate and build impactful web solutions.</span>
        </div>
        {{-- <div class="mx-auto"> --}}
            <div class="row">
                <div class="col-6">
                    <div class="card shadow d-flex justify-content-center" id="contacts">
                        <div class="card-body">
                            <h2 class="text-white">
                                <img src="{{ asset('images/project.svg') }}" alt="" height="30px" width="30px" class="me-2">
                                Contact Information</h2>
                                <div class="mt-5 d-flex flex-row">
                                    <img src="{{ asset('images/email.svg') }}" alt="" height="50px" width="50px" class="me-3">
                                    <p class="d-flex flex-column text-white fs-5">Email
                                        <span class="email">smshahariar000@gmail.com</span></p>  
                                </div>
                                <div class="mt-4 d-flex flex-row">
                                    <img src="{{ asset('images/phone (1).svg') }}" alt="" height="50px" width="50px" class="me-3">
                                    <p class="d-flex flex-column text-white fs-5">Phone
                                        <span class="phone">+8801947116736</span></p>  
                                </div>
                                <div class="mt-4 d-flex flex-row">
                                    <img src="{{ asset('images/github.svg') }}" alt="" height="50px" width="50px" class="me-3">
                                    <p class="d-flex flex-column text-white fs-5">Git Hub
                                        <span class="git">sm-shahariar</span></p>  
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card shadow message">
                        <div class="card-body">
                            <h3 class="me-2 text-white">
                                <span id="dots-message"></span>
                                Send Message</h3>
                                <form action="#" method="#">
                                    <input type="text" name="name" id="name" placeholder="Your Name" class="form-control mb-3 py-3 mt-5 name">
                                    <input type="email" name="email" id="email" placeholder="Your Email" class="form-control mb-3 py-2 emails">
                                    <textarea name="message" id="message" rows="4" cols="4" placeholder="Your Message" class="form-control text-white mb-3"></textarea>
                                    <button type="submit" class="btn" id="message_btn">Send Message</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>
    <div class="thank-you text-center fs-5" style="margin-top: 4%;color:#7c8086;">
        Thank You For Visiting
    </div>

</div>

@endsection
