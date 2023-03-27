<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fasthand&family=Mulish:wght@800&display=swap');
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto:wght@300;400;500;900&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Open Sans", sans-serif;
    }

    main {
      position: relative;
      width: calc(min(90rem, 90%));
      margin: 0 auto;
      min-height: 100vh;
      column-gap: 3rem;
      padding-block: min(20vh, 3rem);
    }

    .bg {
      position: fixed;
      top: -4rem;
      left: -12rem;
      z-index: -1;
      opacity: 0;
    }

    .bg2 {
      position: fixed;
      bottom: -2rem;
      right: -3rem;
      z-index: -1;
      width: 9.375rem;
      opacity: 0;
    }

    main>div span {
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-size: 1rem;
      color: #717171;
    }

    main>div h1 {
      text-transform: capitalize;
      letter-spacing: 0.8px;
      font-family: "Roboto", sans-serif;
      font-weight: 900;
      font-size: clamp(3.4375rem, 3.25rem + 0.75vw, 4rem);
      background-color: #005baa;
      background-image: linear-gradient(45deg, #005baa, #000000);
      background-size: 100%;
      background-repeat: repeat;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      -moz-background-clip: text;
      -moz-text-fill-color: transparent;
    }

    main>div hr {
      display: block;
      background: #005baa;
      height: 0.25rem;
      width: 6.25rem;
      border: none;
      margin: 1.125rem 0 1.875rem 0;
    }

    main>div p {
      line-height: 1.6;
    }


    main a {
      display: inline-block;
      text-decoration: none;
      text-transform: uppercase;
      color: #717171;
      font-weight: 500;
      background: #fff;
      border-radius: 3.125rem;
      transition: 0.3s ease-in-out;

    }



    main>div>a:hover {
      border: 0.125rem solid #005baa;
      color: #005baa;
    }

    .swiper {
      width: 100%;
      < !-- padding-top: 3.125rem;
      -->
    }

    .swiper-pagination-bullet,
    .swiper-pagination-bullet-active {
      background: #fff;
    }

    .swiper-pagination {
      bottom: 1.25rem !important;
    }

    .swiper-slide {
      width: 18.75rem;
      height: 23rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: self-start;
    }

    .swiper-slide h2 {
      color: #fff;
      font-family: "Roboto", sans-serif;
      font-weight: 400;
      font-size: 1.4rem;
      line-height: 1.4;
      margin-bottom: 0.625rem;
      padding: 0 0 0 1.563rem;
      text-transform: uppercase;
      text-align: center;
    }

    .swiper-slide p {
      color: #dadada;
      font-family: "Roboto", sans-serif;
      font-weight: 300;
      padding: 0 1.563rem;
      line-height: 1.6;
      font-size: 0.75rem;
      display: -webkit-box;
      -webkit-line-clamp: 4;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-align: center;
    }

    .swiper-slide a {
      margin: 1.25rem 1.563rem 3.438rem 1.563rem;
      padding: 0.438em 1.875rem;
      font-size: 0.9rem;
    }

    .swiper-slide a:hover {
      color: #005baa;
    }

    .swiper-slide div {
      display: none;
      opacity: 0;
      padding-bottom: 0.625rem;
    }

    .swiper-slide-active div {
      display: block;
      opacity: 1;
    }

    .swiper-slide--one {
      border: 3px solid white;
      background: linear-gradient(to top, #FF5F6D, #FFC371),
        no-repeat 50% 50% / cover;
    }

    .swiper-slide--two {
      border: 3px solid white;
      background: linear-gradient(to top, #FF5F6D, #FFC371),
        no-repeat 50% 50% / cover;
      no-repeat 50% 50% / cover;
    }

    .swiper-slide--three {
      border: 3px solid white;
      background: linear-gradient(to top, #FF5F6D, #FFC371),
        no-repeat 50% 50% / cover;
      no-repeat 50% 50% / cover;
    }

    .swiper-slide--four {
      border: 3px solid white;
      background: linear-gradient(to top, #FF5F6D, #FFC371),
        no-repeat 50% 50% / cover;
      no-repeat 50% 50% / cover;
    }

    .swiper-slide--five {
      border: 3px solid white;
      background: linear-gradient(to top, #FF5F6D, #FFC371),
        no-repeat 50% 50% / cover;
      no-repeat 50% 50% / cover;
    }

    .swiper-3d .swiper-slide-shadow-left,
    .swiper-3d .swiper-slide-shadow-right {
      background-image: none;
    }

    @media screen and (min-width: 48rem) {
      main {
        display: flex;
        align-items: center;
      }

      .bg,
      .bg2 {
        opacity: 0.1;
      }
    }

    @media screen and (min-width: 93.75rem) {
      .swiper {
        width: 85%;
      }
    }
  </style>
</head>

<body>
  <main>
    <div>
      <span>discover</span>
      <h1>Reviews</h1>
      <hr>
      <p>Have some look at our reviews given by our cusomers.</p>
    </div>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">
          <div>
            <h2>Jellyfish</h2>
            <p style="letter-spacing:2px">Jellyfish and sea jellies are the informal common names given to the
              medusa-phase of certain gelatinous
              members of the subphylum Medusozoa, a major part of the phylum Cnidaria.</p>

          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <div>
            <h2>Seahorse</h2>
            <p style="letter-spacing:2px">
              Seahorses are mainly found in shallow tropical and temperate salt water throughout the world. They live in
              sheltered areas such as seagrass beds, estuaries, coral reefs, and mangroves. Four species are found in
              Pacific waters from North America to South America.
            </p>

          </div>
        </div>

        <div class="swiper-slide swiper-slide--three">

          <div>
            <h2>octopus</h2>
            <p style="letter-spacing:2px">
              Octopuses inhabit various regions of the ocean, including coral reefs, pelagic waters, and the seabed;
              some live in the intertidal zone and others at abyssal depths. Most species grow quickly, mature early,
              and are short-lived.
            </p>

          </div>
        </div>

        <div class="swiper-slide swiper-slide--four">

          <div>
            <h2>Shark</h2>
            <p style="letter-spacing:2px">
              Sharks are a group of elasmobranch fish characterized by a cartilaginous skeleton, five to seven gill
              slits on the sides of the head, and pectoral fins that are not fused to the head.
            </p>

          </div>
        </div>

        <div class="swiper-slide swiper-slide--five">

          <div>
            <h2 style="font-family: 'Fasthand', cursive; color:white; font-size: 4rem;">Dolphin</h2>
            <p style="letter-spacing:2px; font-size:1rem; font-weight: 400;">
              Dolphins are widespread. Most species prefer the warm waters of the tropic zones, but some, such as the
              right whale dolphin, prefer colder climates.
            </p>

          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    /*
inspiration
https://dribbble.com/shots/4684682-Aquatic-Animals
*/

    var swiper = new Swiper(".swiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: true
      },
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      breakpoints: {
        640: {
          slidesPerView: 2
        },
        768: {
          slidesPerView: 1
        },
        1024: {
          slidesPerView: 2
        },
        1560: {
          slidesPerView: 3
        }
      }
    });

  </script>
</body>

</html>