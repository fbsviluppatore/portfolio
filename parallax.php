
<script>
  var scene = document.getElementById("scene");
  var parallax = new Parallax(scene);


    TweenMax.from(".leaves .layer:nth-child(1)", 2, {
      delay: 0.8,
      opacity: 0,
      y: 800,
      ease: Expo.easeInOut
    })

    TweenMax.from(".leaves .layer:nth-child(2)", 2, {
      delay: 0.7,
      opacity: 0,
      y: 800,
      ease: Expo.easeInOut
    })

    TweenMax.from(".leaves .layer:nth-child(3)", 2, {
      delay: 0.6,
      opacity: 0,
      y: 800,
      ease: Expo.easeInOut
    })

    TweenMax.from(".leaves .layer:nth-child(4)", 2, {
      delay: 0.9,
      opacity: 0,
      y: -800,
      ease: Expo.easeInOut
    })

    TweenMax.from(".leaves .layer:nth-child(5)", 2, {
      delay: 0.8,
      opacity: 0,
      y: 800,
      ease: Expo.easeInOut
    })
    TweenMax.from(".leaves .layer:nth-child(6)", 2, {
      delay: 0.7,
      opacity: 0,
      y: -800,
      ease: Expo.easeInOut
    })
    TweenMax.from(".leaves .layer:nth-child(7)", 2, {
      delay: 0.7,
      opacity: 0,
      y: -800,
      ease: Expo.easeInOut
    })
    TweenMax.from(".leaves .layer:nth-child(8)", 2, {
      delay: 0.9,
      opacity: 0,
      y: -800,
      ease: Expo.easeInOut
    })
    TweenMax.from(".leaves .layer:nth-child(9)", 2, {
      delay: 0.6,
      opacity: 0,
      y: -800,
      ease: Expo.easeInOut
    })



</script>