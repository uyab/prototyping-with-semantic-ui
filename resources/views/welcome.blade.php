<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

    <style>
        .ui.celled.grid>.column:not(.row).address {
            box-shadow: -4px 0 0 0 #d4d4d5;
        }
    </style>
</head>
<body>

<div class="ui segment inverted" style="background-image: url('{{ asset('img/header.jpg') }}'); background-size:     cover;                      /* <------ */
        background-repeat:   no-repeat;
        background-position: center center;">
    <section class="headline ui container">
        <div class="ui inverted borderless  menu" style="background: transparent">
            <a class="item">
                FirstJob
            </a>
            <div class="right menu">
                <a class="ui item">Login</a>
                <a class="ui item">Sign Up</a>
                <div class="ui item">
                    <a href="" class="ui button blue">Perusahaan</a>
                </div>
            </div>
        </div>


        <div class="ui container text">
            <div class="ui segment inverted basic padded" style="background: transparent">
                <h1>Job search for fresh graduate</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi dicta est harum, iste itaque iure laboriosam magni minus placeat quasi soluta, temporibus totam ullam voluptas. Aspernatur libero perferendis quia.</p>

                <div class="ui divider hidden"></div>

                <div class="ui action input huge">
                    <input type="text" placeholder="Job, skill, company...">
                    <select class="ui compact selection dropdown">
                        <option value="">Choose Location</option>
                        <option value="articles">Articles</option>
                        <option value="products">Products</option>
                    </select>
                    <div class="ui button blue" style="padding-left: 50px; padding-right: 50px">Search Job</div>
                </div>

                <div class="ui divider hidden section"></div>
                <div class="ui divider hidden section"></div>
                <div class="ui divider hidden section"></div>

            </div>
        </div>
    </section>
</div>

<div class="ui container">
    <div class="ui divider section hidden"></div>

    <section class="company">
        <div class="ui two column grid">
            <div class="left aligned column"><h2>Find Company</h2></div>
            <div class="right aligned column"><a href="" class="ui button basic blue">View More &rarr;</a></div>
        </div>


        <div class="ui three column grid stackable">
            @foreach(range(1, 3) as $item)
                <div class="column center aligned">
                    <div class="ui fluid raised card">
                        <div class="image">
                            <img src="{{ asset('img/javan.png') }}">
                        </div>
                    </div>
                    <a class="header">Javan Cipta Solusi</a>
                </div>
            @endforeach
        </div>

    </section>

    <div class="ui divider section hidden"></div>
</div>

<section class="job ui segment secondary attached">
    <div class="ui container">
        <h2 class="ui header centered">Find Job</h2>

        <div class="ui three column grid stackable">
            @foreach(range(1, 6) as $item)
                <div class="column">
                    <div class="ui fluid raised card">
                        <div class="content">

                            <div class="ui label mini yellow ">New</div>

                            <img src="{{ asset('img/javan.png') }}" class="ui image">

                            <h5>Software Engineer - Android at PT Javan Cipta Solusi</h5>
                            <i class="icon map marker alternate"></i> Yogyakarta

                            <div class="ui grid three column stackable">
                                <div class="column center aligned">
                                    <div class="ui star rating mini" data-rating="3"></div>
                                    <div class="ui label mini basic">Java</div>
                                </div>
                                <div class="column center aligned">
                                    <div class="ui star rating mini" data-rating="3"></div>
                                    <div class="ui label mini basic">Kotlin</div>
                                </div>
                                <div class="column center aligned">
                                    <div class="ui star rating mini" data-rating="3"></div>
                                    <div class="ui label mini basic">MySQL</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="ui divider hidden"></div>

        <div class="ui segment center aligned basic">
            <a href="" class="ui button blue massive">View More</a>
        </div>
    </div>
</section>

<div class="ui divider section hidden"></div>

<div class="ui container">
    <section class="service">
        <h2 class="ui header centered">What we offer</h2>
        <div class="ui three column grid stackable">
            <div class="column">
                <img src="{{ asset('img/searching.png') }}" alt="" class="ui image">
                <h3 class="ui header">Searching Job</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
            <div class="column">
                <img src="{{ asset('img/rocket.png') }}" alt="" class="ui image">
                <h3 class="ui header">Fast Found Job</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
            <div class="column">
                <img src="{{ asset('img/feedback.png') }}" alt="" class="ui image">
                <h3 class="ui header">Feedback</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
        </div>
    </section>

    <div class="ui divider section hidden"></div>
</div>

<section class="pre-footer">
    <div class="ui segment inverted teal">
        <div class="ui container">
            <div class="ui two column very relaxed grid internally celled stackable">
                <div class="column">
                    <h4 class="ui huge header inverted">Talk To Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur atque eaque eveniet velit? Corporis deleniti eius id iste nihil nulla officia porro provident quia quis quisquam, sed, veniam vitae!</p>
                </div>
                <div class="column address">
                    <h4 class="ui huge header inverted">Address</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur atque eaque eveniet velit? Corporis deleniti eius id iste nihil nulla officia porro provident quia quis quisquam, sed, veniam vitae!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="ui inverted blue borderless menu stackable">
        <div class="ui container">
            <a class="item">
                FirstJob
            </a>
            <div class="item">2018 All Right Reserved</div>
            <div class="right menu">
                <a class="item">FAQ</a>
                <a class="item">Help</a>
                <a class="item">Privacy</a>
                <a class="item">Term</a>
            </div>
        </div>
    </div>
</section>


    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

<script>
    $(function(){
        $('.ui.rating').rating();
        $('.ui.dropdown').dropdown();
    });
</script>

</body>
</html>
