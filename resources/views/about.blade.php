@extends('layout/main')


    @section('container')
    <h1>Halaman About / Dokumentasi Oleh Kelompok 5</h1>
    <div class="text-center">
        <img src="{{ 'img/pasfoto.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
        <img src="{{ 'img/ade.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
        <img src="{{ 'img/audrelia.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
        <img src="{{ 'img/wijaya.jpg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
        <img src="{{ 'img/defan.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
        <img src="{{ 'img/dimas.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded"><div class="d-inline">
        </div>
    <div>
        <h5 class="mb-3">
            Assalamualaikum Warrahmatullahi Wabarakatuh.
            <br>
            Salam hormat kepada para pembaca dokumentasi ini
            <br>
            Website ini di buat dengan sepenuh hati demi mendapatkan nilai A oleh bapak <strong> Renaldi Yulvianda S.Kom, M.Kom </strong>tercinta. Website ini dikelola oleh 6 developer dengan 1 akun atas email muhammadzahran02@gmail.com. Website ini di tujukan untuk para penulis digital yang ingin mem-publikasikan tulisan yang mereka buat secara gratis. Website ini juga menggunakan package Laravel/Ui yang telah developer modifikasi menggunakan bootstrap, untuk template external developer menggunakan template Bootstrap bagian examples folder dashboard. Website ini memiliki 3 relasi yaitu Post->User, Post->Category, User->Category, Lalu web ini juga memiliki authorization seperti middleware auth dan verified dan verifikasi email nya developer memilih mailtrap.io karena gratis. Tak lupa kami juga menambahkan middleware baru yang bernama admin dengan class IsAdmin, middleware ini berfungsi untuk membedakan user dan developer, jadi ada satu halaman yang hanya bisa di akses oleh developer yaitu halaman post categories, nah kegunaan middleware tersebut jika user berhasil menebak halaman tersebut maka user tersebut akan di arahkan ke kode 403 Forbidden. Lalu pada halaman post categories tersebut developer bisa mengelola kategori seperti melakukan update delete dan create. Kemudian ada halaman my posts untuk tempat user dan developer menulis postingan, di sana baik developer maupun user sama sama bisa melakukan CRUD. Kemudian ada halaman Dashboard, halaman ini memiliki 2 tampilan, jika yang login adalah developer maka akan menampilkan 6 foto developer tersebut seperti di halaman about dan ada gambar lautan dari unsplash api, namun jika yang login adalah user maka yang tampil hanya gambar dari unsplash api, karena di sini developer menggunakan gate define dengan blade directive can. Untuk route nya di sini developer menggunakan route resource untuk melakukan crud. Lalu ada halaman categories untuk menampilkan postingan berdasarkan kategori. Lalu ada halaman blog sebagai halaman read dari postingan yang telah di buat, dan juga website ini juga menggunakan method paginate untuk melakukan pagination di halaman blog ini. Kemudian developer juga membuat data random menggunakan factory serta membuat 1 akun developer menggunakan seeder. Tak lupa pula developer mengucapkan terima kasih terkhusus kepada bapak Renaldi Yulvianda S.Kom, M.Kom, dan juga tutorial online yang telah banyak membantu dalam proses pembuatan website ini seperti pak Sandhika galih WPU, Programmer Zaman Now, Codewithsaad, dan Youtuber india, lalu special credit juga untuk Jeff Atwood dan Joel Spolsky yang telah menciptakan StackOverFlow. Mungkin hanya itu saja dokumentasi yang dapat developer sampaikan selebihnya silahkan di eksplorasi sendiri. Mohon maaf jika ada kesalahan baik yang disengaja maupun tidak sengaja karena kesempurnaan itu hanyalah milik yang di atas.
            <br>
            Kelompok 5 akhiri Wabillahi Taufik Wal Hidayah Wassalamualaikum Warahmatullahi Wabarakatuh
        </h5>
    </div>
    @endsection
