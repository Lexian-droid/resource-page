// Get all links with file extensions
var links = document.querySelectorAll('a[href$=".pdf"], a[href$=".doc"], a[href$=".docx"], a[href$=".txt"], a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"], a[href$=".bmp"]');

// Add event listener to each link
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the link from opening the file
    window.open(this.href, 'popup', 'width=600,height=600'); // Open the file in a popup window
  });
}
