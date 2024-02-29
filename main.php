<main>
    <div class="container">
        <div class="row p-4">
            <div 
            v-for="(element,index) in dischi" 
            :key="index" 
            class="col-4 mb-4"
            @click="getDisc(index)">
                <div class="card">
                    <img class="card-img-top" :src="element.poster" alt="card poster">
                    <div class="card-body text-center ">
                        <h4 class="card-title">
                            {{element.title}}
                        </h4>
                        <p class="card-text">
                            {{element.author}}
                        </p>
                        <p class="card-text">
                            <b>{{element.year}}</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
</main>