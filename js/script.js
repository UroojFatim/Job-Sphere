
function shareLink(title, text, link) {
    if (navigator.share) {
      navigator.share({
        title: title,
        text: text,
        url: link
      })
      .then(() => console.log('Link shared successfully'))
      .catch((error) => console.error('Error sharing link:', error));
    } else {
      alert('Web Share API is not supported in this browser. You can manually copy the link and share it.');
    }
  }
