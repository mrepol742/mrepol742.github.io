window.onload = function() {
    setTimeout(function() {
      if ( typeof(window.google_jobrunner) === "undefined" ) {
        console.log("ad blocker installed");
      } else {
        console.log("no ad blocking found.");
      }
    }, 10000);
  };