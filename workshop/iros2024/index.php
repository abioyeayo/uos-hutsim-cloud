
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HARIS simulator, research, University of Southampton, ECS, AIC">
    <title>IROS 2024 Workshop | Trustworthy Human-Swarm Interaction</title>

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

      .light-colored-row {
          background-color: #f9f9f9; /* Light grey color for the rows like in the image */
      }

      .dark-colored-row {
          background-color: rgba(249, 249, 249, 0.64); /* Light grey color for the rows like in the image */
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

<div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto p-4 py-md-5">
  <header class="d-flex align-items-center pb-md-3">
    <a href="/" class="d-flex align-items-center text-body text-decoration-none" style="margin-left: auto; margin-right: auto;">
      <svg class="bi me-2 d-none d-md-block" width="32" height="32"><use xlink:href="#haris_logo"/></svg>
      <span class="fs-1 fw-bold text-center">Trustworthy Human-Swarm Interaction</span>
    </a>
  </header>


  <main>
    <div class="row g-md-3">
      <div class="col-12 mt-4 mt-md-1"></div>
      <!--IMAGE AND TITLE-->
      <!-- Not sure if this is a sensible way of padding the edges -WH -->
      <div class="col-md-1"></div>
      <div class="col-md-5 pt-md-5">
        <p class="fs-2 fw-bold" style="text-align: center;">IROS 2024 Full Day Workshop</p>
        <br>
        <p class="fs-5" style="text-align: center;">October 15th 2024</p>
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-4">
          <div style="text-align: center;">
              <img src="iros2024workshop.jpg" class="shadow-lg p-1 bg-body rounded img-fluid my-md-2" alt="Human Swarm Teaming" width="320" style="border:solid 1px black;">
          </div>
      </div>
      <div class="col-md-1"></div>
      
      <div class="col-12 mt-4 mt-md-2"></div>


      <div class="col-12">
        <!--ABSTRACT-->
        <h2>Abstract</h2>
        <div class="my-4 border-top"></div>
          <p>Swarm Robotics brings robustness, scalability and adaptability to self-organising systems but its
              applications are mainly limited to research platforms. Human-swarm interaction facilitates the
              integration of human supervision into swarm systems, opening up opportunities for real-world
              applications. However, interfacing, transparency, and trust present significant challenges that
              need to be addressed. The complexity of this issue requires a joint effort from researchers
              across different disciplines including human factors, ethics, software engineering, machine
              learning, hardware design, regulation and policy. This one-day workshop aims to bring together
              researchers to discuss the potential of relying on human-swarm interaction for real-world
              applications and present the challenges that could inform future research in this area. Besides
              the keynote talks from world-leading researchers, the event will foster interaction through focus
              groups including senior and junior researchers, two-panel discussions and poster sessions.
              Through these discussions and interactive presentations, we hope to encourage discussion
              among a diverse set of experts and facilitate future interdisciplinary collaborations that could
              present research directions with viable industry applications.</p>
      </div>

      <div class="col-12">
        <!--TOPICS-->
        <p class="fs-5 fw-bold">We Welcome Submissions in the Following Areas:</p>
          <ul>
              <li><strong>Real World Use Cases of Human Swarm Systems:</strong> Contributions describing case studies of swarm systems in specific application areas (e.g. agri-food, disaster response, maintenance), describing specific challenges and opportunities.</li>
              <li><strong>Responsible Research and Innovation (Ethics) in Human-Swarm Systems:</strong> Papers focusing on the ethical implications, responsibilities, and societal impact of deploying swarm-based systems in various environments.</li>
              <li><strong>Measuring Human and Performance in Human Swarm Systems:</strong> Innovative approaches to incorporating human feedback and control into swarm robotics operations to enhance performance and safety.</li>
              <li><strong>Novel Interaction Design Capabilities in Human Swarm Interaction:</strong> Developing user-friendly interfaces and visualisation tools to support human operators during tasks. New and exciting ways to interact with drone systems (e.g. VR/Gesture-based human-swarm interaction).</li>
              <li><strong>Verification and Formal Methods in Human Swarm Systems.</strong></li>
              <li><strong>Technological Advancements in Swarm Robot.</strong></li>
              <li><strong>Trust and Transparency in Swarm Behaviour:</strong> Methods and techniques to enhance the trustworthiness and transparency of swarm systems. Robustness and Reliability in Extreme Environments.</li>
              <li><strong>Machine Learning Applications to Human-Swarm Interaction:</strong> Novel applications of machine learning for controlling, understanding, and interacting with robots swarms.</li>
              <li><strong>Specialised Brain-Swarm Interaction and Control Interfaces:</strong> Using neurotechnology (such as EEG or fNIRS) to understand neural activity of cognitive functions during human-swarm interaction. Employing BCI (brain-computer-interfaces) technology for evaluating HSIs, control, and neurofeedback.</li>
          </ul>
      </div>
    

      <div class="col-12">
        <!--SCHEDULE-->
        <h2 class="mt-3">Invited Speakers</h2>
        <div class="my-4 border-top"></div>
        <table class="table-bordered table-sm">
            <tr class="dark-colored-row">
                <th>Time</th>
                <th>Speaker</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>9:00</td>
                <td>Organisers</td>
                <td>Welcome note & Projects Overview</td>
            </tr>
            <tr>
                <td>9:20</td>
                <td><b>Amro Najjar</b><br>Luxembourg Institute of Science and Technology</td>
                <td>Title: Explainability in Swarm Robotics<br><i>Keynote speaker</i></td>
            </tr>
            <tr>
                <td>10:00</td>
                <td>Spotlight presentations</td>
                <td>Contributed papers - 5 minutes flash presentation for each poster</td>
            </tr>
            <tr class="light-colored-row">
                <td>10:30</td>
                <td style="text-align: center;"><i>Coffee break</i></td>
                <td></td>
            </tr>
            <tr>
                <td>11:00</td>
                <td>Giovanni Beltrame<br>Polytechnique Montreal (confirmed)</td>
                <td>Swarm-slam: Sparse decentralized collaborative simultaneous localization and mapping framework for multi-robot systems<br>[Key-note speaker]</td>
            </tr>
            <tr>
                <td>11:40</td>
                <td>Focus groups<br>(Outcomes will feed into joint workshop report and/or paper in Special Issue )</td>
                <td>Small working groups focusing on Responsible, Research Innovation (RRI) on different aspects of Human-Swarm partnership</td>
            </tr>
            <tr class="light-colored-row">
                <td>13:00</td>
                <td style="text-align: center;"><i>Lunch break</i></td>
                <td></td>
            </tr>
            <tr>
                <td>14:00</td>
                <td>Luis Sentis<br>Univ. of Texas, Austin (confirmed)</td>
                <td>Mental Workload Estimation During Human Multi-Robot Search Teaming using Wearable Thin Film EEG Sensors<br>[Keynote speaker]</td>
            </tr>
            <tr>
                <td>14:40</td>
                <td>Poster Session</td>
                <td></td>
            </tr>
            <tr class="light-colored-row">
                <td>15:30</td>
                <td style="text-align: center;"><i>Coffee break</i></td>
                <td></td>
            </tr>
            <tr>
                <td>16:00</td>
                <td>Panel discussion</td>
                <td>Theme: Swarms in our Society - Testing, Operation & Trust<br>Panel: Keynote Speakers</td>
            </tr>
            <tr>
                <td>16:50</td>
                <td>Organisers</td>
                <td>Best Poster Award & Concluding remarks</td>
            </tr>
            <tr class="light-colored-row">
                <td>17:00</td>
                <td>End of workshop</td>
                <td></td>
            </tr>
        </table>
      </div>


      <div class="col-12">
        <!--CALL-->
        <h2 class="mt-3">Call for Contributions</h2>
        <div class="my-4 border-top"></div>
        <h5>Submission Guidelines</h5>
            <p>We invite submissions of extended abstracts (up to 2 pages) or full papers (up to 6 pages) in
                IEEE conference format. All submissions will undergo a rigorous peer-review process by the
                workshop's program committee. Accepted papers will be presented at the workshop and
                included to a Special Issue.</p>
            <ul>
                <li><strong>Work-in-Progress submissions</strong> Up to 6 pages describing novel previously-unpublished research, that will be reviewed based upon merits of rigour, originality, and significance.</li>
                <li><strong>Extended Abstract submissions</strong> Up to 2 pages shorter brief abstract submission.</li>
            </ul>

        <h5>Important Dates</h5>
            <ul>
                <li><strong>Paper Submission Deadline: </strong> [Date], [Year]</li>
                <li><strong>Notification of Acceptance: </strong> [Date], [Year]</li>
                <li><strong>Camera-Ready Paper Deadline: </strong> [Date], [Year]</li>
                <li><strong>Workshop Date: </strong> [Date], [Year]</li>
                <li><strong>Paper Submission Deadline: </strong> [Date], [Year]</li>
            </ul>

        <h5>Submission Instructions</h5>
          <p>Please submit your paper electronically via the workshop's EasyChair submission system:
              [EasyChair Submission Link].</p>

      </div>

      <div class="col-12">
        <h2 class="mt-3">Organisers</h2>
        <div class="my-4 border-top"></div>
        <div class="row g-3">
          <div class="col-md-4">
              <div class="card shadow-sm">
                  <img class="bd-placeholder-img card-img-top" width="100%" src="Portraits/MS.jpg" role="img" aria-label="Placeholder: Thumbnail" />

                  <div class="card-body">
                      <p class="card-text"><strong>Mohammad Soorati</strong><br>Univ. of Southampton</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow-sm">
                  <img class="bd-placeholder-img card-img-top" width="100%" src="Portraits/HM.jpg" role="img" aria-label="Placeholder: Thumbnail" />

                  <div class="card-body">
                      <p class="card-text"><strong>Horia Maior</strong><br>Univ. of Nottingham</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow-sm">
                  <img class="bd-placeholder-img card-img-top" width="100%" src="Portraits/MN.jpg" role="img" aria-label="Placeholder: Thumbnail" />

                  <div class="card-body">
                      <p class="card-text"><strong>Mohammad Soorati</strong><br>Bournemouth Uni.</p>
                  </div>
              </div>
          </div>
        </div>
      </div>


      <div class="col-12 mt-5">
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

  </main>
  <footer class="pt-5 my-5 text-body-secondary border-top">
      IROS 2024 Workshop on Trustworthy Human-swarm Interaction &copy; 2024
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>

