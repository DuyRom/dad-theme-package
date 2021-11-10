<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$attributes['card-title'] ?? 'Card tite attributes'}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">{{$attributes['card-text'] ?? NULL}}</p>
                        {{$datatable ?? NULL}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>