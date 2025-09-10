// ==================================================================================================

// allSideMenu.forEach((item) => {
//   const li = item.parentElement;

//   item.addEventListener("click", function () {
//     allSideMenu.forEach((i) => {
//       i.parentElement.classList.remove("active");
//     });
//     li.classList.add("active");
//   });
// });

// // TOGGLE SIDEBAR
// const menuBar = document.querySelector('#content nav .bx.bx-menu');
// const sidebar = document.getElementById('sidebar');

// menuBar.addEventListener('click', function () {
// 	sidebar.classList.toggle('hide');
// })

// const searchButton = document.querySelector(
//   "#content nav form .form-input button"
// );
// const searchButtonIcon = document.querySelector(
//   "#content nav form .form-input button .bx"
// );
// const searchForm = document.querySelector("#content nav form");

// searchButton.addEventListener("click", function (e) {
//   if (window.innerWidth < 576) {
//     e.preventDefault();
//     searchForm.classList.toggle("show");
//     if (searchForm.classList.contains("show")) {
//       searchButtonIcon.classList.replace("bx-search", "bx-x");
//     } else {
//       searchButtonIcon.classList.replace("bx-x", "bx-search");
//     }
//   }
// });

// if (window.innerWidth < 768) {
//   sidebar.classList.add("hide");
// } else if (window.innerWidth > 576) {
//   searchButtonIcon.classList.replace("bx-x", "bx-search");
//   searchForm.classList.remove("show");
// }

// window.addEventListener("resize", function () {
//   if (this.innerWidth > 576) {
//     searchButtonIcon.classList.replace("bx-x", "bx-search");
//     searchForm.classList.remove("show");
//   }
// });

// Ditambah Dari sini data CHART
// Fungsi untuk memuat data dari file JSON

document.addEventListener("DOMContentLoaded", function () {
  const wrapper = document.querySelector(".wrapper");
  const carousel = document.querySelector(".carousel");
  const firstCardWidth = carousel.querySelector(".card").offsetWidth;
  const arrowBtns = document.querySelectorAll(".wrapper i");
  const carouselChildrens = [...carousel.children];
  // Burger Option
  const burger = document.querySelector(".burger");
  const navbar = document.querySelector(".navbar");

  burger.addEventListener("click", () => {
    navbar.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
  });

  // Navigasi
  const dataLink = document.getElementById("data-link");
  const tableSection = document.getElementById("table");
  const dashboardLink = document.getElementById("dashboard-link");
  const dashboardSection = document.getElementById("dashboard");

  dataLink.addEventListener("click", function (event) {
    event.preventDefault(); // Mencegah perilaku default dari link
    // Menampilkan bagian tabel dan menyembunyikan bagian lainnya
    tableSection.style.display = "block";
    document
      .querySelectorAll("main > section:not(#table)")
      .forEach(function (section) {
        section.style.display = "none";
      });
  });

  dashboardLink.addEventListener("click", function (event) {
    event.preventDefault(); // Mencegah perilaku default dari link
    // Menampilkan bagian tabel dan menyembunyikan bagian lainnya
    dashboardSection.style.display = "block";
    document
      .querySelectorAll("main > section:not(#dashboard)")
      .forEach(function (section) {
        section.style.display = "none";
      });
  });
  let isDragging = false,
    isAutoPlay = true,
    startX,
    startScrollLeft,
    timeoutId;

  // Get the number of cards that can fit in the carousel at once
  let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

  // Insert copies of the last few cards to beginning of carousel for infinite scrolling
  carouselChildrens
    .slice(-cardPerView)
    .reverse()
    .forEach((card) => {
      carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

  // Insert copies of the first few cards to end of carousel for infinite scrolling
  carouselChildrens.slice(0, cardPerView).forEach((card) => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
  });

  // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
  carousel.classList.add("no-transition");
  carousel.scrollLeft = carousel.offsetWidth;
  carousel.classList.remove("no-transition");

  // Add event listeners for the arrow buttons to scroll the carousel left and right
  arrowBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      carousel.scrollLeft +=
        btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
  });

  const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
  };

  const dragging = (e) => {
    if (!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
  };

  const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
  };

  const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if (carousel.scrollLeft === 0) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
      carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if (
      Math.ceil(carousel.scrollLeft) ===
      carousel.scrollWidth - carousel.offsetWidth
    ) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.offsetWidth;
      carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) autoPlay();
  };

  const autoPlay = () => {
    if (window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
  };
  autoPlay();

  carousel.addEventListener("mousedown", dragStart);
  carousel.addEventListener("mousemove", dragging);
  document.addEventListener("mouseup", dragStop);
  carousel.addEventListener("scroll", infiniteScroll);
  wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
  wrapper.addEventListener("mouseleave", autoPlay);
});

document.addEventListener("DOMContentLoaded", function () {
  const rowsPerPage = 10;
  let currentPage = 1;
  let totalPages = 1;
  let data = [];
  let filteredData = [];

  fetch("./RekapDataKI.json")
    .then((response) => response.json())
    .then((jsonData) => {
      data = jsonData;
      filteredData = data;
      totalPages = Math.ceil(data.length / rowsPerPage);
      displayPage(currentPage);
    })
    .catch((error) => console.error("Error fetching data:", error));

  function displayPage(page) {
    const tableBody = document.querySelector("#RekapDataKI-table tbody");
    tableBody.innerHTML = "";

    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const pageData = data.slice(start, end);

    pageData.forEach((item) => {
      const row = document.createElement("tr");
      row.innerHTML = `
              <td>${item.No}</td>
              <td>${item.Tahun}</td>
              <td>${item.Hak_Cipta}</td>
              <td>${item.Paten}</td>
              <td>${item.Merek}</td>
              <td>${item.Buku_ISBN}</td>
              <td>${item.Buku_eISBN}</td>
          `;
      tableBody.appendChild(row);
    });

    document.getElementById(
      "page-info"
    ).textContent = `Page ${page} of ${totalPages}`;
    document.getElementById("prev").disabled = page === 1;
    document.getElementById("next").disabled = page === totalPages;
  }

  document.getElementById("prev").addEventListener("click", function () {
    if (currentPage > 1) {
      currentPage--;
      displayPage(currentPage);
    }
  });

  document.getElementById("next").addEventListener("click", function () {
    if (currentPage < totalPages) {
      currentPage++;
      displayPage(currentPage);
    }
  });

  document.getElementById("search").addEventListener("input", function (event) {
    const query = event.target.value.toLowerCase();
    filteredData = data.filter((item) => {
      return Object.values(item).some((value) =>
        value.toString().toLowerCase().includes(query)
      );
    });
    totalPages = Math.ceil(filteredData.length / rowsPerPage);
    currentPage = 1; // Reset ke halaman pertama setiap kali pencarian
    displayPage(currentPage);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  function fetchData(url, callback) {
    fetch(url)
      .then((response) => {
        if (!response.ok) {
          throw new Error("Network response was not ok " + response.statusText);
        }
        return response.json();
      })
      .then((data) => {
        console.log("Data loaded:", data); // Tambahkan log ini
        callback(data);
      })
      .catch((error) => console.error("Error loading data:", error));
  }

  // Doughnut Chart 1
  const doughnut1ctx = document.getElementById("doughnut1").getContext("2d");
  new Chart(doughnut1ctx, {
    type: "doughnut",
    data: {
      labels: ["Buyer", "Discount Hunter", "Royal Buyer"],
      datasets: [
        {
          label: "Total Customers by Type",
          data: [788, 695, 609],
          backgroundColor: [
            "rgb(124, 191, 125)",
            "rgb(34, 110, 30)",
            "rgb(34, 34, 34)",
          ],
          borderColor: [
            "rgba(124, 191, 125, 0.8)",
            "rgba(34, 110, 30, 0.8)",
            "rgba(34, 34, 34, 0.8)",
          ],
          hoverBackgroundColor: [
            "rgba(124, 191, 125, 0.7)",
            "rgba(34, 110, 30, 0.7)",
            "rgba(34, 34, 34, 0.7)",
          ],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "top",
          labels: {
            font: { size: 14 },
          },
        },
        tooltip: {
          callbacks: {
            label: function (tooltipItem) {
              return `${tooltipItem.label}: ${tooltipItem.raw}`;
            },
          },
        },
      },
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  // Line Chart
  const lineCtx = document.getElementById("lineChart").getContext("2d");
  new Chart(lineCtx, {
    type: "line",
    data: {
      labels: [
        "K1,2014",
        "K2, 2014",
        "K3, 2014",
        "K4, 2014",
        "K1, 2015",
        "K2, 2015",
        "K3, 2015",
        "K4, 2015",
        "K1, 2016",
        "K2, 2016",
        "K3, 2016",
        "K4, 2016",
        "K1, 2017",
        "K2, 2017",
        "K3, 2017",
        "K4, 2017",
      ],
      datasets: [
        {
          label: "Royal Buyer",
          backgroundColor: "rgb(34, 110, 30)",
          borderColor: "rgb(34, 110, 30, 1)",
          data: [
            81988989, 80083122, 86601961, 73532886, 59845573, 53687387,
            56905252, 37562782, 115512690, 127033339, 81220828, 100739376,
            173770316, 76615459, 117363898, 95512161,
          ],
        },
        {
          label: "Buyer",
          backgroundColor: "rgb(124, 191, 125)",
          borderColor: "rgb(124, 191, 125)",
          data: [
            42146534.29, 38960471.66, 43434069.03, 45398879.46, 37701435.21,
            35439018.55, 43338250.74, 48893304.37, 54569253.6, 50006688.33,
            47182921.75, 53851244.23, 76299477.29, 49672335.69, 65381652.7,
            56555675.31,
          ],
        },
        {
          label: "Diskon",
          backgroundColor: "rgb(34, 34, 34)",
          borderColor: "rgb(34, 34, 34, 1)",
          data: [
            -18816289.62, -11819324.96, -26809504.66, -30759837, -16196171.28,
            -13311986.47, -32941454.38, -13517143.02, -35345382.36,
            -19192834.75, -30616512.01, -21702652.05, -44887770.79,
            -58537857.09, -61042935, -20548990.24,
          ],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "top",
          labels: {
            font: { size: 14 },
          },
        },
        tooltip: {
          callbacks: {
            label: function (tooltipItem) {
              return `${tooltipItem.label}: ${tooltipItem.raw}`;
            },
          },
        },
      },
    },
  });
});

// Paten 2021 Chart
const patenChartCtx = document
  .getElementById("quantityChart")
  .getContext("2d");
new Chart(patenChartCtx, {
  type: "bar",
  data: {
    labels: ["Elektro", "Mesin", "Sipil", "Informatika"],
    datasets: [
      {
        label: "Jumlah",
        backgroundColor: "rgb(124, 191, 125)",
        data: [10, 3, 7, 8],
      },
      {
        label: "Tandatangan",
        backgroundColor: "rgba(34, 110, 30)",
        data: [1, 1, 1, 3],
      },
      {
        label: "Status Berjalan",
        backgroundColor: "rgb(34, 34, 34)",
        data: [1, 1, 1, 2],
      },
    ],
  },
  options: {
    indexAxis: "y",
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// Buku 2021 - 2023 Chart
const BukuChartCtx = document
  .getElementById("BukuChart")
  .getContext("2d");
new Chart(BukuChartCtx, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023"],
    datasets: [
      {
        label: "Buku (ISBN)",
        backgroundColor: "rgb(124, 191, 125)",
        data: [15, 8, 1],
      },
      {
        label: "Buku (e-ISBN",
        backgroundColor: "rgba(34, 110, 30)",
        data: [8, 8, 0],
      },
    ],
  },
  options: {
    indexAxis: "y",
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// Merek 2021 - 2022 Chart
const MerekChartCtx = document
  .getElementById("MerekChart")
  .getContext("2d");
new Chart(MerekChartCtx, {
  type: "bar",
  data: {
    labels: ["2016", "2018", "2020", "2021"],
    datasets: [
      {
        label: "Merek",
        backgroundColor: "rgb(124, 191, 125)",
        data: [1, 2, 1, 3],
      },
    ],
  },
  options: {
    indexAxis: "y",
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

// Merek 2021 - 2022 Chart
const CiptaChartCtx = document
  .getElementById("CiptaChart")
  .getContext("2d");
new Chart(CiptaChartCtx, {
  type: "bar",
  data: {
    labels: ["2021", "2022", "2023",],
    datasets: [
      {
        label: "Hak Cipta",
        backgroundColor: "rgb(124, 191, 125)",
        data: [45, 17, 8,],
      },
    ],
  },
  options: {
    indexAxis: "y",
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

