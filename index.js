function checkReadingLevel() {
    const name = document.getElementById('name').value;
    const halaman = parseInt(document.getElementById('halaman').value);

    if (halaman >= 1 && halaman <= 3) {
      alert(`${name}, level membaca sedikit.`);
    } else if (halaman >= 4 && halaman <= 10) {
      alert(`${name}, level membaca normal.`);
    } else if (halaman >= 11 && halaman <= 20) {
      alert(`${name}, level membaca sering.`);
    } else if (halaman > 20) {
      alert(`${name}, level pembaca maniac.`);
    } else {
      alert('Please enter a valid number of pages read in a week.');
    }
  }