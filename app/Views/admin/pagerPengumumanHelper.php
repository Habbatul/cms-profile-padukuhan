<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-auto">
            <?php if ($currentPage > 1): ?>
                <a href="<?= base_url('admin/pengumuman') ?>?page=<?= $currentPage - 1 ?>" class="btn btn-primary">Prev</a>
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
                    <span class="btn btn-success"><?= $page ?></span>
                <?php else: ?>
                    <a href="<?= base_url('admin/pengumuman') ?>?page=<?= $page ?>" class="btn btn-primary"><?= $page ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($currentPage < count($pager)): ?>
                <a href="<?= base_url('admin/pengumuman') ?>?page=<?= $currentPage + 1 ?>" class="btn btn-primary">Next</a>
            <?php endif; ?>
        </div>
    </div>
</div>
