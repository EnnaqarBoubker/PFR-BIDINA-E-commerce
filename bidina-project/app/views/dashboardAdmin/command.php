<?php require_once APPROOT . "/views/inc/headerDash.php" ?>

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Name User</th>
            <th>produit</th>
            <th>Quantity</th>
            <th>prix</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <span class="badge badge-success rounded-pill d-inline">Name</span>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">John Doe</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">Quantity</p>
                
            </td>
            <td>
                <span class="badge badge-success rounded-pill d-inline">prix</span>
            </td>
            <td>
                <a href=""><i class="fas fa-check-circle"></i></a>
                <a href="">remove</a>
            </td>
        </tr>
    </tbody>
</table>
<?php require_once APPROOT . "/views/inc/footerDash.php"; ?>