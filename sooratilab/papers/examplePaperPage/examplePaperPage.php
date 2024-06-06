<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport">
    <!-- Title for the tab in browser goes here -->
    <title>[Tab Tile]</title>

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
                    <h1 class="title is-1 publication-title">[Title of Paper]</h1>
                    <h3 class="title is-4 conference-authors" style="color:rgb(75, 75, 75);">
                        <div>
                            [Venue]
                        </div>
                        <div style='font-weight: normal;font-size: 20px;'>
                            [Subtitle for track etc]
                        </div>
                    </h3>
                    <div class="is-size-5 publication-authors">
            <span class="author-block">
                <a target="_blank" href="path/to/personal/page">[FIRST&#160;LAST]</a><sup>1</sup>,
                <a target="_blank" href="path/to/personal/page">[FIRST&#160;LAST]</a><sup>2</sup>
                  </span>
                    </div>

                    <div class="is-size-5 publication-authors">
                        <span class="author-block"><sup>1</sup>[AFFILIATION], </span>
                        <span class="author-block"><sup>2</sup>[AFFILIATION]</span>
                    </div>

                    <!-- Here we have links to other places -->
                    <div class="column has-text-centered">
                        <div class="publication-links">

                            <span class="link-block">
                            <a target="_blank" href="https://arxiv.org/abs/[YOUR PAPER LINK]"
                               class="button is-rounded is-dark circular-button">
                              <span class="icon">
                                  <i class="ai ai-arxiv"></i>
                              </span>
                            </a>
                          </span>

                            <span class="link-block">
                            <a target="_blank" href="youtube link"
                               class="button is-rounded is-dark circular-button">
                              <span class="icon">
                                  <i class="fab fa-youtube"></i>
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
            <div class="content has-text-justified">
                <p style="font-size: 125%; text-align: center;">
                    <!-- Abstract goes here -->
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                    This is a placeholder for the abstract of the paper. This is a placeholder for the abstract of the paper.
                </p>
            </div>

            <!-- You can put a summary video here id you like. Also putting the ?mute=1 at the end makes it default to
            no audio. I'm not sure if you can make it autoplay if you use youtube but probably. -->
            <div id="results-carousel" class="carousel results-carousel">
                <div class="item item-sweep_without_exceeding">
                    <iframe src="https://www.youtube.com/embed/cVCwG8aLIvI?mute=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Secton-->
<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">[SECTION TITLE]</span></h2>
                    <span style="font-size: 110%">
                    Some text goes here
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">[SECTION TITLE]</span></h2>
                    <br>
                    <div class="columns">
                        <div class="column">
                            <span style="font-size: 110%">
                                Some example text
                            </span>
                        </div>
                        <div class="column">
                            <img src="./images/example.png" class="interpolation-image" alt="">
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">[SECTION TITLE]</span></h2>
                    <br>
                    <div class="item item-sweep_without_exceeding">
                        <iframe src="https://www.youtube.com/embed/cVCwG8aLIvI?mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span style="font-size: 110%">
                    </span>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container is-max-widescreen">
        <div class="rows">
            <div class="rows is-centered ">
                <div class="row is-full-width">
                    <h2 class="title is-3"><span class="dvima">[SECTION TITLE]</span></h2>
                    <br>
                    <div class="columns">
                        <div class="column">
                            <div class="item item-sweep_without_exceeding">
                                <iframe src="https://www.youtube.com/embed/cVCwG8aLIvI?mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="column">
                            <span style="font-size: 110%">
                                Example text
                            </span>
                        </div>
                    </div>
                    <br>
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
        <pre><code>@article{
        [Bibtex ref]
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
