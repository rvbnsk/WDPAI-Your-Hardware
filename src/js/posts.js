const fetchPosts = async () => {
    const data = await fetch("http://localhost:8080/getPosts")
      .then((res) => {
        return res.json();
      })
      .then((data) => {
        data.forEach((element) => {
          let parentElement = document.querySelector(".posts");
          const newElement = document.createElement("div");
          newElement.innerHTML = `
          <div class="post" style="background-image: url(${element.imageurl})">
            <p class="post1_text">${element.title}</p>
            <a href="postDetails?id=${element.id}">
              <p class="post1_read">Read more...</p>
            </a>
            <p class="post1_read">Created By ${element.createdby} </p>
          </div>`;
  
          parentElement.appendChild(newElement);
        });
      });
  };
  
  fetchPosts();
  