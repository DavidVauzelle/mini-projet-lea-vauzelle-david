const urls = [
    "https://cdn-l-cyberpunk.cdprojektred.com/wallpapers/1920x1080/A-mercenary-on-the-rise-en.jpg",
    "https://cdn-l-cyberpunk.cdprojektred.com/gallery/1080p/screen-Cyberpunk2077-Outnumbered_But_Not_Outgunned-RGB-en.jpg",
    "https://cdn-l-cyberpunk.cdprojektred.com/gallery/1080p/Cyberpunk2077_Lucky_number_13_RGB-en.jpg",
    "https://cdn-l-cyberpunk.cdprojektred.com/gallery/1080p/Cyberpunk2077-Lets_go_to_the_mall-en.jpg",
    "https://cdn-l-cyberpunk.cdprojektred.com/gallery/1080p/Cyberpunk2077_Always_bring_a_gun_to_a_knife-fight_RGB-en.jpg",
    "https://cdn-l-cyberpunk.cdprojektred.com/gallery/1080p/Cyberpunk2077_Love_this_town_RGB-en.jpg",

]
   
for (const url of urls) {
    const image = document.createElement('img')
    image.src = url
    document.body.appendChild(image)
}