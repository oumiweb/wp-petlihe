const observerOptions = { threshold: 0, rootMargin: "0px 0px -20px 0px" };

// サービスセクション：見出しが見えたら内部の全ラインを順番に再生
const serviceSection = document.querySelector(".p-service");
if (serviceSection) {
  const serviceHeading = serviceSection.querySelector(".p-service__heading");
  const serviceLines = serviceSection.querySelectorAll(".c-deco-line");

  const serviceObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        serviceLines.forEach((line, i) => {
          setTimeout(() => line.classList.add("is-animated"), i * 250);
        });
        serviceObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  if (serviceHeading) serviceObserver.observe(serviceHeading);
}

// サービス以外の .c-deco-line は個別に監視
const otherLines = document.querySelectorAll(".c-deco-line");
if (otherLines.length > 0) {
  const lineObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-animated");
        lineObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  otherLines.forEach((line) => {
    if (!serviceSection?.contains(line)) {
      lineObserver.observe(line);
    }
  });
}
