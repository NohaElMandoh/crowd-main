<div class="FEATURED">
    <div class="elementor-shape elementor-shape-top" data-negative="false"><svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z">
            </path>
        </svg></div>
    <div class="container">
        <div class="title">
            <h1>FEATURED STARTUPS</h1>
            <p>Our global champions and hidden gems. The discovered tech talent of emerging markets. Those magnificent
                bold hearts transforming the world as we know it.</p>
        </div>
        <div class="FEATURED_Content">
            <div class="row">
               
                <div class="col-lg-4">
                    <div class="Feature_Item wow fadeInUp">
                    <div class="image">
                        <img src="{{ Voyager::image($startups[0]->image) }}">
                    </div>
                    <div class="details">
                        <div class="Title_Flage">
                            <h2 class="Itrem_Title">{{$startups[0]->title}}</h2>
                            <img class="Flage" src="{{ Voyager::image($startups[0]->flag) }}">
                        </div>
                        <div class="Featuress_Img">
                                 
                            @foreach ($startups[0]->features as $feature)
                            <div class="Img_Item">
                                <img src="{{ Voyager::image($feature->image) }}">
                            </div>
                            @endforeach

                        </div>
                        <div class="Disc">
                            <p>{{$startups[0]->desc}}</p>
                        </div>
                        <div class="progresss">
                            <div class="Back_Prog_wrap">
                                <div class="Progress_Parr" style="width: 30%"></div>
                            </div>
                        </div>
                        
                        <div class="Rised_Goal">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="Rised">
                                        <h1>$725K</h1>
                                        <span>RAISED</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="Goal">
                                        <h1>${{$startups[0]->goal}}K</h1>
                                        <span>GOAL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Invest">
                            <a href="{{$startups[0]->url}}" class="Linkes_Invest">INTERESTED</a>
                        </div>
                    </div>
                </div>
           
                </div>
                
                <div class="col-lg-4">
                    <div class="Feature_Item wow fadeInUp">
                    <div class="image">
                        <img src="{{ Voyager::image($startups[1]->image) }}">
                    </div>
                    <div class="details">
                        <div class="Title_Flage">
                            <h2 class="Itrem_Title">{{$startups[1]->title}}</h2>
                            <img class="Flage" src="{{ Voyager::image($startups[1]->flag) }}">
                        </div>
                        <div class="Featuress_Img">
                                 
                            @foreach ($startups[1]->features as $feature)
                            <div class="Img_Item">
                                <img src="{{ Voyager::image($feature->image) }}">
                            </div>
                            @endforeach

                        </div>
                        <div class="Disc">
                            <p>{{$startups[1]->desc}}</p>
                        </div>
                        <div class="progresss">
                            <div class="Back_Prog_wrap">
                                <div class="Progress_Parr" style="width: 80%"></div>
                            </div>
                        </div>
                        
                        <div class="Rised_Goal">
                            <div class="row">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="Rised">
                                        <h1>$725K</h1>
                                        <span>RAISED</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="Goal">
                                        <h1>${{$startups[1]->goal}}K</h1>
                                        <span>GOAL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Invest">
                            <a href="{{$startups[1]->url}}" class="Linkes_Invest">INTERESTED</a>
                        </div>
                    </div>
                </div>
           
                </div>
                
                <div class="col-lg-4">
                    <div class="Feature_Item wow fadeInUp">
                    <div class="image">
                        <img src="{{ Voyager::image($startups[2]->image) }}">
                    </div>
                    <div class="details">
                        <div class="Title_Flage">
                            <h2 class="Itrem_Title">{{$startups[2]->title}}</h2>
                            <img class="Flage" src="{{ Voyager::image($startups[2]->flag) }}">
                        </div>
                        <div class="Featuress_Img">
                                 
                            @foreach ($startups[2]->features as $feature)
                            <div class="Img_Item">
                                <img src="{{ Voyager::image($feature->image) }}">
                            </div>
                            @endforeach

                        </div>
                        <div class="Disc">
                            <p>{{$startups[2]->desc}}</p>
                        </div>
                        <div class="progresss">
                            <div class="Back_Prog_wrap">
                                <div class="Progress_Parr" style="width: 80%"></div>
                            </div>
                        </div>
                        
                        <div class="Rised_Goal">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="Rised">
                                        <h1>$725K</h1>
                                        <span>RAISED</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="Goal">
                                        <h1>${{$startups[2]->goal}}K</h1>
                                        <span>GOAL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Invest">
                            <a href="{{$startups[2]->url}}" class="Linkes_Invest">INTERESTED</a>
                        </div>
                    </div>
                </div>
              
                </div>
               
            </div>
           
        </div>
    </div>
</div>

<div class="elementor-shape Shape_Two elementor-shape-bottom" data-negative="true"><svg
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill"
            d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
    </svg></div>
</div>
