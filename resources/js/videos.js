const conexao = await fetch("http://localhost:3000/items");
const conexaoConvertida = await conexao.json();
const videos = conexaoConvertida;
console.log(videos);
const contentVideos = document.querySelector("#videos");

videos.forEach((video) => {
    const videoId = video["id"]["videoId"];
    const url = video["snippet"]["thumbnails"]["medium"]["url"];
    const title = video["snippet"]["title"];
    const description = video["snippet"]["description"];
    const date = new Date(video["snippet"]["publishTime"]);
    const day = date.getDate() < 10 ? `0${date.getDate()}` : date.getDate();
    contentVideos.innerHTML += `
        <article id="video-item" class="swiper-slide" data-link="${videoId}">
            <img class="mb-4 w-full rounded-md" src="${url}" alt="Publicação Municipio de São Cristóvão">
            <h3 class=" mb-1 font-extrabold text-sm text-black text dark:text-yellow-400">${title}</h3>
            <h3 class=" mb-2 font-extrabold text-xs text-black text-opacity-60 text dark:text-white">${description}</h3>
            <span class="text-[11px] text-gray-300 text">
                <i class="mr-1 text-xs fa-solid fa-calendar-days"></i>
                ${day}/${date.getMonth()}/${date.getFullYear()}
            </span>
        </article>
    `;
});

const videosItem = document.querySelectorAll("#video-item");
const iframe = document.querySelector("#iframe-video");

videosItem.forEach((video) => {
    video.addEventListener("click", () => {
        const videoId = video.getAttribute("data-link");

        iframe.setAttribute("src", `https://www.youtube.com/embed/${videoId}`);
    });
});
