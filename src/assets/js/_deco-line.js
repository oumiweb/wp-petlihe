const observerOptions = { threshold: 0, rootMargin: "0px 0px -20px 0px" };

// ページ表示時にビューポート内にある要素を5秒後にアニメーション
// ※Observerより先に登録し、ビューポート内の要素はObserverから除外する
const inViewportLines = new Set();
window.addEventListener("load", () => {
  document.querySelectorAll(".c-deco-line").forEach((line) => {
    const rect = line.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      inViewportLines.add(line);
    }
  });

  setTimeout(() => {
    inViewportLines.forEach((line) => line.classList.add("is-animated"));
  }, 1000);
});

// サービスセクション：見出しが見えたら内部の全ラインを順番に再生
const serviceSection = document.querySelector(".p-service");
if (serviceSection) {
  const serviceHeading = serviceSection.querySelector(".p-service__heading");
  const serviceLines = serviceSection.querySelectorAll(".c-deco-line");

  const serviceObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        serviceLines.forEach((line, i) => {
          if (!inViewportLines.has(line)) {
            setTimeout(() => line.classList.add("is-animated"), i * 250);
          }
        });
        serviceObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  if (serviceHeading) serviceObserver.observe(serviceHeading);
}

// スクロールで入ってくる要素を監視（ビューポート内の要素は除外）
const otherLines = document.querySelectorAll(".c-deco-line");
if (otherLines.length > 0) {
  const lineObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !inViewportLines.has(entry.target)) {
        entry.target.classList.add("is-animated");
        lineObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  otherLines.forEach((line) => {
    if (!serviceSection?.contains(line) && !inViewportLines.has(line)) {
      lineObserver.observe(line);
    }
  });
}
