
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HARIS simulator, research, University of Southampton, ECS, AIC">
    <meta name="author" content="Ayo Abioye (abioyeayo@gmail.com)">
    <title>HARIS Simulator</title>

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
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
    <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none" style="margin-left: auto; margin-right: auto;">
      <svg class="bi me-2" width="32" height="32"><use xlink:href="#haris_logo"/></svg>
      <span class="fs-4">HARIS</span>
    </a>
  </header>

  <main>
    <div style="text-align: center;">
        <img src="/demo/sotsef2023/img/sotsef2023_demo_screenshot_resized.jpg" class="shadow-lg p-1 mb-5 bg-body rounded" alt="Human Swarm Teaming simulation screenshot" width="640" style="border:solid 1px black;">
    </div>
    <h1 class="text-body-emphasis">Getting started with HARIS</h1>
    <p class="fs-5">The Human And Robot Interactive Swarm (HARIS) Simulator is a multi-agent and swarm robotics simulation tool used to study human-swarm interaction. HARIS is a successor of our Human Teaming Simulator (HutSim).</p>

    <div class="mb-5">
      <a href="https://github.com/mdivband/hut" class="btn btn-primary btn-lg px-4">Project GitHub</a>
    </div>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
        <h2 class="text-body-emphasis">Research projects</h2>
        <p>Here is a list of some of our research projects conducted using the HARIS simulator.</p>
        <ul class="list-unstyled ps-0">
          <li>
            <a class="icon-link mb-1" href="/verification_study/?PROLIFIC_PID=639c81275bd768dce603c9c5aoa&STUDY_ID=63b4a06fa62e8101c635f299demo&SESSION_ID=study_demo&GROUP_ID=vg5est5j" rel="noopener" target="_blank">
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              Predictive formal modelling at runtime in a drone delivery mission
            </a>
          </li>
          <li>
            <a class="icon-link mb-1" href="/res_study/?PROLIFIC_PID=639c81275bd768dce603c9c5aoa&STUDY_ID=63b4a06fa62e8101c635f299demo&SESSION_ID=study_demo&GROUP_ID=vg5est5j" rel="noopener" target="_blank">
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              Speed vs accuracy trade-off in a UAV search and rescue mission
            </a>
          </li>
          <li>
            <a class="icon-link mb-1" href="/placebo_study/?PROLIFIC_PID=639c81275bd768dce603c9c5&STUDY_ID=63b4a06fa62e8101c635f299demo&SESSION_ID=study_demo&GROUP_ID=CLALM" rel="noopener" target="_blank">
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              The placebo effect of autonomy on trust in human-swarm interaction
            </a>
          </li>
        </ul>
      </div>

      <div class="col-md-6">
        <h2 class="text-body-emphasis">Demos</h2>
        <p>Here are some of our live demo events.</p>
        <ul class="list-unstyled ps-0">
          <li>
            <a class="icon-link mb-1" href="/demo/aamas2023/">
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              Human-Swarm Teaming (AAMAS 2023)
            </a>
          </li>
          <li>
            <a class="icon-link mb-1" href="/demo/aiuk2023/">
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              HutSim (AI UK 2023)
            </a>
          </li>
          <li>
            <a class="icon-link mb-1" href="/demo/sotsef2023/">
              <svg class="bi" width="16" height="16"><use xlink:href="#arrow-right-circle"/></svg>
              SOTSEF 2023
            </a>
          </li>
        </ul>
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

