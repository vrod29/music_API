var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://api.musixmatch.com/ws/1.1/artist.search?q_artist=aerosmith&page_size=5&apikey=8f3df11a62eade09ece60f73582d6b1a",
  "method": "GET",
  "headers": {
    "Cache-Control": "no-cache",
    "Postman-Token": "6ac846c7-70fc-03e1-657c-7833b53e7c5f"
  }
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
