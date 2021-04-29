<div class="Do_Invest">
    <div class="elementor-shape elementor-shape-top" data-negative="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path></svg></div>
    
<div class="container">
    <div class="Titel">
            <h1>WHO DO WE INVEST IN?</h1>
        </div>
    <div class="contentss">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4">
                <div class="Invest_Item   wow fadeInUp">
                    <div class="Image_Invest">
                        <img src="{{ Voyager::image($category->image) }}">
                    </div>
                    <div class="Detailss">
                        <h1>{{$category->title}}</h1>
                    </div>
                </div>
            </div>
         @endforeach
        </div>
    </div>
</div>

     
    
    
</div>
