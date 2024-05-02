<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= BASE_URL . '/public/css/output.css' ?>" rel="stylesheet">
    <link rel="shortcut icon" href="https://divotahta.com/wp-content/uploads/2023/05/Logo-Divo.png"
        type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <title>Contact APP | <?= $title ?></title>
</head>

<body>
    <div>
        <?php include '../views/pages/admin/layouts/navbar.php'; ?>
        <div class="flex overflow-hidden bg-white pt-16">
            <?php include '../views/pages/admin/layouts/sidebar.php'; ?>
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="flex flex-wrap items-center pt-8">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-bold text-black text-xl">Daftar Kontak</h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="<?= BASE_URL . '/contact/add' ?>">
                                <button
                                    class="tambah-data-categoryproduct bg-blue-500 text-white active:bg-primarybase text-xs font-bold py-2 px-4 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Tambah Kontak</button>
                            </a>
                        </div>
                    </div>
                    <section class="mt-5 container px-4 mx-auto">
                        <div class="flex flex-col">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-200 ">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                        <div class="flex items-center gap-x-3">
                                                            <button class="flex items-center gap-x-2">
                                                                <span>No</span>
                                                            </button>
                                                        </div>
                                                    </th>

                                                    <th scope="col"
                                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                        Nama Kontak
                                                    </th>

                                                    <th scope="col"
                                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                        Nomor HP
                                                    </th>


                                                    <th scope="col"
                                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                                        Aksi
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <?php $no = 1;
                                                foreach ($contact as $data): ?>
                                                <tr>
                                                    <td
                                                        class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                        <div class="inline-flex items-center gap-x-3">
                                                            <span><?= $no++ ?></span>
                                                        </div>
                                                    </td>

                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        <?= $data['nama_contact'] ?></td>
                                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        <div class="inline-flex items-center gap-x-3">

                                                            <h2 class="text-sm font-normal">
                                                                <?= $data['nomor_hp'] ?></h2>
                                                        </div>
                                                    </td>




                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <div class="flex items-center gap-x-6">
                                                            <a
                                                                href="<?= BASE_URL . '/contact/update/' . $data['id_contact'] ?>">
                                                                <button
                                                                    class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                                    Edit
                                                                </button>
                                                            </a>
                                                            <a
                                                                href="<?= BASE_URL . '/contact/destroy/' . $data['id_contact'] ?>">
                                                                <button
                                                                    class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                                    Hapus
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    </div>
</body>

</html>
