<?php include_once("./views/header.php"); ?>

<div class='card-body d-flex flex-row-reverse'>
    <div class="card w-25 mr-4 h-25">
        <div class="card-body d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="card-image">
                <path fill="#0f4a8f" d="M64 480H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H288c-10.1 0-19.6-4.7-25.6-12.8L243.2 57.6C231.1 41.5 212.1 32 192 32H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64z" />
            </svg>
            <div>
                <h5 class="card-title">Numero de carpetas: </h5>
                <p class="card-text h5"><?php echo $this->ficheros['COUNT(*)'] ?></p>
            </div>
        </div>
    </div>

    <div class="card mr-4 h-25">
        <div class="card-body d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="card-image">
                <path fill="#0f4a8f" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
            </svg>
            <div>
                <h5 class="card-title">Numero de ficheros: </h5>
                <p class="card-text h5"><?php echo $this->carpetas['COUNT(*)'] ?></p>
            </div>
        </div>
    </div>

    <div class="card mr-4 h-25">
        <div class="card-body d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="card-image">
                <path fill="#0f4a8f" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            <div>
                <h5 class="card-title">usuario registrados: </h5>
                <p class="card-text h5"><?php echo $this->usuarios['COUNT(*)'] ?></p>
            </div>
        </div>
    </div>
</div>
<?php include_once("./views/footer.php"); ?>