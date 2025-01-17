<?php 
    require_once '../database.php';
    include '../config/header.php'; 

    // query untuk mendapatkan data employee nya

    $sql = "SELECT * FROM employees";
    $stmt = $pdo->query($sql);
    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<a href="create.php" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Karyawan</a>
<table class="min-w-full bg-white">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="w-1/3 px-4 py-2">Nama</th>
            <th class="w-1/3 px-4 py-2">Alamat</th>
            <th class="w-1/3 px-4 py-2">Gaji</th>
            <th class="w-1/3 px-4 py-2">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-gray-700 text-center">
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td class="border px-4 py-2">
                    <?= $employee['name']; ?>
                </td>
                <td class="border px-4 py-2">
                    <?= $employee['address']; ?>
                </td>
                <td class="border px-4 py-2">
                    <?= $employee['salary']; ?>
                </td>
                <td class="border px-4 py-2 flex gap-3 justify-center">
                    <a class="bg-yellow-500 hover:bg-yellow-800 text-white py-1 px-2 rounded" href="update.php?id=<?= $employee['id']?>">Edit</a>
                    <a class="bg-red-500 hover:bg-red-800 text-white py-1 px-2 rounded" href="delete.php?id=<?= $employee['id']?>">Hapus</a>
               
                </td>
              
                
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>



<?php include '../config/footer.php'; ?>