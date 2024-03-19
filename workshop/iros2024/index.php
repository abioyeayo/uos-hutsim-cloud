
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HARIS simulator, research, University of Southampton, ECS, AIC">
    <title>IROS 2024 Workshop | Trustworthy Human-swarm Interaction</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <style>
      
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="arrow-right-circle" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
  </symbol>
  <symbol id="haris_logo" viewBox="0 0 24 24">
    <title>Haris Logo</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0 L0 24 L24 24 L24 0 Z M4.5 4.5 L9.5 4.5 L9.5 9.5 L14 9.5 L14 4.5 L19 4.5 L19 19.5 L14 19.5 L14 15 L9.5 15 L9.5 19.5 L4.5 19.5 Z"></path>
  </symbol>
</svg>

<div class="col-lg-8 mx-auto p-4 py-md-5">
  <header class="d-flex align-items-center pb-3">
    <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none" style="margin-left: auto; margin-right: auto;">
      <svg class="bi me-2" width="32" height="32"><use xlink:href="#haris_logo"/></svg>
      <span class="fs-4 fw-bold">Trustworthy Human-swarm Interaction</span>
    </a>
  </header>

  <main>
    <div style="text-align: center;">
        <img src="iros2024workshop.png" class="shadow-lg p-1 bg-body rounded img-fluid my-2" alt="Human Swarm Teaming" width="320" style="border:solid 1px black;">
    </div>

    <div class="row g-5 mt-4 border-top">
      
      <div class="col-12">
        <h2 class="text-body-emphasis">Organisers</h2>
        <p>For each organiser, please provide the complete address/affiliation, URL, and emails.  
            List conferences at which organisers have previously organised a workshop. 
            Indicate the organiser(s) to which all correspondence should be addressed.</p>

        <table class="table-bordered table-sm">
          <tr>
            <th>Name/Affliation</th>
            <th>Details</th>
          </tr>
          <tr>
            <td>Mohammad Soorati (Primary Contact) Univ. of Southampton</td>
            <td>Address: Room 4013, Building 32, University Road, Southampton SO17 1TR, UK 
                Email:m.soorati@soton.ac.uk
                URL: https://www.southampton.ac.uk/people/5xvn8k/doctor-mohammad-soorati
                Organised Events: Local co-chair of AAMAS 2023, Co-organiser of Trustworthy Autonomous Systems Symposium, UK Workshop on Trustworthy Swarms 
            </td>
          </tr>
          <tr>
            <td>Horia Maior Uni. of Nottingham</td>
            <td>Address: School of Computer Science, Wollaton Rd, Lenton, Nottingham NG8 1BB
                Email: horia.maior@nottingham.ac.uk
                URL: http://horiamaior.com/

                Organised Events:
                ACM CHI, CHIWORK, MobileHCI, Trustworthy Autonomous systems TAS.
            </td>
          </tr>
        </table>
        
      </div>

    </div>

    <div class="col-3 col-md-2 my-5"></div>

    <div class="row g-5">
      
      <div class="col-12">
        <h2 class="text-body-emphasis">Abstract</h2>
        <p>Swarm Robotics brings robustness, scalability and adaptability to self-organising systems but its applications are mainly limited to research platforms. Human-swarm interaction facilitates the integration of human supervision into swarm systems, opening up opportunities for real-world applications. However, interfacing, transparency, and trust present significant challenges that need to be addressed. The complexity of this issue requires a joint effort from researchers across different disciplines including human factors, ethics, software engineering, machine learning, regulation and policy. This one-day workshop aims to bring together researchers to discuss the potential of relying on human-swarm interaction for real-world applications and present the challenges that could inform future research in this area. Besides the keynote talks from world-leading researchers, the event will foster interaction through focus groups including senior and junior researchers, two-panel discussions and poster sessions. Through these discussions and interactive presentations, we hope to encourage discussion among a diverse set of experts and facilitate future interdisciplinary collaborations that could present research directions with viable industry applications. 

        All submissions in this track are Non-Archival, thus authors may re-use and re-submit the content to other peer-reviewed venues. Papers will be peer-reviewed, receiving a combined review, and the selection process will follow a single decision meeting process. A special issue will proceed this workshop and selected papers will be invited to contribute with a fully archived paper.
</p>

      </div>

    </div>
  </main>
  <footer class="pt-5 my-5 text-body-secondary border-top">
    University of Southampton HARIS Simulator &middot; &copy; 2023
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>

