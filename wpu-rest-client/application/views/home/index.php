    <!-- <p style="text-align:center"><h1>Home of Pizza, <?= $nama; ?>!</h1></p> -->
    <!-- <center><h1>Home of Pizza, <?= $nama; ?>!</h1></center> -->
<style>
    .tanpa-padding {
    border: 2px solid red;
    }
    .card {
    padding: 10px;
    margin: 25px 50px 75px 100px;
    }
</style>
<div class="container">
<center>
<div class="col-md-10">
    <div class="row mt-3">
        <div class="card" style="width: 18rem;" >
        <img src="https://i.pinimg.com/564x/37/90/12/3790121a1f273ea90661b484d6b9259e.jpg" class="card-img-top" alt="PIZZA HUT">
            <div class="card-body">
                <h5 class="card-title">Pizza Hut Restaurant</h5>
                <p class="card-text">Order Pizza for Delivery from PHD Indonesia. menu. ×. 1 500 008 · Hot Promo & Combox · Menu · News · Event · Lokasi · Aplikasi · Video.</p>
                <a href="<?= base_url(); ?>menu" class="btn btn-primary">Check List</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;" >
        <img src="https://i.pinimg.com/564x/04/20/17/042017c8fcea6898c2feec49e427dc8f.jpg" class="card-img-top" alt="PIZZA HUT">
            <div class="card-body">
                <h5 class="card-title">Domino's Pizza Indonesia</h5>
                <p class="card-text">Order online Domino's pizza, enjoy best pizza, pasta, chicken, and other promos for carryout or delivery. Free delivery and 30 minutes delivery guarantee.</p>
                <a href="<?= base_url(); ?>dominos" class="btn btn-primary">Check List</a>
            </div>
        </div>
    </div>
</div>
</center>
</div>

