window.AudioContext =
  window.AudioContext || window.webkitAudioContext || window.mozAudioContext;

$(document).ready(function () {
  $("#playListContainer").audioControls({
    autoPlay: true,
    timer: "increment",
    onAudioChange: function (response) {
      $(".songPlay").text(response.title);

      var audio = this._audio;
      var ctx = new AudioContext();
      var analyser = ctx.createAnalyser();
      var audioSrc = ctx.createMediaElementSource(audio);
      // we have to connect the MediaElementSource with the analyser
      audioSrc.connect(analyser);
      analyser.connect(ctx.destination);
      // we could configure the analyser: e.g. analyser.fftSize (for further infos read the spec)
      // analyser.fftSize = 64;
      // frequencyBinCount tells you how many values you'll receive from the analyser
      var frequencyData = new Uint8Array(analyser.frequencyBinCount);

      // we're ready to receive some data!
      var canvas = document.getElementById("canvas"),
        cwidth = canvas.width,
        cheight = canvas.height - 2,
        meterWidth = 4, //width of the meters in the spectrum
        gap = 1, //gap between meters
        capHeight = 2,
        capStyle = "#AAA",
        meterNum = 800 / (10 + 2), //count of the meters
        capYPositionArray = []; ////store the vertical position of hte caps for the preivous frame
      (ctx = canvas.getContext("2d")),
        (gradient = ctx.createLinearGradient(0, 0, 0, 130));
      gradient.addColorStop(1, "#0f0");
      gradient.addColorStop(0.5, "#ff0");
      gradient.addColorStop(0, "#f00");
      // loop
      function renderFrame() {
        var array = new Uint8Array(analyser.frequencyBinCount);
        analyser.getByteFrequencyData(array);
        var step = Math.round(array.length / meterNum); //sample limited data from the total array
        ctx.clearRect(0, 0, cwidth, cheight);
        for (var i = 0; i < meterNum; i++) {
          var value = array[i * step];
          if (capYPositionArray.length < Math.round(meterNum)) {
            capYPositionArray.push(value);
          }
          ctx.fillStyle = capStyle;
          //draw the cap, with transition effect
          if (value < capYPositionArray[i]) {
            ctx.fillRect(
              i * 4.65,
              cheight - --capYPositionArray[i],
              meterWidth,
              capHeight
            );
          } else {
            ctx.fillRect(i * 4.65, cheight - value, meterWidth, capHeight);
            capYPositionArray[i] = value;
          }
          ctx.fillStyle = gradient; //set the filllStyle to gradient for a better look
          ctx.fillRect(
            i * 4.65 /*meterWidth+gap*/,
            cheight - value + capHeight,
            meterWidth,
            cheight
          ); //the meter
        }
        requestAnimationFrame(renderFrame);
      }
      renderFrame();
    },
    onVolumeChange: function (vol) {
      var obj = $(".volume");
      if (vol <= 0) {
        obj.attr("class", "volume mute");
      } else if (vol <= 33) {
        obj.attr("class", "volume volume1");
      } else if (vol > 33 && vol <= 66) {
        obj.attr("class", "volume volume2");
      } else if (vol > 66) {
        obj.attr("class", "volume volume3");
      } else {
        obj.attr("class", "volume volume1");
      }
    },
  });
});
