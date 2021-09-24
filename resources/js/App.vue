<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "app",
};
</script>

<style>
@font-face {
  font-family: qartuli;
  src: url("./fonts/bpg-arial-webfont.ttf");
}

@font-face {
  font-family: english;
  src: url("./fonts/Myriad Pro Regular.ttf");
}

body, #app {
  padding: 0px;
  margin: 0px;
}
body::-webkit-scrollbar {
  width: 0.7em;
}

body::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

body::-webkit-scrollbar-thumb {
  background-color: #7acbdb;
  border-radius: 40px;
  height:5em !important;
}

:root {
  --round-bg:#fff;
  --toggle-bg:#fff;
  --primary-bg: #f2f5fa;
  --light-bg: linear-gradient(0deg, #55A6B9 0%, #FBFCFE 100%);
  --navbar-bg: linear-gradient(90deg, rgba(185,239,255,1) 0%, rgba(27,101,114,1) 100%);
  --footer-bg: #1b6572;
  --dropdown-bg: #1b6572c5;
  --language-switcher-bg: #1b6572c5;
  --bg-image: url("../../public/images/newback.png");
  --bg-image2: url("../../public/images/projectbg.png");
  --paragraph-color: black;
  /* contact button */
  --contact-button-bg: #1b6572ad;
  /* about page bg */
  --about-bg: linear-gradient(
    170deg,
    #1b6572 15.88%,
    #f2f5fa 16%,
    #f2f5fa 64%,
    #1b6572 64%
  );
  --about-title-shadow: inset 8px 8px 8px #12434c, inset -8px -8px 8px #1a5661;
  /* service */
  --service-shadow: none;
  --service-title: white;
  --service-p: #1b6572;
  --service-bg: #1b6572;
  --service-paragraph: black;
  --service-header: black;
  --service-service: white;
  /* contact page */
  --contact-element-bg: #55a4b4;
  --contact-shadow-input: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #ffffff;
  --contact-shadow-div: inset 8px 8px 8px #cbced1, inset 0px -8px 8px #ffffff;
  --contact-text-label: black;
  --contact-text-header: black;
  --calendar-input:black;
  /* blog */
  --blog-a: black;
  --blog-header: black;
  --blog-content-text:black;
  /* projects */
  --option-bg:#f2f5fa;
  --project-title-p: #1b6572;
  --project-title-bg: linear-gradient(
    100deg,
    rgba(155, 239, 255, 1) 0%,
    rgba(27, 101, 114, 1) 100%
  );
  --project-border: #7acbdb;
  /* price return */
  --price-paragraph: #1b6572;
  --table-bg: #f2f5fa;
  --return-img: url("../../public/images/roi_geo.jpg");
  /* spinner */
  --spinner-bg:#ffffff;
  --spinner: url("../../public/images/giffspinerlight1.gif");
  /* ad */
  --ad-bg:#f2f5fa;
  --ad-color:black;
}
[data-theme="darkMode"] {
  --round-bg:#333333;
  --toggle-bg:#333333;
  --light-bg: #282c34;
  --primary-bg: #282c34;
  --navbar-bg:#20232a;
  --footer-bg: #20232a;
  --dropdown-bg: #20232acc;
  --language-switcher-bg: #20232acc;
  --bg-image: url("../../public/images/newback1.png");
  --bg-image2: url("../../public/images/newback2.png");
  --paragraph-color: #ffffff;
  /* contact button */
  --contact-button-bg: #20232acc;
  /* about page bg*/
  --about-bg: linear-gradient(
    170deg,
    #20232a 15.88%,
    #282c34 16%,
    #282c34 64%,
    #20232a 64%
  );
  --about-title-shadow: inset 8px 8px 8px #15171c, inset -8px -8px 8px #6a6c71;
  /* services  */
  --service-shadow: inset 8px 8px 8px #15171c, inset -8px -8px 8px #6a6c71;
  --service-title: white;
  --service-p: white;
  --service-bg: none;
  --service-paragraph: white;
  --service-header: linear-gradient(
    90deg,
    rgba(27, 101, 114, 1) 0%,
    rgba(185, 239, 255, 1) 100%
  );
  --service-service: #20232a;
  /* contact page */
  --contact-element-bg: #33373f;
  --contact-shadow-input: inset 8px 8px 8px #1a1d22, inset -8px -8px 8px #6a6c71;
  --contact-shadow-div: inset 8px 8px 8px #1a1d22, inset 0px -8px 8px #1a1d22;
  --contact-text-label: white;
  --contact-text-header: white;
  --calendar-input:white;
  /* blog */
  --blog-a: white;
  --blog-header: white;
  --blog-content-text:white;
  /* projects */
  --option-bg:#282c34;
  --project-title-p: white;
  --project-title-bg: linear-gradient(
    100deg,
    rgba(155, 239, 255, 1) 0%,
    rgba(27, 101, 114, 1) 100%
  );
  --project-border: #7acbdb;
  /* price return */
  --price-paragraph: #b9efff;
  --table-bg: #20232a;
  --return-img: url("../../public/images/roi_geo_night.jpg");
  /* spinner */
  --spinner-bg:#282C34;
  --spinner: url("../../public/images/giffspiner1.gif");
  /* ad */
  --ad-bg:#282c34;
  --ad-color:white;

}
</style>
