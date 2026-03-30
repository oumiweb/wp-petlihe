const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -20px 0px" };

// ご家族募集中グリッド: グリッド全体が見えたら左から1枚ずつ1秒差で表示
const welcomeGrid = document.querySelector(".p-welcome__grid");
if (welcomeGrid) {
  const gridObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const items = entry.target.querySelectorAll(".js-fade");
        items.forEach((item, i) => {
          setTimeout(() => item.classList.add("is-animated"), i * 500);
        });
        gridObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  gridObserver.observe(welcomeGrid);
}
