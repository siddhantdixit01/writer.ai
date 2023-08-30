<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $statusMessage = "<p>Thank you for your message, $name!</p>";
    echo '<script>window.location.href = "#form";</script>';
} else {
    $statusMessage = "";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>writer.ai</title>
    <meta name="description" content="AI Content Writer">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">  
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background:linear-gradient(116.4deg, #1BB86A 14.41%, #3A3677 93.84%)">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <h2 class="display-3 text-white font-weight-light">WRITER.AI</h2>
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="#" class="text-white lead">Get Early Access</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5" style="padding-top: 12vh;">
            	Unlocking Creativity<br/> Through AI
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Lorem ipsum dolor sit amet, id nec enim autem oblique, ei dico mentitum duo.
                <br> Illum iusto laoreet his te. Lorem partiendo mel ex. Ad vitae admodum voluptatum per.
            </p>
            <a href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Started</a>
        </div>
    </div>
    <!-- three-blcok-features -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">This tool will help you...</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <svg fill="#000000" height="175px" width="110px" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-2.4 -2.4 28.80 28.80" enable-background="new 0 0 24 24" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"><path transform="translate(-2.4, -2.4), scale(0.8999999999999999)" d="M16,30.06475493265316C18.506683387563374,29.323926189976014,19.811018056615197,26.72226585505132,21.803523577523894,25.030458956906276C23.47589591618342,23.6104723977118,25.757726754881155,22.864820765978283,26.77123559721085,20.91905847476026C27.80516129369466,18.9340993425684,27.70591260074285,16.577852164763918,27.3579186090965,14.366977839050346C27.013316034571844,12.177649853854486,26.004705610673675,10.235646458789375,24.79713919936829,8.37723549147945C23.422011218887082,6.260951950917522,22.252255578990734,3.6558045599615228,19.865289882082955,2.836031573982348C17.464838223354047,2.011627006072512,14.770736246380775,2.9813309886039407,12.524114587367029,4.162221406354583C10.514433362397938,5.218568963486742,9.73490985859546,7.602364116865287,8.003459693295637,9.07095838096125C5.822712019603253,10.920641143543484,1.7316685702378818,11.069280936167107,1.0942622684766938,13.856878458225074C0.4730042290634674,16.57385406144989,4.23558267546456,18.31060636476628,5.301938756179712,20.885640867287798C6.428788786186289,23.60675603595485,5.239817702458367,27.347281972705694,7.47502214378836,29.265124473208385C9.68588344153239,31.162080152576625,13.206319052455104,30.890403338861567,16,30.06475493265316" fill="#00FFAE" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M23.6,20.9L20,17.3c-0.6-0.6-1.5-0.6-2,0l-1.4-1.4c1.5-1.7,2.4-3.9,2.4-6.3C19,4.3,14.7,0,9.5,0S0,4.3,0,9.5S4.3,19,9.5,19 c2.4,0,4.7-0.9,6.3-2.4l1.4,1.4c-0.5,0.6-0.5,1.5,0,2l3.6,3.6c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l0.6-0.6 C24.1,22.4,24.1,21.4,23.6,20.9z M5.8,1.9l2.1,1.8L7.1,5.3C7,5.4,7,5.6,7,5.7S7.2,5.9,7.3,6l2.5,0.8l-0.7,2L7.7,8.1 C7.6,8,7.4,8,7.3,8S7.1,8.2,7,8.3L6.1,11H5c-0.2,0-0.3,0.1-0.4,0.2c-0.1,0.1-0.1,0.3-0.1,0.4l0.4,1.7l-0.4,0.4l-1.6-1.6 C2.8,12.1,2.6,12,2.5,12H1.4C1.1,11.2,1,10.4,1,9.5C1,6.2,3,3.3,5.8,1.9z M1.8,13h0.5l1.9,1.9C4.2,15,4.4,15,4.5,15s0.3,0,0.4-0.1 l1-1C6,13.7,6,13.5,6,13.4L5.6,12h0.9c0.2,0,0.4-0.1,0.5-0.3l0.8-2.5l1.5,0.7C9.4,10,9.6,10,9.7,10C9.8,9.9,9.9,9.8,10,9.7l1-3 c0.1-0.3-0.1-0.5-0.3-0.6L8.2,5.2l0.7-1.5C9.1,3.5,9,3.3,8.8,3.1l-2-1.7C7.7,1.2,8.6,1,9.5,1c4.1,0,7.5,2.9,8.3,6.8l-2.5,1.3 C15.1,9.1,15,9.3,15,9.5v0.8L14.3,11h-1.8c-0.2,0-0.4,0.1-0.4,0.3l-1,2c-0.1,0.2-0.1,0.4,0.1,0.6l1,1c0.1,0.1,0.2,0.1,0.4,0.1h0.6 l0.6,1.8c-1.3,0.7-2.7,1.2-4.3,1.2C6.1,18,3.1,15.9,1.8,13z M14.6,16.3L14,14.3c-0.1-0.2-0.3-0.3-0.5-0.3h-0.8l-0.6-0.6l0.7-1.4h1.7 c0.1,0,0.3-0.1,0.4-0.1l1-1c0.1-0.1,0.1-0.2,0.1-0.4V9.8l2-1c0,0.2,0,0.4,0,0.7C18,12.3,16.7,14.7,14.6,16.3z M22.9,22.3l-0.6,0.6 c-0.2,0.2-0.5,0.2-0.7,0L18,19.3c-0.2-0.2-0.2-0.5,0-0.7l0.6-0.6c0.1-0.1,0.2-0.1,0.4-0.1s0.3,0,0.4,0.1l3.6,3.6 C23,21.8,23,22.1,22.9,22.3z"></path> </g></svg>
                <h4>Original content that ranks for SEO</h4>
                <p class="text-justify" style="text-align-last: center;">Write SEO optimized marketing copy for blogs, essays, Facebook ads, Google Ads, Quora answers, and professional emails that attracts clicks, drives conversions, and powers up sales.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <svg width="175px" height="174px" viewBox="-3.2 -5.2 38.40 47" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" transform="rotate(0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                    <path transform="translate(-3.2, -3.2), scale(1.2)" d="M16,25.02764788456261C17.561998263776328,24.40350486566597,19.534040177947425,25.479173583926332,20.937390569597483,24.55181132335428C22.3347736996112,23.628392349700043,22.42312352355823,21.641998044043294,23.29111882718179,20.209529417566955C24.182345512611413,18.738721614083612,26.02997768586354,17.7174344103177,26.119306549429893,16C26.20848342935356,14.285487623248365,24.257083146862847,13.167743339921616,23.742576207997125,11.52982154209167C23.032919281217314,9.270643945932909,24.65934747044315,5.732040468448391,22.553637046366934,4.648767661326849C20.39282001790713,3.5371455212015865,18.424340894963336,7.381144414666602,16,7.546689689159393C13.838176145491481,7.694309078884322,11.889844765737752,4.557458341127719,9.943506775423888,5.509846019337504C8.054137839346401,6.4343574368135386,8.8336967111526,9.462672529105426,8.075069621597546,11.424539312720295C7.454781436155976,13.02865127239247,6.5303150681895845,14.40493992369964,5.887107508257031,15.999999999999998C4.897125052703906,18.45501077639101,2.842196669907015,20.739384432363597,3.2651305188202127,23.352480323053886C3.696665005033592,26.018715233106594,5.423508622608562,29.32857487457321,8.101371561177068,29.680825766149745C11.183568909400009,30.086263530827406,13.113180966956604,26.18116257665705,16,25.02764788456261" fill="#00FFAE" strokewidth="0"/>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M10.667 7.467c-1.493 0-2.667 1.173-2.667 2.667s1.173 2.667 2.667 2.667c1.493 0 2.667-1.173 2.667-2.667s-1.173-2.667-2.667-2.667zM10.667 11.733c-0.907 0-1.6-0.693-1.6-1.6s0.693-1.6 1.6-1.6c0.907 0 1.6 0.693 1.6 1.6s-0.693 1.6-1.6 1.6z" fill="#000000"> </path> <path d="M16 18.933c0-3.84 0-8.213 0-9.813 0-2.987-1.973-7.040-5.333-9.12-3.36 2.080-5.333 6.133-5.333 9.173 0 1.6 0 5.973 0 9.813l-5.333 6.613h21.333l-5.333-6.667zM5.333 24.533h-3.093l3.093-3.893v3.893zM14.933 24.533h-8.533v-15.36c0-2.4 1.493-5.867 4.267-7.893 2.773 2.027 4.267 5.44 4.267 7.893v15.36zM16 20.64l3.093 3.893h-3.093c0-0.907 0-2.293 0-3.893z" fill="#000000"> </path> <path d="M10.133 26.667h1.067v5.333h-1.067v-5.333z" fill="#000000"> </path> <path d="M12.8 26.667h1.067v3.2h-1.067v-3.2z" fill="#000000"> </path> <path d="M7.467 26.667h1.067v3.2h-1.067v-3.2z" fill="#000000"> </path> </g>    
                </svg>
                <h4>Boost ad conversions with Strategic Copy</h4>
                <p class="text-justify" style="text-align-last: center;">Welcome to the smarter way to write crisp, concise, and compelling ad copy that brings results faster.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <svg width="115px" height="174px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                    <path transform="translate(-2.4, -2.4), scale(0.8999999999999999)" d="M16,31.09981564618647C18.82103294862732,30.943688294961465,19.666565824922802,26.931214747587156,22.044380606425783,25.405239809422238C24.42464166414242,23.87769496084087,27.9875470357073,24.492532445936124,29.74660191817369,22.277862744201585C31.567483137877378,19.985352994829256,31.562916064681424,16.718008064436003,31.257067025937054,13.806364931643811C30.943393144371225,10.820230311286968,30.131851541427693,7.715647864450955,27.995330567354735,5.6059868959025465C25.912977934535878,3.549813272744873,22.76329604373276,3.347436396285521,19.928622649660138,2.6203399756411976C17.196020504860662,1.9194249274796384,14.488151706947352,0.8758761107137571,11.722442063871043,1.4319755233161597C8.826186159399033,2.0143237865386294,6.193429370305372,3.594630608464985,4.20715824213338,5.781444448108765C2.193158317946005,7.998786705561699,0.546855282935836,10.778019082252221,0.5128930200174437,13.773290179500464C0.4802628082959883,16.651082224783647,2.3325214385631012,19.142252797349432,4.029307476015317,21.466832099012287C5.468689207188277,23.438770166407267,7.607776480378085,24.568372503439257,9.509796153322144,26.09895431223279C11.68152965086524,27.846578604541985,13.216676694523457,31.253855993534533,16,31.09981564618647" fill="#00FFAE" strokewidth="0"/>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier"> <path d="M11.0833 12.0001L1 19.3334L1 4.66675L11.0833 12.0001Z" stroke="#333333" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/> <path d="M7.41669 19.3334L17.5 12.0001L7.41669 4.66675" stroke="#333333" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12.9167 19.3334L23 12.0001L12.9167 4.66675" stroke="#333333" stroke-width="1.83333" stroke-linecap="round" stroke-linejoin="round"/> </g>    
                </svg>
                <h4>Finish your first draft 10x<br/> faster and better</h4>
                <p class="text-justify" style="text-align-last: center;">Sprint ahead of the competition with high-quality, original content in record time. Cut your ideation times in half and write something new, every day!</p>
            </div>
        </div>
    </div>
    <!-- features -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Scale up your content marketing</h2>
                    <p class="my-4">Flow, not just write, with magical tools built to help you write much better, much faster- be it blogs, articles, social media post, FAQs, or ad descriptions.</p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="img/feature-1.png" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- features -->
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">End writer's block once and for all</h2>
                    <p class="my-4">
                        The smarter and faster way to get hold of your idea and start bringing it to life, all in a few minutes.
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="img/feature-2.png" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- price -->
    <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Check our pricing</h2>
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">STARTUP</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">0</span> / MO.</p>
                <ul class="list-unstyled">
                    <li>Up to 5 Documents</li>
                    <li>Up to 3 Reviews</li>
                    <li>Limited Support</li>
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 rounded" id="price-table__premium">
                <h4 class="my-4">PREMIUM</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">10</span> / MO.</p>
                <ul class="list-unstyled">
                    <li>Up to 15 Documents</li>
                    <li>Up to 10 Reviews</li>
                    <li>Limited Support</li>
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Free</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">PROFESSIONAL</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">30</span> / MO.</p>
                <ul class="list-unstyled">
                    <li>Unlimited Documents</li>
                    <li>Unlimited Reviews</li>
                    <li>Unlimited Support</li>
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>
        </div>
    </div>
    <!-- clients -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-1.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-2.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-3.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-4.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-5.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-6.png" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Te iisque labitur eos, nec sale argumentum scribentur,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : email@gmail.com</li>
                        <li>Phone : +91 - xxx xxx xxxx</li>
                        <li>Address : Lucknow, India</li>
                    </ul>
                </div>
                <div class="col-md-6 contact" id="form">
                    <form method="post" >
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="name" class="form-control" name="name" id="name" placeholder="Name">
                                <div class="error-message" id="nameError"></div>
                            </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address">
                                <div class="error-message" id="emailError"></div>
                            </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message"></textarea>
                            <div class="error-message" id="messageError"></div>
                        </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                    <div class="thank-you text-success">
                        <?php echo $statusMessage; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
    <!-- Form-validation -->
    <script>
        const form = document.getElementById('form');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');

        form.addEventListener('submit', function(event) {
            let valid = true;

            if (nameInput.value.trim() === '') {
                valid = false;
                nameInput.classList.add('invalid');
                document.getElementById('nameError').textContent = 'Name is required.';
            } else if (nameInput.value.trim().length > 0) {
                nameInput.classList.remove('invalid');
                document.getElementById('nameError').textContent = '';
            }

            if (emailInput.value.trim() === '' || !isValidEmail(emailInput.value)) {
                valid = false;
                emailInput.classList.add('invalid');
                document.getElementById('emailError').textContent = 'Invalid email address.';
            } else {
                emailInput.classList.remove('invalid');
                document.getElementById('emailError').textContent = '';
            }

            if (messageInput.value.trim() === '') {
                valid = false;
                messageInput.classList.add('invalid');
                document.getElementById('messageError').textContent = 'Message is required.';
            } else if (messageInput.value.trim().length > 0) {
                messageInput.classList.remove('invalid');
                document.getElementById('messageError').textContent = '';
            }

            if (!valid) {
                event.preventDefault();
            }
        });

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

    </script>
</body>
</html>
