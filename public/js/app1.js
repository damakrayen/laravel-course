const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      console.log(entry);
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        observer.unobserve(entry.target); // Unobserve the element after adding the class
      }
    });
  });
  
  const hiddenElements = document.querySelectorAll(".hidden");
  hiddenElements.forEach((el) => observer.observe(el));
  
  // const observer = new IntersectionObserver((entries) => {
  //   entries.forEach((entry) => {
  //     console.log(entry);
  //     if (entry.isIntersecting) {
  //       entry.target.classList.remove("hidden");
  //       entry.target.classList.add("show");
  //     } else {
  //       entry.target.classList.remove("show");
  //     }
  //   });
  // });
  // const hiddenElements = document.querySelectorAll(".hidden");
  // hiddenElements.forEach((el) => observer.observe(el));
  