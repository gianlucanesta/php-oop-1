<main>
    <div class="container d-flex justify-content-center text-white main-cont"> 
        <div class="row row-cols-2 row-cols-lg-5 singleAlbum">
            <div class="movie-square">
                
                <h3 class="title text-center"><?php echo $matrix_resurrection->title;?></h3>
                <div class="detail">Anno: <span><?php echo $matrix_resurrection->year;?></span></div>
                <div class="detail">Genere: <span><?php echo $matrix_resurrection->genre?></span></div>
                <div class="detail">Durata: <span><?php echo $matrix_resurrection->duration?></span></div>
                <div class="detail">Rating: <span><?php echo $matrix_resurrection->getRating()?></span></div>
            
            </div>

            <div class="movie-square">
                
                <h3 class="title text-center"><?php echo $matrix_reloaded ->title;?></h3>
                <div class="detail">Anno: <span><?php echo $matrix_reloaded ->year;?></span></div>
                <div class="detail">Genere: <span><?php echo $matrix_reloaded ->genre?></span></div>
                <div class="detail">Durata: <span><?php echo $matrix_reloaded ->duration?></span></div>
                <div class="detail">Rating: <span><?php echo $matrix_reloaded ->getRating()?></span></div>
            
            </div>

            <div class="movie-square">
                
                <h3 class="title text-center"><?php echo $matrix_revolutions->title;?></h3>
                <div class="detail">Anno: <span><?php echo $matrix_revolutions->year;?></span></div>
                <div class="detail">Genere: <span><?php echo $matrix_revolutions->genre?></span></div>
                <div class="detail">Durata: <span><?php echo $matrix_revolutions->duration?></span></div>
                <div class="detail">Rating: <span><?php echo $matrix_revolutions->getRating()?></span></div>
            
            </div>


            <div class="movie-square">
                
                <h3 class="title text-center"><?php echo $matrix->title;?></h3>
                <div class="detail">Anno: <span><?php echo $matrix->year;?></span></div>
                <div class="detail">Genere: <span><?php echo $matrix->genre?></span></div>
                <div class="detail">Durata: <span><?php echo $matrix->duration?></span></div>
                <div class="detail">Rating: <span><?php echo $matrix->getRating()?></span></div>
            
            </div>
        </div>
    </div>
</main>