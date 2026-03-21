const featured = document.querySelector("[data-featured]");

if (featured) {
  const featuredImg    = featured.querySelector("[data-featured-img]");
  const featuredBreed  = featured.querySelector("[data-featured-breed]");
  const featuredGender = featured.querySelector("[data-featured-gender]");
  const featuredInfo   = featured.querySelector("[data-featured-info]");

  const cards = document.querySelectorAll(".p-search__card");

  cards.forEach((card) => {
    card.addEventListener("click", () => {
      document.querySelectorAll(".p-search__item").forEach((item) => {
        item.classList.remove("is-active");
      });
      card.closest(".p-search__item").classList.add("is-active");

      const img    = card.dataset.img;
      const breed  = card.dataset.breed;
      const gender = card.dataset.gender;
      const info   = card.dataset.info ? card.dataset.info.split(",") : [];

      if (img)    featuredImg.src = img;
      if (breed)  featuredBreed.textContent  = breed;
      if (gender) featuredGender.textContent = gender;

      featuredInfo.innerHTML = info.map((i) => `<li>${i}</li>`).join("");
    });
  });
}
