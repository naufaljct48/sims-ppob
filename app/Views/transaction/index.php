<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/profile_saldo') ?>

<div class="container mx-auto p-4">
    <p class="text-lg">Pembayaran</p>
    <a href="<?= base_url('homepage'); ?>" class="flex items-center">
        <img src="<?= base_url('assets/Logo.png'); ?>" class="h-8 mr-3" alt="Logo" id="service_icon" />
        <span class="self-center text-2xl whitespace-nowrap text-black" id="service_code"></span>
    </a>
    <div class="flex mt-8">
    <div class="relative w-full">
        <span class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
            <i class="fas fa-wallet text-gray-400"></i>
        </span>
        <input id="service_tarif" type="text" disabled class="pl-10 w-full p-2 border rounded-md focus:ring focus:ring-blue-300 focus:outline-none" placeholder="Masukkan nominal Top Up">
        </div>
    </div>

    <div class="flex mt-4">
        <div class="w-full pr-2">
            <button type="button" class="w-full bg-red-500 text-white font-semibold py-2 rounded-md hover:bg-red-600 focus:outline-none cursor-pointer" id="btn-bayar">Bayar</button>
        </div>
    </div>
</div>

<div class="modal fixed hidden inset-0 flex items-center justify-center" id="modalBayar">
    <div class="modal-content bg-white p-8 max-w-md mx-auto rounded-lg">
        <div class="text-center mb-4">
            <img src="<?= base_url('assets/Logo.png'); ?>" alt="Logo" class="w-12 h-12 mx-auto mb-2">
            <p id="modalTopUpMessageBayar" class="mb-1"></p>
            <p id="modalTopNominalBayar" class="mb-1 font-bold text-2xl"></p>
        </div>
        <div class="flex justify-center">
            <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md focus:outline-none" id="btnModalCancelBayar">Batalkan</button>
            <button type="button" class="bg-green-500 text-white px-4 py-2 rounded-md ml-4 focus:outline-none" id="btnModalConfirmBayar">Ya, lanjutkan Bayar</button>
        </div>
    </div>
</div>

<div class="modal fixed hidden inset-0 flex items-center justify-center" id="modalSuccess">
    <div class="modal-content bg-white p-8 max-w-md mx-auto rounded-lg">
        <div class="text-center mb-4">
            <img src="<?= base_url('assets/Logo.png'); ?>" alt="Logo" class="w-12 h-12 mx-auto mb-2">
            <p id="modalSuccessMessage" class="mb-1"></p>
            <p id="modalTopNominal" class="mb-1 font-bold text-2xl"></p>
        </div>
        <div class="flex justify-center">
            <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md focus:outline-none" id="btnModalBack">Kembali ke beranda</button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>