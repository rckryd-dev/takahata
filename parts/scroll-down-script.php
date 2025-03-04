<script>
  const pointerScrollDown = document.getElementById('pointerScrollDown');

  gsap.set(pointerScrollDown, {
    x: window.innerWidth / 2 - 50,
    y: window.innerHeight * 0.8 - 50
    });

  // Spin terus menerus
  gsap.to(pointerScrollDown, {
    rotation: 360,
    repeat: -1,
    ease: "linear",
    duration: 10
  });

  // Ikuti mouse
  window.addEventListener('mousemove', (e) => {
    gsap.to(pointerScrollDown, {
      x: e.clientX - 50, 
      y: e.clientY - 50,
      duration: 1,
      ease: "power3.out"
    });
  });

  window.addEventListener('scroll', () => {
    if (window.scrollY > 2) {
      gsap.to(pointerScrollDown, {
        scale: 0,
        duration: 0.5,
      });
    } else {
      gsap.to(pointerScrollDown, {
        scale: 1,
        duration: 0.5,
      });
    }
  });
</script>