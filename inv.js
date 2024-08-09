

document.addEventListener("DOMContentLoaded", () => {
    const registerBox = document.querySelector("#register-box");
    const closeButton = document.querySelector("#close-button");

    
    function openForm(sku, name, description, supplier, location, cost) {
      
        document.querySelector("input[name='sku']").value = sku;
        document.querySelector("input[name='name']").value = name;
        document.querySelector("input[name='description']").value = description;
        document.querySelector("select[name='supplier']").value = supplier;
        document.querySelector("select[name='location']").value = location;
        document.querySelector("input[name='cost']").value = cost;


  
        registerBox.style.display = "block";
    }

    document.querySelectorAll(".edit-icon").forEach(icon => {
        icon.addEventListener("click", (e) => {
            e.preventDefault();

    
            const sku = icon.getAttribute("data-sku");
            const name = icon.getAttribute("data-name");
            const description = icon.getAttribute("data-description");
            const supplier = icon.getAttribute("data-supplier");
            const location = icon.getAttribute("data-location");
            const cost = icon.getAttribute("data-cost");
   
            
            openForm(sku, name, description, supplier, location, cost);
        });
    });


    closeButton.addEventListener("click", () => {
        registerBox.style.display = "none";
    });
});


