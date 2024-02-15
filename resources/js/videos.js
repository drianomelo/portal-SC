// const conexao = await fetch(
//     `https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCRxSvC9upW2HOAg9zmf2vrg&maxResults=40&order=date&type=video&key=AIzaSyDhAuJU7f8c8hiW1nGLle8YlKOqkJ1MqSY`
// );
// const conexaoConvertida = await conexao.json();
// const videos = conexaoConvertida.items;
// const contentVideos = document.querySelector("#videos");

// videos.forEach((video) => {
//     console.log(video);
//     const url = video["snippet"]["thumbnails"]["medium"]["url"];
//     const title = video["snippet"]["title"];
//     const description = video["snippet"]["description"];
//     contentVideos.innerHTML += `
//         <article class="swiper-slide">
//             <img class="mb-4 w-full rounded-md" src="${url}" alt="Publicação Municipio de São Cristóvão">
//             <h3 class=" mb-1 font-extrabold text-sm text-black">${title}</h3>
//             <h3 class=" mb-2 font-extrabold text-xs text-black text-opacity-60">${description}</h3>
//             <span class="text-[11px] text-gray-300">
//                 <i class="mr-1 text-xs fa-solid fa-calendar-days"></i>
//                 {{ $data }}
//             </span>
//         </article>
//     `;
// });
