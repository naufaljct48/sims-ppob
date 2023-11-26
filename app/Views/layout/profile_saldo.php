<div class="container mx-auto py-4 mt-4 flex">
    <div class="w-1/2 p-4">
    <img src="<?= base_url('assets/Profile Photo.png'); ?>" alt="Profile Picture" class="w-20 h-20 object-cover rounded-full">
        <p class="mt-2 text-xl">Selamat Datang,</p>
        <p id="full_name" class="text-4xl font-bold capitalize ">Nama Depan Belakang</p>
    </div>
    <div class="w-1/2 ml-4 bg-cover p-8 rounded-lg" style="background-image: url('<?= base_url('assets/Background Saldo.png'); ?>');">
        <div class=" text-white ">
            <p class="text-sm">Saldo Anda</p>
            <p class="text-3xl mt-5">Rp <span id="saldo-value" class="toggle-saldo">********</span></p>
            <p class="text-sm text-blue-200 cursor-pointer mt-8" id="lihat-saldo-button">Lihat Saldo</p>
        </div>
    </div>
</div>