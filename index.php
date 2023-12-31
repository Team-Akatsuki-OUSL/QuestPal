<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuestPal</title>
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/45bc3685e3.js" crossorigin="anonymous"></script>
</head>

<body>

  <header id="top">

    <nav class="navbar navbar-expand-lg navbar-scroll shadow-0 fixed-sticky bold" style="z-index: 1000;">
      <div class="container">
        <a class="navbar-brand" href="#!"><img src="images/logo.png" width="50px" alt="">
          <h2 style="margin-bottom: -3.5px;">QuestPal</h2>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sec3">Contact Us</a>
            </li>

            <a href="login.php" style="margin-top: 3px;" class="navbutton"><button type="button"
                class="btn btn-warning  ms-0 ">Sign In</button></a>
            <a href="register.php" style="margin-top: 3px;" class="navbutton"><button type="button"
                class="btn btn-dark ms-0 ">Get Started</button></a>
          </ul>
        </div>
      </div>
    </nav>




    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong position-relative"
      data-mdb-ride="carousel" style="top: -73px; margin-bottom: -73px;">

      <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>


      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3 bold">A Heart for A Heart</h1>
                <a class="btn btn-outline-light btn-lg m-2" id="donatenowbutton" href="php/register.php" role="button"
                  rel="nofollow">Donate Now</a>

              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="mask" style="background: linear-gradient(
            45deg,
            rgba(29, 236, 197, 0.7),
            rgba(91, 14, 214, 0.7) 100%
          );">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="bold">Donate or Request</h1>
                <p>People can donate or Request help through QuestPal.</p>

              </div>
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <div class="mask" style="
              background: linear-gradient(
                45deg,
                rgba(29, 236, 197, 0.7),
                rgba(91, 14, 214, 0.7) 100%
              );
            ">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="bold">Fast secure and Trusted</h1>
                <p>Quest pal is a well secured and fast platform.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <section class="sec2">
      <div class=" w-100 p-5 mx-0 text-white ">
        <h1 class="text-center bold">Connecting people together by<br> Hearts</h1>
        <p class="text-center"> QuestPal is a new way to raise money for good ideas.</p>
      </div>
      <div class=" container mt-4">
        <div class="row mx-3 ">
          <div class="col-md-6 col-lg-3 ">
            <div class="card mb-3" style="min-height: 320px;">
              <div class="card-body ">
                <svg xmlns="http://www.w3.org/2000/svg" style="color: steelblue;height: 40px; margin-bottom :10px;"
                  viewBox="0 0 640 512">
                  <path
                    d="M535 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l64 64c4.5 4.5 7 10.6 7 17s-2.5 12.5-7 17l-64 64c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l23-23L384 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l174.1 0L535 41zM105 377l-23 23L256 400c13.3 0 24 10.7 24 24s-10.7 24-24 24L81.9 448l23 23c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 441c-4.5-4.5-7-10.6-7-17s2.5-12.5 7-17l64-64c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM96 64H337.9c-3.7 7.2-5.9 15.3-5.9 24c0 28.7 23.3 52 52 52l117.4 0c-4 17 .6 35.5 13.8 48.8c20.3 20.3 53.2 20.3 73.5 0L608 169.5V384c0 35.3-28.7 64-64 64H302.1c3.7-7.2 5.9-15.3 5.9-24c0-28.7-23.3-52-52-52l-117.4 0c4-17-.6-35.5-13.8-48.8c-20.3-20.3-53.2-20.3-73.5 0L32 342.5V128c0-35.3 28.7-64 64-64zm64 64H96v64c35.3 0 64-28.7 64-64zM544 320c-35.3 0-64 28.7-64 64h64V320zM320 352c53 0 96-43 96-96s-43-96-96-96s-96 43-96 96s43 96 96 96z" />
                </svg>
                <h4 class="card-title bold">Non profit platform</h4>
                <hr>
                <p class="card-text">Questpal is a non profit platform. We don't receive any amount from your donations and you don't need to pay us to do requests.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="card mb-3" style="min-height: 320px;">

              <div class="card-body ">
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 40px; margin-bottom :10px;"
                  viewBox="0 0 512 512">
                  <path
                    d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM208.4 208c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zm128 32c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z" />
                </svg>
                <h4 class="card-title bold">Simple user interface</h4>
                <hr>
                <p class="card-text">QuestPas is desiged with a simple user interface. You can use the platform easily without any issue</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="card mb-3" style="min-height: 320px;">

              <div class="card-body ">
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 40px; margin-bottom :10px;"
                  viewBox="0 0 640 512">
                  <path
                    d="M352 128c0 70.7-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0s128 57.3 128 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                </svg>
                <h4 class="card-title bold">Be a volunteer</h4>
                <hr>
                <p class="card-text">If you are a person with a good heart, join with us today. Donate something and make another life better.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3  ">
            <div class="card mb-3" style="min-height: 320px;">

              <div class="card-body ">
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 40px; margin-bottom :10px;"
                  viewBox="0 0 576 512">
                  <path
                    d="M148 76.6C148 34.3 182.3 0 224.6 0c20.3 0 39.8 8.1 54.1 22.4l9.3 9.3 9.3-9.3C311.6 8.1 331.1 0 351.4 0C393.7 0 428 34.3 428 76.6c0 20.3-8.1 39.8-22.4 54.1L302.1 234.1c-7.8 7.8-20.5 7.8-28.3 0L170.4 130.7C156.1 116.4 148 96.9 148 76.6zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z" />
                </svg>
                <h4 class="card-title bold">Request your needs</h4>
                <hr>
                <p class="card-text">Do you need some help? QuestPal is for you. Do a request and the kind hearted community will always help you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="container-fluid bg-light pb-5">
      <div class="container d-block mx-auto  ">
        <div class="row ">


          <div class="col-lg-6  pt-5">
            <div class="mx-3">
              <div style="width:100%;height:0px;position:relative;padding-bottom:56.250%;"><iframe
                  src="https://streamable.com/e/78u5t8?loop=0" frameborder="0" width="100%" height="100%"
                  allowfullscreen
                  style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden;"></iframe></div>

            </div>
          </div>




          <div class="col-lg-6 ">
            <div class="mx-3 mt-5">

              <h2 class="bold">Quick Exploration.</h2>
              <p>Got a minute to spare? Watch our 'how it works' animation. You'll get a brief overview of how
                Questpal works and what extra support, services and money that only QuestPal can give you.</p>
            </div>
          </div>

        </div>
      </div>

    </section>

    <div class="w-100" id="whatisq" style="background-color:#ABEBC6;">

      <div class="container ">
        <div class="py-4 px-4 d-flex justify-content-center align-items-center text-whiste  text-center flex-wrap"
          style="min-height: 70vh;">
          <div class="col-lg-10 mt-3 ">

            <h2 class="bold mb-4">What is QuestPal?</h2>
            <p>QuestPal is a fundraising website that is a communicator between volunteers and the people who need
              help.
              Due to the prevailing situation in the country, there are a lot of people who are struggling to live. So
              as a team, our focus is to bring the volunteer’s sight to those poor people. We hope we will be able to
              make those lives better through this project.</p>
          </div>
          <div class="col-lg-10 mt-4 ">

            <h2 class="bold mb-4">Why QuestPal?</h2>
            <p>There are a lot of volunteers in the world, but the major problem is the lack of a good way to connect
              with poor people. Also, most of the existing fundraising websites deduct some percentage of the
              donations
              from their price. QuestPal is a free platform thus those people who seek help can get the full donation.
              The system is used only by volunteers and people who need help.</p>
          </div>
        </div>

      </div>



    </div>

    <div class="item py-4 text-bg-light " id="about">


      <div class="container">
        <div class="row" style="top: 0; color: #5b5b5b;">
          <h2 class="text-center my-3  bold ">About US...</h2>
          <div class="col-md 8 ">

            <div class="d-block mx-4 mt-3">
              <p class="text-justify  ">We are a group of first-year students at the Open University studying a
                                    Bachelor
                                    of Software Engineering. We were instructed to do this under a suitable theme under the subject EEY4189-Software Design in Group. We worked hard to build QuestPal step by
                                    step. This is our first project and we believe that maximum justice has been done.
                                    QuestPal is a fundraising web application that is a completely free platform for helping each other.
                                    We hope that our efforts to bring everyone together through QuestPal will be successful and provide
                                    you with excellent service</p>
            </div>
          </div>
          <div class="col-lg-4    mt-3">
            <div class="   text-dark rounded shadow  mb-4 bg-white d-block mx-4">
              <div class="text-bg-primary p-4 rounded rounded-3">
                <h2 class="text-center ">Team Akatsuki</h2>
                <h6 class=" text-center ">

                  W.I.S.D.P. Jansz<br>
                  T.D.K.L.C. Gunasekara

                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <section class="container-fluid" id="sec3">

      <div class="row d-flex justify-content-center pt-5">
        <div class="col-lg-4 px-4 mb-5">
          <h2><strong>Contact Us</strong> </h2>
          <p class="mt-4">Want to get in touch with us? Please feel free to contact us by filling this form. We would be happy to answer your questions.
          </p>

        </div>
        <div class="col-lg-4 px-4">
          <form action="sendMailHelper.php" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="">
                  <label class="form-label text-white" for="form3Example1">First name</label>
                  <input type="text" id="form3Example1" class="form-control" name="first_name" required/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="">
                  <label class="form-label text-white" for="form3Example2">Last name</label>
                  <input type="text" id="form3Example2" class="form-control" name="last_name" required/>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="mb-3">
              <label class="form-label text-white" for="form3Example3">Email address</label>
              <input type="email" id="form3Example3" class="form-control" name="email_address" required/>
            </div>

            <div class="mb-3">
              <label class="form-label text-white" for="form3Example3">Subject</label>
              <input type="text" id="form3Example3" class="form-control" name="subject" required/>
            </div>

            <!-- Password input -->
            <div class=" mb-4">
              <label class="form-label text-white" for="form3Example4">Message</label>
              <textarea type="textarea" id="form3Example4" class="form-control" rows="6" name="description" required></textarea>
            </div>



            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Submit
            </button>

          </form>
        </div>
      </div>
    </section>


    <section class="footer text-bg-primary py-3 text-bg-light">
      <div class="d-flex justify-content-center">
        <div class="text-center mt-3">

          <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
            <i class="fab fa-facebook-f" style="scale: 1.5; margin-top:2px;"></i>
          </button>

          <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
            <i class="fab fa-google" style="scale: 1.5; margin-top:2px;"></i>
          </button>

          <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
            <i class="fab fa-twitter" style="scale: 1.5; margin-top:2px;"></i>
          </button>

          <button type="button" class="btn btn-primary btn-floating mx-1 bg-white" style="color: steelblue;">
            <i class="fab fa-github" style="scale: 1.5; margin-top:2px;"></i>
          </button>
        </div>
      </div>
      <p class="copyright text-center mt-3">
        © 2023 QuestPal. All Rights Reserved <br> Developed by Team Akatsuki.
      </p>

      <p class="text-end" style="margin-top: -50px; margin-right: 25px;"><a href="#top"
          style="text-decoration: none; ">&uarr; Back to top</a></p>

    </section>
</body>

</html>