<div class="w-full flex justify-center mb-12">
        <div class="pagination flex space-x-2 mb-5">
            <?php if ($currentPage > 1): ?>
                <a href="<?= base_url('pengumuman') ?>?page=<?= $currentPage - 1 ?>" class="bg-emerald-500 hover:bg-emerald-700 text-white py-2 px-4 rounded transition duration-300">Prev</a>
            <?php endif; ?>

            <?php
            $start = max(1, $currentPage - 1);
            $end = min($start + 3, count($pager));

            // Jika halaman terakhir, perkecil batas
            if ($currentPage == count($pager)) {
                $start = max(1, $currentPage - 3);
                $end = $currentPage;
            }

            for ($page = $start; $page <= $end; $page++): ?>
                <?php if ($page == $currentPage): ?>
                    <span class="bg-emerald-700 text-white py-2 px-4 rounded"><?= $page ?></span>
                <?php else: ?>
                    <a href="<?= base_url('pengumuman') ?>?page=<?= $page ?>" class="bg-emerald-500 hover:bg-emerald-700 text-white py-2 px-4 rounded transition duration-300"><?= $page ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($currentPage < count($pager)): ?>
                <a href="<?= base_url('pengumuman') ?>?page=<?= $currentPage + 1 ?>" class="bg-emerald-500 hover:bg-emerald-700 text-white py-2 px-4 rounded transition duration-300">Next</a>
            <?php endif; ?>
        </div>
    </div>