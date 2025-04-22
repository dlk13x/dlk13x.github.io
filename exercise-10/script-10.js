fetch("https://catfact.ninja/facts?limit=5")
  .then((response) => response.json())
  .then((data) => {
    const container = document.getElementById("facts-container");

    data.data.forEach((fact) => {
      const card = document.createElement("div");
      card.className = "fact-card";
      card.textContent = fact.fact;
      container.appendChild(card);
    });
  })
  .catch((error) => {
    console.error("Error fetching data:", error);
    document.getElementById("facts-container").textContent =
      "Oops! Couldn't load facts.";
  });
