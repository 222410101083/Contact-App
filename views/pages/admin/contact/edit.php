<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= BASE_URL . '/public/css/output.css' ?>" rel="stylesheet">
    <link rel="shortcut icon" href="https://seeklogo.com/images/H/hm-sampoerna-logo-64BA2D55A9-seeklogo.com.png"
        type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <title>Sampoerna | <?= $title ?></title>
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
                            <form action="<?= BASE_URL . '/contact/edit/' . $contact['id_contact'] ?>" method="POST"
                                enctype="multipart/form-data">
                                <div class="mb-5">
                                    <input hidden class="" value="<?= $contact['id_contact'] ?>" type="text">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Nama contact
                                    </label>
                                    <input type="text" value="<?= $contact['nama_contact'] ?>"
                                        name="nama_contact"required id="nama_contact"
                                        placeholder="Masukkan nama contact"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="mb-5">
                                    <label for="nomor_hp" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Nomor HP
                                    </label>
                                    <input value="<?= $contact['nomor_hp'] ?>" type="number" name="nomor_hp"required
                                        id="nomor_hp" placeholder="Masukkan Nomor HP"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div id="image-preview" class="mt-4"></div>
                                <?php
                                if (isset($contact['gambar_contact'])) {
                                    echo '
                                                                    <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                                                                        <div class="flex items-center justify-between">
                                                                            <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                                                                ' .
                                        $contact['gambar_contact'] .
                                        '
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    ';
                                } elseif (isset($_FILES['gambar_contact']) && $_FILES['gambar_contact']['name']) {
                                    echo '
                                                                    <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                                                                        <div class="flex items-center justify-between">
                                                                            <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                                                                ' .
                                        $_FILES['gambar_contact']['name'] .
                                        '
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    ';
                                }
                                
                                if (isset($_FILES['gambar_contact']) && $_FILES['gambar_contact']['name']) {
                                    echo '
                                                                    <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                                                                        <div class="flex items-center justify-between">
                                                                            <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                                                                ' .
                                        $_FILES['gambar_contact']['name'] .
                                        '
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    ';
                                }
                                ?>

                                <span id="file-error" class="text-red-500"></span>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        <script>
            $(document).ready(function() {
                <?php 
                if ($contact['gambar_contact']){
                    $namaFile = $contact['gambar_contact'];
                    ?>
                $('#image-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                    <?= $namaFile ?>
                                </span>
                            </div>
                        </div>
                    `);
                <?php } ?>
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#gambar_contact').change(function(e) {
                    var fileName = e.target.files[0].name;
                    var fileExt = fileName.split('.').pop();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });

            function validateImage(input) {
                var file = input.files[0];
                var fileType = file.type.split('/').shift();
                var fileName = file.name;

                if (fileType !== 'image') {
                    document.getElementById('file-error').innerHTML = 'Gambar kategori produk harus berupa file gambar.';
                    document.getElementById('image-preview').innerHTML = '';
                } else {
                    document.getElementById('file-error').innerHTML = '';

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(file);
                }
            }
        </script>
    </div>
</body>

</html>
