// Sayfa yüklendiğinde çalışacak JQuery kodu
$(document).ready(function() {
    // Önceki sidebar durumunu tarayıcı belleğinden alın
    var activeLink = localStorage.getItem('activeLink');

    if (activeLink) {
        // Eğer önceden seçilen bir link varsa, o linkin etiketine "active" sınıfını ekle
        $('#sidebar a').removeClass('active');
        $('#sidebar a[href="' + activeLink + '"]').addClass('active');
    }

    // Sidebar içindeki linklere tıklandığında çalışacak kod
    $('#sidebar a').click(function(event) {
        // Varsayılan link davranışını önlemek (sayfa yenilenmesini engellemek)
        event.preventDefault();

        // Tıklanan linkin URL'sini alın
        var clickedLink = $(this).attr('href');

        // "active" sınıfını tüm linklerden kaldırın ve tıklanan linkten ekleyin
        $('#sidebar a').removeClass('active');
        $(this).addClass('active');

        // Tıklanan linkin URL'sini tarayıcı belleğine kaydedin
        localStorage.setItem('activeLink', clickedLink);

        // Sayfayı tıklanan linkin URL'sine yükle
        window.location.href = clickedLink;
    });
});
