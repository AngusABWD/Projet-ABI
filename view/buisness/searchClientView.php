<div class="row mx-auto">
    <div class="col">
        <h3 class="text-center mt-4 p-4">Rechercher un client</h3>
        
            <div class="form-group">
                <input type="text" placeholder="Raison sociale/ Ville/ Téléphone" name="search" id="search" 
                        class="form-control p-4" onkeyup="showClient(this.value)" onsubmit="showClient(this.value)">
            </div>

    

        <div id='result'>

        </div>

    </div>
</div>