<script>
  gsap.registerPlugin(ScrollTrigger);

  const pointerScrollDown = document.getElementById('pointerScrollDown');
  const pointerScrollDownSpin = document.querySelector('#pointerScrollDown .spin');

  function setInitialPosition() {
    const elemWidth = pointerScrollDown.offsetWidth;
    const elemHeight = pointerScrollDown.offsetHeight;

    if (window.innerWidth <= 767) {
      pointerScrollDown.style.position = "absolute";
      gsap.set(pointerScrollDown, {
        x: (window.innerWidth / 2) - (elemWidth / 2),
        y: (window.innerHeight * 0.8) - (elemHeight / 2) + window.scrollY
      });
    } else {
      pointerScrollDown.style.position = "fixed";
      gsap.set(pointerScrollDown, {
        x: (window.innerWidth / 2) - (elemWidth / 2),
        y: (window.innerHeight * 0.8) - (elemHeight / 2)
      });
    }
  }

  setInitialPosition();

  // Spin animasi di child .spin
  gsap.to(pointerScrollDownSpin, {
    rotation: 360,
    repeat: -1,
    ease: "linear",
    duration: 10
  });

  // Mouse follow hanya di desktop (>767px)
  function handleMouseMove(e) {
    if (window.innerWidth > 767) {
      const elemWidth = pointerScrollDown.offsetWidth;
      const elemHeight = pointerScrollDown.offsetHeight;

      gsap.to(pointerScrollDown, {
        x: e.clientX - (elemWidth / 2),
        y: e.clientY - (elemHeight / 2),
        duration: 1,
        ease: "power3.out"
      });
    }
  }
  window.addEventListener('mousemove', handleMouseMove);

  // Scale out saat scroll > 2px
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

  // ScrollTrigger biar update posisi Y saat scroll di mobile
  ScrollTrigger.create({
    start: 0,
    end: "max",
    onUpdate: () => {
      if (window.innerWidth <= 767) {
        const elemHeight = pointerScrollDown.offsetHeight;
        gsap.set(pointerScrollDown, {
          y: (window.innerHeight * 0.8) - (elemHeight / 2) + window.scrollY
        });
      }
    }
  });

  // Update posisi saat resize
  window.addEventListener('resize', () => {
    setInitialPosition();
  });
</script>
