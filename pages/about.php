<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <title>Why Link-Up</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <?php require_once('../backend/navbar_login.php'); ?>

  <main class="content">
    <h1 class="title animateFadein">Why Link Up</h1>
    <p class="mission">
      Our goal is to ease the struggles of <br />making friends in an online
      environment during the pandemic.
    </p>
    <div class="bubblesContainer animate">
      <span class="bubble b3 p6" id="p6">Free</span>
      <span class="bubble b1 p1" id="p1">Fast</span>
      <span class="bubble b2 p5" id="p5">Easy</span>
      <span class="bubble b1 p2" id="p2">Simple</span>
      <span class="bubble b3 p4" id="p4">Safe</span>
    </div>
    <div class="infoContents mainA">
      <div class="infoContainer">
        <div class="infoText item">
          <div class="infoTitle" id="infoTitle">It's Free</div>
          <p id="infoText">
            You don't have to worry about paying any membership fee when using
            Link Up. Sign up for free and start making friends easily!
          </p>
        </div>
        <div class="infoImage item">
          <img class="aboutImages" id="infoImage" src="../images/aboutp1.jpeg" alt="Test" />
        </div>
      </div>
      <span class="buttonsLR">
        <button class="buttonAbout" type="button" id="lClick">
          <img class="buttonImage" src="../icon/leftPointCircle.png" alt="Arrow pointing to the left" />
        </button>
      </span>
      <span class="buttonsLR"><button class="buttonAbout" type="button" id="rClick">
          <img class="buttonImage" src="../icon/rightPointCircle.png" alt="Arrow pointing to the right" />
        </button>
      </span>
    </div>
    <section class="MobileViewAbout">
      <div class="mitem">
        <div class="b3 infoContents">
          <div class="infoContainer">
            <div class="infoText item">
              <div class="infoTitle">It's Free!</div>
              <p class="infoText">
                You don't have to worry about paying any membership fee when
                using Link Up. Sign up for free and start making friends easily!
              </p>
            </div>
            <div class="infoImage item">
              <img class="aboutImages" src="../images/aboutp1.jpeg" alt="Test" />
            </div>
          </div>
        </div>
      </div>
      <div class="mitem">
        <div class="b1 infoContents">
          <div class="infoContainer">
            <div class="infoText item">
              <div class="infoTitle">It's Fast!</div>
              <p class="infoText">
                Don't worry about long sign up processes or a limited about of
                searches per day. Get access with in minutes and match with
                people who have the same interest as you.
              </p>
            </div>
            <div class="infoImage item">
              <img class="aboutImages" src="../images/aboutp4.jpg" alt="Test" />
            </div>
          </div>
        </div>
      </div>

      <div class="mitem">
        <div class="b2 infoContents">
          <div class="infoContainer">
            <div class="infoText item">
              <div class="infoTitle">It's Easy!</div>
              <p class="infoText">
                Make friends at the same rate you could offline. Answer a few
                carefully selected questions and be matched with people
                instantly.
              </p>
            </div>
            <div class="infoImage item">
              <img class="aboutImages" src="../images/aboutp2.jpg" alt="Test" />
            </div>
          </div>
        </div>
      </div>
      <div class="mitem">
        <div class="b1 infoContents">
          <div class="infoContainer">
            <div class="infoText item">
              <div class="infoTitle">It's Simple!</div>
              <p class="infoText">
                Get comfortable learning how to use Link Up within a matter of
                seconds. Our interface is straightforward and leaves no room for
                you to get confused!
              </p>
            </div>
            <div class="infoImage item">
              <img class="aboutImages" src="../images/aboutp3.jpeg" alt="Test" />
            </div>
          </div>
        </div>
      </div>
      <div class="mitem">
        <div class="b3 infoContents">
          <div class="infoContainer">
            <div class="infoText item">
              <div class="infoTitle">It's Safe!</div>
              <p class="infoText">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam
                fugit commodi sit error quisquam qui officia temporibus
                dignissimos
              </p>
            </div>

            <div class="infoImage item">
              <img class="aboutImages" src="../images/aboutp5.jpg" alt="Test" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php require_once('../backend/footer.php'); ?>
  <script src="../scripts/about.js"></script>
</body>

</html>