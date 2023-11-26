<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<input type="file" id="profile_image" accept="image/*" style="display: none;">

<div class="h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg w-8/12">
        <div class="text-center relative">
            <label for="profile_image">
            <i class="fa-solid fa-pencil absolute -mb-4 -mr-4 text-gray-500 cursor-pointer hover:text-gray-700"></i>
                <img src="<?= base_url('assets/Profile Photo.png'); ?>" alt="Profile Picture" class="w-20 h-20 object-cover rounded-full mx-auto mb-4 cursor-pointer">
            </label>
            <p class="text-xl font-bold capitalize" id="full_name">Nama Pengguna</p>
        </div>

        <div class="mt-8">
            <div class="mb-8">
                <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                <input type="email" id="email" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div class="mb-8">
                <label for="firstName" class="block text-gray-700 font-semibold">Nama Depan:</label>
                <input type="text" id="first_name" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div class="mb-8">
                <label for="lastName" class="block text-gray-700 font-semibold">Nama Belakang:</label>
                <input type="text" id="last_name" class="w-full p-2 border rounded-md focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <button id="btn_edit_profile" type="submit" class="w-full bg-red-500 text-white font-semibold py-2 rounded-md hover:bg-red-600 focus:outline-none">
                    Edit Profil
                </button>
                <button type="submit" id="btn_logout" class="mt-8 w-full bg-white border border-red-500 text-red-500 px-4 py-2 rounded-md hover:bg-gray-100 focus:outline-none">
                    Logout
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>