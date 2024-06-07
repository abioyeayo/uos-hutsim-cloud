<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <!-- Title for the tab in browser goes here -->
    <title>A Survey of Language-Based Communication in Robotics</title>

    <!-- Packages -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* index.css */

        /* Apply Roboto font to the entire body */
        body {
        font-family: 'Roboto', sans-serif;
        }

        /* You can also specify font-weight if needed */
        h1, h2, h3, h4, h5, h6 {
        font-family: 'Roboto', sans-serif;
        font-weight: 700; /* Bold */
        }

        p, a, span, div {
        font-family: 'Roboto', sans-serif;
        font-weight: 400; /* Regular */
        }

        .item {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
        }

        .item iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        }

        /* Here we can change the background color of the hero section */
        .hero {
            background-color: #a8c0ba; /* Example light gray background color */
        }

        .hero.is-light {
            background-color: rgba(249, 249, 249, 0.64); /* Example light gray background color */
        }

        /* Custom styles for circular button */
        .circular-button {
            width: 50px; /* Adjust the size as needed */
            height: 50px; /* Adjust the size as needed */
            display: inline-flex; /* Ensure buttons stay inline */
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            padding: 0;
            margin: 5px; /* Add some margin for spacing */
        }

    </style>
</head>

<body>
<!-- This section defines the authors, affiliations, and links (add more e.g. arxiv, youtube, etc.) -->
<section class="hero">
    <div class="hero-body">
        <div class="container ">
            <div class="columns">
                <div class="column has-text-centered">
                    <h1 class="title is-1 publication-title">A Survey of Language-Based Communication in Robotics</h1>
                    <h3 class="title is-4 conference-authors" style="color:rgb(75, 75, 75);">
                        <div>
                            An Unpublished Survey Paper
                        </div>
                        <div style='font-weight: normal;font-size: 20px;'>
                            (Posted on ArXiv)
                        </div>
                        </h3>
                    <div class="is-size-5 publication-authors">
            <span class="author-block">
                <a target="_blank" href="path/to/personal/page">William&#160;Hunt</a><sup>1</sup>,
                <a target="_blank" href="path/to/personal/page">Sarvapali&#160;D. &#160;Ramchurn</a><sup>1</sup>
                <a target="_blank" href="path/to/personal/page">Mohammad&#160;D. &#160;Soorati</a><sup>1</sup>
                  </span>
                    </div>

                    <div class="is-size-5 publication-authors">
                        <span class="author-block"><sup>1</sup>University of Southampton</span>
                    </div>

                    <!-- Here we have links to other places -->
                    <div class="column has-text-centered">
                        <div class="publication-links">

                            <span class="link-block">
                            <a target="_blank" href="https://arxiv.org/abs/2406.04086"
                               class="button is-rounded is-dark circular-button">
                              <span class="icon">
                                  <i class="ai ai-arxiv"></i>
                              </span>
                            </a>
                          </span>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hero is-light is-small">
    <div class="hero-body">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-quarters">
                <div class="content has-text-justified">
                    <p style="font-size: 125%; text-align: justify;">
                        <!-- Abstract goes here -->
                        Embodied robots which can interact with their environment and neighbours are increasingly being used as a test case to develop Artificial Intelligence.
                        This creates a need for multimodal robot controllers which can operate across different types of information including text. Large Language Models are able
                        to process and generate textual as well as audiovisual data and, more recently, robot actions. Language Models are increasingly being applied to robotic
                        systems; these Language-Based robots leverage the power of language models in a variety of ways. Additionally, the use of language opens up multiple forms
                        of information exchange between members of a human-robot team. This survey motivates the use of language models in robotics, and then delineates works based
                        on the part of the overall control flow in which language is incorporated. Language can be used by human to task a robot, by a robot to inform a human,
                        between robots as a human-like communication medium, and internally for a robot's planning and control. Applications of language-based robots are explored,
                        and finally numerous limitations and challenges are discussed to provide a summary of the development needed for language-based robotics moving forward.
                    </p>
                </div>
                <div class="content has-text-justified">
                    <p style="font-size: 125%; text-align: justify;">
                        <b>Graphical Abstract: </b>Interaction between robots can be broken into four categories: Human-to-Robot (a human instructing the robot with language), Robot-to-Human
                        (a robot explaining or validating its actions with the human), Robot-to-Robot (robots communicating with each other), and Internal (a robot using language internally).
                        We also discuss the advantages, some applications, and limitations to LLMs generally, in robotics, and ethically.
                    </p>
                </div>
                <div class="text-center">
                    <img src="images/Picture1.png" alt="Graphical Abstract" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!--Section-->
<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">Human-To-Robot Communication</span></h2>
                    <span style="font-size: 110%">
                    The most suited use-case of language models in robotics is the direct commanding of robots. Classical approaches have defined a library of skills and commands with textual labels that
                        can be used to control a robot. However the introduction of LLMs redefines this paradigm; what was once a discrete input space defined by a programmer
                        can now be learned at a higher level. By considering a textual (or, by extension, visual or gestural) command as encoding some meaning which exists in an embedding space, it can be
                        theorised that a model can interpret an instruction never before seen, and internally relate it to previous inputs. This is encapsulated by the fundamental concept of machine
                        learning --- generalisation, but it is an important and nontrivial step to move from generalising to classify unseen images to interesting and acting based on the semantic meaning
                        of a sentence. The ``Human to Robot Communication'' category describes work which focuses on using human-style commands that may otherwise be issued to other humans, such as
                        ``pick up the red ball'' and creating models that map this to an action.
                    <table class="table is-striped is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th>Modality</th>
                                <th>Paper</th>
                                <th>Code (if available)</th>
                                <th>LLM</th>
                                <th>Robot/sim</th>
                                <th>Language used to</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="9">Task Breakdown</td>
                                    <td><a href="https://arxiv.org/abs/2303.03480" target="_blank">Can an Embodied Agent Find Your "Cat-shaped Mug"? LLM-Guided Exploration for Zero-Shot Object Navigation</a></td>
                                    <td><a href=https://github.com/vdorbala/LGX/>Code</a></td>
                                    <td>GPT-3</td>
                                    <td>RoboTHOR</td>
                                    <td>Generate language-based plans</td>
                                </tr>
                                <tr>
                                    <td><a href="https://say-can.github.io/" target="_blank">Do As I Can, Not As I Say: Grounding Language in Robotic Affordances</a></td>
                                    <td><a href="https://github.com/google-research/google-research/tree/master/saycan">Code</a></td>
                                    <td>GPT-3.5</td>
                                    <td>Franka Robot</td>
                                    <td>Generate plans from commands</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.01848"> Embodied Task Planning with Large Language Models</a></td>
                                    <td><a href="https://gary3410.github.io/TaPA/">Code</a></td>
                                    <td>TaPA</td>
                                    <td>AI2THOR</td>
                                    <td>Generate plans from commands</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.11865"> CARTIER: Cartographic lAnguage Reasoning Targeted at Instruction Execution for Robots</a></td>
                                    <td></td>
                                    <td>GPT-3</td>
                                    <td>Clearpath Jackal UGV</td>
                                    <td>Generate plans from commands</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2201.07207">Language Models as Zero-Shot Planners: Extracting Actionable Knowledge for Embodied Agents</a></td>
                                    <td><a href="https://github.com/huangwl18/language-planner">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>VirtualHome</td>
                                    <td>Generate plans from commands</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.06135">SayPlan: Grounding Large Language Models using 3D Scene Graphs for Scalable Robot Task Planning</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Robot arm on wheels</td>
                                    <td>Plan large tasks</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2210.02438">DALL-E-Bot: Introducing Web-Scale Diffusion Models to Robotics</a></td>
                                    <td></td>
                                    <td>DALL-E</td>
                                    <td>Robot arm</td>
                                    <td>Generate target state</td>
                                </tr>
                                 <tr>
                                    <td><a href="https://arxiv.org/abs/2310.01361">GenSim: Generating Robotic Simulation Tasks via Large Language Models</a></td>
                                    <td><a href="https://github.com/liruiw/GenSim">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Ravens</td>
                                    <td>Generate sim data</td>
                                </tr>
                                 <tr>
                                    <td><a href="https://arxiv.org/abs/2402.17930">Pragmatic Instruction Following and Goal Assistance via Cooperative Language-Guided Inverse Planning</a></td>
                                    <td><a href="https://github.com/probcomp/CLIPS.jl">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>VirtualHome</td>
                                    <td>Determine human intentions</td>
                                </tr>
                                <tr>
                                    <td rowspan="13">Code and Rewards</td>
                                    <td><a href="https://arxiv.org/abs/2209.11302">ProgPrompt: Generating Situated Robot Task Plans using Large Language Models</a></td>
                                    <td><a href="https://github.com/NVlabs/progprompt-vh">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>Virtual Home & Franka Panda</td>
                                    <td>Write code from a library</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2311.11183">Deploying and Evaluating LLMs to Program Service Mobile Robots</a></td>
                                    <td><a href="https://github.com/ut-amrl/codebotler">Code</a></td>
                                    <td>Various</td>
                                    <td>RoboEval</td>
                                    <td>Write code from a library</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2309.02721">Gesture-Informed Robot Assistance via Foundation Models</a></td>
                                    <td><!-- "Code coming soon" on their website https://sites.google.com/view/giraf23 --></td>
                                    <td>GPT-3.5</td>
                                    <td>Franka Panda</td>
                                    <td>Write code from a library</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2210.05714">Visual Language Maps for Robot Navigation</a></td>
                                    <td><a href="https://github.com/vlmaps/vlmaps">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>AI2THOR</td>
                                    <td>Write code from a library</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2209.07753">Code as Policies: Language Model Programs for Embodied Control</a></td>
                                    <td><a href="https://github.com/google-research/google-research/tree/master/code_as_policies">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>UR5e robot arm</td>
                                    <td>Write code from a library</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2303.12153">Text2Motion: From Natural Language Instructions to Feasible Plans</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>Franka Panda</td>
                                    <td>Write code from list of skills</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2306.08647">Language to Rewards for Robotic Skill Synthesis</a></td>
                                    <td><a href="https://github.com/google-deepmind/language_to_reward_2023">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>MuJoCo</td>
                                    <td>Generate reward function</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2304.07297">Language Instructed Reinforcement Learning for Human-AI Coordination</a></td>
                                    <td><a href="https://github.com/hengyuan-hu/instruct-rl">Code</a></td>
                                    <td>GPT-3.5</td>
                                    <td>N/A</td>
                                    <td>Generate reward function</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2303.05510">Planning with Large Language Models for Code Generation</a></td>
                                    <td><a href="https://github.com/shunzh/Code-AI-Tree-Search">Code</a></td>
                                    <td>GPT-2</td>
                                    <td>N/A</td>
                                    <td>Write code from descriptions</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.12931">Eureka: Human-Level Reward Design via Coding Large Language Models</a></td>
                                    <td><a href="https://github.com/eureka-research/Eureka">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>IsaacGym</td>
                                    <td>Writing and updating code</td>
                                </tr>
                                <tr>
                                    <td><a href="https://openreview.net/forum?id=o2j604gPjX">Evolutionary Reward Design and Optimization with Multimodal Large Language Models</a></td>
                                    <td></td>
                                    <td>GPT-4V</td>
                                    <td>IsaacGym</td>
                                    <td>Writing and updating code</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2302.11550">Scaling Robot Learning with Semantically Imagined Experience</a></td>
                                    <td></td>
                                    <td>GPT-3</td>
                                    <td>Robot arm</td>
                                    <td>Generate training examples</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2305.05658">TidyBot: Personalized Robot Assistance with Large Language Models</a></td>
                                    <td><a href="https://github.com/jimmyyhwu/tidybot">Code</a></td>
                                    <td>PaLM 540B</td>
                                    <td>Kinova Gen3 7-DoF</td>
                                    <td>Write plans in code</td>
                                </tr>
                                <tr>
                                    <td rowspan="16">Integrated Input</td>
                                    <td><a href="https://arxiv.org/abs/2401.02814">Object-Centric Instruction Augmentation for Robotic Manipulation</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>Franka Robot</td>
                                    <td>Augmented into the model</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2207.04429">LM-Nav: Robotic Navigation with Large Pre-Trained Models of Language, Vision, and Action</a></td>
                                    <td><a href="https://github.com/blazejosinski/lm_nav">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>Clearpath Jackal UGV</td>
                                    <td>Augmented into input space</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.14535">Scaling Up and Distilling Down: Language-Guided Robot Skill Acquisition</a></td>
                                    <td><a href="https://github.com/real-stanford/scalingup">Code</a></td>
                                    <td>GPT-3 & LLAMA2</td>
                                    <td>MuJoCo</td>
                                    <td>Write success labelling function</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2402.05188">InCoRo: In-Context Learning for Robotics Control with Feedback Loops</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>N/A</td>
                                    <td>Integrated into the model</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2309.04316">Incremental Learning of Humanoid Robot Behavior from Natural Interaction and Large Language Models</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>ARMAR-6</td>
                                    <td>Integrated as memory and to adapt</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.14972">LLM-Based Human-Robot Collaboration Framework for Manipulation Tasks</a></td>
                                    <td></td>
                                    <td>GPT-2</td>
                                    <td>Overcooked</td>
                                    <td>Integrated into the model</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2209.04924">Meta-Reinforcement Learning via Language Instructions</a></td>
                                    <td><a href="https://github.com/yaoxt3/MILLION">Code</a></td>
                                    <td>GloVe</td>
                                    <td>MetaWorld and robot arm</td>
                                    <td>Integrated into MDP</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2309.07726">GRID: Scene-Graph-based Instruction-driven Robotic Task Planning</a></td>
                                    <td><a href="https://github.com/jackyzengl/GRID">Code</a></td>
                                    <td>INSTRUCTOR</td>
                                    <td>PUDUbot2</td>
                                    <td>Integrated into the model</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2401.03701">ExTraCT -- Explainable Trajectory Corrections from language inputs using Textual description of features</a></td>
                                    <td></td>
                                    <td>S-BERT</td>
                                    <td>xArm-6 manipulator</td>
                                    <td>Integrated into the model</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2208.02918">LATTE: LAnguage Trajectory TransformEr</a></td>
                                    <td><a href="https://github.com/arthurfenderbucker/LaTTe-Language-Trajectory-TransformEr">Code</a></td>
                                    <td>BERT</td>
                                    <td>Panda robot arm</td>
                                    <td>Embedding input into architecture</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2210.06407">Interactive Language: Talking to Robots in Real Time</a></td>
                                    <td><a href="https://github.com/google-research/language-table">Code</a></td>
                                    <td>Language Conditioned Behavioural Cloning</td>
                                    <td>Language-Table and xArm6</td>
                                    <td>Integrated into the model</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2301.02555">"No, to the Right" -- Online Language Corrections for Robotic Manipulation via Shared Autonomy</a></td>
                                    <td><a href="https://github.com/Stanford-ILIAD/lilac">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>Franka Emika Panda</td>
                                    <td>Modify policy with embedding</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.05973">VoxPoser: Composable 3D Value Maps for Robotic Manipulation with Language Models</a></td>
                                    <td><a href="https://github.com/huangwl18/VoxPoser">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Franka Emika Panda</td>
                                    <td>Modify policy with embedding</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2111.03205">LILA: Language-Informed Latent Actions</a></td>
                                    <td><a href="https://github.com/siddk/lila">Code</a></td>
                                    <td>Distil-RoBERTa</td>
                                    <td>Franka Panda</td>
                                    <td>Disambiguate manual input</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2311.01977">RT-Trajectory: Robotic Task Generalization via Hindsight Trajectory Sketches</a></td>
                                    <td></td>
                                    <td>RT-Trajectory</td>
                                    <td>Everyday Robots arm</td>
                                    <td>Generate trajectories</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2403.12910">Yell At Your Robot: Improving On-the-Fly from Language Corrections</a></td>
                                    <td><a href="https://github.com/yay-robot/yay_robot">Code</a></td>
                                    <td>GPT-4V</td>
                                    <td>ALOHA</td>
                                    <td>Modify robot behaviour</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section-->
<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">Robot-To-Human Communication</span></h2>
                    <span style="font-size: 110%">
                    Agents are often difficult to understand for human operators and bystanders, and a sensible application of LLMs is to address this problem. Robots can use language to describe their actions, beliefs,
                        and intentions to a human; such an approach removes the requirement for expert users who can debug the robot's beliefs, instead communicating in a way that almost all can understand --- language.
                        The generative aspect of LLMs is naturally suited to this task, as well as the question-answering mode that is often employed. This is especially relevant when paired with
                        visual models and/or in safety-critical scenarios; describing why an agent took a certain action could help operators catch mistakes when human lives are at risk. The ``Robot to Human Communication''
                        category describes work which employs LLMs to feed information back to humans for purposes ranging from explainability to concisely representing their observations of the environment.
                    <table class="table is-striped is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th>Modality</th>
                                <th>Paper</th>
                                <th>Code (if available)</th>
                                <th>LLM</th>
                                <th>Language used to</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="10">Explainability</td>
                                    <td><a href="https://wayve.ai/thinking/lingo-natural-language-autonomous-driving/" target="_blank">LINGO-1: Exploring Natural Language for Autonomous Driving</a></td>
                                    <td></td>
                                    <td>LINGO-1</td>
                                    <td>Describe AV actions & Q-A</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2309.10346" target="_blank">Explaining Agent Behavior with Large Language Models</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Describe agent actions & Q-A</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2304.14844" target="_blank">Using Large Language Models for Interpreting Autonomous Robots Behaviors</a></td>
                                    <td></td>
                                    <td>GPT-3.5 & Alpaca</td>
                                    <td>Describe behavior through log files</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.01957" target="_blank">Driving with LLMs: Fusing Object-Level Vector Modality for Explainable Autonomous Driving</a></td>
                                    <td><a href="https://github.com/wayveai/Driving-with-LLMs">Code</a></td>
                                    <td>GPT-3.5</td>
                                    <td>Describe AV actions</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2306.15724" target="_blank">REFLECT: Summarizing Robot Experiences for Failure Explanation and Correction</a></td>
                                    <td><a href="https://github.com/real-stanford/reflect">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Describe task from video</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2304.12958" target="_blank">A Closer Look at Reward Decomposition for High-Level Robotic Explanations</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>Q-A in terms of reward</td>
                                </tr>
                                <tr>
                                    <td><a href="https://www.researchgate.net/publication/314580613_Sorry_Dave_I%27m_Afraid_I_Can%27t_Do_That_Explaining_Unachievable_Robot_Tasks_Using_Natural_Language" target="_blank">Sorry Dave, I'm Afraid I Can't Do That: Explaining Unachievable Robot Tasks Using Natural Language</a></td>
                                    <td></td>
                                    <td>Syntax trees</td>
                                    <td>Describe feasibility</td>
                                </tr>
                                <tr>
                                    <td><a href="https://ieeexplore.ieee.org/document/8525675" target="_blank">Behavior Explanation as Intention Signaling in Human-Robot Teaming</a></td>
                                    <td></td>
                                    <td>N/A (templates)</td>
                                    <td>Signal intentions</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/1803.02088" target="_blank">Explain Yourself: A Natural Language Interface for Scrutable Autonomous Robots</a></td>
                                    <td></td>
                                    <td>N/A (templates)</td>
                                    <td>Q-A</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2101.01625" target="_blank">Explainable AI for Robot Failures: Generating Explanations that Improve User Assistance in Fault Recovery</a></td>
                                    <td><a href="">Code</a></td>
                                    <td>Syntax trees</td>
                                    <td>Diagnose errors and suggest resolution</td>
                                </tr>
                                <tr>
                                    <td rowspan="12">Asking for Help</td>
                                    <td><a href="https://arxiv.org/abs/2307.01928" target="_blank">Robots That Ask For Help: Uncertainty Alignment for Large Language Model Planners</a></td>
                                    <td><a href="https://github.com/google-research/google-research/tree/master/language_model_uncertainty">Code</a></td>
                                    <td>PaLM-2L & GPT-3.5</td>
                                    <td>Ask when certainty is low</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2403.13198" target="_blank">Towards Robots That Know When They Need Help: Affordance-Based Uncertainty for Large Language Model Planners</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Ask when certainty is low</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.15684" target="_blank">Interactively Robot Action Planning with Uncertainty Analysis and Active Questioning by Large Language Model</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2110.00534" target="_blank">TEACh: Task-driven Embodied Agents that Chat</a></td>
                                    <td><a href="https://github.com/GLAMOR-USC/teach_tatc">Code</a></td>
                                    <td>Episodic Transformer</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td><a href="https://ieeexplore.ieee.org/document/9889368" target="_blank">Asking Follow-Up Clarifications to Resolve Ambiguities in Human-Robot Conversation</a></td>
                                    <td></td>
                                    <td>N/A</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2010.12639" target="_blank">The RobotSlang Benchmark: Dialog-guided Robot Localization and Navigation</a></td>
                                    <td><a href="https://github.com/MichiganCOG/RobotSlangBenchmark">Code</a></td>
                                    <td>LSTM</td>
                                    <td>Describe env. & ask for guidance</td>
                                </tr>
                                <tr>
                                    <td><a href="https://ieeexplore.ieee.org/document/5979633" target="_blank">Towards quantitative modeling of task confirmations in human-robot dialog</a></td>
                                    <td></td>
                                    <td>N/A</td>
                                    <td>Ask when certainty is low</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2212.04088" target="_blank">LLM-Planner: Few-Shot Grounded Planning for Embodied Agents with Large Language Models</a></td>
                                    <td><a href="https://github.com/OSU-NLP-Group/LLM-Planner/">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td><a href="https://jair.org/index.php/jair/article/view/11485" target="_blank">Jointly Improving Parsing and Perception for Natural Language Commands through Human-Robot Dialog</a></td>
                                    <td></td>
                                    <td>N/A</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2305.09067" target="_blank">SGP-TOD: Building Task Bots Effortlessly via Schema-Guided LLM Prompting</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>Ask to guide through decision tree</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2402.15368" target="_blank">Safe Task Planning for Language-Instructed Multi-Robot Systems using Conformal Prediction</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2208.13266" target="_blank">JARVIS: A Neuro-Symbolic Commonsense Reasoning Framework for Conversational Embodied Agents</a></td>
                                    <td></td>
                                    <td>BART</td>
                                    <td>Ask to resolve ambiguity</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section-->
<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">Robot-To-Robot Communication</span></h2>
                    <span style="font-size: 110%">
                    Multi-robot systems often have a communication component, where robots exchange bids, plans, observations, or any other information. Classically this has been a carefully
                        structured process based on predefined protocols. LLMs, however, provide the opportunity to remove these constraints and allow generative models to produce messages
                        in a dialogical manner. From this dialogue emerges a collective intelligence which supports coordination, planning, and knowledge transfer. This approach is particularly
                        appealing as it models a core strength of human groups using the exact same tools; language allows teams of people to organise, robots may be the same. We term this
                        type of system ``Robot to Robot Communication''.
                    <table class="table is-striped is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th>Modality</th>
                                <th>Paper</th>
                                <th>Code (if available)</th>
                                <th>LLM</th>
                                <th>Application</th>
                                <th># Agents</th>
                                <th>Human in Loop</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="9">Role Playing</td>
                                    <td><a href="https://arxiv.org/abs/2303.17760" target="_blank">CAMEL: Communicative Agents for "Mind" Exploration of Large Language Model Society</a></td>
                                    <td><a href="https://github.com/camel-ai/camel">Code</a></td>
                                    <td>LLaMa-7B</td>
                                    <td>Various inc. code, maths, science</td>
                                    <td>2</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.07201" target="_blank">ChatEval: Towards Better LLM-based Evaluators through Multi-Agent Debate</a></td>
                                    <td><a href="https://github.com/thunlp/ChatEval">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Debate to give advice</td>
                                    <td>3+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.00352" target="_blank">MetaGPT: Meta Programming for A Multi-Agent Collaborative Framework</a></td>
                                    <td><a href="https://github.com/geekan/MetaGPT">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Software development team</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.01444" target="_blank">Adapting LLM Agents with Universal Feedback in Communication</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Finding objects in ALFWorld</td>
                                    <td>2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2305.10142" target="_blank">Improving Language Model Negotiation with Self-Play and In-Context Learning from AI Feedback</a></td>
                                    <td><a href="https://github.com/FranxYao/GPT-Bargaining">Code</a></td>
                                    <td>GPT-4 & Claude</td>
                                    <td>Bartering (buyer/seller)</td>
                                    <td>2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.06187" target="_blank">Self-Adaptive Large Language Model (LLM)-Based Multiagent Systems</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Bartering (buyer/seller)</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.02124" target="_blank">Exploring Collaboration Mechanisms for LLM Agents: A Social Psychology View</a></td>
                                    <td><a href="https://github.com/zjunlp/MachineSoM">Code</a></td>
                                    <td>GPT-3.5</td>
                                    <td>Various inc. quiz, maths, chess</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2204.00598" target="_blank">Socratic Models: Composing Zero-Shot Multimodal Reasoning with Language</a></td>
                                    <td><a href="https://github.com/abhinav-neil/socratic-models">Code</a></td>
                                    <td>Various</td>
                                    <td>Various captioning tasks</td>
                                    <td>3</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2402.12327" target="_blank">Shall We Talk: Exploring Spontaneous Collaborations of Competing LLM Agents</a></td>
                                    <td><a href="https://github.com/wuzengqing001225/SABM_ShallWeTalk">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Various (mostly game theory)</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="7">Inter-Agent Coordination</td>
                                    <td><a href="https://arxiv.org/abs/2304.03442" target="_blank">Generative Agents: Interactive Simulacra of Human Behavior</a></td>
                                    <td><a href="https://github.com/joonspk-research/generative_agents">Code</a></td>
                                    <td>GPT-3.5</td>
                                    <td>Model a community</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2301.07150" target="_blank">Embodied Agents for Efficient Exploration and Smart Scene Description</a></td>
                                    <td></td>
                                    <td>CLIP</td>
                                    <td>Navigation and captioning</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.02485" target="_blank">Building Cooperative Embodied Agents Modularly with Large Language Models</a></td>
                                    <td><a href="https://github.com/UMass-Foundation-Model/Co-LLM-Agents">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Fetching items in a home</td>
                                    <td>2</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.08155" target="_blank">AutoGen: Enabling Next-Gen LLM Applications via Multi-Agent Conversation</a></td>
                                    <td><a href="https://github.com/microsoft/autogen">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Various inc. maths, code, chess</td>
                                    <td>2+</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.10848" target="_blank">AgentVerse: Facilitating Multi-Agent Collaboration and Exploring Emergent Behaviors</a></td>
                                    <td><a href="https://github.com/OpenBMB/AgentVerse">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Complex plans as advice, coding, etc.</td>
                                    <td>1+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/1907.05507" target="_blank">Collaborative Multi-Agent Dialogue Model Training Via Reinforcement Learning</a></td>
                                    <td><a href="https://github.com/minakshi07/Multi-agent-Reinforcement-DialogModel">Code</a></td>
                                    <td>N/A</td>
                                    <td>Dialogues</td>
                                    <td>2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2305.14325" target="_blank">Improving Factuality and Reasoning in Language Models through Multiagent Debate</a></td>
                                    <td><a href="https://github.com/composable-models/llm_multiagent_debate">Code</a></td>
                                    <td>N/A</td>
                                    <td>Reasoning</td>
                                    <td>2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Inter-Robot</td>
                                    <td><a href="https://arxiv.org/abs/2309.10062" target="_blank">SMART-LLM: Smart Multi-Agent Robot Task Planning using Large Language Models</a></td>
                                    <td><a href="https://github.com/SMARTlab-Purdue/SMART-LLM">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Planning and task allocation</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2307.04738" target="_blank">RoCo: Dialectic Multi-Robot Collaboration with Large Language Models</a></td>
                                    <td><a href="https://github.com/MandiZhao/robot-collab">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Planning and coordination</td>
                                    <td>2+</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2402.19166" target="_blank">Conversational Language Models for Human-in-the-Loop Multi-Robot Coordination</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Planning and coordination</td>
                                    <td>2+</td>
                                    <td>✓</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Section-->
<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">Robot Control and Reasoning</span></h2>
                    <span style="font-size: 110%">
                        Language and language-based models can also be used internally withing a single robot. This can take a variety of forms, but in general these approaches seek to utilise the
                        intelligence of LLMs within the robot's own control and reasoning processes.
                        <table class="table is-striped is-hoverable is-fullwidth">
                        <thead>
                            <tr>
                                <th>Modality</th>
                                <th>Paper</th>
                                <th>Code (if available)</th>
                                <th>LLM</th>
                                <th>Robot/Sim</th>
                                <th>Language used to</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="4">Transformer Robotics</td>
                                    <td><a href="https://arxiv.org/abs/2307.15818" target="_blank">RT-2: Vision-Language-Action Models Transfer Web Knowledge to Robotic Control</a></td>
                                    <td>(Unofficial open source) <a href="https://github.com/kyegomez/RT-2">Code</a></td>
                                    <td>RT-2</td>
                                    <td>7-DoF Robot Arm</td>
                                    <td>Describe task</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2303.03378" target="_blank">PaLM-E: An Embodied Multimodal Language Model</a></td>
                                    <td>(Unofficial open source) <a href="https://github.com/kyegomez/PALM-E">Code</a></td>
                                    <td>PaLM-E</td>
                                    <td>Various</td>
                                    <td>Describe and plan</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.08864" target="_blank">Open X-Embodiment: Robotic Learning Datasets and RT-X Models</a></td>
                                    <td><a href="https://github.com/google-deepmind/open_x_embodiment">Code</a></td>
                                    <td>RT-X</td>
                                    <td>7-DoF Robot Arm</td>
                                    <td>Describe task</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2401.12963" target="_blank">AutoRT: Embodied Foundation Models for Large Scale Orchestration of Robotic Agents</a></td>
                                    <td>(Unofficial open source) <a href="https://github.com/kyegomez/AutoRT">Code</a></td>
                                    <td>AutoRT</td>
                                    <td>7-DoF Robot Arm</td>
                                    <td>Describe task & alignment</td>
                                </tr>
                                <tr>
                                    <td rowspan="11">Language Architecture</td>
                                    <td><a href="https://arxiv.org/abs/2309.09969" target="_blank">Prompt a Robot to Walk with Large Language Models</a></td>
                                    <td><a href="https://github.com/HybridRobotics/prompt2walk">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Various</td>
                                    <td>Acts on joints</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2207.05608" target="_blank">Inner Monologue: Embodied Reasoning through Planning with Language Models</a></td>
                                    <td></td>
                                    <td>InstructGPT & CLIPort</td>
                                    <td>UR5e Arm</td>
                                    <td>Plan and act</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2401.05033" target="_blank">Bootstrapping LLM-based Task-Oriented Dialogue Agents via Self-Talk</a></td>
                                    <td></td>
                                    <td>OpenLlama</td>
                                    <td>N/A</td>
                                    <td>Guide through behaviours</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2312.09348" target="_blank">LLM-MARS: Large Language Model for Behavior Tree Generation and NLP-enhanced Dialogue in Multi-Agent Robot Systems</a></td>
                                    <td></td>
                                    <td>Alpaca 7B</td>
                                    <td>N/A</td>
                                    <td>Build behaviour trees</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2302.12927" target="_blank">Robot Behavior-Tree-Based Task Generation with Large Language Models</a></td>
                                    <td></td>
                                    <td>GPT-3.5</td>
                                    <td>N/A</td>
                                    <td>Build behaviour trees</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2201.11903" target="_blank">Chain-of-Thought Prompting Elicits Reasoning in Large Language Models</a></td>
                                    <td></td>
                                    <td>GPT-4 & PaLM</td>
                                    <td>N/A</td>
                                    <td>Planning and reasoning</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2305.10601" target="_blank">Tree of Thoughts: Deliberate Problem Solving with Large Language Models</a></td>
                                    <td><a href="https://github.com/princeton-nlp/tree-of-thought-llm">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>N/A</td>
                                    <td>Planning and reasoning</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.10625" target="_blank">Video Language Planning</a></td>
                                    <td><a href="https://github.com/video-language-planning/vlp_code">Code</a></td>
                                    <td>PaLM-E</td>
                                    <td>Various</td>
                                    <td>Planning and acting</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.09687" target="_blank">Graph of Thoughts: Solving Elaborate Problems with Large Language Models</a></td>
                                    <td><a href="https://github.com/spcl/graph-of-thoughts">Code</a></td>
                                    <td>GPT-3.5</td>
                                    <td>N/A</td>
                                    <td>Planning and reasoning</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2309.10103" target="_blank">Reasoning about the Unseen for Efficient Outdoor Object Navigation</a></td>
                                    <td><a href="https://github.com/quantingxie/reasonedexplorer">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Unitree Go1</td>
                                    <td>Planning and reasoning</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2309.16650" target="_blank">ConceptGraphs: Open-Vocabulary 3D Scene Graphs for Perception and Planning</a></td>
                                    <td><a href="https://github.com/concept-graphs/concept-graphs">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Clearpath Jackal</td>
                                    <td>Planning and reasoning</td>
                                </tr>
                                <tr>
                                    <td rowspan="6">Dynamic Adaptation</td>
                                    <td><a href="https://arxiv.org/abs/2311.00967" target="_blank">Vision-Language Interpreter for Robot Task Planning</a></td>
                                    <td><a href="https://github.com/omron-sinicx/ViLaIn">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Robot Arm</td>
                                    <td>Re-prompting from error messages</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2310.00481" target="_blank">LANCAR: Leveraging Language for Context-Aware Robot Locomotion in Unstructured Environments</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>spot-mini-mini</td>
                                    <td>Modify terrain type</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2303.14100" target="_blank">Errors are Useful Prompts: Instruction Guided Task Programming with Verifier-Assisted Iterative Prompting</a></td>
                                    <td><a href="https://github.com/ac-rad/xdl-generation">Code</a></td>
                                    <td>GPT-4</td>
                                    <td>Franka Panda</td>
                                    <td>Reprompting from error messages</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2305.18898" target="_blank">AlphaBlock: Embodied Finetuning for Vision-Language Reasoning in Robot Manipulation</a></td>
                                    <td></td>
                                    <td>GPT-4</td>
                                    <td>Franka Research 3</td>
                                    <td>Environment feedback to LLM</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2402.08546" target="_blank">Grounding LLMs For Robot Task Planning Using Closed-loop State Feedback</a></td>
                                    <td></td>
                                    <td>GPT-4 & PaLM-2</td>
                                    <td>Franka Research 3</td>
                                    <td>High and Low-level planning</td>
                                </tr>
                                <tr>
                                    <td><a href="https://arxiv.org/abs/2308.02151" target="_blank">Retroformer: Retrospective Large Language Agents with Policy Gradient Optimization</a></td>
                                    <td><a href="https://github.com/weirayao/retroformer">Code</a></td>
                                    <td>GPT-3</td>
                                    <td>N/A</td>
                                    <td>Q-A</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <img src="assets/images/qual2.png" class="interpolation-image" width="60%" alt=""
            style="display: block; margin-left: auto; margin-right: auto" /> -->
<!-- <video poster="" autoplay controls muted loop height="80%" width="80%">
              <source src="assets/videos/following.mp4" type="video/mp4">
            </video> -->

<!--BibTex-->
<section class="section" id="BibTeX">
    <div class="container is-max-widescreen content">
        <h2 class="title">BibTeX</h2>
        <pre><code>@misc{hunt2024survey,
      title={A Survey of Language-Based Communication in Robotics},
      author={William Hunt and Sarvapali D. Ramchurn and Mohammad D. Soorati},
      year={2024},
      eprint={2406.04086},
      archivePrefix={arXiv},
      primaryClass={cs.RO}
} </code></pre>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="columns is-centered">
            <div class="column">
                <div class="content has-text-centered">
                    <p>
                        Something goes here
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
