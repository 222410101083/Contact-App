<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= BASE_URL . '/public/css/output.css' ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <title><?= $title ?></title>
</head>

<body>
    <div>
        <?php include '../views/pages/admin/layouts/navbar.php'; ?>
        <div class="flex overflow-hidden bg-white pt-16">
            <?php include '../views/pages/admin/layouts/sidebar.php'; ?>
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="flex items-center justify-center p-12">
                        <div class="mx-auto w-full">
                            <form action="<?= BASE_URL . '/contact/store' ?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Nama Kontak
                                    </label>
                                    <input type="text" name="nama_contact" id="nama_contact" required
                                        placeholder="Masukkan nama kontak"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="mb-5">
                                    <label for="nomor_hp" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Nomor HP
                                    </label>
                                    <input type="number" name="nomor_hp" id="nomor_hp" required
                                        placeholder="Masukkan Nomor HP"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div>
                                    <button type="submit"
                                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    </div>
</body>

</html>
