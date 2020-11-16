## SOP

Branch master hanya untuk commit fix.
Default development dilakukan di branch masing-masing dengan code `nama`, sebelum di merge lakukan pull request terlebih dahulu
Kerjakan task masing-masing di branch masing-masing biar gak saling tumpang tindih dan kalo ada problem solvenya lebih mudah
Setelah selesai ngerjain task buat pull request biar di review dulu codenya jadi kalo misalkan ada error atau gimana bisa dilanjut gak ganggu branch masternya

## Start Dev in your local computer

Clone Project Repo
copy file `.env.example` menjadi `.env`
set konfigurasi environment pada file .env sesuai dengan .env di project laravel yang ada di htdocs sebelumnya (jadi kalo udh pernah buat project laravel tinggal di copas aja .env nya terus copas .env yang project lain ke .env.example ganti namanya jadi .env aja)

run composer install

run php artisan key:generate

run php artisan serve

(run ini di folder SIMKO terus pake git bash)
