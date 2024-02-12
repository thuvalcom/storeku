/* Pinegrow Interactions, do not remove */ (function () {
  try {
    if (!document.documentElement.hasAttribute("data-pg-ia-disabled")) {
      window.pgia_small_mq =
        typeof pgia_small_mq == "string" ? pgia_small_mq : "(max-width:767px)";
      window.pgia_large_mq =
        typeof pgia_large_mq == "string" ? pgia_large_mq : "(min-width:768px)";
      var style = document.createElement("style");
      var pgcss =
        'html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}';
      if (
        document.documentElement.hasAttribute("data-pg-id") &&
        document.documentElement.hasAttribute("data-pg-mobile")
      ) {
        pgia_small_mq = "(min-width:0)";
        pgia_large_mq = "(min-width:99999px)";
      }
      pgcss +=
        "@media " +
        pgia_small_mq +
        '{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}';
      pgcss +=
        "@media " +
        pgia_large_mq +
        '{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}';
      style.innerHTML = pgcss;
      document.querySelector("head").appendChild(style);
    }
  } catch (e) {
    console && console.log(e);
  }
})();
