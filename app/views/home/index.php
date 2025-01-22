<div class="container mt-3">
    <div class="row row-cols-1 row-cols-sm-2 g-4"> <!-- Bắt đầu với 1 cột và chuyển sang 2 cột khi SM -->
        <?php
        foreach ($user as $value) {
            ?>
            <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($value["firstname"]) . ' - ' . htmlspecialchars($value["lastname"]); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($value["email"]); ?></h6>
                        <p class="card-text"><?php echo htmlspecialchars($value["reg_date"]); ?></p>
                        <a href="#" class="card-link">Xem thêm</a>
                        <!-- <a href="#" class="card-link">Another link</a> -->
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>