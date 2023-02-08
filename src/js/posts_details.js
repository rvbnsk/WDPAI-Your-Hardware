const fetchDetails = async () => {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const data = await fetch(
      `http://localhost:8080/post?id=${urlParams.get("id")}`
    )
      .then((res) => {
        return res.json();
      })
      .then((element) => {
        let parentElement = document.querySelector(".post_title");
        let postText = document.querySelector(".post_text");
        let postPicture = document.querySelector(".post_picture");
  
        const newElement = document.createElement("h3");
        newElement.innerHTML = `${element.title}`;
  
        const newPostText = document.createElement("p");
        newPostText.innerHTML = `${element.description}`;
  
        const newImg = document.createElement("div");
        newImg.innerHTML = `<img src="${element.imageurl}" alt="" width=100% />`;
  
        parentElement.appendChild(newElement);
        postText.appendChild(newPostText);
        postPicture.appendChild(newImg);
      });
  };
  
  fetchDetails();
  