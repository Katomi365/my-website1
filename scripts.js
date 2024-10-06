function searchVideos() {
    var input = document.getElementById('search').value.toLowerCase();
    var videos = document.getElementsByClassName('video');

    for (var i = 0; i < videos.length; i++) {
        var title = videos[i].getElementsByTagName('h3')[0].innerText.toLowerCase();
        if (title.includes(input)) {
            videos[i].style.display = "block";
        } else {
            videos[i].style.display = "none";
        }
    }
}
