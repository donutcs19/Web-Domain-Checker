document
  .getElementById("submitBtn")
  .addEventListener("click", function (event) {
    event.preventDefault();
    const URL = "http://localhost:3000/";
    const textarea = document.getElementById("urls");
    const urls = textarea.value.toLowerCase();
    
    const urlRegex =
      /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w\.-]*)*\/?$/;

    const validUrls = urls
      .split("\n")
      .map((url) => url.trim())
      .filter((url) => url)
      .map((url) =>
        url.replace(/^(https?:\/\/)?(www\.)?/, "").replace(/\/.*$/, "")
      )
      .filter((url) => urlRegex.test(url));

    if (urls === "") {
      Swal.fire({
        icon: "error",
        title: "Please input at least one URL",
        text: "กรุณากรอก URL",
        confirmButtonText: "OK",
      });
      return;
    }

    if (validUrls.length === 0) {
      Swal.fire({
        icon: "error",
        title: "Please enter valid URLs",
        text: "กรุณากรอก URL ที่ถูกต้อง",
        confirmButtonText: "OK",
      });
      return;
    }

    if (validUrls.length > 100) {
      Swal.fire({
        icon: "error",
        title: "You can only enter up to 100 URLs",
        text: "กรุณากรอกไม่เกิน 100 URL",
        confirmButtonText: "OK",
      });
      return;
    }

    const data = {
      url_input: validUrls.map((url) => ({ url })),
    };


    fetch(`${URL}table/create`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((response) => {
        
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        const contentType = response.headers.get("Content-Type");
        if (contentType && contentType.includes("application/json")) {
          return response.json();
        } else {
          throw new Error("Response is not JSON");
        }
      })
      .then((data) => {
      
        Swal.fire({
          icon: "success",
          text: "ระบบกำลังค้นหาข้อมูล...",
          title: "create success",
          timer: 3000,
          confirmButtonText: "OK",
        }).then(() => {
          textarea.value = "";
          lineCount.textContent = 0;
          location.reload(true);
        });
      })
      .catch((error) => {
        
        Swal.fire({
          icon: "error",
          text: error.message || "Unknown error occurred",
          title: "Oops...",
        });
      });
    
  });
