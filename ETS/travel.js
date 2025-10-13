
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#formulir form');
    if (!form) return;
    const nav = document.querySelector('nav ul');
    const header = document.querySelector('header .header-container');
    if (nav && header) {
        const hamburger = document.createElement('button');
        hamburger.className = 'hamburger';
        hamburger.setAttribute('aria-label', 'Toggle navigation');
        hamburger.innerHTML = '<span></span><span></span><span></span>';
        header.insertBefore(hamburger, header.children[1]);

        function updateNavDisplay() {
            if (window.innerWidth <= 700) {
                nav.style.display = 'none';
                hamburger.style.display = 'block';
            } else {
                nav.style.display = 'flex';
                hamburger.style.display = 'none';
            }
        }
        updateNavDisplay();

        hamburger.addEventListener('click', function () {
            if (nav.style.display === 'none' || nav.style.display === '') {
                nav.style.display = 'flex';
                nav.style.flexDirection = 'column';
            } else {
                nav.style.display = 'none';
            }
        });

         window.addEventListener('resize', updateNavDisplay);

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                    if (window.innerWidth <= 700) {
                        nav.style.display = 'none';
                    }
                }
            });
        });
    }


    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const nama = form.nama.value.trim();
        const telepon = form.telepon.value.trim();
        const layanan = form.layanan.value;
        const kotaasal = form.kotaasal.value.trim();
        const kotatujuan = form.kotatujuan.value.trim();

        if (!nama || !telepon || !layanan || !kotaasal || !kotatujuan) {
            alert('Mohon lengkapi semua data wajib.');
            return;
        }

        if (kotaasal === kotatujuan) {
            alert('Kota asal dan kota tujuan tidak boleh sama!');
            return;
        }

        if (!/^\d+$/.test(telepon)) {
            alert('Nomor telepon hanya boleh terdiri dari angka.');
            return;
        }

        alert(
            `Terima kasih, ${nama}!\nPesanan Anda untuk layanan "${layanan}" dari ${kotaasal} ke ${kotatujuan} telah kami terima.\nKami akan segera menghubungi Anda di nomor ${telepon}.`
        );

        form.reset();
    });
});