    // Smooth scrolling untuk link di navbar yang mengarah ke bagian halaman yang sama
            document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
    // Prevent default anchor behavior
            e.preventDefault();

    // Ambil id dari elemen yang akan discroll
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
    // Scroll ke elemen dengan smooth effect
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 70, // Offset untuk memperhitungkan tinggi navbar
                    behavior: 'smooth'
                });
            }
        });
    });

    // Toggle Navbar
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');

            navbarToggler.addEventListener('click', () => {
                navbarCollapse.classList.toggle('show'); // Menggunakan 'show' untuk Bootstrap 4
            });
            $(document).ready(function () {
                $(".navbar-toggler").on("click", function () {
                    $(this).toggleClass("collapsed");
                });
            });

            function confirmLogout() {
    // Menggunakan dialog konfirmasi dengan opsi Yakin atau Tidak
                let confirmAction = confirm("Apakah kamu yakin ingin logout?");
                if (confirmAction) {
                    // Jika pengguna memilih "Yakin"
                    window.location.href = '/ReoveLibrary/auth/logout.php'; 
                } else {
                    // Jika pengguna memilih "Tidak"
                    alert("Anda tetap masuk.");
                }
            }
        

