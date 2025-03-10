let maxRotation = 0; // Akan diatur setelah tekstur dimuat

// Scene setup
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(40, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.set(0, 0, 4);

const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
renderer.setSize(window.innerWidth, window.innerHeight);

// Pastikan elemen .service-roll ada
const serviceRoll = document.querySelector('.service-roll');
if (serviceRoll) {
    serviceRoll.appendChild(renderer.domElement);
}

// Load texture
const textureLoader = new THREE.TextureLoader();
textureLoader.load('../img/service-list.jpg', function(texture) {
  texture.wrapS = THREE.ClampToEdgeWrapping;
  texture.wrapT = THREE.ClampToEdgeWrapping;
  texture.repeat.set(1, 1); // Tidak diulang

  // Pastikan gambar sudah termuat sebelum mendapatkan dimensinya
  const img = new Image();
  img.src = texture.image.src;
  img.onload = function () {
    const imgWidth = img.width;
    const imgHeight = img.height;

    // Hitung rasio antara tinggi scroll dan lebar tekstur
    const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
    maxRotation = (imgWidth / imgHeight) * Math.PI; // Rotasi maksimal berdasarkan aspek rasio gambar

    console.log("Max Rotation:", maxRotation);

    // Buat objek silinder
    const geometry = new THREE.CylinderGeometry(1, 1, 1.5, 50, 1, false);
    const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.DoubleSide });
    const cylinder = new THREE.Mesh(geometry, material);
    cylinder.rotation.z = Math.PI / 2; // Posisi horizontal
    scene.add(cylinder);

    // Efek scroll menggulung tanpa looping
    window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        const rotation = -(scrollY / scrollHeight) * maxRotation;
        cylinder.rotation.x = rotation;
    });

    animate();
  };
});

// Animation loop
function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}

// Handle resize
window.addEventListener('resize', function() {
  renderer.setSize(window.innerWidth, window.innerHeight);
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
});
