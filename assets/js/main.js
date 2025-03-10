// SWUP Init
// const swup = new Swup();

// swup.hooks.on('page:view', () => {
//   initAnimations();
// });

// Lenis Init
document.addEventListener('DOMContentLoaded', function () {
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smooth: true, 
    smoothTouch: true, 
    direction: 'vertical',
    gestureDirection: 'vertical',
    wheelMultiplier: 1, 
    touchMultiplier: 2, 
    infinite: false 
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);

  window.lenis = lenis;

  // Smooth Scroll for Anchor Links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        lenis.scrollTo(targetElement, {
          offset: 0, // Sesuaikan offset jika ada navbar
          duration: 1.5,
          easing: (t) => 1 - Math.pow(1 - t, 4),
        });
      }
    });
  });
});



// ALPINE.JS
document.addEventListener('alpine:init', () => {
  
  // Drawer
  Alpine.data('drawer', () => ({
      drawerOpen: false,
      isDisabled: false, 
      setDrawerState(state) {
          if (this.isDisabled) return;

          this.isDisabled = true;
          this.drawerOpen = state;

          setTimeout(() => {
              this.isDisabled = false;
          }, 1000);
      },

      init() {
        gsap.set('.navlinks li', { autoAlpha: 0, y: 20 });

        this.$watch('drawerOpen', (value) => {
            if (value) {
                lenis.stop()
                document.documentElement.style.overflow = 'hidden';
                gsap.to('.navlinks li', { 
                    y: 0, 
                    autoAlpha: 1,
                    duration: 0.5, 
                    stagger: 0.05,
                    delay: 0.5,
                    ease: 'power2.out'
                });
            } else {
                lenis.start()
                document.documentElement.style.overflow = ''; 
                gsap.to('.navlinks li', { 
                    y: 20,
                    autoAlpha: 0,
                    duration: 0.3, 
                    ease: 'power2.in'
                });
            }
        });
      }
  }));
});

// **Fungsi GSAP untuk animasi halaman**
function initAnimations() {
  gsap.registerPlugin(ScrollTrigger);

  // Reset ScrollTrigger agar tidak bertumpuk
  ScrollTrigger.getAll().forEach(trigger => trigger.kill());

  // **Ganti Warna Navbar Berdasarkan Section**
  gsap.utils.toArray("[data-bg-color]").forEach(section => {
    ScrollTrigger.create({
      trigger: section,
      start: "top 80rem",
      end: "bottom 80rem",
      onEnter: () => changeDataColor(section),
      onEnterBack: () => changeDataColor(section),
    });
  });

  function changeDataColor(element) {
    const navbar = document.querySelector(".navbar");
    if (navbar) {
      const color = element.getAttribute("data-bg-color");
      navbar.setAttribute("data-apply-color", color);
    }
  }

  // **Wrap Text dengan Span untuk Animasi Warna**
  function wrapTextWithSpan(selector) {
    document.querySelectorAll(selector).forEach((element) => {
      let newContent = "";
      element.childNodes.forEach((node) => {
        if (node.nodeType === Node.TEXT_NODE) {
          newContent += node.textContent.split("").map(char =>
            char.trim() ? `<span>${char}</span>` : char
          ).join("");
        } else if (node.nodeType === Node.ELEMENT_NODE && node.tagName === "BR") {
          // Ambil atribut-atributnya
          const attributes = Array.from(node.attributes)
            .map(attr => `${attr.name}="${attr.value}"`)
            .join(" ");
          // Buat ulang <br> dengan atributnya
          newContent += `<br${attributes ? " " + attributes : ""}>`;
        }
      });
      element.innerHTML = newContent;
    });
  }
  
  function animateTextColor(selector, startColor, endColor) {
    gsap.fromTo(`${selector} span`, 
      { color: startColor },
      {
        color: endColor,
        stagger: 0.2,
        scrollTrigger: {
          trigger: selector,
          start: "top 85%",
          end: "top 10%",
          scrub: true
        }
      }
    );
  }
  

  // **Animasi Fade Up**
  function fadeUpAnimation(className = ".fadeUp", delay = 0, duration = 8, distance = 20) {
    gsap.utils.toArray(className).forEach((el) => {
      gsap.fromTo(el, 
        { opacity: 0, y: distance },
        { opacity: 1, y: 0, duration, delay, ease: "power2.out",
          scrollTrigger: {
            trigger: el,
            start: "top 80%",
            end: "top 60%",
            scrub: true,
            toggleActions: "play none none reverse"
          }
        }
      );
    });
  }
  fadeUpAnimation();
  
  document.addEventListener("DOMContentLoaded", fadeUpAnimation);

  // Pages
  const mainElement = document.querySelector("main");

  // Page: HOME
  if (mainElement.classList.contains("p-home")) {
    wrapTextWithSpan("#about-desc");
    animateTextColor("#about-desc", "#ffffff4d", "#ffffff");

    wrapTextWithSpan("#company-desc p:nth-child(1)");
    wrapTextWithSpan("#company-desc p:nth-child(2)");
    animateTextColor("#company-desc", "#ffffff4d", "#ffffff");

    wrapTextWithSpan("#attempt-desc");
    animateTextColor("#attempt-desc", "#ffffff4d", "#ffffff");

    // Layer Shift
    gsap.utils.toArray(".layer-shift").forEach((layer) => {
      gsap.to(layer.children, {
        height: "0%",
        duration: 0.5,
        ease: "power2.out",
        stagger: {
          amount: 0.15,
          from: "end"
        },
        scrollTrigger: {
          trigger: layer,
          start: "top 60%",
          end: "top 10%",
          scrub: true
        }
      });
    });
    
    // Title Change Color
    gsap.utils.toArray(".sec-title").forEach((title) => {
      const span = title.querySelector("h2 > span");
      const strokeColor = title.dataset.stroke || "#A7A04F";
      const fillColor = title.dataset.fill || "#A7A04F";
    
      gsap.to(span, {
        "--title-stroke": strokeColor,
        "--title-fill": fillColor,
        duration: 0.5,
        ease: "power2.out",
        scrollTrigger: {
          trigger: title,
          start: "top 9%",
          end: "top 5%",
          scrub: true,
        }
      });
    });

    // Running Text
    const container = document.querySelector(".running-txt");
    const elements = gsap.utils.toArray(".running-txt div");
    elements.forEach((el, i) => {
      const isLeft = i % 2 === 0; 
      const moveOffset = el.offsetWidth * 0.4; 

      const startX = isLeft ? -moveOffset : moveOffset;
      const endX = isLeft ? moveOffset / 2 : -moveOffset / 2; 

      gsap.fromTo(
        el,
        { x: startX },
        {
          x: endX,
          ease: "none",
          scrollTrigger: {
            trigger: container, 
            start: "top bottom", 
            end: "bottom top",
            scrub: true,
          },
        }
      );
    });

    // Service Roll
    gsap.to(".service-roll-text li", {
      scrollTrigger: {
        trigger: ".service-roll-wrapper",
        start: "top center-=100",
        end: "bottom bottom+=400",
        scrub: 1,
        markers: true
      },
      keyframes: [
        { y: 0, z: 0, rotateX: 0, ease: "none" },  
        { y: -400, z: -10, rotateX: 80, ease: "none" } 
      ],
      stagger: (index) => index * 1.5 // Memberikan delay berdasarkan indeks
    });

    // Attempt Imgs Parallax
    const images = gsap.utils.toArray(".imgs-wrapper img");

    images.forEach((img, i) => {
      const movement = (i + 1) * 30;

      gsap.fromTo(
        img,
        { y: -movement },
        {
          y: movement,
          ease: "none",
          scrollTrigger: {
            trigger: img,
            start: "top bottom",
            end: "bottom top",
            scrub: true,
          },
        }
      );
    });
  }

  if (mainElement.classList.contains("p-about")) {
    wrapTextWithSpan("#about-desc");
    animateTextColor("#about-desc", "#ffffff4d", "#ffffff");

    // Running Text
    const container = document.querySelector(".running-txt");
    const elements = gsap.utils.toArray(".running-txt div");
    elements.forEach((el, i) => {
      const isLeft = i % 2 === 0; 
      const moveOffset = el.offsetWidth * 1; 

      const startX = isLeft ? -moveOffset : moveOffset;
      const endX = isLeft ? moveOffset / 2 : -moveOffset / 2; 

      gsap.fromTo(
        el,
        { x: startX },
        {
          x: endX,
          ease: "none",
          scrollTrigger: {
            trigger: container, 
            start: "top bottom", 
            end: "bottom top",
            scrub: true,
          },
        }
      );
    });
  }

  if (mainElement.classList.contains("p-service")) {
    wrapTextWithSpan("#service-desc");
    animateTextColor("#service-desc", "#ffffff4d", "#ffffff");

    // Running Text
    const container = document.querySelector(".running-txt");
    const elements = gsap.utils.toArray(".running-txt div");
    elements.forEach((el, i) => {
      const isLeft = i % 2 === 0; 
      const moveOffset = el.offsetWidth * 0.4; 

      const startX = isLeft ? -moveOffset : moveOffset;
      const endX = isLeft ? moveOffset / 2 : -moveOffset / 2; 

      gsap.fromTo(
        el,
        { x: startX },
        {
          x: endX,
          ease: "none",
          scrollTrigger: {
            trigger: container, 
            start: "top bottom", 
            end: "bottom top",
            scrub: true,
          },
        }
      );
    });
  }

  setTimeout(() => {
    ScrollTrigger.refresh();
  }, 500);
}

document.addEventListener("DOMContentLoaded", () => {
  initAnimations();
});