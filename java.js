// Mobile menu toggle
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.querySelector(".md\\:hidden");
  // In a real implementation, you would add click handler for mobile menu

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 70,
          behavior: "smooth",
        });
      }
    });
  });

  // Car search form submission
  const searchForm = document.querySelector("section:nth-of-type(3) button");
  if (searchForm) {
    searchForm.addEventListener("click", function (e) {
      e.preventDefault();
      alert(
        "Fitur pencarian sedang dikembangkan. Terima kasih atas kesabaran Anda."
      );
    });
  }

  // Car valuation form submission
  const valuationForm = document.querySelector("section:nth-of-type(7) button");
  if (valuationForm) {
    valuationForm.addEventListener("click", function (e) {
      e.preventDefault();
      alert(
        "Permintaan penilaian mobil Anda telah terkirim. Tim kami akan menghubungi Anda dalam 1x24 jam."
      );
    });
  }

  // Contact form submission
  const contactForm = document.querySelector("section:nth-of-type(9) button");
  if (contactForm) {
    contactForm.addEventListener("click", function (e) {
      e.preventDefault();
      alert(
        "Pesan Anda telah terkirim. Terima kasih telah menghubungi AutoGem."
      );
    });
  }
});

const menuBtn = document.querySelector("nav button");
const menu = document.querySelector("nav .md\\:flex");

menuBtn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});

document.addEventListener("DOMContentLoaded", () => {
  const loadMoreBtn = document.querySelector("#loadMore");
  const hiddenCars = document.querySelectorAll(".more-cars");

  loadMoreBtn.addEventListener("click", () => {
    hiddenCars.forEach((car) => car.classList.remove("hidden"));
    loadMoreBtn.style.display = "none"; // sembunyikan tombol setelah diklik
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const loadMoreBtn = document.querySelector("#loadMore");
  const hiddenCars = document.querySelectorAll(".more-cars");
  let currentIndex = 0; // mulai dari mobil ke-0

  loadMoreBtn.addEventListener("click", () => {
    // tampilkan 3 mobil berikutnya
    for (let i = 0; i < 6; i++) {
      if (currentIndex < hiddenCars.length) {
        const car = hiddenCars[currentIndex];
        car.classList.remove("hidden");

        // trigger animasi fade-in
        setTimeout(() => {
          car.classList.add("show");
        }, 50);

        currentIndex++;
      }
    }

    // kalau semua mobil sudah tampil, sembunyikan tombol
    if (currentIndex >= hiddenCars.length) {
      loadMoreBtn.style.display = "none";
    }
  });
});

function openModal(id) {
  document.getElementById(id).classList.remove("hidden");
}
function closeModal(id) {
  document.getElementById(id).classList.add("hidden");
}

// Fungsi buka modal
function openModal(id) {
  document.getElementById(id).classList.remove("hidden");
}

// Fungsi tutup modal
function closeModal(id) {
  document.getElementById(id).classList.add("hidden");
}

// aaaaa
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: "#2563eb",
        secondary: "#64748b",
        dark: "#1e293b",
        accent: "#f59e0b",
      },
    },
  },
};

//scrollll
let lastScroll = 0;
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll > lastScroll && currentScroll > 50) {
    // Scroll ke bawah -> sembunyikan navbar
    navbar.classList.add("-translate-y-full");
  } else {
    // Scroll ke atas -> tampilkan navbar
    navbar.classList.remove("-translate-y-full");
  }

  lastScroll = currentScroll;
});


