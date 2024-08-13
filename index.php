<!DOCTYPE html>
<html lang="en">

<head>
  <!--
                                                                       
                                    ""#    mmmmmm    mm   mmmm 
 mmmmm   m mm   mmm   mmmm    mmm     #        #"   m"#  "   "#
 # # #   #"  " #"  #  #" "#  #" "#    #       m"   #" #      m"
 # # #   #     #""""  #   #  #   #    #      m"   #mmm#m   m"  
 # # #   #     "#mm"  ##m#"  "#m#"    "mm   m"        #  m#mmmm
                      #                                        
                      "                                          
                    
A Open-Source Web Project
https://github.com/mrepol742/mrepol742.github.io
-->
  <?php
  include("includes/head.php");

  $meta = new meta();
  $meta->setTitle(
    "Melvin Jones Gallano Repol - Software Engineer",
    "I'm a Self-taught Freelance Software Engineer with experience in full-stack web development, seo, data analyics, embedded system design with arduino programming, hardware & software troubleshooting and PWA.",
    "https://mrepol742.github.io/"
  );
  $meta->setImage("https://mrepol742.github.io/images/cover.jpg", "Cover Photo");
  $meta->setKeywords("melvin jones gallano repol, mrepol742, software engineer, web developer, seo, project orion, webvium, self taught, computer hardware & software, arduino, programming, computer science, intnext real estate, webvium vpn");
  ?>
</head>

<body class="d-flex flex-column min-vh-100">

  <?php
  include('includes/nav.php');
  include('includes/components/toast/privacypolicy.php');
  ?>

  <main>
    <div class="row g-0 pt-5 pb-5">
      <div class="col-md-4" id="mobile">
        <img class="rounded mx-auto d-block img-fluid circle-png" src="/assets/images/melvin-jones-repol.jpg" width="230" height="230" alt="Picture of Melvin Jones Gallano Repol" style="margin-bottom: 10%;">
      </div>
      <div class="col-md-8">
        <h1>Melvin Jones Gallano Repol</h1>
        <p class="sub-title mt-3">I'm a Freelance Software Engineer with expertise in full-stack
          web development, search engine optimization, data analytics, embedded system design with arduino
          programming, hardware & software
          troubleshooting and progressive web applications.</p>
        <a href="https://www.buymeacoffee.com/mrepol742" class="mt-2 mb-2">
          <img src="https://img.shields.io/badge/Buy%20Me%20a%20Coffee-ffdd00?style=for-the-badge&logo=buy-me-a-coffee&logoColor=black" alt="Buy me a Coffee">
        </a>

        <a href="https://www.patreon.com/melvinjonesrepol" class="mt-2 mb-2">
          <img src="https://img.shields.io/badge/Patreon-F96854?style=for-the-badge&logo=patreon&logoColor=white" alt="Become my patreon">
        </a>

        <a href="https://paypal.me/mrepol742" class="mt-2 mb-2">
          <img src="https://img.shields.io/badge/PayPal-00457C?style=for-the-badge&logo=paypal&logoColor=white" alt="PayPal Me">
        </a>

        <a href="https://ko-fi.com/mrepol742" class="mt-2 mb-2">
          <img loading="lazy" src="https://img.shields.io/badge/Ko--fi-F16061?style=for-the-badge&logo=ko-fi&logoColor=white" alt="Buy me a Coffee">
        </a>

        <a href="https://github.com/sponsors/mrepol742" class="mt-2 mb-2">
          <img loading="lazy" src="https://img.shields.io/badge/sponsor-30363D?style=for-the-badge&logo=GitHub-Sponsors&logoColor=#EA4AAA" alt="Sponsor me on Github Sponsors">
        </a>

      </div>
      <div class="col-md-4" id="desktop">
        <img class="rounded mx-auto d-block img-fluid circle-png" src="/assets/images/melvin-jones-repol.jpg" width="230" height="230" alt="Picture of Melvin Jones Gallano Repol">
      </div>
    </div>
    <h2 class="text-center mt-5" id="projects">Projects</h2>
    <div class="d-flex justify-content-center">
      <div class="line"></div>
    </div><br>
    <div class="row">
      <div class="col-sm-6 col-md-3" id="projectwebvium">
        <div class="card ">
          <video preload="none" class="rounded mx-auto d-block img-fluid" controls loop poster="/assets/images/webvium22.png">
            <source src="/assets/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4" type="video/mp4">
            Your browser does not support the video tag. Click play to watch it directly <a href="/assets/videos/Webvium%20-%20Lightweight,%20Fast,%20Material%20and%20Full-Featured%20Android%20Web%20Browser.mp4">Play</a>.
          </video>
          <div class="card-body">
            <h5 class="card-title">Webvium Browser</h5>
            <p class="card-text">A Project that aims to be the lightest, fastest, secured, private and full-featured
              android web browser. Programmed and design from Scratch.</p>
            <p>
              Technologies: <br>
              java · xml · gradle · git · sqlite
            </p>
            <button type="button" class="btn" onclick="window.location.href='/webvium/';"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;<b>Download</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="/assets/images/myportfolio.png" class="rounded mx-auto d-block img-fluid" alt="Melvin Jones' Portfolio">
          <div class="card-body">
            <h5 class="card-title">mrepol742.github.io</h5>
            <p class="card-text">This is where i showcase my projects, landing pages, tools and other awesome
              things.</p>
            <p>
              Technologies: <br>
              html · css · bootstrap · javascript · seo · php composer · git
            </p>
            <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/mrepol742\/mrepol742.github.io';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <video preload="none" class="rounded mx-auto d-block img-fluid" controls loop poster="/assets/images/webviumvpn.png">
            <source src="/assets/videos/Webvium%20VPN%20-%20Anonymous,%20Secured,%20Private%20and%20the%20fastest%20Virtual%20Private%20Network.mp4" type="video/mp4">
            Your browser does not support the video tag. Click play to watch it directly <a href="/assets/videos/Webvium%20VPN%20-%20Anonymous,%20Secured,%20Private%20and%20the%20fastest%20Virtual%20Private%20Network.mp4">Play</a>.
          </video>
          <div class="card-body">
            <h5 class="card-title">Webvium VPN</h5>
            <p class="card-text">Inspired from Webvium, Webvium VPN is a lightweight android VPN app focuses in speed,
              simplicity, security and privacy.</p>
            <p>
              Technologies: <br>
              java · xml · openvpn
            </p>
            <button type="button" class="btn" onclick="window.location.href='/webviumvpn/';"><i class="fa-solid fa-download"></i>&nbsp;&nbsp;<b>Download</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="/assets/images/orion-banner.png" class="rounded mx-auto d-block img-fluid" alt="Orion (Chatbot)" width="550">
          <div class="card-body">
            <h5 class="card-title">Orion Chatbot</h5>
            <p class="card-text">
              Meet the lightning-fast Facebook Messenger chatbot, seamlessly managing multiple accounts with access to
              271 commands. With distinct privileges for admins, owners, roots, and users, it's the lightweight solution
              for efficient and personalized interactions.</p>
            <p>
              Technologies: <br>
              node.js · web scraping · openai · json · npm · git
            </p>
            <button type="button" class="btn" onclick="window.location.href='/project-orion/'"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Fork</b></button>
          </div>
        </div>
      </div>
        <!--
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="/assets/images/online-catering-system.png" class="rounded mx-auto d-block img-fluid" alt="Online Catering System" width="550">
          <div class="card-body">
            <h5 class="card-title">Online Catering System</h5>
            <p class="card-text">A Project for HCI Subject.</p>
            <p>
              Technologies: <br>
              php · html · css · javascript · bootstrap · mysql · git
            </p>
            <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/mrepol742\/Online-Catering-System';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="https://raw.githubusercontent.com/mrepol742/Room-Rental-System/master/demo.png" class="rounded mx-auto d-block img-fluid" alt="Room Rental System" width="550">
          <div class="card-body">
            <h5 class="card-title">Room Rental System</h5>
            <p class="card-text">A Project for Web Dev Subject.</p>
            <p>
              Technologies: <br>
              php · html · css · javascript · bootstrap · mysql · git
            </p>
            <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/mrepol742\/Room-Rental-System';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="/assets/images/lgu-ms.png" class="rounded mx-auto d-block img-fluid" alt="LGU Management System" width="550">
          <div class="card-body">
            <h5 class="card-title">LGU Management System</h5>
            <p class="card-text">A Project for Project Management class.
            </p>
            <p>
              Technologies: <br>
              php · html · css · javascript · bootstrap · mysql · git · php composer
            </p>
            <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/lgu-ms\/lgu-ms';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button><br>
          </div>
        </div>
      </div>
-->
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="/assets/images/blog.png" class="rounded mx-auto d-block img-fluid" alt="mrepol742 @ blog" width="550">
          <div class="card-body">
            <h5 class="card-title">mrepol742 @ blog</h5>
            <p class="card-text">
            </p>
            <p>
              Technologies: <br>
              vuepress
            </p>
            <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/mrepol742\/blog';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button>
            <button type="button" class="btn" onclick="window.location.href='\/blog\/';"><i class="fa-solid fa-blog"></i>&nbsp;&nbsp;<b>Blog</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
          <img loading="lazy" src="/assets/images/premoza-cover-min.png" class="rounded mx-auto d-block img-fluid" alt="Premoza" width="250">
          <div class="card-body">
            <h5 class="card-title">Premoza</h5>
            <p class="card-text">TBA
            </p>
            <p>
            Technologies: <br>
          laravel
            </p>
             <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/premoza\/premoza';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button><br>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card ">
         <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">more available at my github official account
            </p>
             <button type="button" class="btn" onclick="window.location.href='https:\/\/github.com\/mrepol742';"><i class="fa-solid fa-code"></i>&nbsp;&nbsp;<b>Source</b></button><br>
          </div>
        </div>
      </div>
    </div>
    <br>
    <h2 class="text-center mt-5" id="skills">Skills</h2>
    <div class="d-flex justify-content-center">
      <div class="line" style="width: 6%;"></div>
    </div><br>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('se')">
          <div class="card-body">
            <!-- Software engineer icons created by Freepik - Flaticon -->
            <img loading="lazy" src="/assets/images/software-engineer.png" class="rounded bg-skill p-3" alt="Software Engineering" width="90">
            <h5 class="card-title mt-4">Software Engineer</h5>
            <p class="card-text">It's a field of engineering that i used for development and maintenance of software
              systems. It involves the application of engineering principles and techniques to the design<span id="dotsse">...</span><span id="readMorese">&nbsp;See More</span><span class="more" id="morese">,
                development,
                testing, and maintenance of software. <br><br>With software engineering, i can create efficient and
                reliable software solutions that meet customer needs. Additionally, software engineering also involves
                the
                use of various tools and technologies to ensure the quality and performance of the software.</span></p>

          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('wd')">
          <div class="card-body">
            <!-- Software development icons created by HAJICON - Flaticon -->
            <img loading="lazy" src="/assets/images/development.png" class="rounded bg-skill p-3" alt="Full Stack Web Development" width="90">
            <h5 class="card-title mt-4">Full Stack Web Developer</h5>
            <p class="card-text">As a web developer, I have experience in creating dynamic websites and web applications
              using HTML, CSS, JavaScript, PHP, MySQL, Bootstrap, NodeJS, Firebase, MongoDB and other web<span id="dotswd">...</span><span id="readMorewd">&nbsp;See More</span><span class="more" id="morewd">
                development
                frameworks.<br><br> I am proficient in developing
                user-friendly and responsive web designs that are optimized for various devices and browsers. I have a
                strong understanding of web development principles and best practices, and I am able to troubleshoot and
                debug web applications.</span></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('seo')">
          <div class="card-body">
            <!-- Seo icons created by Freepik - Flaticon -->
            <img loading="lazy" src="/assets/images/seo.png" class="rounded bg-skill p-3" alt="Search Engine Optimization" width="90">
            <h5 class="card-title mt-4">Search Engine Optimization (SEO)</h5>
            <p class="card-text">It's a process I use for web development, like on this one, which involves optimizing
              websites to rank higher in search engine results. In SEO it involves optimizing content, website
              structure, and<span id="dotsseo">...</span><span id="readMoreseo">&nbsp;See More</span><span class="more" id="moreseo"> other elements to make sure
                that search engines can easily find and index a website or a
                page.
                <br><br>It is important part of digital marketing, as it helps to increase website visibility and drive
                more organic traffic to a website.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('dataa')">
          <div class="card-body">
            <!-- Big data icons created by xnimrodx - Flaticon -->
            <img loading="lazy" src="/assets/images/monitor.png" class="rounded bg-skill p-3" alt="Data Analytics" width="90">
            <h5 class="card-title mt-4">Data Analytics</h5>
            <p class="card-text">It's a process of trasforming raw data to understandable information with the main goal
              is delivering useful information that support desicion-making<span id="dotsdataa">...</span>
              <span id="readMoredataa">&nbsp;See More</span><span class="more" id="moredataa">
                it includes a range of tools, technologies, and processes used to find trends and solve problems.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('ar')">
          <div class="card-body">
            <!-- Motherboard icons created by Rmpp - Flaticon -->
            <img loading="lazy" src="/assets/images/motherboard.png" class="rounded bg-skill p-3" alt="Arduino" width="90">
            <h5 class="card-title mt-4">Embedded System Design with Arduino Programming</h5>
            <p class="card-text">
              Demonstrates my ability to create compact and specialized computer systems using the Arduino platform.
              This skill involves combining hardware and software expertise to develop<span id="dotsar">...</span><span id="readMorear">&nbsp;See More</span><span class="more" id="morear"> efficient, low-power, and often
                real-time systems for various applications, from IoT devices to robotics and home automation.
                <br><br>With my proficiency in selecting microcontrollers, sensors, actuators and programming them
                effectively, i can optimize code, manage power consumption, and troubleshoot hardware-software
                interactions. My expertise in this field positions is as a valuable contributor in the world of smart
                devices and automation.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('chs')">
          <div class="card-body">
            <!-- Troubleshooting icons created by Freepik - Flaticon -->
            <img loading="lazy" src="/assets/images/troubleshooting.png" class="rounded bg-skill p-3" alt="Hardware and Software Troubleshooting" width="90">
            <h5 class="card-title mt-4">Hardware and Software Troubleshooting</h5>
            <p class="card-text">I have experience in computer hardware and software, which includes assembling,
              troubleshooting, and repairing of computer systems. I am knowledgeable in the installation and
              configuration of operating systems<span id="dotschs">...</span> <span id="readMorechs">&nbsp;See
                More</span><span class="more" id="morechs">, software
                applications, and hardware components.
                <br><br> And also proficient in the use of various software tools and technologies to optimize computer
                performance and ensure system security.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card " onclick="readMore('pwa')">
          <div class="card-body">
            <!-- App development icons created by justicon - Flaticon -->
            <img loading="lazy" src="/assets/images/app-development.png" class="rounded bg-skill p-3" alt="Progressive Web Applications" width="90">
            <h5 class="card-title mt-4">Progressive Web Applications (PWA)</h5>
            <p class="card-text">A very popular Software Applications built with common web technologies such as HTML,
              CSS and JavaScript<span id="dotspwa">...</span> <span id="readMorepwa">&nbsp;See More</span><span class="more" id="morepwa"> its intended to work
                in any Operating System with modern web browsers.
                <br><br> It's a website that behaves as if its a native applications delivered through web.</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <h2 class="text-center mt-5" id="myteam">My Team</h2>
    <div class="d-flex justify-content-center">
      <div class="line" style="width: 6%;"></div>
    </div><br>
    <div>
      <div class="card-group">
        <div class="card m-3">
          <div class="card-body text-center">
            <img class="rounded mx-auto d-block img-fluid circle-png my-team" src="/assets/images/melvin-jones-repol.transparent.png" width="200" alt="Picture of Melvin Jones Gallano Repol" style="background: #de5246;">
            <h5 class="card-title mt-3">Melvin</h5>
            <p class="card-text">Lead Designer</p>
            <p class="card-text">
              <a href="https://mrepol742.github.io/#me" aria-label="Website" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-solid fa-code"></i>
              </a>
              <a href="https://github.com/mrepol742/" aria-label="Github" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-github"></i>
              </a>
              <a href="https://linkedin.com/in/mrepol742" aria-label="LinkedIn" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="card m-3">
          <div class="card-body text-center">
            <img class="rounded mx-auto d-block img-fluid circle-png my-team" src="/assets/images/melvin-jones-repol.transparent.png" width="200" alt="Picture of Melvin Jones Gallano Repol" style="background: #F4B400;">
            <h5 class="card-title mt-3">Jones</h5>
            <p class="card-text">Lead Marketer</p>
            <p class="card-text">
              <a href="https://mrepol742.github.io/#me" aria-label="Website" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-solid fa-code"></i>
              </a>
              <a href="https://github.com/mrepol742/" aria-label="Github" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-github"></i>
              </a>
              <a href="https://linkedin.com/in/mrepol742" aria-label="LinkedIn" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </p>
          </div>
        </div>
        <div class="card m-3">
          <div class="card-body text-center">
            <img class="rounded mx-auto d-block img-fluid circle-png my-team" src="/assets/images/melvin-jones-repol.transparent.png" width="200" alt="Picture of Melvin Jones Gallano Repol" style="background: #4285f4;">
            <h5 class="card-title mt-3">Repol</h5>
            <p class="card-text">Lead Developer</p>
            <p class="card-text">
              <a href="https://mrepol742.github.io/#me" aria-label="Website" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-solid fa-code"></i>
              </a>
              <a href="https://github.com/mrepol742/" aria-label="Github" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-github"></i>
              </a>
              <a href="https://linkedin.com/in/mrepol742" aria-label="LinkedIn" style="padding-left: 5px; padding-right: 5px;" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="timeline-page position-relative">
            <div class="timeline-item mt-5 pt-4">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="duration date-label-left position-relative text-md-end">
                    <h2 id="workexp">Work Experience</h2><br>
                    <!-- Troubleshooting icons created by juicy_fish - Flaticon -->
                    <img loading="lazy" src="/assets/images/freelancer.png" class="rounded bg-skill px-3 py-3" alt="Freelancer" width="90">
                    <h5 class="my-2">Freelance</h5>
                    <small class="text-muted mb-0">2021-present</small>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-4 mt-sm-0">
                  <div class="event event-description-right float-left text-start">
                    <h6 class="title mb-1 text-capitalize">Software Engineer & Full Stack Web Developer</h6>
                    <p class="timeline-subtitle mt-3 mb-0 text-muted">I create efficient and reliable software &
                      websites that meet customer needs based on their system analysis and design & business model.
                      <br><br>&nbsp;&nbsp; - developing and maintaining software/web applications using languages and
                      tools specified in system analysis.
                      <br>&nbsp;&nbsp; - transform design into high quality applications
                      <br>&nbsp;&nbsp; - building reusable, stable & maintenance free components
                      <br>&nbsp;&nbsp; - troubleshooting bug, issues and threats.
                      <br>&nbsp;&nbsp; - completing the task on time
                    </p>
                    <b>Hire Me @ mrepol742@gmail.com</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline-item mt-5">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="duration date-label-left position-relative text-md-end">
                    <h2 class="px-4" id="certificates">Certificates</h2><br>
                    <img class="rounded bg-skill px-3 py-3" width="90" src="data:image/png;base64,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" alt="Sololearn logo">
                    <h5 class="my-2">Sololearn Courses</h5>
                    <p class="timeline-subtitle mt-3 mb-0">Sololearn</p>
                    <small class="text-muted mb-0">1-2019 to 2-2022</small><br>
                    <a href="https://www.sololearn.com/profile/11349142">See certification</a>
                  </div>
                </div>
              </div>

            </div>
            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2 mt-4 mt-sm-0">
                  <!-- dummy -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                  <div class="duration duration-right position-relative">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="data:image/png;base64,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" alt="IBM logo">
                    <h5 class="my-2">Introduction to DevOps</h5>
                    <p class="timeline-subtitle mt-3 mb-0">IBM</p>
                    <small class="text-muted mb-0">10-2023</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/certificate/UH3LKLXAY5WK">See
                      certification</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="duration date-label-left position-relative text-md-end">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABgFBMVEX//////v/0///5//////3U8/jB3vT1//8iZs30/Pnw///4+/8NYv74///8///s/v8sZsbd+PxJedkOXPkOYvgRWdBXhd7/+///+P+Jp83///i02OULXu8AW/ANW/idwN8FWcmYw92Jq/Bwld9omuCHstMKWuUQU+uArtemwN4aYNOp0ur7//NLfscQYe+rz+/o+P+BseUJWtv//+3j///6/+r/9vMLWsTS8v8SYuzo9P/y//YNWN2Vue9ai+JTi9mjtt1wk/RJhrcOZ+o1bbjD2vn/8PSjxeu21+zL6Pyw0vJRgL0KVrcCVNK0yuNdgbQbVrCf0P0ucd4TaeNfls+NuusiY6wNVfmNqOBlgcXN2OhVebN3irBOfeOMxOmgsuiq3/P6/9s7ffSMqb3U4+eSn7ywvNKDn8akrtWFrryAmdxogd4UR7w7aL0bT6R0oNhimfB7kOBwm75rn7x1s/OAq/VHgbRWqPahts7FzvlVfaNymcZDgccZS7Q0bK6rx9PpwyWDAAAVBElEQVR4nO2b/X/aRraH0UuQJVkjMGApWiCO7YCDBZF5M0j4JYuJjd/rlwQ76257k273pnWc9nb3etdJ+6/vOSMkcPC2/ezFP915EmPQvIijkc73nJlxJMJgMBgMBoPBYDAYDAaDwWAwGAwGg8FgMBgMBoPBYDAYDAaDwWAwGAwGg8FgMBgMBoPBYDAYDAaDwWAwGAzGf4hIX0TxriIRC+4quaMqxw01C19HqonhOf9tT7/vjL8bsV6PCLIoEmEUWVEUy7a4O4pCNEQVrboJqIQzDE60ZEGTJDmsQ/pEuLpliYSIVmjDC07gJY0QFT+QCMFCy5I1Fb7WuCwU1f3N7S3gDyNsbT3bd2SZ3x8tulXt2XY3DpcCsETDsCy+uz/SIR7Yd1WuHrllodZ9tri4Ncw2shnVxjeSWmNnN7UHpGZG2Nvb3Zf4xsGn0aKA5WV42Z368NODqudVKrYII6gvHO61WntDdXx21xXVgNtlyMLGzvvYxEQsFoPiCVopBRQOT6ryuAyM8I214+RkIpEcpZlMlLcVr3GWvqNwiFIpnc6tfdHgCQykZRH9tJBMDPU46ZNMf2xIXF0U5fDbk+2jNpRDD/CSpD9QO5k8PqkqY7OQNIqpdLLUbsN3yib6L/RN5riZSe1rslPMfF50600im82k063vVzsq3KJW3VBOU6VMJh0WT9I6UOvlpmLAoziwMPK3VO7Vq1dQFFJuptPp1I4+vrvUcHvTU1PTxeLUCMXp6bNzUXZ7o0W3mEamiq//dG5whKub7ubG1MXU9Gi9nU3HuDWGkZvX0xdHF0EfSLGIX6en1sdlIbgGt9GN30mj0QDfwKnu3cUUJ3jz4EHckS1RVcFKp9F4AJ8/50HXIdzt51CHWo7jxLEybfDAP7FrvhiTgZEIZxABvpnGqyMYRPYEwzSs0aIQDkbEkwEiaPBqyaJKZBkuC5HDOnKAhCMz7EuhsaJ4tiVLQ3XgTifENMZmISihbNtiRBgtMkXbJia8/toFAqEHpYtwJhdBcbRs+Ma2yBl3yjpHAwPfQvqgEU0SBHhHwiokAhLsCYS7o/l/hFhznn35+PHjRyGPAx79eeXx43PT1L8aHBqt5L/3j3756FHUqVSU7qNHm+vro61ONzddcEac5PHEqFdI9/TRCE+xvy8Xva/H9hxa3bWZ1PJyoZzyKRTKAam9mct9zmj8MYUfPqNcbuHBVotWbbVmCnAo9Sk2axHl9HCmXN7r1xlquZc67EmcZUm2wIEwOvOfwqJCoeB3m8P6e2e6NUZf+l0uk+7r0SSKWyLguJlOdYioF7PZ/pEhiaNakA3rJtJpbF5q/lfE1FeWm1AnMfl5q0QytVrVUDQ5zuD47lR7SFNLvnImsFn+O8kcl4ERozvVAvFKg2oDpVKz2cw1S0iz0G6mOpronOUQKGj6laAa/VAKGuCHXAk/l5p7rsmvLLfpe9rLoFV6MpOKdSULn1N4ApXN3fJwh9g+k8FfmdaZOj4LRbe3enHx3fQqaNHq6vTq2oDV6bWTKOHcb4rwobg2P18MVWt+bf5jUO3jycnH4toq8mF1teiaanQee+tX2JmfHrB2cE5ALyA6t21n/WyoADro9wzvdp4KlbE9h7asV3WQJF3hFceBbELRER4OqXAQfKmg+8T1IeL0EzQDoIXi8H47XQFPSRzsUlEcfRRJFA2QErtSsdTbXWIT7AXkMa7b47PQsj3Psyw4o42ZDYqZagCc8cLkKjULkgUbPxsqp6pBHkTgAyZKtKLIoS6ClGPeIwvQlQ2CBuEbRBOgi4PsiYgCrwiQf5iGTJ9FTRkqo+0tWirI3vgcDYperWJB756s+fkejxkbeAJ0d/2TojEYrEi8jwRfQ0VdQxs5FZphiSRJ2BY9iUiwHZgn8YrCB60EHm4OGa6IIVoEnjRF58MeMc+EqyHjhbNrNje255AzTfhGEVVT9Oj19UPkDXDt8IKMUQmpVUQTrjCBL/v2zcOAb/7iSDSRALnXnK03T+jRJ1DhWxeGkxMkgci88wv2NWhFq/yiwn3KicT967dv/vvhLb75dt+RhIhd+7pmjc/TcMHUgvDu+3yiH+SXd7c1ywpnIzQB7im5ujADukLJ5AvbCowtZxmVmqxPwfF2M5OFNOFV5hsFUn684Wte9PAYk4y032k6gxlG+vsveLgydWFhDzxtkFGkc9lXiUw2/50T8ScyxjuT4aO8S4WpXHO3w4uD6B6eLbhL9aVUUD5ZikW9mgV3sSHakn6RTiTbIApJ8PqpfUXzLbT56G47bEFbgeY1J650W7YMdxrKEmERfCi1m+25Kvm17/h/glRvDvdyuVYuU27lUocdbTC1FCFwH5uc0vs+17/kudTLqGzLED1CUCvHz5ZnCpl8BlpDBNPl+2PICZ3DmRYoaZj74dtc6rIr8YLaeZ+CW2FQlM/nUuW9tXu0MKIvXs19mJv78AH/X7lEHET3EIELakTr/DAf8KHnqugxDAG8grP+bn7++fPn0Hp+bl6RIJSmFqrdHvT14UPYCj5BpauoBhnI/tWH589/mAs7fP4c3s+d3qOFcLcpOnpSRZBAm4g98NccZ8uaatc8HuUSXSPUNF7UDcM0wStaHFEVRUOvqeNvjfgWgrskkoa+VOoDb3hQX6sGnaugfDy4Wl6hTlhXNBmOSLX7eAD7FlbqIAioZRWOaHIFFDk8mWGBqFW+rikqaggKhCxjVGKj4oFXAH1UUQt5GUaVShtOtaIsoi7YIC2IaVAFATmBvjmV5zW7YgZAC9tWTXNsQn+HhWAgXm5FiQiK7lgVezDXwIGxRuVrr0rHD0exqtPwQ1eCIAh/wUEVZ5r6FtZqMCpQVwuHEG5gCeIch9RFjbahSogvEM3gPaCaY1T6Ecj+ycnV0tJS7+rq6uZbV/NnaX1ALEzR27r68ccfnzxZeAI/S7OzV0sLS0sL9Kf/ZunhtQxK4Dt7sSI7D6+QJwFQ8ebm6uTqVHMf3pwANzc3Cw/pUeDH/7m52ffu0UL9ajdVxgTtuF2eeR9VSPjMizCg8MgpS+gZIfUAn1koZ/JpzAvBB2ZBzfL5PSjbW75ywJH6aiZaUud9odwsN3MBTewf6rXizw5pGtrMpXMl6m1BUY8nCqm5+P0ZGNHflZOgaolXOFO621XkwWwKPHAQSupLpWQpBLQP86VQ0BKTyebMnEvvUr9ZXW4cNpOYefrTpZBN0TbJZOanD8dNmlm9guSxhIkl/G83J5P3qhYOxDS5MowNjAyMYRDTIBa6FEtf+D4/QjA8oIR7y2tdnNMOWpkketjKlVv9Ou32Xqh+R6lcJp/Nw9jnWsfHOX8UU+V8fvU+x1A4f7jk05vtrbvg98IiDk0U5ejK7AhLAbOzKytdgRsKt8Savt7rwRPbW+otLa1sb/b8Jj3K7N/+hm+XTr/YhE8LC3DShV7vqXKPzyEnUM8HUgdOTRJtK1z94UyrYkEMKvmu09fE/gvNCQDwwTpGa9Zgzk6s2f2UAksVXuvnEeBVNY32Imn0RaJ6qOJ5tfv0paaqSYSLaF5FlCQVbRpYCF8Wchobkrv+rKYYYAQQTRBRRAcWgs9RTQ6rcJhEaZCNgXBCBoqrVB5kknBBdPC9HBGI5eG0JSQz9xJy9zG0fr7OY7oN+V0Yl4Zj6CgjBPm5Auk+BOuWpYUdwmVxXJw70KvVajyu2DadSBhqqChxr1aRqiCkVV2F8zv8fY6hdn2ws4MidTK/dnZwLgxdzf5zuL8zN8Lf/9jnrLjT62rq0NyuaD/48Wzn5mQOepzfOdjnhddnZ3OrP/xAG0IQCvzzjSe/Ofi4c3AzP3d1sHO2rt+fgaAWe+lSu5zJttvNwvuoNLR+ggaalrLwfSbRd4boRnE5KUv9P86zgTOdWetK6iAjMaXoYTNXzmXLuTR4yne6UyjnMll/oQkn96C3mXeO8xKSjHQmC/Kazq/eZ/YUn28mks0S6CEkcqCHUmgh6GHEMO3qUm507ZAum2Uh900kJkszc90hCw2+sQsKCtlmaTKRAQuV/y0cN9OgqU2UQkgok8nCihPfoKuNkGFC1Xu1sHq1W25BxJGBKCP1vjP0zEMMDe7C1Jc+tQL5w5gmgzENxEDpHEY2GKuUP53Eddy0QDEgB1zGeW+cF0/t9lTj2WUKKpVRJHOtVKHQyn3n6o3XKYiRmtADhFRz8XtUfCW60lsBfsKXdZeLhHGpiPNilsVHFwaA/v0EcWkPw1iUUFC0pavew2vdplEpGEgs3lk/xc6w26XTjlB31n0F7fkNoPk/VJnfX5ldOV1YWtn88rQXvce4VKyLKq/InqLYsqIIOBkWFoGBnFWpKdXQhVar1B2imKF39GT6y1FNo07n59BM2/MgY9AEgdeIAKV2BacdfUfKqyo6U5UXbFuG9INomoCaaNr3mx8Su1ar2V9XBJXYNgn9Pkga5LOVmqeoffFTFT8/tETTrFuQTlg4gaiqBs30LB9aLvbfCBJkg1a9LuIpKjhnqPISJ9KmnsyZ8KZS08wX95ofqgoKEwQZIE6Q49tDnoZugrFUdyCDrvECJ0tNE27fCAy+HiicIKGS4ze3YGAlPOoPuCNYVp3Qkfe7qCoSZPscHUzM/j04vXqPFkak9Z0iMHWB6+gHDVznDCysWISA41g/KwZMv+uqIkc4TrZrnoM7AS5wLwCiawIdQmII3YNwpaN4tu4amtL95850f9V+aqp4cA7VnJu/f5yeuji6KH5cm+7dox6iLz0GKUzj6k/7MCoNWWhbJMKpfO8T5Ew+e5ddz7Y0TfZqNa9anEkd0/Wj9vHxTJQOIi5Uk85hoY2LSvCvvDzrQALW/bmQBk1Kg1ZkSqliQxS1xgZWAp0stdvl+8yeSHW20E/UQMGWOzw3mC/VNGLZQvWnwmDmcyLq1WwBjto4I1yG3AguDKSAzfI1r/lzN5yK86V0TRA6Tc3rEVuOz7fgQymJathcPtU5S3kwBUlmic6Xlsrz+v1YiP6d6Fc4HZoD9UqnW586kmH2y+AGlohd8aoLu+HUZ74Q5SFyFS0TwmnnCEQU4hbQ/eyr/De86ltoqdHDPVDLHAZAmdSVblVs5Ys9nBiF1DCdzxc6Cmd78cv8q3wrlcnmM/ncD3p/ynuMjyM4NYhZbEL0+C/XT59eX1/jYnrUkVTiCaoKYySaRBBEmWhvf3ka8JdzV6BzanA/asr59ePHj4Iiz4JEA3RCs0XnD9d0HR+OPnrUIDi75ezDh/W/rsM51jsSrkCp53BgHVteX//yVsdcG9ytrP72V/99oNaJuJjHybLmr4RB+uZnOODsoYxux/OJhGthEdANlA6ujqtSIHmQBNLGgkB37+FMo1XncN2G5/E4yCUEO0TGahrciZAx4lk8qERAUwW6NxJUUbbqqD/e+NaARVsWVElGjVbpkiAEI2Jfzep1kDCcxwSlg/8cJHf9rBAnSOmOGxRAnAp1Vby5LNzFqdENKtgap0gj0Agtrnm4nQiXJ2VZ0kBJFF6Ay0dEugvMs2iYZ6ic7MnYt2CM00IH9zzhaq7jr+k6uCLs9IGvJ+i4T0mvxuODJds4aFd1aPVWd309hGM8MVUX4xW934nuurisq4gWWBARFBdq0TOClMINpDqQPerBeXVMJatxRxzbrq+IrP45VjiaiMUuNy6RjY1YbGJi4ujoaOISDu5HVOfbjYBYAFamRy77jcKiw7dE6r6+hD4ugzL8ELtcd2z0QPzT11B3amrj530VLDQE5wbPE3S18TP+3jh4O75UWOVnU7gshrsikvi7GewnSR6XJjPrhLjTuWAKMdiGmfbnBfuA42/2C9PNPUXWo4dtunOFVk2XjtuQZLXe6biSLkqdWDudnEynLiFmgDHkG5etJMqM3x4XJ5OZ8lRHGpeBMETvZjBTmwx3xiSDnZ7HyUR+naju9K0iPy0MuLU2OJlpti4sWwELqaz2q6CFk605UAvwaE58tYz9l3u6AD5J5EEPE5OD02Ommcgcjc9C0VYevp8oFOh0t7/NqRAAyd3yNSfGdwpDO5d8/E+pwmC/08Qytti9/IKIUvRloVygnUJ/foOJw55kgF5UZGVlt7BcSMW2JYjbOctrFFOtVKwQnD1XXl4uzFx2xnaTihW5sbi4+GzzH4v465n/6rO5+WzL5cTqV4sBQcmzxaFDQ2+39s8dMyLrt6tAP/DaUE3MLyqyu7m9tbi96Yp2nU7gbT3b3N4fnHzxq6++WtyWx7fMBlKA04bcHbsdaSaLmvVbV8mvLPrrari5kgggtGE5bt8HaSX+Tnzc0hJBQZI0v7JAblU2cCs4hInjMI5+sQqEM4IsC4I8iqTRdUHtjqIA3PFLcRxQfV8v6yIkvCQokDW6wxREzqIXAnfZ0qV+WcNNGRynOYpshR2C3ZYneWPcMWTLbrfx4AHd1fsZ3Uaj4dTrane0aFAHK/l0uw7uyKlDkEMP3uon2nWJbyGEFm6366o05MNsGouHT0E7k8eXKJpu7zJ2N5exI9BDzj37N+XIBELfvfz5T28hopHAgi5IXv8ogooYu1xRQwvfXG6sq3QTFQQ+zgEq4KAynPXocud8fLG36cyV05OJ7KvJEcD/lx9xpjudGS0LF9USk/RPGdKx97i7Ae42S+Q77wulyWxYB7QuWUrN6mAhPndi5O3uZYeY+ExaohbfmIBUKqxM/y4gc9EZX+Qt6Feoh0NbW0KyoGJPiBovJkfLAuje0GY6117bdiQOo3UIOTuHt/bKJPr5oQwW4iwVJ12eOTTFgmeEj18WSkMdZrNZSJGnotpvf/ffaWFFf/Iz3CPLhYkRUuXj5Wuw8CY2WhaAN2ostjp/2lAkVfRnZ6TOy1ihXA7rlMvHhUIMFJ6OIYRjZOkpr9Lcy5Yl5yxWaA8qU/F8edAdWyYMeuh2otFoB18+YyvaOXcjsnI+WvQZji5FMHGgTxlRnQ70N+iQvu24gkjHELNt1wVLBYGKiDZ69q2tqDS+yFs0DVUT8Ipxn0EUD6f/ZJmMFA1VArgIVwdA2aAjmoERDRLMsBVOPHoy5Em+WIh4BEJU3FlUh38EBSKsrAki4XnVNMe2Wf/XjBf9v0D8nVXFzw581tHwnx2K4ZE7/ljxHucTGQwGg8FgMBgMBoPBYDAYDAaDwWAwGAwGg8FgMBgMBoPBYDAYDAaDwWAwGAwGg8FgMBgMBoPBYDAYDAaD8f+DfwHLKvyfoaVrDwAAAABJRU5ErkJggg==" alt="IBM logo">
                    <h5 class="my-2">Software Developer Career <br>Guide and Interview Preparation</h5>
                    <p class="timeline-subtitle mt-3 mb-0">IBM</p>
                    <small class="text-muted mb-0">2-2024</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/certificate/EK4LFEGKP4KY">See
                      certification</a>
                  </div>
                </div>
              </div>

            </div>

            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2 mt-4 mt-sm-0">
                  <!-- dummy -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                  <div class="duration duration-right position-relative">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="data:image/png;base64,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" alt="IBM logo">
                    <h5 class="my-2">Introduction to Software Engineering</h5>
                    <p class="timeline-subtitle mt-3 mb-0">IBM</p>
                    <small class="text-muted mb-0">2-2024</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/certificate/JN67GSBM4HE5">See
                      certification</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="duration date-label-left position-relative text-md-end">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="data:image/png;base64,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" alt="IBM logo">
                    <h5 class="my-2">Developing Back-End Apps with <br>Node.js and Express</h5>
                    <p class="timeline-subtitle mt-3 mb-0">IBM</p>
                    <small class="text-muted mb-0">3-2024</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/certificate/D376A25E39TK">See
                      certification</a>
                  </div>
                </div>
              </div>

            </div>

            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2 mt-4 mt-sm-0">
                  <!-- dummy -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                  <div class="duration duration-right position-relative">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="https://media.licdn.com/dms/image/D4D0BAQF7aI2nEg5f6A/company-logo_200_200/0/1692874661670/board_infinity_logo?e=2147483647&v=beta&t=E-8grvx2h9pZv4LPA2Eq9pnTEj_PV24vMqR8LqEbQsY" alt="Board Infinity logo">
                    <h5 class="my-2">Mastering Laravel Framework and PHP</h5>
                    <p class="timeline-subtitle mt-3 mb-0">Board Infinity</p>
                    <small class="text-muted mb-0">3-2024</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/verify/HTBCP5ZAMB7F">See
                      certification</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="duration date-label-left position-relative text-md-end">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="data:image/png;base64,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" alt="IBM logo">
                    <h5 class="my-2">JavaScript Back-end Capstone<br> Project</h5>
                    <p class="timeline-subtitle mt-3 mb-0">IBM</p>
                    <small class="text-muted mb-0">3-2024</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/verify/N5L8HX4TMRJ6">See
                      certification</a>
                  </div>
                </div>
              </div>

            </div>


            <div class="timeline-item">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-1 order-2 mt-4 mt-sm-0">
                  <!-- dummy -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 order-sm-2 order-1">
                  <div class="duration duration-right position-relative">
                    <img class="rounded bg-skill px-3 py-3" width="90" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/http://coursera-university-assets.s3.amazonaws.com/ed/49a1a1d099419e9172fcb3d4c3177a/Square.png?auto=format%2Ccompress&dpr=1&w=80&h=80" alt="Kennesaw State University">
                    <h5 class="my-2">Managing Cybersecurity Incidents and Disasters</h5>
                    <p class="timeline-subtitle mt-3 mb-0">Kennesaw State University</p>
                    <small class="text-muted mb-0">8-2024</small><br>
                    <a href="https://www.coursera.org/account/accomplishments/verify/47WRV357E5DK">See
                      certification</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <br>
    <h2 class="text-center mt-5" id="friends">Friends</h2>
    <div class="d-flex justify-content-center">
      <div class="line" style="width: 7%;"></div>
    </div><br>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
        <div class="col" id="samiunnafis">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/samiunnafis/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/56390452?v=4" class="mx-auto d-block img-fluid circle-png" alt="Samiun Nafis avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap">Samiun Nafis</h4>
                <p class="card-text">Front-end Developer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/imbharat420/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/51924618?v=4" class="mx-auto d-block img-fluid circle-png" alt="Bharat Singh avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap">Bharat Singh</h4>
                <p class="card-text">Fullstack Developer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/elishasfolio/">
                <img loading="lazy" src="https://elishasfolio.vercel.app/Elitepics.png" class="mx-auto d-block img-fluid circle-png" alt="Elisha Paul Okai" width="100">
                <h4 class="card-title mt-2 no-wrap" title="Elisha Paul Okai">Elisha P. Okai</h4>
                <p class="card-text">Defi Expert</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/0x3ef8/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/76643867?v=4" class="mx-auto d-block img-fluid circle-png" alt="Jay Patrick Cano avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap" title="Jay Patrick Cano">Jay P. Cano</h4>
                <p class="card-text">Programmer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/19vin70/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/113106676?v=4" class="mx-auto d-block img-fluid circle-png" alt="Marvin Quillo Saik avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap" title="Marvin Quillo Saik">Marvin Q. Saik</h4>
                <p class="card-text">Programmer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/aaveshdev/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/50949867?v=4" class="mx-auto d-block img-fluid circle-png" alt="Aavesh Jilani avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap">Aavesh Jilani</h4>
                <p class="card-text">Programmer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/amosayomide05/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/62471060?v=4" class="mx-auto d-block img-fluid circle-png" alt="Amos Ayomide avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap">Amos Ayomide</h4>
                <p class="card-text">Programmer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/emejulucodes/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/54607888?v=4" class="mx-auto d-block img-fluid circle-png" alt="Emmanuel Emejulu avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap">Emmanuel Emejulu</h4>
                <p class="card-text">Mobile App Developer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/Mra1k3r0/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/u/61144642?v=4" class="mx-auto d-block img-fluid circle-png" alt="John Paul Caigas avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap" title="John Paul Caigas">John P. Caigas</h4>
                <p class="card-text">Programmer</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card pt-5 pb-5">
            <div class="card-body text-center">
              <a href="/friends/abass_dev/">
                <img loading="lazy" src="https://avatars.githubusercontent.com/abass-dev" class="mx-auto d-block img-fluid circle-png" alt="Abass Dev avatar at Github" width="100">
                <h4 class="card-title mt-2 no-wrap">Abass Dev</h4>
                <p class="card-text">Mobile App Developer</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div>
      <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed" data-ad-client="ca-pub-5077097159223655" data-ad-slot="7856709026"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <br>
    <div class="card mb-5">
      <div class="card-body">
        <h5 class="card-title">Found a problem with this page?</h5>
        <ul class="card-text">
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/edit/master/index.html" target="_blank">Edit
              on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/blob/master/index.html?plain=1" target="_blank">Source on Github</a></li>
          <li><a href="https://github.com/mrepol742/mrepol742.github.io/issues/new?">Report a problem with this
              content on GitHub</a></li>

        </ul>
      </div>
    </div>
  </main>

  <?php include('includes/footer.php') ?>
</body>

</html>
